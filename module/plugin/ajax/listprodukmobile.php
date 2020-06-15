<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);

header('Content-Type: application/json');
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}

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
else {$q_sort = " harga_baru desc";}

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

$no = 0; 
$sql   = ("SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id where harga_baru >= 100 $q_category $q_brand $q_hot $q_minharga $q_maxharga $q_paket $q_sewa order by $q_sort limit $page,10");
$query_produk = $db->query($sql);
$total = $db->num_rows($sql);
if($total >= 1){

?>
[
<?php
	while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) { 
		$no++;
		$brand=$row['brand'];
		$a_id =$row['id_produk']; 
		$judulnya=$row['nama_produk'];
		
		$fotonya2=$row['foto_mini'];
		$foto = explode("<br>",$fotonya2);
		$category=$row['category_name'];
		
		$a_harga_lama = format_rupiah($row['harga_lama']);
		$a_harga_baru= format_rupiah($row['harga_baru']);
		
		$linknya=$c_url."/produk/".$row['link'];
		$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");			
		$a_image_tiga_paket = gallery_webpimage($foto[0],278,230,"produk");
		
?>
{
    "fotonya":"<?php echo $a_image_tiga_paket; ?>",
    "judulnya":"<?php echo $judulnya; ?>",
	"nsb":"<?php echo $a_id; ?>",
	"status":"oke",
    "linknya":"<?php echo $linknya; ?>",
    "category":"<?php echo $category; ?>",	
    "a_harga_lama":"<?php echo $a_harga_lama; ?>",	
    "a_harga_baru":"<?php echo $a_harga_baru; ?>",	
    "total_review":" ( <?php echo $total_review; ?> Ulasan )"
}
<?php if($no != $total ){ echo ","; } ?>
<?php }  ?>
]
<?php } else { echo '[{"status":""}]';} ?>