<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);

$site_image="$c_cdn_img/mobile/banner/ibuki.jpg";		
$page_title2="Jual Mesin Fotocopy";
$site_description2=$page_title2." Bekas Murah, Mesin Fotocopy Baru Pemesanan Cepat Hubungi : $telp_original. Harga Mulai 7Jt-an Berlaku sampai ".$nama_bln[date('m')]." - ".date('Y');
$site_image="$c_cdn_img/mobile/banner/ibuki.jpg";	 
$meta_type = "website";  

$page_title=$page_title2;
$site_description=$site_description2;
$tabstart=0;

$pageurl = "content/static/home.php";
$p="home";

require_once(LIB .DS. 'cache.php');
require_once(TEMPLATE_DIR."/index.php");


