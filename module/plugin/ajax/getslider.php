<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}

$no = 0;
$sql   = ("SELECT * FROM slider order by urutan desc limit 4");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);
if($total >= 1){

?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;   
		$image = $row['gb_web'];
		$gb_web = gallery_webpimage($image,1212,622,"slider");
		$image2 = $row['gb_mobile'];
		$gb_mobile = gallery_webpimage($image2,384,203,"slider");		
		$slide_link = $c_url."/".$row['slide_link'];
		$title = $row['title'];
		$caption = $row['caption'];
?>
{
    "gb_web":"<?php echo $gb_web; ?>",
	"gb_mobile":"<?php echo $gb_mobile; ?>",
    "slide_link":"<?php echo $slide_link; ?>",	
	"title":"<?php echo $title; ?>",		
	"caption":"<?php echo $caption; ?>"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php } 
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();