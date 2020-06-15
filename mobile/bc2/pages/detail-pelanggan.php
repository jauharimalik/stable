<?php $idp=$data_a['id_produk']; ?>
    <div class="container-fluid container-full pt51">
		<amp-carousel class="collapsible-captions"
		  height="300"
		  layout="fixed-height"
		  type="slides">
		  <figure>
			<div class="fixed-height-container">
				<amp-img layout="fill" src="<?php echo $c_cdn_img."/".$a_foto1;?>"></amp-img>
				<amp-image-lightbox id="lightbox1" layout="nodisplay"></amp-image-lightbox>
			</div>
		  </figure>
		  
		</amp-carousel>	
		
		<div class="pekat2">		
		<div class="dp__tab__content__row">
			<div class="dp__tab__content__col">
				<table> 			
					<tbody> 			
						<tr><td class="dp__tab__content__label"> NAMA </td><td>: </td><td class="dp__tab__content__content"> <?php echo $a_nama; ?></td></tr> 						
						<tr><td class="dp__tab__content__label"> KOTA </td><td>: </td><td class="dp__tab__content__content"> <?php echo $a_lokasi; ?></td></tr>
						<tr><td class="dp__tab__content__label"> TANGGAL </td><td> : </td><td class="dp__tab__content__content"> <?php echo date('d/m/Y', strtotime($a_tanggal)); ?></td></tr>
						<tr><td class="dp__tab__content__label"> TIPE </td><td> : </td><td class="dp__tab__content__content"> <?php echo $a_tipemesin; ?></td></tr>
					</tbody> 			
				</table>			
			</div>
		</div>
		<div class=" rate rating">
			<section class="rating__aggregate rating__color--5">
			<div class="rating__aggregate__score">5 / 5</div> 
				<article class="rating__stars">
					<?php for($i=0;$i<5;$i++){ ?><i class="mi mi-24">star</i><?php } ?>
				</article>
			</section> 
		</div>		
		</div>
	</div><!-- SLIDER ENDS -->
	<div class="container-fluid">
		<div class="inneronecolumn left artikelpilihan">
			<h2> Rekomendasi banget dari <?php echo $a_lokasi; ?></h2>
			<div class="hr"></div>
			<p><b><a class="small"><?php echo date('d/m/Y', strtotime($a_tanggal)); ?> - Diulas oleh : <?php echo $a_nama; ?></a></b> 
			<br><?php if(isset($komentar)){echo $komentar;}?>.</p>
		</div>	
		<div align="center">
		<?php 			
			$query = ("SELECT * FROM produk where id_produk = '".$idp."'");$hasil = $db->query($query);
			while ($row = $hasil->fetch_array(MYSQLI_BOTH)) { $a_brands2=$row['brand']; $links2=$row['link'];  if($a_brands2=='Canon'){$brandnya='canon';} else {$brandnya='fujixerox';}} 
		?>		
			<a href="<?php echo $c_url."/".$brandnya."-".$links2;?>" class="button chat2 primary-bg light-color margin-left-0">Lihat Produk</a>
			<a href="<?php echo $c_cdn_img."/".$a_foto1;?>" class="button chat2 primary-bg light-color margin-left-0">Lihat Foto Asli</a>
		</div>	
	</div>
	<div class="space-2"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
			<div class="new-product-title Mesin_Fotocopy_Paling_LARIS"><span class="brush" >PELANGGAN !!</span> <?php echo $a_tipemesin; ?></div>
				<amp-carousel class="blog-carousel" layout="fixed-height" height=165>
						<?php 	$data_produk = ("select *  from produk  LEFT JOIN aktivitas_pelanggan ON aktivitas_pelanggan.id_produk = produk.id_produk WHERE aktivitas_pelanggan.tipemesin like '%$a_tipemesin%' or aktivitas_pelanggan.tipemesin like '%$brandnya%' ORDER BY aktivitas_pelanggan.tanggal DESC LIMIT 6"); ?>
						<?php
						$result = $db->query($data_produk);
						while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {	
						$rate =$a_data['rating']; $tanggal =$a_data['tanggal']; $namapel=$a_data['nama']; $namapel = str_replace(' ', '.', $namapel); $namapel = str_replace('..', '.', $namapel); $namapel = str_replace('...', '.', $namapel); $emailpel=strtolower($namapel); ?>									
					<a href="<?php echo $c_url."/pembeli-".$a_data['link']; ?>" class="capro2 capro24 tvlayer blog-carousel-item">
		<div class="fixed-container">
			<amp-img src="<?php echo $c_cdn_img."/".$a_data['foto']; ?>" class="contain hauto" layout="fill"></amp-img>
		</div>						
						<div class="infopro2 blog-carousel-item-caption">
							<h5 class="margin-0">Pengiriman <?php echo ucwords($a_data['lokasi']); ?></h5>
							<small><?php for($i=0;$i<5;$i++) { ?><i  class="fa fa-star rating"  title="<?php echo $rate;?>"></i><?php }?> -  <?php echo date('d/m/Y', strtotime($a_data['tanggal']))." - ".ucwords($namapel);?></small>	
						</div>
					</a>
<?php } ?>					
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
			</div>
		</div><!-- COL-XS-12 ENDS -->					
	</div>	
	<div class="container-fluid">			
		<div align="center">
			<a href="<?php echo $c_url;?>/pelanggan-setia" class="button chat2 primary-bg light-color margin-left-0">Lihat Semua Pelanggan</a>
		</div>	
	</div>