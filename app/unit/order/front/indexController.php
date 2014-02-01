<?php

namespace app\unit\order\front;

use \app\vendor\layout as layout;
use \app\unit\order\frontController as frontController;

class indexController extends frontController 
{
	public function indexAction()
	{

		layout::set(array(
			'postId'	=> 'post id : 234234'
			,'data'		=> array()
		));
		return layout\front::atype(array(
			'contents' => 'index.phtml'
		));
	}
}

