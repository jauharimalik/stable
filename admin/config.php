<?php
session_start();
$host = "localhost"; //nama host
$user = "root"; //nama user mysql
$pass = ""; //password mysql
$db = "sinergi"; //nama database 
$connect = @mysql_connect($host, $user, $pass);
mysql_select_db($db, $connect) or die ("<b>Koneksi Database Gagal</b></br>".mysql_error());

date_default_timezone_set("Asia/Jakarta");
require_once(LIB.DS."ini.lib.php");
$config = get_parse_ini(CONFIG.DS."config.ini.php");
//load config.ini.php
include ROOT.DS.'ongkir/config.php'; 
$c_domain = $config['config']['domain'];
$c_email_admin = $config['config']['email'];
$c_title = $config['config']['title'];
$c_url = $config['config']['url'];
$c_template = $config['config']['template'];
$c_perpage = $config['config']['show'];
$c_max_per_table = $config['config']['max'];
$c_background = $config['config']['background'];
$c_type_site = $config['config']['type_site'];
$c_sidebar = $config['config']['sidebar'];
$c_editor = $config['config']['editor'];
$c_go_url = $config['config']['go_url'];
$c_admin_url = $config['config']['go_url'];
$d_alamat1 = $config['info']['alamat1'];
$d_alamat2 = $config['info']['alamat2'];
$d_alamat3 = $config['info']['alamat3'];
$d_pos = $config['info']['kodepos'];
$d_twitter_acc = $config['info']['twitteracc'];
$d_telp = $config['info']['telp'];
$d_key = $config['info']['keyword'];
$d_desc = $config['info']['description'];
$d_telp2 = $config['info']['telp2'];
$d_telp3 = $config['info']['telp3'];
$d_bbm = $config['info']['pinbbm'];

$d_telphp2 = $config['info']['telphp2'];
$d_telphp3 = $config['info']['telphp3'];
$d_telphp4 = $config['info']['telphp4'];
$d_telphp5 = $config['info']['telphp5'];

//load setting marketing sparepart
$marketing_sparepart = $config['sparepart']['nama']; 
$telp_sparepart = $config['sparepart']['telp'];
$bbm_sparepart = $config['sparepart']['bbm'];
$mail_sparepart = $config['sparepart']['email'];
$posisi_sparepart = $config['sparepart']['posisi'];

//load setting tekhnisi
$marketing_tekhnisi = $config['tekhnisi']['nama']; 
$telp_tekhnisi = $config['tekhnisi']['telp'];
$bbm_tekhnisi = $config['tekhnisi']['bbm'];
$mail_tekhnisi = $config['tekhnisi']['email'];
$posisi_tekhnisi = $config['tekhnisi']['posisi'];

//load setting tekhnisi
$marketing_mesin = $config['marketing']['nama']; 
$telp_marketing = $config['marketing']['telp'];
$bbm_marketing = $config['marketing']['bbm'];
$mail_marketing = $config['marketing']['email'];
$posisi_marketing = $config['marketing']['posisi'];

//load setting bank bca
$nama_bca= $config['akunbca']['nama']; 
$nomor_bca= $config['akunbca']['nomor']; 
$cabang_bca= $config['akunbca']['cabang']; 

//load setting bank mandiri
$nama_mandiri= $config['akunmandiri']['nama']; 
$nomor_mandiri= $config['akunmandiri']['nomor']; 
$cabang_mandiri= $config['akunmandiri']['cabang']; 
//load engine penting di sini//file konfigurasi link folder di sini
$c_apps = "$c_url/app";
$c_sys  = "$c_url/system";
$c_mod = "$c_url/module";
include(CONFIG.DS.'linkf.php');
$upload_dir = $c_cdn."/uploads";

//load engine penting di sini
require_once(INC .DS. 'fungsi_rupiah.php');
require_once(INC .DS. 'fungsi_badword.php');
require_once(INC .DS. 'library.php');
require_once(INC .DS. 'video_stream.php');
require_once(LIB .DS. 'replace_character.lib.php');
require_once(LIB .DS. 'anti_sql_injection.lib.php');
require_once(LIB .DS. 'anti_xss.lib.php');
require_once(LIB .DS. 'indonesia.lib.php');
require_once(LIB .DS. 'template.lib.php');
require_once(LIB .DS. 'addtocart.php');
require_once(LIB .DS. 'minify.php');
require_once(LIB .DS. 'fungsi_seo.php');
require_once(LIB .DS. 'ip.php');
?>