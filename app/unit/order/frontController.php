<?php

namespace app\unit\order;
use \app\unit\initController	as initController;
use \app\vendor\layout			as layout;

class frontController extends initController
{
	public function __init()
	{
		layout::set(array(
			'ver' => '10023'
			,'a' => '10023'
		));
	}
}