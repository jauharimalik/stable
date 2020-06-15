<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
if(isset($_GET['p2'])){
	$urlnya = $_GET['p2'];
	$data = $db->category($urlnya); 
	$urlnya = $data['category_id'];
	$site_image= $data['category_image'];		
	$page_title2= $data['category_name'];	
	$site_description2=$page_title2." ".$data['category_desc'];
	$meta_type = "website";  

	$page_title=$page_title2;
	$site_description=$site_description2;
	$tabstart=0;

	$pageurl = "content/static/category.php";

	require_once(LIB .DS. 'cache.php');
	require_once(TEMPLATE_DIR."/index.php");
}