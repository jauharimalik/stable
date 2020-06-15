<?php defined('SYS') or exit('Access Denied!');
/* 
* Warpsite MVC Framework version 1.0 
*
* File			: start.php
* Directory		: system/core
* Author	    : Jauhari Malik
* Description 	: routine untuk memuat (loaded) system utama serta routine untuk menjalankan default controller
*/
define('PHP_EXT',  '.php');
if (version_compare(phpversion(), '5.3.0', '<') == true) {exit('PHP5.3+ Required');}
date_default_timezone_set("Asia/Jakarta");
//panggil class inti (core)
require (SYS.'core'.DS.'base.php'); 	
	
#MULAI 
//cek installasi (berdasarkan file install.txt yang ada di directory admin)
if (!file_exists(CONFIG.DS.'config.php')){header("location:install");exit();}
//load file konfigurasi
require_once(CONFIG.DS."config.php");
require_once($app->_riri());