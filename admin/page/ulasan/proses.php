<?php
session_start();
define('ROOT', dirname(dirname(dirname(dirname(__FILE__)))));
define('DS',   DIRECTORY_SEPARATOR); 
define('SYS',  ROOT.DS.'system'.DS); 
define('APPS',  ROOT.DS.'app'.DS);
define('MOD',   ROOT.DS.'module'.DS);
define('DIR',  APPS . 'directories'.DS);
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PHP_EXT',  '.php');
if (version_compare(phpversion(), '5.3.0', '<') == true) {exit('PHP5.3+ Required');}
date_default_timezone_set("Asia/Jakarta");
//panggil class inti (core)
require (SYS.DS.'core'.DS.'base.php'); 

defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
include '../../config.php';


$page = $_GET['page'];
$act = $_GET['act'];

//hapus konfirmasi pembayaran
if ($page == "ulasan" && $act == "aksiulasan") {
	if (isset($_POST['btnhapus'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("delete from ulasan where id='$key'");
		} 
	}
	if (isset($_POST['btnbatal'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("update ulasan set status='t' where id='$key'");
		} 
	}
	if (isset($_POST['btnok'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("update ulasan set status='y' where id='$key'");
		} 
	}	
	
	header('location:../../../admin/ws-ulasan/list');

} 