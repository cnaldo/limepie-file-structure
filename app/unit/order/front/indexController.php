<?php

namespace app\unit\order\front;

use \app\vendor\layout as layout;
use \app\unit\order\front\baseController as baseController;

class indexController extends baseController 
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
