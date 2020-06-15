<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);

header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB .DS. 'cache.php');

if(isset($_GET['link'])){
	$link_article = $_GET['link'];
	$query = "and (produk.link='$link_article' or category_list.category_link='$link_article')";
} 

if(isset($_GET['page'])){$page = $_GET['page']; $page = ($page - 1) *10;}
else {$page = 0;}

$no = 0;
$sql   = ("SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id LEFT JOIN gallery  ON produk.id_produk  = gallery.produkid where image!='' $query order by gallery.date limit $page,10");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);
if($total >= 1){

?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;   
		$a_id = $row['id_produk'];
		$image = $row['image'];
		$fotonya2 = gallery_webpimage($image,278,230,"gallery_detail");
		$caption = $row['caption'];
		$tag = $row['tag'];		
		$date= hari(date('D', strtotime($row['date']))).", ".tgl_indo($row['date']);
?>
{
    "fotonya2":"<?php echo $fotonya2; ?>",
    "caption":"<?php echo $caption; ?>",	
    "date":"<?php echo $date; ?>"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php }  ?>