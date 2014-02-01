<?php

if(false == in_array(getenv('REMOTE_ADDR'), array('114.206.74.108', '106.242.29.130'))) {
	//header("HTTP/1.0 404 Not Found");
	//exit();
}

require_once("../limepie/bootstrap.php");

try {

	$router = new \limepie\router(array(
		'(?P<module>[^/]+)?'
		.'(?:/(?P<controller>[^/]+))?'
		.'(?:/(?P<action>[^/]+))?'
		.'(?:/(?P<parameter>.*))?' => array(
			'basedir' => 'app/unit'
		)
	));

	$router->setControllerSuffix("Controller");
	$router->setActionSuffix("Action");
	$router->setAccessByDomain(array(
		'front' // first, default
		,'back'
		,'mng'
		,'partner'
	));

	$router->setDefaultModule('main');
	$router->setDefaultController('index');
	$router->setDefaultAction('index');

	$front = \limepie\framework::getInstance();
	$front->setRouter($router);
	echo $front->dispatch();

} catch(\limepie\sdoException $e) {

	pr($e);

} catch(\exception $e) {

	pr($e);
}


//exit();
gc_collect_cycles();
pr(php_timer(__file__,__line__));
pr(readable_size(memory_get_peak_usage()));
pr(readable_size(memory_get_usage()));
pr(get_included_files());
