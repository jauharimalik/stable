<?php
$mapvanectro="<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.095619383905!2d106.925066!3d-6.227573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1b3cad4bace5cc8!2sPT.+Vanectro+Pelangganlan+Nusantara!5e0!3m2!1sid!2sid!4v1449382434327' width='100%' height='460 px' frameborder='0' style='border:0' allowfullscreen=''></iframe>";
$mapmulya="<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7454242855883!2d106.7583347153813!3d-6.297147195442382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f028c18b9aeb%3A0x2f41ab821f62c351!2sCV.+Mulya+Fotocopy!5e0!3m2!1sen!2sid!4v1531732108767' width='100%' height='460 px' frameborder='0' style='border:0' allowfullscreen=''></iframe>";
function wa($nomor){
	$n="\r\n %0A"; 
	return "https://web.whatsapp.com/send?phone=".$nomor."&text=Hallo.. Saya mau nanya, saya baru berkunjung di halaman kontak. dan saya ingin bertanya Sewa Mesin Fotocopy \r\n %0A Tolong Segera Di Respond...";	
}

function wasewa($nomor,$reff){
	$n="\r\n %0A"; 
	return "https://web.whatsapp.com/send?phone=".$nomor."&text=Hallo.. Saya mau nanya, saya baru berkunjung di halaman ".$reff.". dan saya ingin bertanya Sewa Mesin Fotocopy \r\n %0A Tolong Segera Di Respond...";	
}

function wacekpengiriman($nomor,$reff){
	$n="\r\n %0A";
	return "https://web.whatsapp.com/send?phone=".$nomor."&text=Hallo.. Saya mau bertanya mengenai pengiriman mesin fotocopynya, saya baru berkunjung di halaman ".$reff.".\r\n %0A Tolong Segera Di Respond...";	
}

$fotohub=$c_cdn."/new/images/hubungi/";
$foto1=$fotohub."mario1.jpg";
$foto2=$fotohub."mas-tri.jpg";
$foto3=$fotohub."hani2.jpg";
$foto4=$fotohub."rusli.jpg";
$foto5=$fotohub."wawan2.jpg";
$foto6=$fotohub."lia.jpg";
$foto7=$fotohub."fauzan.jpg";

$wacekpengiriman_akunting=wacekpengiriman($hptelp_akunting,$url_sekarang);
$wacekpengiriman_marketing=wacekpengiriman($hp,$url_sekarang);

if ($detect->isMobile()){
	$wacekpengiriman_akunting = str_replace("https://web.whatsapp.com/","whatsapp://",$wacekpengiriman_akunting);
	$wacekpengiriman_marketing = str_replace("https://web.whatsapp.com/","whatsapp://",$wacekpengiriman_marketing);
}

$konten = array(
	$marketing_mesin => array($telp_original,$posisi_marketing,$hp,$foto1),
	$marketing_sparepart => array($telp_sparepart_ori,$posisi_sparepart,$hptelp_sparepart,$foto4),
	$marketing_tekhnisi => array($telp_tekhnisi_ori,$posisi_tekhnisi,$hptelp_tekhnisi,$foto5),
	$marketing_tekhnisi2 => array($telp_tekhnisi_ori2,$posisi_tekhnisi2,$hptelp_tekhnisi2,$foto7),
	$marketing_akunting => array($telp_akunting_ori,$posisi_akunting,$hptelp_akunting,$foto6)
);