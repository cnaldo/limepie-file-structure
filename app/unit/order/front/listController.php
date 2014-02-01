<?php

namespace app\unit\order\front;

use \app\vendor\layout as layout;
use \app\unit\order\frontController as frontController;

class listController extends frontController 
{
	public function indexAction()
	{

		layout::set(array(
			'postId'	=> 'post id : 234234'
			,'data'		=> array()
		));
		layout\front::btype(array(
			'contents'	=> 'sublayout.phtml'
			, 'content'	=> 'index.phtml'
		));
	}
}