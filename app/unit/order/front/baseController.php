<?php

namespace app\unit\order\front;
use \app\unit\initController	as initController;
use \app\vendor\layout			as layout;

class baseController extends initController
{
	public function __init()
	{
		layout::set(array(
			'a' => '10023'
		));
	}
}