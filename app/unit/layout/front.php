<?php

namespace app\unit\layout;
use limepie\view as view;

class front extends view 
{
	public static function atype($assign = array()) 
	{
		parent::assign($assign);

		parent::define(array(
			'doctype'	=> self::layoutDir('view/atype/doctype.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return parent::display();
	}
	public static function btype($assign = array()) 
	{
		parent::assign($assign);

		parent::define(array(
			'doctype'	=> self::layoutDir('view/btype/doctype.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return parent::display();
	}
	public static function ctype($assign = array()) 
	{
		parent::assign($assign);

		parent::define(array(
			'doctype'	=> self::layoutDir('view/ctype/doctype.phtml'),
			'layout'	=> self::viewDir('index.phtml')
		));
		return parent::display();
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