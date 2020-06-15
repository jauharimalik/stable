<?php
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

function int2($s){$s=(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);  return $s;}
function int3($s){$pattern = '/([^0-9]+)/';$s = preg_replace($pattern,'',$s); return $s;}

require_once(PLUG.DS."contact.php"); 
require_once(LIB.DS."faq.php"); 
require_once(LIB .DS. 'cache.php');


$site_image="$c_cdn/new/images/cewek.jpg";
$page_title2="Panduan Pelanggan ".$site_name;
$site_description2=$page_title2." Beberapa pertanyaan yang sering ditanyakan oleh pelanggan. 
Cara pemesanan, ketersediaan barang, ongkos kirim, dll. 
Berikut adalah daftara pertanyaan yang sering ditanyakan pelanggan : ";

$page_title=$page_title2;
$site_description=$site_description2;		
		
if (isset($_GET['p2'])){ 
	$p2 = $_GET['p2'];
	if($db->num_rows("select id from faq_category where link='$p2' ") == 0){
		//header("Location: $c_url/panduan-pelanggan",TRUE,301);
	}else{
		$data_a = $db->get_faq($p2);
		$a_id = $data_a['id'];
		$a_fc_id = $data_a['id'];
		$a_faq_page_title = $data_a['page_title'];
		$a_faq_site_description = $data_a['site_description'];
		$a_faq_site_image = $data_a['site_image'];
		$a_faq_link = $data_a['link'];
		$a_faq_header = $data_a['header'];
		$a_faq_ketentuan = $data_a['ketentuan'];
		$a_faq_widget = $data_a['widget'];
		$a_faq_category = $data_a['category'];
		$a_faq_sname = $data_a['short_name'];
		$a_faq_banner = $data_a['banner'];
		$a_faq_urutan = $data_a['urutan'];
		
		$site_image="$c_cdn_img/$a_faq_site_image";
		$page_title2=judul_faq($a_faq_page_title);
		$site_description2=judul_faq($a_faq_site_description);

		$page_title=$page_title2;
		$site_description=$site_description2;		
	}


$data_faq = "select * from faq where link='".$a_faq_link."' order by urutan asc";
if (isset($_GET['p3'])){ 
	$p3 =($_GET['p3']);
	if($p3==''){
		header("Location: $c_url/$p2",TRUE,301);
	} else {	
		$data_faq = "select * from faq where link='".$a_faq_link."' and (link2='".$p3."') order by urutan asc";
		$data_faq23= $data_faq;
		$result_data_faq23 = $db->query($data_faq23);
		$a_data_faq23 = $result_data_faq23->fetch_array(MYSQLI_BOTH);	
		$faq_judul23 = judul_faq($a_data_faq23['judul']);
		$faq_deskripsi23 = judul_faq($a_data_faq23['deskripsi']);
		$a_f_id = $a_data_faq23['id'];
		$shoot = strip_tags($faq_deskripsi23, "<b><u>");
		$shoot = str_replace("-",",",$shoot);
		$shoot = substr($shoot, 0, 180)."....";		

		$site_image="$c_cdn_img/$a_faq_site_image";
		$page_title2=($faq_judul23." - ".$page_title);
		$site_description2=($shoot." - ".$site_description);

		$page_title=$page_title2;
		$site_description=$site_description2;
		
		$total_aktif_url = $db->num_rows($data_faq23);
		if($total_aktif_url==0){ 
			$kotabaruaja_hapus = strtolower(str_replace(' ','-',$p3));
			$prosedur8 = $db->hapus("pages"," link like '%$kotabaruaja_hapus%'");
			header("Location: $c_url/anuanuan", true, 301);
			exit;	
		}
	}
}

$data_faq2 = "select * from faq where link='".$a_faq_link."' and id!='".$a_id."' order by urutan asc";
//start_nav_faq
$data_nav_faq = "select * from faq_category where category='".$a_faq_category."' order by urutan asc";
$result_nav_faq = $db->query($data_nav_faq);
$nav_faq = array();
$response_nav_faq["data"] = array();
while ($a_data_nav_faq = $result_nav_faq->fetch_array(MYSQLI_BOTH)) {
	$h['nav_faq_name'] = $a_data_nav_faq['short_name'];
	$h['nav_faq_link'] = $a_data_nav_faq['link'];
	if($h['nav_faq_link']==$a_faq_link){ 
		$h['nav_faq_link'] = ""; 
		$h['status_nav'] = "active";
	} else {
		$h['nav_faq_link'] = $c_url."/".$h['nav_faq_link'];
		$h['status_nav'] = "";
	}
	array_push($response_nav_faq["data"], $h);
}
//end_nav_faq	
//start_nav_sb
$data_nav_sb = "select * from faq_category order by urutan asc";
$result_nav_sb = $db->query($data_nav_sb);
$navsb = array();
$response_nav_sb["data"] = array();
while ($a_data_nav_sb = $result_nav_sb->fetch_array(MYSQLI_BOTH)) {
	$sb['nav_faq_name'] = $a_data_nav_sb['short_name'];
	$sb['nav_faq_link'] = $a_data_nav_sb['link'];
	if($sb['nav_faq_link']==$a_faq_link){ 
		$sb['nav_faq_link'] = ""; 
		$sb['status_nav'] = "active";
	} else {
		$sb['nav_faq_link'] = $c_url."/".$sb['nav_faq_link'];
		$sb['status_nav'] = "";
	}
	array_push($response_nav_sb["data"], $sb);
}
} else {
	
	$data_faq = "select * from faq  group by kategori order by urutan asc";
	$data_faq2 = $data_faq;
}
//end_nav_faq	
$jq3 = 0;			

$pageurl = "content/static/faqcat.php";
$p="faq";

require_once(LIB .DS. 'cache.php');
require_once(TEMPLATE_DIR."/index.php");