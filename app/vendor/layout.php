<?php
namespace app\vendor;
use \limepie\space as space;

class layout 
{
	public static function display($print = false) 
	{
		$tpl			= new \limepie\tpl;
		$tpl->tpl_path	= __CONTROLLER_DIR__;
		$tpl->skin		= 'views';
		$tpl->define(space::name('template_define')->getAttributes());
		$tpl->assign(space::name('template')->getAttributes());
		
		return $tpl->display('doctype', $print);			
	}
	public static function assign($arg = array(), $val = null) 
	{
		return space::name('template')->setAttribute($arg, $val);
	}
	// alias assign
	public static function set($arg = array(), $val = null) 
	{
		return self::assign($arg, $val) ;
	}
	public static function get($attr = null, $key = null) 
	{
		return space::name('template')->getAttribute($attr, $key);
	}
	public static function define($arg = array(), $val = null)
	{
		return space::name('template_define')->setAttribute($arg, $val);
	}
}

