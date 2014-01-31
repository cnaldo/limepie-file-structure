<?php

namespace app\vendor\layout;
use app\vendor\layout as layout;

class front extends layout 
{
	public static function atype($assign = array()) 
	{
		self::assign($assign);

		self::define(array(
			'doctype'	=> self::layoutDir('doctype.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return self::display();
	}
	public static function layoutDir($file) 
	{
		return __DIR__.DS.'mng'.DS.$file;
	}
	public static function viewDir($dir) 
	{
		return __CONTROLLER_DIR__.DS.'views'.DS.$dir;
	}

}