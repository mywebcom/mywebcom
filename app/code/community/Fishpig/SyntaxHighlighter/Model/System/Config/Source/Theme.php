<?php
/**
 * @category    Fishpig
 * @package     Fishpig_SyntaxHighlighter
 * @author      Ben Tideswell <help@fishpig.co.uk>
 * @notes		The Syntax Highlighter javascript library that powers this extension was written by Alex Gorbatchev (http://alexgorbatchev.com/SyntaxHighlighter/)
 */

class Fishpig_SyntaxHighlighter_Model_System_Config_Source_Theme
{
	/**
	 * Retrieve an option array of all valid themes
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		$files = array('Default', 'Django', 'Eclipse', 'Emacs', 'FadeToGrey', 'MDUltra', 'Midnight', 'RDark');
		$options = array();
		
		foreach($files as $theme) {
			$options[] = array('value' => $theme, 'label' => $theme);
		}
		
		return $options;
	}	
}
