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
if ($page == "order" && $act == "aksipembayaran") {
	if (isset($_POST['btnhapus'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("delete from pembayaran where order_id='$key'");
		} 
	}
	if (isset($_POST['btnbatal'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("update orders set pelunasan='0' where order_id='$key'");
		} 
	}
	header('location:../../..//admin/ws-order/pembayaran');

}
elseif ($page == "order" && $act == "aksipenawaran") {
	if (isset($_POST['btnhapus'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("delete from penawaran where pid='$key'");
		} 
	}
	if (isset($_POST['btnbatal'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("update penawaran set status='Ditolak' where pid='$key'");
		} 
	}
	if (isset($_POST['btnok'])) {
		foreach ($_POST['ordid'] as $key) {
			mysql_query("update penawaran set status='Diterima' where pid='$key'");
		} 
	}	
	
	header('location:../../..//admin/ws-order/penawaran');

} elseif ($page == "order" && $act == "aksilistorder") {
	if (isset($_POST['btnhapus'])) {
		foreach ($_POST['id'] as $key) {
			mysql_query("delete from orders where order_id='$key'");
			mysql_query("delete from order_detail where order_id='$key'");
		} 
	}
	if (isset($_POST['btnbatalproses'])) {
		foreach ($_POST['id'] as $key) {
			mysql_query("update orders set status='Menunggu' where order_id='$key'");
		} 
	}
	if (isset($_POST['btnproses'])) {
		foreach ($_POST['id'] as $key) {
			mysql_query("update orders set status='Dalam Proses' where order_id='$key'");
		} 
	}
	if (isset($_POST['btndikirim'])) {
		foreach ($_POST['id'] as $key) {
			mysql_query("update orders set status='Dikirim' where order_id='$key'");
		} 
	}
	if (isset($_POST['btnbatal'])) {
		foreach ($_POST['id'] as $key) {
			mysql_query("update orders set status='Batal' where order_id='$key'");
		} 
	}
	header('location:../../../admin/ws-order/listorder');
}
?>