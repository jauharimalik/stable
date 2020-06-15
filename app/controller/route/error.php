<?php
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$url_bukutamu1= cek_url_db($app->CURRENT_URL());
$today = date('Y')."-".date('m')."-".date('d');
$sekarang= date('H:i:s');
$foto_bukutamu=str_replace($c_url."/","/",$site_image);
$prosedur1 = $db->insert_404($url_bukutamu1,$page_title,$site_description,$today,$sekarang,$foto_bukutamu);
$prosedur2 = $db->hapus("pages","link like '%index%'  or link = 'jual-mesin-fotocopy-ka' or link = 'jual-mesin-fotocopy-kota-surakartab ' or link = 'jual-mesin-fotocopy-kabupate'  or link = 'jual-mesin-fotocopy-kab' or link = 'jual-mesin-fotocopy-a'  or link = 'jual-mesin-fotocopy-k' or link = 'jual-mesin-fotocopy-b' or link like '%null%' or link like '%manifest%' or link like '%http%' or link like '%:%' or link like '%www%' or link like '%virtue%' or link like '%fbcli%' or link like '%wp%' or link like '%/author%' or link like '%php%' or link like '%/gb%' or link like '%?%' or title ='' or link like '%pjax%'");
$prosedur3 = $db->hapus("pages","link like '%/0%' or link like '%/1%' or link like '%/2%' or link like '%/3%' or link like '%/4%' or link like '%/5%' or link like '%/6%' or link like '%/7%' or link like '%/8%' or link like '%/9%'");
$prosedur4 = $db->hapus("pages","link like '%0/%' or link like '%1/%' or link like '%2/%' or link like '%3/%' or link like '%4/%' or link like '%5/%' or link like '%6/%' or link like '%7/%' or link like '%8/%' or link like '%9/%'");
$prosedur5 = $db->hapus("ulasan","pid like '%40870%' or pid like '%40871%' or pid like '%40872%' or pid like '%40873%' or pid like '%41117%'");
$prosedur6 = $db->hapus("minat","nama like '%.%'");
$prosedur7 = $db->hapus("ulasan","nama =''");
$prosedur8 = $db->hapus("pages"," link like '%$url_bukutamu1%'");


if(isset($_GET['p2'])){
	$kodeerror = $_GET['p2'];
	$site_image= "compressed/banner/404.webp";		
	$page_title2= $site_name." Not Found ";	
	$site_description2= "Not Found URL";
	$meta_type = "website";  

	$page_title=$page_title2;
	$site_description=$site_description2;
	$tabstart=0;
	
	require_once(LIB .DS. 'cache.php');
	require_once(TEMPLATE_DIR."/error.php");
}