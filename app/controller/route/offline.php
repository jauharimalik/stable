<?php
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$paging = "$c_url/offline"; 

$site_image="$c_url/compressed/amp/offline.png";
$page_title2="Jual Mesin Fotocopy - Halaman Offline";
$site_description2=$page_title2."   Hubungi 0$telp_marketing";		

$page_title=$page_title2;
$site_description=$site_description2;

$pageurl = "content/static/offline.php";
$p="home";

require_once(LIB .DS. 'cache.php');
require_once(TEMPLATE_DIR."/index.php");