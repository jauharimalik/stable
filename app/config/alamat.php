<?PHP
//file konfigurasi folder di sini
//folder APP
define('ASSETS', 	APPS .DS.'assets');
define('CONFIG', 	APPS .DS.'config');
define('CONTROL', 	APPS .DS.'controller');

	//folder APP
	define('CONTROL_ACT', 	CONTROL .DS.'act');
	define('CONTROL_ADMIN', CONTROL .DS.'admin');
	define('CONTROL_MODULE',CONTROL .DS.'mod');
	define('CONTROL_ROUTE',CONTROL .DS.'route');
	define('CONTROL_PROSES',CONTROL .DS.'proses');
	
define('MODEL', 	APPS .DS.'model');

	//folder APP
	define('MODEL_ADMIN', MODEL .DS.'admin');
	define('MODEL_MODULE',MODEL .DS.'mod');
	
define('UPLOAD', 	APPS .DS.'uploads');



//folder SYSTEM
define('INC', 		SYS .DS.'include');
define('LIB', 		SYS .DS.'lib');
define('CORE', 		SYS .DS.'core');
define('ENGINE', 	SYS .DS.'engine');
define('ERROR', 	SYS .DS.'error');
define('CONSTANT', 	SYS .DS.'constant');
define('HELPER', 	SYS .DS.'helper');

//folder MODULE
define('PLUG', 	MOD.DS.'plugin');
define('ADMIN', MOD.DS.'admin');
define('TEMP', 	MOD.DS.'template');
//folder MOBILE
define('MOB', 	ROOT.DS.'mobile');
define('MPAGE', 	MOB.DS.'pages');

//folder CDN
define('CDN', 	ROOT.DS.'cdn');
define('CDN_NEW', 	CDN.DS.'new');
define('CDN_CSS',CDN.DS.'css');
define('CDN_JS',CDN.DS.'js');
define('CDN_IMG',CDN.DS.'img');
define('CDN_IMAGES',CDN.DS.'images');
define('CDN_CUSTOMER', CDN.DS.'plugins/customer');
define('CDN_AMP', CDN.DS.'plugins/amp');
define('CDN_AJAX_ADMIN', CDN.DS.'plugins/admin');
define('ADMIN_STYLE', CDN_NEW.DS.'admin/assets');

