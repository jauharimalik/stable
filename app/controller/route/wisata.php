<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
if(isset($_GET['p2'])){
	$urlnya = $_GET['p2'];
	$data = $db->wisata($urlnya); 
	
	$site_image= $data['foto_besar'];		
	$page_title2= $data['nama_produk'];	
	$site_description2=$page_title2." ".$data['deskripsi'];
	
	$meta_type = "website";  

	$page_title=$page_title2;
	$site_description=$site_description2;
	$tabstart=0;

	$pageurl = "content/static/wisata.php";
	
	require_once(LIB .DS. 'cache.php');
	require_once(TEMPLATE_DIR."/index.php");
}