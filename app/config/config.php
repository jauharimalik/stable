<?php
header('X-Frame-Options: SAMEORIGIN');
error_reporting(E_ERROR & ~E_NOTICE & ~E_WARNING);
require_once(CONFIG.DS."database.php");
date_default_timezone_set("Asia/Jakarta");
include(LIB.DS.'ini.lib.php');

session_start();if(empty($_SESSION['cart'])){$_SESSION['subtotal'] = 0;}

$site_name="SantosaStable.Id";	
$operator_cache="Online";
$waktu_cache = 24 * 14 * 60;
$gmap_key="AIzaSyCYhf6ag0Lc52-bXIslI72VyXpALe_6wT0";
$token_sms_gateway = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzODgwNjkzMywiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjUyMjI2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.jxCSPlgFVINAsnjfDPEfGJ3f2J5xwTkpQ-DBD5kCF5I";
$id_sms_gateway="103793";
$config = get_parse_ini(CONFIG.DS.'config.ini.php');

//load config.ini.php
$url_web = $config['config']['url'];
$c_ssl = $config['config']['ssl'];
$c_w3 = $config['config']['w3'];
$c_email_admin = $config['config']['email'];
$c_title = $config['config']['title'];
$c_template = $config['config']['template'];
$d_alamat1 = $config['info']['alamat1'];
$urlgmap = $config['info']['url_gmap'];
$d_alamat2 = $config['info']['alamat2'];
$d_alamat3 = $config['info']['alamat3'];
$d_kota = $config['info']['kota'];
$d_provinsi = $config['info']['provinsi'];
$d_negara = $config['info']['negara'];
$d_pos = $config['info']['kodepos'];
$d_mapurl= $config['info']['mapurl'];

$d_telp = $config['info']['telp'];
$d_key = $config['info']['keyword'];
$d_desc = $config['info']['description'];
$d_telphp2 = $config['info']['telphp2'];
$d_telphp3 = $config['info']['telphp3'];

//load setting marketing sparepart
$fb_firstname = $config['facebook']['first_name']; 
$fb_lastname = $config['facebook']['last_name']; 
$fb_username = $config['facebook']['username']; 
$fb_id= $config['facebook']['fbid']; 
$fb_pageid = $config['facebook']['fbpageid']; 
$fb_appid= $config['facebook']['fbappid']; 

//load nomor legalitas
$legal_pt = $config['legal']['pt']; 
$legal_siup = $config['legal']['siup']; 
$legal_tdp = $config['legal']['tdp'];
$legal_npwp = $config['legal']['npwp'];
$legal_skmenteri = $config['legal']['skmenteri'];

//load setting marketing1
$marketing_mesin = $config['marketing']['nama']; 
$telp_marketing = $config['marketing']['telp'];
$telp_original = $telp_marketing;
$bbm_marketing = $config['marketing']['bbm'];
$mail_marketing = $config['marketing']['email'];
$posisi_marketing = $config['marketing']['posisi'];
$telp_marketing=str_replace(" ","",$telp_marketing);
$telp_marketing=ltrim($telp_marketing,"0");
$hp="+62".$telp_marketing;

//load setting marketing2
$marketing_mesin2 = $config['marketing2']['nama']; 
$telp_marketing2 = $config['marketing2']['telp'];
$telp_original2 = $telp_marketing2;
$bbm_marketing2 = $config['marketing2']['bbm'];
$mail_marketing2 = $config['marketing2']['email'];
$posisi_marketing2 = $config['marketing2']['posisi'];
$telp_marketing2=str_replace(" ","",$telp_marketing2);
$telp_marketing2=ltrim($telp_marketing2,"0"); 
$hp2="+62".$telp_marketing2;

//load setting bank bca
$nama_bca= $config['akunbca']['nama']; 
$nomor_bca= $config['akunbca']['nomor']; 
$cabang_bca= $config['akunbca']['cabang']; 

//load setting bank bri
$nama_bri= $config['akunbri']['nama']; 
$nomor_bri= $config['akunbri']['nomor']; 
$cabang_bri= $config['akunbri']['cabang']; 

//load setting bank mandiri
$nama_mandiri= $config['akunmandiri']['nama']; 
$nomor_mandiri= $config['akunmandiri']['nomor']; 
$cabang_mandiri= $config['akunmandiri']['cabang']; 

//load engine penting di sini
function callwa ($wa_chat,$link_sumber){
	$text_wa = "https://web.whatsapp.com/send?phone=$wa_chat&text=Hallo.. Ada sesuatu yang ingin saya tanyakan, saya baru berkunjung di halaman $link_sumber. %0A Tolong Segera Di Respond...";
	return $text_wa;
}
require_once(INC.DS.'core.php');