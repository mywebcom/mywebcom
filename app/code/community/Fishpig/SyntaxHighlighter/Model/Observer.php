<?php
/**
 * @category    Fishpig
 * @package     Fishpig_SyntaxHighlighter
 * @author      Ben Tideswell <help@fishpig.co.uk>
 * @notes		The Syntax Highlighter javascript library that powers this extension was written by Alex Gorbatchev (http://alexgorbatchev.com/SyntaxHighlighter/)
 */

class Fishpig_SyntaxHighlighter_Model_Observer extends Varien_Object
{
	/**
	 * Singleton flag to stop double execution
	 *
	 * @var static bool
	 */
	static protected $_singleton = false;
	
	/**
	 * Inject the JS library files
	 *
	 * @param Varien_Event_Observer $observer
	 */
	public function inject(Varien_Event_Observer $observer)
	{
		if (!self::$_singleton) {
			self::$_singleton = true;

			if ($this->getHelper()->isEnabled()) {
				$layout = $observer->getEvent()->getLayout();
				
				if ($this->shouldInject($layout->getUpdate()->getHandles())) {
					if ($headBlock = $layout->getBlock('head')) {
						$headBlock->addJs('syntaxhighlighter/shCore.js');
						$headBlock->addJs('syntaxhighlighter/shAutoloader.js');
						
						$theme = Mage::getStoreConfig('syntaxhighlighter/settings/theme');
						
						$headBlock->addCss('css' . DS . 'syntaxhighlighter' . DS . 'shCore' . $theme . '.css');
						$headBlock->addCss('css' . DS . 'syntaxhighlighter' . DS . 'shTheme' . $theme . '.css');
						
						if ($beforeBodyEnd = $layout->getBlock('before_body_end')) {
							$triggerBlock  = $layout->createBlock('core/template', 'syntaxhighlighter.trigger', array('template' => 'syntaxhighlighter/trigger.phtml'));
	
							if ($triggerBlock) {
								$beforeBodyEnd->insert($triggerBlock, '', false, 'syntaxhighlighter.trigger');
							}
						}
					}
				}
			}
		}
	}
	
	/**
	 * Determine whether the current page should have the JS included
	 *
	 * @param array $currentHandles
	 * @return bool
	 */
	public function shouldInject(array $currentHandles)
	{
		if ($applicableHandles = $this->getApplicableLayoutHandles()) {
			foreach($currentHandles as $handle) {
				if (array_search($handle, $applicableHandles) !== false) {
					return true;
				}
			}
		}

		return false;
	}

	/**
	 * Retrieve the helper associated with this module
	 *
	 * @return Fishpig_SyntaxHighlighter_Helper_Data
	 */
	public function getHelper()
	{
		return Mage::helper('syntaxhighlighter');
	}
	
	/**
	 * Retrieve the layout handles that require the JS
	 *
	 * @return array
	 */
	public function getApplicableLayoutHandles()
	{
		$handles = array();
		
		if (Mage::getStoreConfigFlag('syntaxhighlighter/settings/load_globally')) {
			$handles[] = 'default';
		}
		
		if (Mage::getStoreConfigFlag('syntaxhighlighter/settings/load_on_homepage')) {
			$handles[] = 'cms_index_index';
		}
		
		if (Mage::getStoreConfigFlag('syntaxhighlighter/settings/load_on_cms_page_view')) {
			$handles[] = 'cms_page_view';
		}
	
		if (Mage::getStoreConfigFlag('syntaxhighlighter/settings/load_on_product_view')) {
			$handles[] = 'catalog_product_view';
		}
	
		if ($customHandles = trim(Mage::getStoreConfig('syntaxhighlighter/settings/custom_layout_handles'), "\r\n, ")) {
			$customHandles = explode(',', str_replace(',,', ',', preg_replace("/\r|\n|\t/", ',', $customHandles)));
			
			$handles = array_merge($handles, $customHandles);
		}

		return array_unique($handles);
	}
}
