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
if ($act == "post") {
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];	
		$lokasi = $_POST['lokasi'];
		$rating = $_POST['rating'];
		
		$link = strtolower($nama.'-'.$lokasi);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('  ', '', $link);
		$link = str_replace('   ', '', $link);
		$link = str_replace('.', '-', $link);
		$tanggal = date("Y-m-d");
		$target_folder = "../../../cdn/images/mobile/activity/";
		
		$data_videonya="";
		$data_fotonya1="";
		$data_fotonya2="";
		
		for($i=0; $i<count($_FILES['fileUpload']['name']); $i++) {
			
			if($_FILES['fileUpload']['type'][$i]=="video/mp4"){
				$tmp_name = $_FILES["fileUpload"]["tmp_name"][$i];
				$videonya_name = $_FILES["fileUpload"]["name"][$i];
				$data_videonya .="mobile/activity/".$videonya_name."<br>";
				copy($tmp_name,$target_folder.$videonya_name);
				$target_file = $target_folder.$videonya_name;
				move_uploaded_file($tmp_name,$target_file);				
			} else {
				$images = $_FILES["fileUpload"]["tmp_name"][$i];
				$new_images = "foto_kami".$_FILES["fileUpload"]["name"][$i];
				$new_images2 = $_FILES["fileUpload"]["name"][$i];
				
				$data_fotonya1 .="mobile/activity/".$new_images."<br>";
				$data_fotonya2 .="mobile/activity/".$new_images2."<br>";
				
				copy($_FILES["fileUpload"]["tmp_name"][$i],"../../../cdn/images/mobile/activity/".$_FILES["fileUpload"]["name"][$i]);
				$width=278; 
				$size=GetimageSize($images);
				$height=round($width*$size[1]/$size[0]);
				$images_orig = ImageCreateFromJPEG($images);
				$photoX = ImagesX($images_orig);
				$photoY = ImagesY($images_orig);
				$images_fin = ImageCreateTrueColor($width, $height);
				ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
				ImageJPEG($images_fin,"../../../cdn/images/mobile/activity/".$new_images);
				ImageDestroy($images_orig);
				ImageDestroy($images_fin);	
				
			}
			
        }
		
		mysql_query("insert into aktivitas_vanectro(foto,
										foto_besar,
										shoot,
										tanggal,
										keterangan,
										lokasi,
										link,
										rating,
										deskripsi)
								values 	('$data_fotonya1', 
										'$data_fotonya2',
										'$data_videonya',
										'$tanggal',
										'$nama',
										'$lokasi',
										'$link',
										'$rating',
										'$komentar')");	
		header('location:'.$c_url.'/admin/ws-aktivitas-kami/listcust');		
} elseif ($act == "update") {
	$id = $_POST['id'];
	
		$nama = $_POST['nama'];
		$komentar = $_POST['komentar'];
		$lokasi = $_POST['lokasi'];
		$rating = $_POST['rating'];
		$link = strtolower($nama.'-'.$lokasi);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('  ', '', $link);
		$link = str_replace('   ', '', $link);
		$link = str_replace('.', '-', $link);
		$tanggal2 =  $_POST['tanggal']; 
		$tanggal =  date('Y/m/d', strtotime($tanggal2)); 
		if(!empty($_FILES["fileUpload"]["tmp_name"])){
		$images = $_FILES["fileUpload"]["tmp_name"];
		$new_images = "foto_kami".$_FILES["fileUpload"]["name"];
		copy($_FILES["fileUpload"]["tmp_name"],"../../../cdn/images/mobile/activity/".$_FILES["fileUpload"]["name"]);
		$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		ImageJPEG($images_fin,"../../../cdn/images/mobile/activity/".$new_images);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
		mysql_query("update aktivitas_vanectro set foto ='mobile/activity/$new_images',
										foto_besar='mobile/activity/".$_FILES['fileUpload']['name']."',
										tanggal='".$tanggal."',
										keterangan='".$nama."',
										lokasi='".$lokasi."',
										link='".$link."',
										rating='".$rating."',
										deskripsi='".$komentar."' where id ='".$_REQUEST['id']."'");	
		header('location:'.$c_url.'/admin/ws-aktivitas-kami/listcust');			
		} else {
		mysql_query("update aktivitas_vanectro set 
										tanggal='".$tanggal."',
										keterangan='".$nama."',
										lokasi='".$lokasi."',
										link='".$link."',
										rating='".$rating."',
										deskripsi='".$komentar."' where id ='".$_REQUEST['id']."'");	
		header('location:'.$c_url.'/admin/ws-aktivitas-kami/listcust');				
		}
	
} elseif ($page == "aktivitas" && $act == "delete") {
	mysql_query("delete from aktivitas_vanectro where id ='".$_REQUEST['id']."'");
	header('location:'.$c_url.'/admin/ws-aktivitas-kami/listcust');
}
?>