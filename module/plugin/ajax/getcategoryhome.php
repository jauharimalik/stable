<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB .DS. 'cache.php');

$no = 0;
$no2 = 0;
$slideke = 0;
$sql   = ("SELECT * FROM category_list where category_urutan >=1 order by category_urutan ASC limit 4");
$sql1   = ("SELECT * FROM gallery where categoryid >=1 order by urutan ASC");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);
$total1 = $db->num_rows($sql1);
if($total >= 1){

?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++; $slideke++;  
		$category_link1 = $c_url."/layanan/".$row['category_link'];
		$category_id = $row['category_id'];
		$category_name = $row['category_name'];
		$video_deskripsi = $row['video_deskripsi'];
		$video_deskripsi = str_replace('"',"'",$video_deskripsi);
		$category_link2 = $row['category_link'];
		
		if($slideke%2==0){ $type=2;} else {$type=1;}
		$sql1 = ("SELECT * FROM gallery where gallery.categoryid=$category_id order by urutan ASC");
		$query_produk1 = $db->query($sql1);
		$total2 = $db->num_rows($sql1);
?>
{
    "category_link1":"<?php echo $category_link1; ?>",	
    "category_link2":"<?php echo $category_link2; ?>",		
	"category_name":"<?php echo $category_name; ?>",	
	"slideke":"<?php echo $slideke; ?>",
	"type":"<?php echo $type; ?>",
	"video_deskripsi":"<?php echo $video_deskripsi; ?>"
	<?php if($total1 >= 1){ ?>,
	"gambar" :[
	<?php 
		while ($row2 = $query_produk1->fetch_array(MYSQLI_BOTH)) { 
			$no2++; 
			$image = $row2['image']; 
			$fotonya2 = gallery_webpimage($image,505,350,"cat");
			if($no2==1){$addclass="showing";} else {$addclass="notshow";}
	?>
	{
		"addclass" : "<?php echo $addclass;?>",
		"caption" : "<?php echo $row2['caption'];?>",
		"image":"<?php echo $fotonya2; ?>"
	}<?php if($no2 != $total2 ){ echo ","; } ?>
	<?php } $no2=0; ?>
	]
	<?php } ?>
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php } 