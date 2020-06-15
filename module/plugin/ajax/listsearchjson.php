<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
header('Content-Type: application/json');
require_once(LIB.DS."faq.php");


function cekquery($a){
	$a = str_replace("_"," ", $a);
	return $a;
}

function cekdouble($a,$b){
	$explode = explode("-", $a);
	$count = count($explode);
	if($count >1){
		$query =" and (";
		$start_count = 0;
		foreach ( $explode as $clue) {
			$start_count++;
			$query_baru = cekquery($clue);
			if($start_count <=1){
				$query .= " ($b='$query_baru')";
			}
			else{$query .= " or ($b='$query_baru')";}	
		} $query .=" )";
	} else {
		$query_baru = cekquery($a);
		$query = "and ($b='$query_baru')";				
	}	
	return $query;
}

if(isset($_GET['type'])){
	$type = $_GET['type'];
} else { $type= 1;}

if(isset($_GET['query'])){$query1 = $_GET['query'];}
else {$query1 = "";}

if(isset($_GET['filter'])){$filter = $_GET['filter'];}
else {$filter = "";}

if(isset($_GET['page'])){$page = $_GET['page']; $page = ($page - 1) *10;}
else {$page = 0;}

if(isset($_GET['sort'])){
	$sort = cekquery($_GET['sort']);
	$q_sort = $sort;
}
else {$q_sort = "rekomendasi desc, harga_baru desc, hot desc";}

if(isset($_GET['category'])){
	$category = $_GET['category'];
	$q_category = cekdouble($category,"category");	
}
else {$q_category = "";}

if(isset($_GET['brand'])){
	$brand = cekquery($_GET['brand']);
	$q_brand = cekdouble($brand,"brand");	
}
else {$q_brand = "";}

if(isset($_GET['hot'])){
	$hot = $_GET['hot'];
	$q_hot = cekdouble($hot,"hot");		
}
else {$q_hot = "";}

if(isset($_GET['minharga'])){
	$minharga = $_GET['minharga'];
	$q_minharga = "and (harga_baru <='$minharga')";	
}
else {$q_minharga = "";}

if(isset($_GET['maxharga'])){
	$maxharga = $_GET['maxharga'];
	$q_maxharga = "and (harga_baru >='$maxharga')";		
}
else {$q_maxharga = "";}


if(isset($_GET['paket'])){
	$paket = $_GET['paket'];
	$q_paket = "and (paket='$paket')";	
}
else {$q_paket = "";}

if(isset($_GET['sewa'])){
	$sewa = $_GET['sewa'];
	$q_sewa = "and (sewa='$sewa')";			
}
else {$q_sewa = "";}

if(isset($_GET['nama_kota'])){$nama_kota = $_GET['nama_kota'];}
else {$nama_kota = "";}


if(isset($_GET['textcari'])){
	$carrinya = strtolower($_GET['textcari']);
	$carrinya = filterkeywordsearch($carrinya);

	$getint = int3($carrinya);
	if($getint >=1 ){
		$max_harga_pencarian = $getint + (($getint/100)*25);
		$min_harga_pencarian = $getint - (($getint/100)*25);
		$query_harga = "or (harga_baru >= $min_harga_pencarian and harga_baru <= $max_harga_pencarian)";
	} else{
		$query_harga = "";
	}
		
	$urlsearch = seo_title($carrinya);
	$c_perpage = 10;
	$calc = $c_perpage * $page;
	$start = $calc - $c_perpage;
	
		$querynya = "";	
		$kata = str_replace("-"," ",seo_title($carrinya));	
		$katatv = filterkeywordtv($katatv);		
		$pecahan = explode(" ",$kata);
		
		foreach($pecahan as $element4){
			$querynya .=" and (nama_produk like '%$element4%' or category like  '%$element4%' or deskripsi like '%$element4%' $query_harga)"; 
		}
		
		$urutanforeach2 = 0;
		$imbuhan = "";
		foreach($pecahan as $element4){
			$urutanforeach2++;
			if($urutanforeach2 != 1){ $imbuhan = "or";}
			$querynya_lain2 .= $imbuhan." (nama_produk like '%$element4%' or category like  '%$element4%' or deskripsi like '%$element4%')"; 
		}
		
		$pecahantv = explode(" ",$katatv);
		foreach($pecahantv as $elementtv){
			$querynyatv .=" or (title like '%$elementtv%' or details like '%$elementtv%')";
		}		
		$querynya1 =" and (nama_produk like '%$carrinya%' or category like  '%$carrinya%' or deskripsi like '%$carrinya%') or (harga_baru >= $min_harga_pencarian and harga_baru <= $max_harga_pencarian)"; 
		$querynyatv1 .=" and (title like '%$carrinya%' or details like '%$carrinya%')";
		
		$data_result1=("SELECT * FROM produk where link !='' $querynya1 and harga_baru >=10000 order by category asc, harga_baru asc limit $page,10");	
		$data_result2=("SELECT * FROM produk where link !='' $querynya and harga_baru >=10000 order by category asc, harga_baru asc limit $page,10");
		$data_result3=("SELECT * FROM produk where link !=''  and ( $querynya_lain2 $query_harga) and harga_baru >=10000  order by category asc, harga_baru asc limit $page,10");

		$result2 = $db->query($data_result2);
		$found1 = $db->num_rows($data_result1);
		$found2 = $db->num_rows($data_result2);
		$found3 = $db->num_rows($data_result3);
		
		$data_video = ("select * from videos  where youtube_id !=''  and title like '%$carrinya%' $querynyatv order by hits DESC, duration desc limit $page,10");
		$data_video1 = ("select * from videos  where youtube_id !='' $querynyatv1 order by hits DESC, duration desc limit $page,10");
		
		$foundvideo1 = $db->num_rows($data_video);
		$foundvideo2 = $db->num_rows($data_video1);

		if(($foundvideo2>=1)&&($foundvideo1>$foundvideo2)){$query_video = $db->query($data_video1);$totaltv=$foundvideo1;}
		else {$query_video = $db->query($data_video);$totaltv=$foundvideo2;}	 
				
				$filter = "";	
				$katahelp = str_replace("-"," ",seo_title($katatv));
				$katahelp = filterkeywordhelp($katahelp);
				$pecahanhelp = explode(" ",$katahelp);
				
				foreach($pecahanhelp as $element){
					$filter .=" and (f.judul like '%".$element."%' or  f.deskripsi like '%".$element."%' or  
					f.link2 like '%".$element."%' or  c.header like '%".$element."%'  or  c.category like '%".$element."%' or  c.ketentuan like '%".$element."%' or  c.link like '%".$element."%' or  c.site_description like '%".$element."%' or  c.page_title like '%".$element."%')"; 
				}
				
				$filter2 ="and (f.judul like '%".$carrinya."%' or  f.deskripsi like '%".$carrinya."%' or  
				f.link2 like '%".$carrinya."%' or  c.header like '%".$carrinya."%'  or  c.category like '%".$carrinya."%' or  c.ketentuan like '%".$carrinya."%' or  c.link like '%".$carrinya."%' or  c.site_description like '%".$carrinya."%' or  c.page_title like '%".$carrinya."%')"; 

				$data_help = "SELECT 
					f.judul as judul,
					f.deskripsi as deskripsi,
					f.link2 as link2,
					c.page_title as title,
					c.site_description as descr,
					c.link as link,
					c.ketentuan as ketentuan,
					c.category as category,
					c.header as header
					from faq_category c 
					left outer join faq f 
					  on f.link = c.link 
					$filter
					order by f.id desc limit $page,10";
					
				$data_help2 = "SELECT 
					f.judul as judul,
					f.deskripsi as deskripsi,
					f.link2 as link2,
					c.page_title as title,
					c.site_description as descr,
					c.link as link,
					c.ketentuan as ketentuan,
					c.category as category,
					c.header as header
					from faq_category c 
					left outer join faq f 
					  on f.link=c.link 
					$filter2
					order by f.id desc limit $page,10";
					
			$found_help = $db->num_rows($data_help);
			$found_help2 = $db->num_rows($data_help2);
			
			if(($found_help2>=1)&&($found_help2<=$found_help)){$helpnya = $db->query($data_help2); $total_help = $found_help2;}
			else{$helpnya = $db->query($data_help); $total_help = $found_help;}
			
			$filter3 = "";	
			$kata2 = str_replace("-"," ",seo_title($carrinya));	
			$pecahan2 = explode(" ",$kata2);
			foreach($pecahan2 as $element2){ 
				$filter3 .="and (pages.title like '%".$element2."%' or  pages.content like '%".$element2."%' or  pages.link like '%".$element2."%')"; 
			}
			$data_pages = "SELECT pages.title as judul, pages.link as halamannya FROM pages 
			WHERE NOT EXISTS ( SELECT * FROM faq_category WHERE faq_category.link = pages.link ) AND
			NOT EXISTS ( SELECT * FROM produk WHERE produk.id_produk = pages.ideo) AND
			NOT EXISTS ( SELECT * FROM blockurl WHERE blockurl.link = pages.link) $filter3 AND 
			pages.link not like '%panduan-pelanggan%' and pages.link not like '%/1%' and pages.link not like '%/2%' and pages.link not like '%/3%' and 
			pages.link not like '%/4%' and pages.link not like '%/5%' and pages.link not like '%/6%' and pages.link not like '%/7%' and 
			pages.link not like '%/8%' and pages.link not like '%/9%' and pages.link not like '%/0%' and 
			pages.link not like '%$c_url%' and pages.link not like '%pjax%' and 
			pages.link not like '%pelanggan-setia%' and pages.link not like '%search%' 
			group by  pages.link order by pages.title desc limit $page,10";
			

			$found_pages = $db->num_rows($data_pages);
			$pages = $db->query($data_pages);
			
	$filter_kota1 = "";
	$filter_kota2 = "";
	$kata = $carrinya;
	$pecahan_kota = explode(" ", $kata);
	
	foreach($pecahan_kota as $element) {
		$filter_kota1 .=" and (p.name like '%".$element."%' or  r.name like '%".$element."%' or  d.name like '%".$element."%'  or  v.name like '%".$element."%')"; 
	}
	
	$data_kota1 = "SELECT p.name as provinsi, r.name as kota, d.name as kecamatan, v.name as desa from provinces p left outer join regencies r on p.id=r.province_id left outer join districts d on r.id=d.regency_id left outer join villages v on d.id=v.district_id where p.name !=''";
	
	$query_kota1 = "$filter_kota1 group by r.name  order by r.id desc limit $page,10";
	$query_kota3 = "group by r.name  order by r.foto desc limit $page,10";
	$data_kota = $data_kota1." ".$query_kota1;
	$data_kota3 = $data_kota1." ".$query_kota3;
	$found_kota = $db -> num_rows($data_kota);
	$found_kota4 = $db -> num_rows($data_kota);
	$kotanya = $db->query($data_kota);
	$kotanya4 = $db->query($data_kota3);

	if ($found_kota >= 1) {
		$query_kota = $kotanya;
		$total_kota = $found_kota;
	} else {
		$data_kota2 = $data_kota1." and p.name like '%".$element."%' ".$filter_kota1." ".$query_kota1;
		$found_kota3 = $db->num_rows($data_kota2);
		$kotanya = $db->query($data_kota2);
		if ($found_kota3 >= 1) {
			
			$query_kota = $kotanya;
			$total_kota = $found_kota3;
		} else {
			$query_kota = $kotanya4;
			$total_kota = $found_kota4;

		}
	}			
}
$no = 0; 
?>
<?php
if($_GET['catlist']){
?>
[
<?php if($found2>=1){ ?>
{
    "nama_tab":"Pencarian Produk",
    "linknya":"tab-1",
	"label":"Hasil Pencarian Produk : Paling Relevan",
	"hasil" : [
<?php 
	$total = $found2;
	$query_produk = $db->query($data_result2);
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;
		$brand=$row['brand'];
		$a_id =$row['id_produk']; 
		$judulnya=$row['nama_produk'];
		
		$fotonya=$c_url."/".$row['image_3'];
		$fotonya2=$row['image_3'];
		$category=$row['category'];
		
		$a_harga_lama = format_rupiah($row['harga_lama']);
		$a_harga_baru= format_rupiah($row['harga_baru']);
		$brandsnya=strtolower($brand);
		$brandsnya=str_replace(" ","",$brandsnya);
		$hot=$row['hot'];
		
		$linknya=$c_url."/produk/".$row['link'];
		$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");			
		$a_image_tiga_paket = webpimage($fotonya2,136,136);
?>
{
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "judulnya":"<?php echo $judulnya; ?>",
    "linknya":"<?php echo $linknya; ?>",
    "category":"<?php echo $category; ?>",	
    "a_harga_lama":"<?php echo $a_harga_lama; ?>",	
    "a_harga_baru":"<?php echo $a_harga_baru; ?>",	
    "total_review":"<?php echo $total_review; ?>"	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
	]
},
<?php } ?>
<?php if($found3 >=1){ ?>
{
    "nama_tab":"Pencarian Produk Lainnya",
    "linknya":"tab-2",
	"label":"Hasil Pencarian Produk Lainnya : "	,
	"hasil" : [

<?php 
	$query_produk = $db->query($data_result3);
	$total = $found3;
	$no = 0;
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;
		$brand=$row['brand'];
		$a_id =$row['id_produk']; 
		$judulnya=$row['nama_produk'];
		
		$fotonya=$c_url."/".$row['image_3'];
		$fotonya2=$row['image_3'];
		$category=$row['category'];
		
		$a_harga_lama = format_rupiah($row['harga_lama']);
		$a_harga_baru= format_rupiah($row['harga_baru']);
		$brandsnya=strtolower($brand);
		$brandsnya=str_replace(" ","",$brandsnya);
		$hot=$row['hot'];
		
		$linknya=$c_url."/produk/".$row['link'];
		$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");			
		$a_image_tiga_paket = webpimage($fotonya2,136,136);
?>
{
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "judulnya":"<?php echo $judulnya; ?>",
    "linknya":"<?php echo $linknya; ?>",
    "category":"<?php echo $category; ?>",	
    "a_harga_lama":"<?php echo $a_harga_lama; ?>",	
    "a_harga_baru":"<?php echo $a_harga_baru; ?>",	
    "total_review":"<?php echo $total_review; ?>"
}
<?php if($no != $found3 ){ echo ","; } ?>
<?php }  ?>	
	]	
},
<?php } ?>
<?php if($total_help >=1){ ?>
{
    "nama_tab":"Menu  Pelanggan",
    "linknya":"tab-3",
	"label":" Pelanggan :  "	,
	"hasil" : [
<?php 
	$no = 0;
	while ($datahelp = $helpnya->fetch_array(MYSQLI_BOTH)) {
		$link=strtolower($datahelp['link']);
		$link2=strtolower($datahelp['link2']);
		$judul=strtoupper(judul_faq($datahelp['judul']));
		
		if(($judul)!=null){$title=$judul;}
		else{$title=strtoupper(judul_faq($datahelp['title']));}
		
		$link1 = linkdaerah($link);
		$link2 = linkdaerah($link2);
		$carrinya = strtoupper($carrinya);
		
		$linktotal = "$c_url/panduan-pelanggan/$link1/$link2";
		$no++;		
?>
{
    "judulnya":" <?php echo $title; ?>",
    "linknya":"<?php echo $linktotal; ?>"
}
<?php if($no != $total_help ){ echo ","; } ?>
<?php }  ?>
	]	
},
<?php } ?>
<?php if($totaltv >=1){ ?>
{
    "nama_tab":"Video Tutorial",
    "linknya":"tab-4",
	"label": "Video Tutorial :  ",
	"hasil" : [
<?php 
	$total = $totaltv;
	while ($a_data_video = $query_video->fetch_array(MYSQLI_BOTH)) {  	
		$a_id_video = $a_data_video['id'];
		$a_judul_video = $a_data_video['title'];
		$a_link = strtolower(seo_title($a_judul_video));
		$a_image_tiga = $a_data_video['thumbnail'];
		$a_hits_video = $a_data_video['hits'];
		$link_gambar = $c_url."/tv/upload/videos/".$a_image_tiga;
		$link_gambar2 = "tv/upload/videos/".$a_image_tiga;
		$link_video = $c_url."/tv/video/".$a_id_video."/".$a_link;		
		$a_image_tiga_paket = webpimage($link_gambar2,136,136);

?>
{
    "judulnya":"<?php echo $a_judul_video; ?>",
    "linknya":"<?php echo $link_video; ?>",
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "viewer":"Sudah : <?php echo $a_hits_video; ?> Juta Kali Ditonton"
	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
	
	]			
},
<?php } ?>
{
    "nama_tab":"Lokasi Rekanan Teknisi",
    "linknya":"tab-5",
	"label": "Lokasi Terdekat : ",
	"hasil" : [
<?php 
	$no = 0;
	$total = $total_kota;
	while ($datakotanya = $query_kota->fetch_array(MYSQLI_BOTH)) {
		$no++;
		$nama_daerah=strtoupper($datakotanya['kota']);
		$desa=strtoupper($datakotanya['desa']);
		$linkdaerah = linkdaerah($nama_daerah);
		$carrinya = strtoupper($carrinya);
		$link_kota = "$c_url/jual-mesin-fotocopy-$linkdaerah";
?>
{
    "judulnya":"<?php echo $nama_daerah." - ".$desa; ?>",
    "linknya":"<?php echo $link_kota; ?>"
	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
	]		
}
<?php if($found_pages >=1){ ?>
,
{
    "nama_tab":"Pencarian Lainnya",
    "linknya":"tab-6",
	"label": "Pencarian Halaman : "	,
	"hasil" : [
<?php 
	$total = $found_pages;
	while ($datapages = $pages->fetch_array(MYSQLI_BOTH)) {
		$nama=strtoupper($datapages['judul']);
		$link=strtolower($datapages['halamannya']);
		$link = $c_url."/".$link;
		$carrinya = strtoupper($carrinya);
?>
{
    "judulnya":"<?php echo $nama; ?>",
    "linknya":"<?php echo $link; ?>"
	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
	]		
}
<?php } ?>
]
<?php	
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();

exit;
}
?>
<?php 
if ($type == 1){
	$total = $found2;
	$query_produk = $db->query($data_result2);
	if($found2 >= 1){
?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;
		$brand=$row['brand'];
		$a_id =$row['id_produk']; 
		$judulnya=$row['nama_produk'];
		
		$fotonya=$c_url."/".$row['image_3'];
		$fotonya2=$row['image_3'];
		$category=$row['category'];
		
		$a_harga_lama = format_rupiah($row['harga_lama']);
		$a_harga_baru= format_rupiah($row['harga_baru']);
		$brandsnya=strtolower($brand);
		$brandsnya=str_replace(" ","",$brandsnya);
		$hot=$row['hot'];
		
		$linknya=$c_url."/produk/".$row['link'];
		$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");			
		$a_image_tiga_paket = webpimage($fotonya2,136,136);
?>
{
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "judulnya":"<?php echo $judulnya; ?>",
    "linknya":"<?php echo $linknya; ?>",
    "category":"<?php echo $category; ?>",	
    "a_harga_lama":"<?php echo $a_harga_lama; ?>",	
    "a_harga_baru":"<?php echo $a_harga_baru; ?>",	
    "total_review":"<?php echo $total_review; ?>"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }} ?>

<?php 
if ($type == 2){
	$query_produk = $db->query($data_result3);
	$total = $found3;
	if($found3 >= 1){
?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;
		$brand=$row['brand'];
		$a_id =$row['id_produk']; 
		$judulnya=$row['nama_produk'];
		
		$fotonya=$c_url."/".$row['image_3'];
		$fotonya2=$row['image_3'];
		$category=$row['category'];
		
		$a_harga_lama = format_rupiah($row['harga_lama']);
		$a_harga_baru= format_rupiah($row['harga_baru']);
		$brandsnya=strtolower($brand);
		$brandsnya=str_replace(" ","",$brandsnya);
		$hot=$row['hot'];
		
		$linknya=$c_url."/produk/".$row['link'];
		$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");			
		$a_image_tiga_paket = webpimage($fotonya2,136,136);
?>
{
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "judulnya":"<?php echo $judulnya; ?>",
    "linknya":"<?php echo $linknya; ?>",
    "category":"<?php echo $category; ?>",	
    "a_harga_lama":"<?php echo $a_harga_lama; ?>",	
    "a_harga_baru":"<?php echo $a_harga_baru; ?>",	
    "total_review":"<?php echo $total_review; ?>"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }} ?>

<?php 
if ($type == 3){
	$query_produk = $db->query($data_result3);
	$total = $total_help;
	if(($found_help2>=1)||($found_help>=1)){
?>
[
<?php
	while ($datahelp = $helpnya->fetch_array(MYSQLI_BOTH)) {
		$link=strtolower($datahelp['link']);
		$link2=strtolower($datahelp['link2']);
		$judul=strtoupper(judul_faq($datahelp['judul']));
		
		if(($judul)!=null){$title=$judul;}
		else{$title=strtoupper(judul_faq($datahelp['title']));}
		
		$link1 = linkdaerah($link);
		$link2 = linkdaerah($link2);
		$carrinya = strtoupper($carrinya);
		
		$linktotal = "$c_url/panduan-pelanggan/$link1/$link2";
		$no++;		

?>
{
    "judulnya":" <?php echo $title; ?>",
    "linknya":"<?php echo $linktotal; ?>"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }} ?>

<?php 
if ($type == 4){
	$total = $totaltv;
	if(($totaltv>=1)){
?>
[
<?php
	while ($a_data_video = $query_video->fetch_array(MYSQLI_BOTH)) {  	
		$a_id_video = $a_data_video['id'];
		$a_judul_video = $a_data_video['title'];
		$a_link = strtolower(seo_title($a_judul_video));
		$a_image_tiga = $a_data_video['thumbnail'];
		$a_hits_video = $a_data_video['hits'];
		$link_gambar = $c_url."/tv/upload/videos/".$a_image_tiga;
		$link_gambar2 = "tv/upload/videos/".$a_image_tiga;
		$link_video = $c_url."/tv/video/".$a_id_video."/".$a_link;		
		$a_image_tiga_paket = webpimage($link_gambar2,136,136);		

?>
{
    "judulnya":"<?php echo $a_judul_video; ?>",
    "linknya":"<?php echo $link_video; ?>",
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "viewer":"Sudah : <?php echo $a_hits_video; ?> Juta Kali Ditonton"
	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }} ?>

<?php 
if ($type == 5){

	$total = $total_kota;
	if(($total_kota>=1)){
?>

[
<?php
	$no =0;
	
	while ($datakotanya = $query_kota->fetch_array(MYSQLI_BOTH)) {
		$no++;
		$nama_daerah=strtoupper($datakotanya['kota']);
		$desa=strtoupper($datakotanya['desa']);
		$linkdaerah = linkdaerah($nama_daerah);
		$carrinya = strtoupper($carrinya);
		$link_kota = "$c_url/jual-mesin-fotocopy-$linkdaerah";
?>
{
    "judulnya":"<?php echo $nama_daerah." - ".$desa; ?>",
    "linknya":"<?php echo $link_kota; ?>"
	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }} ?>

<?php 
if ($type == 6){
	$total = $found_pages;
	if(($found_pages>=1)){
?>

[
<?php
	while ($datapages = $pages->fetch_array(MYSQLI_BOTH)) {
		$nama=strtoupper($datapages['judul']);
		$link=strtolower($datapages['halamannya']);
		$link = $c_url."/".$link;
		$carrinya = strtoupper($carrinya);
?>
{
    "judulnya":"<?php echo $nama; ?>",
    "linknya":"<?php echo $link; ?>"
	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }} ?>
<?php
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();?>		