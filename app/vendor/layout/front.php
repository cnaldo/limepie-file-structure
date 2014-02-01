<?php

namespace app\vendor\layout;
use app\vendor\layout as layout;

class front extends layout 
{
	public static function atype($define = array()) 
	{
		parent::define(array(
			'doctype'	=> self::layoutDir('atype/doctype.phtml'),
		));
		parent::define($define);
		parent::display(true);
	}
	public static function btype($define = array()) 
	{
		parent::define(array(
			'doctype'	=> self::layoutDir('btype/doctype.phtml'),
			'sidebar'	=> self::layoutDir('btype/sidebar.phtml'),
		));
		parent::define($define);
		parent::display(true);
	}
	public static function ctype($define = array()) 
	{
		parent::define(array(
			'doctype'	=> self::layoutDir('ctype/doctype.phtml'),
		));
		parent::define($define);
		parent::display(true);
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