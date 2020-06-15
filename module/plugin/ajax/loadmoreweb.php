<?php 
defined("SYS") or exit("Access Denied!");
error_reporting(0);
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: cache");
header("Cache-Control:  public, must-revalidate");
header('HTTP/1.1 200 OK');
header("access-control-allow-credentials:true");
header("access-control-allow-headers:Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token");
header("access-control-allow-methods:POST, GET, OPTIONS");
header("access-control-allow-origin: *");
header("access-control-expose-headers:AMP-Access-Control-Allow-Source-Origin");

require_once(LIB .DS. 'cache.php');
if(isset($_POST['urlload'])){
	$p2=$_REQUEST["urlload"];
	$urlnya = $_REQUEST['urlnya'];
	$file = TEMPLATE_DIR."/content/ajax/".$p2 . ".php";
	if (is_readable($file)) {
		require_once $file;
		require_once TEMPLATE_DIR.DS."content/common/footer.php";
	}		
}
/* 
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();	