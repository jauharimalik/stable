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

if ($page == "cust" && $act == "update") {
	$custid = $_POST['id'];
	$status = $_POST['status'];
	mysql_query("update cust_users set status='$status' where cust_id='$custid'" );
	$name = ucwords($_POST['fullname']);
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	mysql_query("update profile set nama='$name', email='$email', nohp='$telp' where username='$custid'");
	
	header('location:'.$c_url.'/admin/ws-cust/listcust');	
} elseif ($page == "cust" && $act == "updatepass") {
	$id =  $_POST['id'];
	$current_pass = md5($_POST['current_pass']);
	$pass = md5($_POST['password']);

	$cek_pass = mysql_query("select cust_pass from cust_users where cust_id='$id'");
	$cek_current_pass = mysql_fetch_array($cek_pass);
	
	if ($current_pass != $cek_current_pass['cust_pass']) {
		echo "<script>alert(\"Password Sekarang tidak cocok!!!\")</script>";
		echo "<script>window.history.back()</script>";
	} else {		
		mysql_query("update cust_users set cust_pass='$pass' where cust_id='$id'");
		header('location:'.$c_url.'/admin/ws-cust/listcust');
	}
	
	
} elseif ($page == "cust" && $act == "delete") {
	mysql_query("delete from cust_users where cust_id='$_GET[id]'");
	header('location:'.$c_url.'/admin/ws-cust/listcust');
}
?>