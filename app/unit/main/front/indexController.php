<?php

namespace app\unit\main\front;

use \app\vendor\layout as layout;
use \app\unit\initController as initController;

class indexController extends initController 
{
	public function indexAction()
	{

		return layout\front::atype(array(
			'postId'	=> 'post id : 234234'
			,'data'		=> array()
			,'a'		=> 'test'
		));
	}
}

