<?php
namespace app\vendor;

class layout 
{
	public static function display($print = false) 
	{
		$tpl = new \limepie\tpl;

		$tpl->define(\limepie\space::name('template_define')->getAttributes());
		$tpl->assign(\limepie\space::name('template')->getAttributes());
		
		return $tpl->display('doctype', $print);			
	}
	public static function assign($arg = array(), $val = null) 
	{
		return \limepie\space::name('template')->setAttribute($arg, $val);
	}
	// alias assign
	public static function set($arg = array(), $val = null) 
	{
		return self::assign($arg, $val) ;
	}
	public static function get($attr = null, $key = null) 
	{
		return \limepie\space::name('template')->getAttribute($attr, $key);
	}
	public static function define($arg = array(), $val = null)
	{
		return \limepie\space::name('template_define')->setAttribute($arg, $val);
	}
}

