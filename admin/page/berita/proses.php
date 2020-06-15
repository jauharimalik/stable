<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
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

//insert berita
if ($page == "berita" && $act == "post") {
	$judul = $_POST['judul'];
	$isi = htmlspecialchars($_POST['isi'], ENT_QUOTES);
	$kategori = $_POST['kategori'];
	$status = $_POST['status'];
	$tgl = date("Y-m-d H:i:s");
	$pengirim = $_SESSION['userid'];

	//unggah foto
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file = $_FILES['gambar']['type'];
	$nama = str_replace(" ", "_", $_FILES['gambar']['name']);
	$datename = date('dmyhi');
	$nama_file = $datename.$nama;	

	if (!empty($lokasi_file)) {
		$images = $_FILES["gambar"]["tmp_name"];
		copy($_FILES["gambar"]["tmp_name"],"../../../cdn/images/blog/".$_FILES["gambar"]["name"]);
		$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../../../cdn/images/blog/".$nama_file);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);	

		mysql_query("insert into berita (judul,
										isi_berita,
										tanggal,
										gambar,
										image,
										status,
										kategori_id,
										user_id)
								values 	('$judul', 
										'$isi',
										'$tgl',
										'blog/".$_FILES["gambar"]["name"]."',
										'blog/$nama_file',
										'$status',
										'$kategori',
										'$pengirim')");	
	} else {
		mysql_query("insert into berita (judul,
										isi_berita,
										tanggal,
										status,
										kategori_id,
										user_id)
								values 	('$judul', 
										'$isi',
										'$tgl',
										'$status',
										'$kategori',
										'$pengirim')");	
	}
	header('location:'.$c_url.'/admin/ws-berita/listberita');
} elseif ($page == "berita" && $act == "updateberita") {
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$isi = htmlspecialchars($_POST['isi'], ENT_QUOTES);
	$kategori = $_POST['kategori'];
	$status = $_POST['status'];

	//unggah foto
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file = $_FILES['gambar']['type'];
	$nama = str_replace(" ", "_", $_FILES['gambar']['name']);
	$datename = date('dmyhi');
	$nama_file = $datename.$nama;	

	if (empty($lokasi_file)) {
		mysql_query("UPDATE berita SET judul		= '$judul',
										isi_berita	= '$isi',
										status 		= '$status',
										kategori_id	= '$kategori'
								WHERE 	berita_id	= '$id'");	
	} else {
		$images = $_FILES["gambar"]["tmp_name"];
		copy($_FILES["gambar"]["tmp_name"],"../../../cdn/images/blog/".$_FILES["gambar"]["name"]);
		$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../../../cdn/images/blog/".$nama_file);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);	

		mysql_query("UPDATE berita SET judul		= '$judul',
										isi_berita	= '$isi',
										status 		= '$status',
										kategori_id	= '$kategori',
										gambar		= 'blog/".$_FILES["gambar"]["name"]."',
										image		= 'blog/$nama_file'
								WHERE 	berita_id	= '$id'");
		//hapus gambar lama
		$filename = $_POST['filename'];		
		$dir = "../../../cdn/images/blog/";
		unlink($dir.$filename);
	}
	header('location:'.$c_url.'/admin/ws-berita/listberita');

} elseif ($page == "berita" && $act == "hapusberita") {
	$filename = $_GET['filename'];
	//hapus foto 
		$dir = "../../../cdn/images/blog/";
		unlink($dir.$filename);

	mysql_query("delete from berita where berita_id = '$_GET[id]'");
	header('location:'.$c_url.'/admin/ws-berita/listberita');
	
} elseif ($page == "berita" && $act == "hapusberitacek") {
	//hapus foto 
	$dir = "$upload_dir/berita/";
	//unlink($dir.$filename);
	//unlink($dir."thumb/".$filename);

	//mysql_query("delete from berita where berita_id = '$id'");
	//header('location:../../../admin/index.php?page=berita&act=listberita');
	if (isset($_POST['btnhapus'])) {
		foreach ($_POST['berita_id'] as $key) {	
			
			$result = mysql_query("select gambar from berita where berita_id = '$key'");
			$gmb = mysql_fetch_array($result);
			unlink($dir.$gmb['gambar']);
			unlink($dir."thumb/".$gmb['gambar']);

			mysql_query("delete from berita where berita_id = '$key'");
		}
		foreach ($_POST['gambar'] as $gmb) {
			//unlink($dir.$gmb);
			//unlink($dir."thumb/".$gmb);
		}
	}

	if (isset($_POST['btnpublish'])) {
		foreach ($_POST['berita_id'] as $key) {	
			mysql_query("update berita set status='Y' where berita_id = '$key'");
		}
	}

	if (isset($_POST['btndraft'])) {
		foreach ($_POST['berita_id'] as $key) {	
			mysql_query("update berita set status='N' where berita_id = '$key'");
		}
	}
	header('location:'.$c_url.'/admin/ws-berita/listberita');
}

//kategori
elseif ($page == "kategoriberita" && $act == "addkategori") {
	$judul = seo_title($_POST['kategori_nm']);
	$deskripsi = $_POST['kategori_desk'];

	mysql_query("insert into berita_kategori values('', '$judul', '$deskripsi')");

	header('location:'.$c_url.'/admin/ws-kategoriberita/listkategori');

} elseif ($page == "kategoriberita" && $act == "updatekategori") {
	$id = $_GET['id'];
	$judul = seo_title($_POST['kategori_nm']);
	$deskripsi = $_POST['kategori_desk'];

	mysql_query("update berita_kategori set kategori_nama = '$judul', kategori_desk = '$deskripsi' where kategori_id = '$id'");
	
	header('location:'.$c_url.'/admin/ws-kategoriberita/listkategori');
} elseif ($page == "kategoriberita" && $act == "hapuskategori") {
	mysql_query("delete from berita_kategori where kategori_id = '$_GET[id]'");
	header('location:'.$c_url.'/admin/ws-kategoriberita/listkategori');
}
?>