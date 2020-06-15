<?PHP
/* 
* Warpsite MVC Framework version 1.0 
*
* Author	    : Jauhari Malik
* Description 	: MVC Framework - Index Page
*/
error_reporting(E_ALL | E_STRICT); 
define('ROOT', dirname(__FILE__));
define('DS',   DIRECTORY_SEPARATOR); 
define('SYS',  'system'.DS); 
define('APPS',  'app'.DS);
define('MOD',   'module'.DS);
define('DIR',  APPS . 'directories'.DS);
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PHP_EXT',  '.php');
if (version_compare(phpversion(), '5.3.0', '<') == true) {exit('PHP5.3+ Required');}
date_default_timezone_set("Asia/Jakarta");
//panggil class inti (core)
require (SYS.'core'.DS.'base.php'); 	
	
#MULAI 
//cek installasi (berdasarkan file install.txt yang ada di directory admin)
if (!file_exists(CONFIG.DS.'config.php')){header("location:install");exit();}
//load file konfigurasi
require_once(CONFIG.DS."config.php");
require_once(CONTROL_ROUTE."/home". PHP_EXT);