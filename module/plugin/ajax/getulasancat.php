<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);

header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB .DS. 'cache.php');


if(isset($_GET['urlnya'])){
	$urlnya = strtolower($_GET['urlnya']);
	if($urlnya != "home" && $urlnya != "" ){ $query = "and (produk.link='$urlnya' or category_list.category_link='$urlnya')"; }
	else {$query = "";} 
} else { $query = ""; }

$no = 0;
$sql = ("SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id LEFT JOIN aktivitas_pelanggan ON produk.id_produk  = aktivitas_pelanggan.id_produk where aktivitas_pelanggan.link!='' $query  order by aktivitas_pelanggan.tanggal DESC limit 10");
$sql2 = ("SELECT * FROM category_list where category_list.category_link ='$urlnya' order by category_list.category_id  DESC limit 1");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);

$data = $db->fetch($sql2); 
if(isset($data['category_name'])){$category_name= $data['category_name']." di ".$site_name;	}
else{ $category_name= $site_name;	}
	
if($total >= 1){

?>
[{
	"nama_wisata" : "<?php echo ucwords($category_name); ?>",
	"hasil" : [
<?php
	while ($a_data = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;   
		$a_id = $a_data['id'];
		$nama = $a_data['nama'];
		$lokasi =substr( $a_data['lokasi'], 0, 25);
		$a_image_tiga = $a_data['photosmall'];
		$nama_produk =  $a_data['nama_produk'];
		$link = $c_url.'/review/kunjungan-wisata-'.$a_data['link'];
		$tanggal= hari(date('D', strtotime($a_data['tanggal']))).", ".tgl_indo($a_data['tanggal']);
		$fotonya2 = "cdn/images/$a_image_tiga";
		$photosmall= gallery_webpimage($fotonya2,288,162,"review");
?>

{
    "link":"<?php echo $link; ?>",
    "nama_produk":"<?php echo $nama_produk; ?>",	
    "photosmall":"<?php echo $photosmall; ?>",	
    "nama":"<?php echo $nama; ?>",	
    "lokasi":"<?php echo $lokasi; ?>",		
    "tanggal":"<?php echo $tanggal; ?>"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>]
}]
<?php }
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();