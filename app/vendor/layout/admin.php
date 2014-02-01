<?php

namespace app\vendor\layout;
use app\vendor\layout as layout;

class admin extends layout 
{
	public static function atype($define = array()) 
	{
		parent::define(array(
			'doctype'	=> self::layoutDir('doctype.phtml'),
		));
		parent::define($define);
		return parent::display();
	}
	public static function layoutDir($file) 
	{
		return __DIR__.DS.'admin'.DS.$file;
	}
	public static function viewDir($dir) 
	{
		return __CONTROLLER_DIR__.DS.'views'.DS.$dir;
	}

}