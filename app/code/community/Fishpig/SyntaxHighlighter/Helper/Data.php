<?php
/**
 * @category    Fishpig
 * @package     Fishpig_SyntaxHighlighter
 * @author      Ben Tideswell <help@fishpig.co.uk>
 * @notes		The Syntax Highlighter javascript library that powers this extension was written by Alex Gorbatchev (http://alexgorbatchev.com/SyntaxHighlighter/)
 */

class Fishpig_SyntaxHighlighter_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	 * Retrieve the current SyntaxHighlighter library version
	 *
	 * @return string
	 */
	public function getLibraryVersion()
	{
		return '3.0.83';
	}
	
	/**
	 * Determine whether the Syntax Highlighter is enabled
	 *
	 * @return bool
	 */
	public function isEnabled()
	{
		return Mage::getStoreConfig('syntaxhighlighter/settings/is_enabled');
	}
}
