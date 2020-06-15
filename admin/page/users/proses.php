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

include '../../../lib/fungsi_thumbnail.php';

$page = $_GET['page'];
$act = $_GET['act'];

//insert user ke db
if ($page == "users" && $act == "submit") {
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
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
	$dir = "$c_cdn/uploads/users/";	

	//cek duplikasi username 
	$query_cek_user = mysql_query("select username from users where username='$user'");
	$cek_user = mysql_num_rows($query_cek_user);
	if ($cek_user != 0) {
		echo "<script>alert(\"Username sudah ada!!!\")</script>";
		echo "<script>window.history.back()</script>";
	} else {
		copy($_FILES["avatar"]["tmp_name"],"../../../cdn/uploads/users/".$nama_file);
		//UnggahImageAvatar($nama_file);
		mysql_query("insert into users values('', '$user', '$pass', '$name', '$email', '$telp', '$level', '$nama_file')");

		
	}
	header('location:'.$c_url.'/admin/ws-users/listuser');
	
} elseif ($page == "users" && $act == "updateuser") {

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
	$dir = "$c_cdn/uploads/users/";	
	

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
				copy($_FILES["avatar"]["tmp_name"],"../../../cdn/uploads/users/".$nama_file);
				mysql_query("update users set fullname='$name', email='$email', no_telp='$telp', level='$level', avatar='$nama_file' where user_id='$id'");
				
				//hapus foto avatar
				$filename = $_POST['avatar'];
				$dir = "$c_cdn/uploads/users/";
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
				$dir = "$c_cdn/uploads/users/";
				unlink($dir.$filename);
			}
		}
			
	}
	header('location:'.$c_url.'/admin/ws-users/listuser');
	
	
} elseif ($page == "users" && $act == "updatepass") {
	$id = $_GET['id'];
	$current_pass = md5($_POST['current_pass']);
	$pass = md5($_POST['password']);

	$cek_pass = mysql_query("select password from users where user_id='$id'");
	$cek_current_pass = mysql_fetch_array($cek_pass);
	
	if ($current_pass != $cek_current_pass['password']) {
		echo "<script>alert(\"Password Sekarang tidak cocok!!!\")</script>";
		echo "<script>window.history.back()</script>";
	} else {		
		mysql_query("update users set password='$pass' where user_id='$id'");
		
	}
	header('location:'.$c_url.'/admin/ws-users/listuser');
	
} elseif ($page == "users" && $act == "hapususer") {
	$filename = $_GET['avatar'];
	//hapus foto avatar
	$dir = "$c_cdn/uploads/users/";
	unlink($dir.$filename);

	//hapus dari db
	mysql_query("delete from users where user_id = '$_GET[id]'");
	header('location:'.$c_url.'/admin/ws-users/listuser');
}
?>