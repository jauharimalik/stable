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
include '../../lib/fungsi_thumbnail.php';
include '../../lib/fungsi_seo.php';

$page = $_GET['page'];
$act = $_GET['act'];

//insert aktivitaspelanggan
if ($page == "aktivitaspelanggan" && $act == "post") {
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];
		$id_produk =  $_POST['tipemesin'];
		$result = mysql_query("select * from produk where id_produk = '".$id_produk."'");
		while ($kategori = mysql_fetch_array($result)) {$tipemesin = $kategori['nama_produk'];}		
		$lokasi = $_POST['lokasi'];
		$rating = $_POST['rating'];
		$link = strtolower('dan-bukti-pengiriman-penjualan-mesin-fotocopy-'.$tipemesin.'-'.$nama.'-'.$lokasi);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('+', '', $link);
		$link = str_replace('  ', '', $link);
		$link = str_replace('   ', '', $link);
		$link = str_replace('.', '-', $link);
		$link = str_replace('|', '', $link);
		$tanggal = date("Y-m-d");		

		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "Foto_Pelanggan".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"../../../cdn/images/customer/".$_FILES["fileUpload"]["name"]);
		$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../../../cdn/images/customer/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
		
		mysql_query("insert into aktivitas_pelanggan(foto,
										photosmall,
										tanggal,
										nama,
										id_produk,
										tipemesin,
										lokasi,
										link,
										rating,
										komentar)
								values 	('customer/$new_images', 
										'customer/".$_FILES['fileUpload']['name']."',
										'$tanggal',
										'$nama',
										'$id_produk',
										'$tipemesin',
										'$lokasi',
										'$link',
										'$rating',
										'$komentar')");	
		header('location:'.$c_url.'/admin/ws-dashboard');		
}	


?>