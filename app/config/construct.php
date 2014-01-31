<?php

date_default_timezone_set("ROK"); 

/*
ini_set('default_charset','utf-8');
ini_set('mbstring.internal_encoding','utf-8');
*/

if(in_array($_SERVER['HTTP_HOST'], array('www.limepie.kr', 'limepie.kr'))) {
	define('ENVIRONMENT', 'production');
} else if(in_array($_SERVER['HTTP_HOST'], array('dev.limepie.kr'))) {
	define('ENVIRONMENT', 'testing');
} else {
	define('ENVIRONMENT', 'development');
}

if(ENVIRONMENT == 'production') {
	ini_set('display_errors', 'Off');
	ini_set('display_startup_errors', 'Off');
	ini_set('error_reporting', E_ALL);
	ini_set('log_errors', 'On');

	define('fb_appid',	'344555012324826');
	define('fb_secret',	'e9610231d8b3ed6382128f260072a722');

} else if(ENVIRONMENT == 'testing') {
	ini_set('display_errors', 'On');
	ini_set('display_startup_errors', 'On');
	ini_set('error_reporting', -1);
	ini_set('log_errors', 'On');

	define('fb_appid',	'344555012324826');
	define('fb_secret',	'e9610231d8b3ed6382128f260072a722');

} else {
	ini_set('display_errors', 'On');
	ini_set('display_startup_errors', 'On');
	ini_set('error_reporting', -1);
	ini_set('log_errors', 'On');

	define('fb_appid',      '600110880055416');
	define('fb_secret',     'ed4a058c7bb9e74f7c2d9a41b5f7c079');
}

ini_set("session.cookie_lifetime"	, "0");
ini_set("session.cookie_path"		, "/");
//ini_set('session.cookie_domain'		, $_SERVER['HTTP_HOST']);
\limepie\crypt::set_key('encryptionke2y');

define('LANG', 'ko');

/* db class setting 
*/
class master	extends \limepie\db\driver {}
class slave		extends \limepie\db\driver {}
class master2	extends \limepie\db\driver {}

new param();
