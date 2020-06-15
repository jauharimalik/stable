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
include '../../ib/fungsi_seo.php';

$page = $_GET['page'];
$act = $_GET['act'];

if ($page == "produk" && $act == "insert") {

	
	$nama_produk = ucwords($_POST['nama_produk']);
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$harga_baru = $_POST['harga_baru'];
	$harga_baru = str_replace('.', '', $harga_baru);
	$harga_lama = ($harga_baru+($harga_baru*(40/100)));
	$link = strtolower($nama_produk);
	$link = str_replace('+', '', $link);
	$link = str_replace('|', '', $link);
	$link = str_replace(' ', '-', $link);
	$link = str_replace('  ', '', $link);
	$link = str_replace('   ', '', $link);
	$link = str_replace('Canon', '', $link);
	$link = str_replace('canon', '', $link);
	$link = str_replace('fujixerox', '', $link);
	$link = str_replace('fuji xerox', '', $link);
	$link = str_replace('.', '-', $link);
	$deskripsi_a=$_POST['deskripsi_a'];	
	$deskripsi_b=$_POST['deskripsi'];
	$deskripsi=$deskripsi_b;
	$spec=$_POST['spec'];	
	$special=$_POST['special'];
	$hot=$_POST['hot'];
	$user=$_POST['user'];
	$date=date('Y-m-d');
	$time=date('h:m');
	
		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "Produk_Detail".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"../../../cdn/images/fuji2/".$_FILES["fileUpload"]["name"]);
		$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../../../cdn/images/fuji/kecil/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);	
		
		mysql_query("insert into produk( nama_produk,
										brand,
										category,
										harga_baru,
										harga_lama,
										link,
										deskripsi_a,
										deskripsi_b,
										deskripsi,
										spec,
										special,
										hot,
										user,
										date,
										time,										
										image_satu,
										image_3)
								values 	(
										'$nama_produk',
										'$brand',
										'$category',
										'$harga_baru',
										'$harga_lama',
										'$link',
										'$deskripsi_a',
										'$deskripsi_b',
										'$deskripsi',
										'$spec',
										'$special',
										'$hot',
										'$user',
										'$date',
										'$time',									
										'cdn/images/fuji2/".$_FILES['fileUpload']['name']."', 
										'cdn/images/fuji/kecil/$new_images')");	
										
		header('location:'.$c_url.'/admin/ws-produk/listproduk');			

} elseif ($page == "produk" && $act == "update") {
	$id = $_POST['id'];
	$nama_produk = ucwords($_POST['nama_produk']);
	$brand = $_POST['brand'];
	$category = $_POST['category'];
	$harga_baru = $_POST['harga_baru'];
	$harga_baru = str_replace('.', '', $harga_baru);
	$harga_lama = ($harga_baru+($harga_baru*(40/100)));
	$link = strtolower($_POST['link']);
	$link = str_replace(' ', '-', $link);
	$link = str_replace('  ', '', $link);
	$link = str_replace('   ', '', $link);
	$link = str_replace('Canon', '', $link);
	$link = str_replace('canon', '', $link);
	$link = str_replace('fujixerox', '', $link);
	$link = str_replace('fuji xerox', '', $link);
	$link = str_replace('.', '-', $link);
	$deskripsi_a=$_POST['deskripsi_a'];	
	$deskripsi_b=$_POST['deskripsi'];
	$deskripsi=$deskripsi_b;
	$spec=$_POST['spec'];	
	$special=$_POST['special'];
	$hot=$_POST['hot'];
	$user=$_POST['user'];
	$date=date('Y-m-d');
	$time=date('h:m');
	if(!empty($_FILES["fileUpload"]["tmp_name"])){
		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "Produk_Detail".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"../../../cdn/images/fuji2/".$_FILES["fileUpload"]["name"]);
		$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../../../cdn/images/fuji/kecil/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);	

		mysql_query("UPDATE produk SET nama_produk = '$nama_produk',
										brand = '$brand',
										category = '$category',
										harga_baru = '$harga_baru',
										harga_lama = '$harga_lama',
										link = '$link',
										deskripsi_a = '$deskripsi_a',
										deskripsi_b ='$deskripsi_b',
										deskripsi ='$deskripsi',
										spec = '$spec',
										special = '$special',
										hot = '$hot',
										user = '$user',
										date = '$date',
										time = '$time',										
										image_satu = 'cdn/images/fuji2/".$_FILES['fileUpload']['name']."',
										image_3 = 'cdn/images/fuji/kecil/$new_images' 
										WHERE 	id_produk 	= '$id'");			
	} else {
		mysql_query("UPDATE produk SET nama_produk = '$nama_produk',
										brand = '$brand',
										category = '$category',
										harga_baru = '$harga_baru',
										harga_lama = '$harga_lama',
										link = '$link',
										deskripsi_a = '$deskripsi_a',
										deskripsi_b ='$deskripsi_b',
										deskripsi ='$deskripsi',
										spec = '$spec',
										special = '$special',
										hot = '$hot',
										user = '$user',
										date = '$date',
										time = '$time'
										WHERE 	id_produk 	= '$id'");				
	}									
	header('location:'.$c_url.'/admin/ws-produk/listproduk');

}  elseif ($page == "produk" && $act == "hapusprodukcek") {
	$dir = "$upload_dir/produk/";
	if(isset($_POST['btnhapus'])){
		foreach ($_POST['id'] as $key) {
			$result = mysql_query("select image from produk where id_produk = '$key'");
			$gmb = mysql_fetch_array($result);
			unlink($dir.$gmb['image']);
			unlink($dir."thumb/".$gmb['image']);

			mysql_query("delete from produk where id_produk = '$key'");
		}	
	}

	header('location:../../../admin/ws-produk/listproduk');
}

elseif ($page == "produk" && $act == "submitpk") {
	$nama = seo_title($_POST['pk_nama']);

	mysql_query("insert into produk_kategori values('', '$nama')");

	header('location:../../../admin/index.php?page=produk&act=listprodkategori');

} elseif ($page == "produk" && $act == "updatepk") {
	$id = $_GET['id'];
	$nama = seo_title($_POST['pk_nama']);

	mysql_query("update produk_kategori set pk_nama = '$nama' where pk_id = '$id'");
	
	header('location:../../../admin/index.php?page=produk&act=listprodkategori');
} elseif ($page == "produk" && $act == "hapuspk") {
	mysql_query("delete from produk_kategori where pk_id = '$_GET[id]'");
	header('location:../../../admin/index.php?page=produk&act=listprodkategori');
}
?>