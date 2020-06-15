<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB .DS. 'cache.php');

$no = 0;
$sql   = ("SELECT * FROM category_list order by category_urutan desc limit 4");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);
if($total >= 1){

?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;   
		$category_link = $row['category_link'];
		$category_name = $row['category_name'];
		$category_id = $row['category_id'];
		
		$data_produk_paket = ("select *  from produk where category='$category_id' ORDER BY produk.rekomendasi DESC, produk.harga_baru ASC limit 8"); 
		$urutan_paket=0;
		$result_paket = $db->query($data_produk_paket);
		$total_paket = $db->num_rows($data_produk_paket);
		$category_image = $row['category_image'];
		$category_image = gallery_webpimage($category_image,480,320,"gallery_detail");	
		
?>
{
	"category_image" : "<?php echo $category_image; ?>",
    "category_link":"<?php echo $c_url."/category/".$category_link; ?>",
	"category_name":"<?php echo $category_name; ?>",
    "catdi":"<?php echo $category_id; ?>"
	<?php if($total_paket >= 1){ ?>
	, "hasil":
	[
	<?php 
		
		while ($a_data_paket = $result_paket->fetch_array(MYSQLI_BOTH)) {
			$a_link_paket = $a_data_paket['link'];
			$a_id_paket = $a_data_paket['id_produk'];
			$a_id = $a_id_paket;
			
			$a_nama_produk = $a_data_paket['nama_produk'];
			$urutan_paket++;
			
			$a_brand_paket = $a_data_paket['brand'];
			$a_foto_mini = $a_data_paket['foto_mini'];
			$a_link = $a_data_paket['link'];
			$a_harga_lama_paket = $a_data_paket['harga_lama'];
			$a_harga_baru_paket = $a_data_paket['harga_baru'];
			$a_brands = strtolower($a_brand_paket);
			
			if($a_harga_lama_paket == 0){$a_harga_lama_paket=$a_harga_baru_paket*2;}
			if($a_harga_baru_paket !=0){$a=$a_harga_lama_paket;$b=($a_harga_baru_paket);
			$c=(($a-$b)/($a/100));}
			
			$foto_mini = explode("<br>",$a_foto_mini);
			$foto_mini = gallery_webpimage($foto_mini[0],170,150,"gallery_detail");	
			
			$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");	
	?>	
	{ 
		"nsb" : "<?php echo $a_id;?>",
		"link" : "<?php echo $c_url."/produk/".$a_link;?>",
		"foto_mini" : "<?php echo ($foto_mini);?>",
		"nama_produk" : "<?php echo strtoupper($a_nama_produk);?>",
		"category_name" : "<?php echo strtoupper($category_name);?>",
		"harga_lama" : "Rp <?php echo format_rupiah($a_harga_lama_paket);?>",
		"harga_baru" : "Rp <?php echo format_rupiah($a_harga_baru_paket);?>",
		"total_review" : "(<?php echo format_rupiah($total_review);?> Ulasan)"
	}<?php if($urutan_paket != $total_paket ){ echo ","; } ?>
	<?php } ?>
	]
	<?php } ?>	
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php } 
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();
