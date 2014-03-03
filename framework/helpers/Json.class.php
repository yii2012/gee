<?php
class Json {
	public static function encode($var) {
		switch (gettype($var)) {
			case 'boolean':
				return $var ? 'true' : 'false';
				break;
			case 'integer':
				return (int)$var;
				break;
			case 'double':
				return (float)$var;
				break;
			case 'string':
				break;
			case 'object':
				break;
			case 'resource':
				break;
			case 'NULL':
				return 'null';
				break;
			default :
				return '';
		}
	}
	
	public static function decode($var) {
		
	}
}