<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);

header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB .DS. 'cache.php');

if(isset($_GET['link'])){
	$link_article = $_GET['link'];
}

if(isset($_GET['page'])){$page = $_GET['page']; $page = ($page - 1) *10;}
else {$page = 0;}
$no = 0;
$sql   = ("SELECT * FROM produk LEFT JOIN ulasan ON produk.id_produk  = ulasan.pid where produk.link='$link_article' order by ulasan.tanggal limit $page,10");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);
if($total >= 1){

?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;   
		$a_id = $row['id_produk'];
		$tanggal= hari(date('D', strtotime($row['tanggal']))).", ".tgl_indo($row['tanggal']);
		$tanggal_reply= hari(date('D', strtotime($row['tanggal_reply']))).", ".tgl_indo($row['tanggal_reply']);
		$judul=$row['judul'];
		$nama = $row['nama'];
		$nama_produk = $row['nama_produk'];
		$inisial = strtoupper(substr($nama,0,2));
		$review = $row['review'];
		$reply = $row['reply'];
		
		if($reply==""){ $reply="Kepada, ".$nama.",<br>Kami senang mengetahui bahwa Anda sangat nyaman dan terkesan oleh ".$site_name.". Kami sangat mengharapkan kedatangan Anda kembali.<br>Salam Hangat,<br> Pengelola ".$site_name;}
?>
{
    "initial":"<?php echo $inisial; ?>",
    "judul":"<b><?php echo $judul; ?></b>",
    "nama":"<?php echo $nama; ?>",
    "nama_produk":"<?php echo $nama_produk; ?>",	
    "tanggal":"<?php echo $tanggal; ?>",	
    "text_review":"<?php echo $review; ?>",
	"isi_jawab":"<?php echo $reply; ?>",			
    "tanggal_reply":"<?php echo $tanggal_reply; ?>"	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }  ?>
<?php
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();?>		