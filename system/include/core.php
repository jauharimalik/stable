<?PHP
defined('SYS') or exit('Access Denied!');
/* 
* Warpsite MVC Framework version 1.0 
* Author	    : Jauhari Malik
*/

// Error Reporting
error_reporting(E_ALL);

switch($c_ssl){
	case "on" : $protocol = "https://";
	default :  $protocol = "http://";
}

$c_domain = $protocol.$c_w3.$url_web;
$c_url = $protocol.$c_w3.$url_web;


//load engine penting di sini//file konfigurasi link folder di sini
$c_apps = "$c_url/app";
$c_sys  = "$c_url/system";
$c_mod = "$c_url/module";
include(CONFIG.DS.'linkf.php');

//DEFINE EVRYTHING HERE
define('_VERSION', "1.0");
define('_EXECUTION',microtime(TRUE));
define('TEMPLATE_DIR', TEMP.DS."$c_template");
define('STYLE_DIR', TEMPLATE_DIR.DS."style");
define('TEMPLATE_URL', "$c_temp/$c_template");
define('APP_URL', $c_url);
define('CDN_URL', $c_url.DS."cdn");

 
 //define social media
$d_jamkerja = $config['info']['jamkerja']; 
$d_facebook = $config['info']['facebook'];
$d_twitter = $config['info']['twitter'];
$d_twitteracc = $config['info']['twitteracc'];
$d_instagram = $config['info']['instagram'];
$d_googleplus = $config['info']['googleplus'];
$d_youtube = $config['info']['youtube'];

// seting cache
$operator_cache=strtolower($operator_cache);
if($operator_cache=="online"){
	$timecache=(time() + $waktu_cache);
} else {
	$timecache=(time() - $waktu_cache);
}


if(isset($_SERVER['HTTP_REFERER'])){$ref=$_SERVER['HTTP_REFERER'];}
else{$ref="";}

//define old variable
$url = $c_url;
$title = $c_title;
define('_V_', _VERSION);

require_once(INC.DS."deteksi-mobile.php");
$detect = new Mobile_Detect();

//APP CLASSES
require_once(CONTROL_MODULE.DS."app.class.php");
$app=new App(); 
//semua function-function-function penting dari warpsite di sini

require_once(MODEL_MODULE.DS."db.class.php");
$db=new Database(_DB_HOST, _DB_USER, _DB_PASS, _DB_NAME); 


//untuk melakukan query sql sekarang di sini
//include library needed here
require_once(LIB .DS. 'logofooter.php');
require_once(INC .DS. 'fungsi_rupiah.php');
require_once(INC .DS. 'fungsi_badword.php');
require_once(INC .DS. 'library.php');
require_once(INC .DS. 'video_stream.php');
require_once(LIB .DS. 'replace_character.lib.php');
require_once(LIB .DS. 'statistik.lib.php');
require_once(LIB .DS. 'anti_sql_injection.lib.php');
require_once(LIB .DS. 'anti_xss.lib.php');
require_once(LIB .DS. 'indonesia.lib.php');
require_once(LIB .DS. 'template.lib.php');
require_once(LIB .DS. 'addtocart.php');
require_once(LIB .DS. 'minify.php');
require_once(LIB .DS. 'fungsi_seo.php');
require_once(LIB .DS. 'ip.php');
require_once(LIB .DS. 'ongkir.php');
require_once(LIB .DS. 'cekurl.php');
require_once(LIB .DS. 'cloudflare_block.php');

if(isset($_SESSION['level'])){ $leveladmin=strtolower($_SESSION['level']);} 
else{$leveladmin="tamu";}