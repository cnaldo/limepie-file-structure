<?php

namespace app\vendor\layout;
use app\vendor\layout as layout;

class front extends layout 
{
	public static function atype($assign = array()) 
	{
		self::assign($assign);

		self::define(array(
			'doctype'	=> self::layoutDir('atype/doctype.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return self::display();
	}
	public static function btype($assign = array()) 
	{
		self::assign($assign);

		self::define(array(
			'doctype'	=> self::layoutDir('btype/doctype.phtml'),
			'sidebar'	=> self::layoutDir('btype/sidebar.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return self::display();
	}
	public static function ctype($assign = array()) 
	{
		self::assign($assign);

		self::define(array(
			'doctype'	=> self::layoutDir('ctype/doctype.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return self::display();
	}
	public static function layoutDir($file) 
	{
		return __DIR__.DS.'front'.DS.$file;
	}
	public static function viewDir($dir) 
	{
		return __CONTROLLER_DIR__.DS.'views'.DS.$dir;
	}

}