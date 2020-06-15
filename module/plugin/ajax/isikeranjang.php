<?php 
if(isset($_SESSION['cart'])){
	$max = count($_SESSION['cart']);
	$total2=0;
	for ($i=0; $i<$max; $i++) {
		$pid = $_SESSION['cart'][$i]['produkid'];
		$q = $_SESSION['cart'][$i]['qty'];
		$harga = $_SESSION['cart'][$i]['harga'];
		$subtotal2 = $_SESSION['subtotal'];
		
		$data_produk = ("select *  from produk where id_produk = '".$pid."'");
		$result2 = $db->fetch_multiple($data_produk);
		foreach ($result2 as $data) {
			$total 		=  $q * $harga;
			$total2 	+= $total;
			$a_brand 	=  $data['brand'];
			$idproduk 	=  $data['id_produk']; 
			$gambar 	=  $data['foto_mini']; 
			$gambar = explode("<br>",$gambar);
			$gambar = gallery_webpimage($gambar[0],278,230,"produk");
			
			$nama_seo 	= $data['nama_produk'];
			$ppn 		= ($total2*(10/100));	
			$subtotal 	= $total2+$ppn;	
?>
	
		<div id="item<?php echo $idproduk;?>_keranjang"  class="horizontal">
			<div class="produkcart">
				<div class="gbimg" style="background-image:url('<?php echo $gambar; ?>');"></div>
				<div class="produkcart_detail">
					<div class="judulproduk"><?php echo $nama_seo; ?></div>
					<div class="hargacart"> Rp <?php echo format_rupiah($total); ?> </div>
				</div>
			</div>
			<div class="Button__number"><button onclick='minusitem(&apos;item<?php echo $idproduk;?>&apos;)' type="button" class="button_qty"> - </button><div id="item<?php echo $idproduk;?>_quantitykeranjang"  class="qty_value"> <?php echo $q; ?></div><button onclick='plusitem(&apos;item<?php echo $idproduk;?>&apos;)'  type="button" class="button_qty"> +</button></div>
		</div>
<?php
		}
	} 
}
?>

