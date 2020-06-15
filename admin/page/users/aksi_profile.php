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

if ($page == "profile" && $act == "updateprofile") {

	$id = $_GET['id'];
	$user = $_POST['username'];
	$name = ucwords($_POST['fullname']);
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$level = $_POST['level'];

	//unggah foto
	$lokasi_file = $_FILES['avatar']['tmp_name'];
	$tipe_file = $_FILES['avatar']['type'];
	$nama = str_replace(" ", "_", $_FILES['avatar']['name']);
	$datename = date('dmyhi');
	$nama_file = $datename.$nama;	
	$dir = "$upload_dir/users/";
	
	
	//update session
	$_SESSION['fullname'] = $name;
	$_SESSION['email'] = $email;
	if (!empty($lokasi_file)) {
		$_SESSION['avatar'] = $nama_file;
	} else {
		$_SESSION['avatar'] = $_POST['avatar'];
	}

	$query_cek_user = mysql_query("select username from users where username='$user'");
	$cek_user = mysql_num_rows($query_cek_user);
	if ($cek_user != 0) {
		echo "<script>alert(\"Username sudah ada!!!\")</script>";
		echo "<script>window.history.back()</script>";
	} else {
		if (empty($user)) {
			if (empty($lokasi_file)) {
				mysql_query("update users set fullname='$name', email='$email', no_telp='$telp', level='$level' where user_id='$id'");
			} else {
				//UnggahImageAvatar($nama_file);
				copy($_FILES["avatar"]["tmp_name"],"../../../cdn/uploads/users/".$nama_file);
				mysql_query("update users set fullname='$name', email='$email', no_telp='$telp', level='$level', avatar='$nama_file' where user_id='$id'");
				
				//hapus foto avatar
				$filename = $_POST['avatar'];
				$dir = "$upload_dir/users/";
				unlink($dir.$filename);
			}			
		} else {
			if (empty($lokasi_file)) {
				mysql_query("update users set username='$user', fullname='$name', email='$email', no_telp='$telp', level='$level' where user_id='$id'");
			} else {
				//UnggahImageAvatar($nama_file);
				copy($_FILES["avatar"]["tmp_name"],"../../../cdn/uploads/users/".$nama_file);
				mysql_query("update users set username='$user', fullname='$name', email='$email', no_telp='$telp', level='$level', avatar='$nama_file' where user_id='$id'");
				
				//hapus foto avatar
				$filename = $_POST['avatar'];
				$dir = "$upload_dir/users/";
				unlink($dir.$filename);
			}
		}
			
	}
	header('location:../../../admin/ws-profile/detailprofile');
} elseif ($page == "profile" && $act == "updatepass") {
	$id = $_GET['id'];
	$current_pass = md5($_POST['current_pass']);
	$pass = md5($_POST['password']);

	$cek_pass = mysql_query("select password from users where user_id='$id'");
	$cek_current_pass = mysql_fetch_array($cek_pass);
	
	if ($current_pass != $cek_current_pass['password']) {
		echo "<script>alert(\"Password Sekarang tidak cocok!!!\")</script>";
		echo "<script>history.back();</script>";
	} else {		
		mysql_query("update users set password='$pass' where user_id='$id'");
		header('location:../../../admin/ws-profile/detailprofile');
		//header('location:http://localhost/pw2/project/admin/index.php?page=dashboard');
	}
	
} 
?>