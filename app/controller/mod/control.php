<?PHP
defined("SYS") or exit("Access Denied!");
error_reporting(0);
/**
 * @paket Warpsite
 * Copyright Warpsite Informer 2015
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 * Di Buat Oleh @Jauhari Malik
 */
 
 /* 
* Warpsite MVC Framework version 1.0 
*
* File			: control.php
* Directory		: app/controller
* Author	    : Jauhari Malik
* Description 	: routine untuk membyat (controller) aplikasi utama serta routine untuk menjalankan default controller
*/
#MULAI 
 /* class Controller {
    public function __construct() {
        new Lmodel(array("model"));
		$model = new Model;
        $data = $model->show_message();
		
    }
}*/

if (empty($page_title) || empty($site_name) || empty($site_description2) || empty($site_image)) {
	$site_image="$c_cdn_img/mobile/banner/ibuki.jpg";
	$h1=$page_title32;
	
	$page_title =$page_title32;
	$site_description  =$page_title32;	
	
	$page_title2 =$page_title32;
	$site_description2  =$page_title32;		
}

if(isset($_REQUEST["p"])){
	$p=$_REQUEST["p"];
	$file = CONTROL_ROUTE."/".$p . ".php";
	$p_home = CONTROL_ROUTE."/home.php";
	$e404 = CONTROL_ROUTE."/404.php";
	if (is_readable($file)) {require $file;}
	else if(empty($p)){require $p_home;}
	else { require $e404;  }
} 