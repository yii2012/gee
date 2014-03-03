<?php
/**
 * Html is a static class that provides a collection of helper methods for creating HTML views.
 * 
 * @author Nick <nick@gmail.com>
 */
class Html {
	/**
	 * Encode special characters into HTML entities 
	 */
	public static function encode($string) {
		return htmlspecialchars($string, ENT_QUOTES);
	}
	
	public static function decode($string) {
		return htmlspecialchars_decode($string, ENT_QUOTES);
	}
}