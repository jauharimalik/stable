<?php 
$site_name="Vanectro.Com";
$page_title2="Pusat Penjualan Mesin Fotocopy ";
$site_description2=$page_title2;

if(isset($_REQUEST["page"])){
	$p=$_REQUEST["page"];
	$title= ucwords($p);
	$file = "page/".$p . "/index.php";
	$p_home = "page/dashboard/index.php";
	$e404 = "page/keluar/index.php";
	if (is_readable($file)) {require $file;}
	else if(empty($p)){require $p_home;}
	else {require $p_home; }
} 