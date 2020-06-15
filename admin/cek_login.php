<?php

defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
error_reporting(E_ALL | E_STRICT); 
define('ROOT', dirname(dirname(__FILE__)));
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
require (SYS.'core'.DS.'base.php'); 	
	
include 'config.php';
$username = mysql_real_escape_string($_POST['username']);
$password = md5($_POST['password']);

if (isset($username) && isset($password)) {
	$cek_query = mysql_query("select * from users where username = '$username' and password = '$password'");
	$cek_user = mysql_num_rows($cek_query);
	$data_user = mysql_fetch_array($cek_query);
	if ($cek_user > 0) {
		session_start();	
		$_SESSION['userid'] = $data_user['user_id'];	
		$_SESSION['username'] = $data_user['username'];
		$_SESSION['password'] = $data_user['password'];
		$_SESSION['fullname'] = $data_user['fullname'];
		$_SESSION['email'] = $data_user['email'];
		$_SESSION['level'] = $data_user['level'];
		$_SESSION['avatar'] = $data_user['avatar'];
		
		header('location:'.$c_url.'/admin/ws-dashboard');
	} else {
		header('location:'.$c_url.'/admin/ws-login');
	}
} 

?>