<div class="container-fluid container-full pt51 hala">
	<amp-img width="334" height="186" src="<?php echo $gb_match;?>" layout="responsive"></amp-img>	
	
	<div class="halb hala">
	<?php foreach ($konten as $obj_key =>$book) { ?>
		<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS"><?php echo strtoupper($obj_key." - ".$kota);?>  !! </div></div>
	<?php

		foreach ($book as $key=>$value){
		$queryproduk1	= "select * from produk where $value order by $urutanya";
	?>	
	<amp-carousel class="blog-carousel slidecar" layout="fixed-height" height=330>				
	<?php 	$query_p = $db->query($queryproduk1); while ($a_data = $query_p->fetch_array(MYSQLI_BOTH)) { ?>

	<?php 	
			$a_brand = $a_data['brand']; 
			$a_brands=strtolower($a_brand);
			$a_brands=str_replace(" ","",$a_brands);

			$a_link = $a_data['link'];
			$a_id = $a_data['id_produk'];
			$a_nama_produk = "Jual Mesin Fotocopy ".$a_data['nama_produk']." daerah ".kota($kota);
			$a_category = $a_data['category'];
			$a_image_tiga = $a_data['image_3'];
			$image34 = str_replace('.png', '', $a_image_tiga);
			$image34 = str_replace('.jpg', '', $a_image_tiga); 	
			$image36 = $c_url."/".$image34.".webp";
			
			if (file_exists($image36)){ $image34=$image36;}
			else {
				$result = $ImgCompressor->run($a_image_tiga, 'jpg', 5);  
				$image35 = $result['gb'];$images = $result['mini'];
				$results2 = $ImgCompressor->mini($images,$image35, 198, 198,'mini_');  
				$image34 = str_replace('.png', '', 'mini_'.$image35);
				$image34 = str_replace('.jpg', '', $image34); 								
				$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
				$image34=$c_url."/compressed/".$image34;
			}
			
			$a_deskripsi_a = $a_data['deskripsi_a'];
			$a_harga_lama = $a_data['harga_lama'];
			$a_harga_baru = ($a_data['harga_baru']+$tarif_ongkir);
			$stok2=int($a_nama_produk); 
			$stok2 = substr($stok2,3); 
			$stok=int((22-date("d"))+$stok2); 
			
			if($stok>=0){ $stok=$stok." Unit"; } else {$stok="1 Unit";} 
			if(isset($plusharga)){$a_harga_baru =$a_harga_baru+(($plusharga/100)*$a_harga_baru );}
			$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));	$c=10;	
			
			$total_ulpp = $db->num_rows("select *  from ulasan where  pid ='".$a_id."'");
			if($total_ulpp>=1){	$rate = 5; $kurangnya=0;} 
			else{$rate = 0; $kurangnya=5;} 	
		?>				
					<div class="capronego blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>																											
						<div class="infopro">
						<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="capronego">
							<h5 class="text-left margin-0"><b><?PHP echo $a_nama_produk; ?></b></h5>
								<div class="pricepro">
									<a class="vendor-info-text-new ng-binding">Penawaran Harga + Ongkir  </a>
								</div>
								<div class="divDetailProductItemPrice">Rp <?php echo format_rupiah(($a_harga_baru)); ?></div>
								<div class="recommendedItemDiscountPercentage">- <?php echo format_rupiah($c); ?>% </div>		
							<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'"); if($total_review>2){?>
							<div class="pt20 rating">
								<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
								<span > ( <?php echo $total_review; ?> Ulasan ) </span>
							</div>
							<?php } else { ?> 
							<div class="pt20 rating">
								<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
								<span > ( 0 Ulasan ) </span>
							</div>							
							<?php } ?>
						</a>	
<?php 	$sms_nego ="sms:".$telponya."?body=Pak, Saya Mau Sewa Mesin Fotocopynya yang ".$a_nama_produk.". Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A";?>						
							<div class="pt20 mt30">
								<a href="<?php echo $sms_nego;?>" class="button button-small  primary-bg light-color" >Nego</a>			
								<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="button button-small  primary-bg light-color" >Info</a>
							</div>
							<div class="kanwil"><span class="primary-color"> Daerah : <?php echo ucwords($kota); ?></span></div>
						</div>
					</div>					
		<?php }?>
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->	
		<?php }?>		
				</div>
		<?php }?>			
	</div><!-- SLIDER ENDS -->
	
	<div class="pekat2 container-fluid">		
		<div class="row social">
			<div class="space-2"></div>
			<div class="col-xs-12 ">
				<div class="col-xs-3 primary-color pt20 padding-left-0 padding-right-0">
					<b>Bagikan !!</b>
				</div>
				<div class="col-xs-9 margin-bottom-0 padding-left-0 padding-right-0">
					<a href="https://facebook.com/sharer/sharer.php?u=<?php echo $app->CURRENT_URL(); ?>" target="_blank">
						<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/fb.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</a>
					<a target="_blank" href="https://twitter.com/share?url=<?php echo $app->CURRENT_URL(); ?>&text=<?php echo $page_title." - ".$c_title ?>&via=<?php echo $c_title ?>">
						<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/twit.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</a>
					<a target="_blank" href="https://plus.google.com/share?url=<?php echo $app->CURRENT_URL(); ?>">
						<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/gp.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</a>
					<a target="_blank" href="whatsapp://send?text=<?php echo $page_title." - ".$c_title ?>.&#10; %0AKunjungi : <?php echo $app->CURRENT_URL(); ?>">
						<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/wa3.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</a>
					<a target="_top" href="http://line.me/R/msg/text/?<?php echo $page_title." - ".$c_title ?>-%20Harga%20Terbaik%20%0D%0A<?php echo $app->CURRENT_URL(); ?>">
						<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/line.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</a>
				</div>		
			</div>
		</div>
	</div>			
				<div class="left left2">
					<div class="rfq-description-container">
						<div class="rfq-header-home">
							<div class="sprite-a rfq-logo-home"></div>
							<div class="rfq-title">Bingung Mau Beli Mesin Fotocopy ?? </div>
						</div>
					</div>
				</div>	
				<amp-youtube width="480"
				  height="270"
				  layout="responsive"
				  data-videoid="YGy2k8xn6ck"
				  autoplay >
				</amp-youtube>				
			
		<!-- BONES-PRODUCT-GRID AND BONES-PRODUCT-LIST-ITEM STARTS -->	
		<div id="meshSection1" class="meshSection">
			<div class="meshTitle">
				<div class="meshTitleVanectro"> Dealer Resmi Mesin Fotocopy <br><b>Canon & Fuji Xerox</b> !!</div>
			</div>
			<br>
			<div class="home__slogan__list">
				<div class="home__slogan__title">
					<div class="home__slogan__name">Dijamin Mesin Fotocopy 100% Original</div>
				</div>
				<div class="home__slogan__desc">
					Iming iming mesin fotocopy harga murah. Tapi menyesal di belakang karena mesin fotocopynya bermasalah dan tidak ada Pertanggung Jawaban. 
					Pastikan mesin fotocopymu bergaransi resmi lebih dari 1 tahun di seluruh Indonesia. Jangan sampai salah pilih yang cuma bisa memberi janji !! 
					Mau menyesal karena sudah membuang banyak uang untuk Mesin Fotocopy yang Tidak Jelas ?? 
				</div>			
			</div>
			<div class="home__slogan__list">
				<div class="home__slogan__title">
					<div class="home__slogan__name">Garansi Purna Jual Memuaskan</div>
				</div>
				<div class="home__slogan__desc">
					Beli mesin fotocopy setelah itu bingung dengan purna jualnya? Seller sebelumnya lepas tangan padahal harga mahal? 
					Di <?php echo $site_name;?> DIJAMIN After Sales Service memuaskan, Tersedia Ribuan Service Center se-Indonesia, 
					100% Uang Kembali jika Mesin Fotocopy Bermasalah. Pastikan Penjual yang Terpercaya dan Punya Kantor Cabang di Kotamu. 
					Gratiss Tukar dengan unit baru lainya. Ribuan pelanggan puas dengan pelayanan Kami. Sekarang giliranmu untuk membuktikanya.
				</div>			
			</div>	
			<div class="space-2"></div>
		</div>
	<div class="pekat container-fluid margin-bottom-0">		
		<div class="row">
			<div class="subkebutuhan col-xs-12">
	
									<div id="landing" class="col-md-12">
										<?php 
										
										$idprov = $db2->query("SELECT * FROM regencies where id='".$nama_kotaid."'");
										$idprov2 = $idprov->fetch(PDO::FETCH_ASSOC);
										$idprovinsi=$idprov2['province_id'];
										$idkota=$idprov2['id'];
										
										$minkota=$nama_kotaid-150;
										$maxkota=$nama_kotaid+150;
										
										$prov = $db2->query("SELECT * FROM provinces where id >=$idprovinsi order by id asc limit 4");
										while ($dataprov = $prov->fetch(PDO::FETCH_ASSOC)) { $provinsi_id = $dataprov['id'];$provinsi_nama = $dataprov['name'];$provinsi_url=strtolower(str_replace(" ","-",$provinsi_nama));
										?><br>	
										<div>	
											<div class="new-product-title Mesin_Fotocopy_Paling_LARIS"><a href="<?php echo $c_url."/jual-mesin-fotocopy-".$provinsi_url;?>" target="_self">KANTOR CABANG DI DAERAH <?php echo $provinsi_nama;?></div>
											<hr>
											<div id="jakarta_area_collapse" class="div-collapse">
											<?php 	
											if($provinsi_id==$idprovinsi){$q_kota =("SELECT * FROM regencies where province_id ='$provinsi_id' and (id BETWEEN ".$minkota." AND ".$maxkota.") order by name desc limit 10");} 
											else {$q_kota =("SELECT * FROM regencies where province_id ='$provinsi_id' order by name desc limit 10");} 
											$list_kota = $db2->query($q_kota);
											while ( $rowkota = $list_kota->fetch(PDO::FETCH_ASSOC)) {$kota_url=strtolower(str_replace(" ","-",$rowkota['name']));?>
												<div><a href="<?php echo $c_url."/jual-mesin-fotocopy-".$kota_url;?>" target="_self"><span class="urllandingArea urlactive"><?php echo $rowkota['name'];?></span></a></div>
											<?php } ?>
											</div> 
										</div>
										<?php  } ?>							
										<div class="col-xs-12"></div>
									</div>					
									
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
			<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Video <span class="brush" >TUTORIAL</span> <?php echo $site_name;?> !! </div>
				<amp-carousel class="blog-carousel" layout="fixed-height" height=205>
<?php
$sql = "SELECT * FROM videos order by videos.id desc limit 6";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_BOTH)) {

		$a_id=$row['id'];
		$a_thumbnail=$row['thumbnail'];
		$a_title=$row['title'];
		$a_hits=$row['hits'];
		$a_day=$row['day'];
		$a_month=$row['month'];
		$a_year=$row['year'];
		$a_tanggal=$a_day."/".$a_month."/".$a_year;
		$link = strtolower($a_title);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('  ', '', $link);
		$link = str_replace('   ', '', $link);
		$link = str_replace('.', '-', $link);	
		$link = replace_character($link);
 ?>	
										
					<a href="<?php echo "$c_url/tv/video/$a_id";?>" class="capro2 capro24 tvlayer blog-carousel-item">
						<amp-img width="150" height="190" src="<?php echo "$c_url/tv/upload/videos/$a_thumbnail"; ?>" layout="responsive" alt="<?php echo $a_title;?>" ></amp-img>																																
						<div class="infopro2 blog-carousel-item-caption">
							<h5 class="margin-0"><?php echo $a_title;?> </h5>
							<small><?php echo $a_tanggal;?>  -  Lihat Videonya <i class="fa fa-arrow-right"></i></small>
						</div>
					</a>
<?php }} ?>					
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
			</div>
		</div><!-- COL-XS-12 ENDS -->					
	</div>	