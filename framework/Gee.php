<?php
/** 运行环境判断：在cgi模式下输出的结果是“cgi-fcgi”；在命令行模式输出：cli； 在apache环境下面输出的结果是“apache2handler”  php_sapi_name()同PHP_SAPI**/
define('IS_CLI', (php_sapi_name() == 'cli') ? TRUE : FALSE);

class Gee {
	private static $_app = null;

	public static function getInstance() {
		if (self::$_app === null) {
			self::$_app = new Gee();
		}
		return self::$_app;
	}
	
	private function __construct() {
		spl_autoload_register();
	}

	public function run() {
		
	}
}