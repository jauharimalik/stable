<?php
defined("SYS") or exit("Access Denied!");
//include(INC.DS."anti_xss.php");
$ts = gmdate("D, d M Y H:i:s") . " GMT";

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

if(isset($urlnya)){
	$data = $db->layanannya($urlnya);
	$location = "/content/static/".$p2 . ".php";
	$file = TEMPLATE_DIR.$location;
	require_once(LIB .DS. 'cache.php');
	if (is_readable($file)) {require $file;}	
}