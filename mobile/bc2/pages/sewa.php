	<div class="container-fluid container-full pt51">
	<amp-img width="720" height="400" src="<?PHP echo $c_cdn; ?>/new/images/sewa-mesin-fotocopy-mobile.jpg" layout="responsive"></amp-img>	
				<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">SEWA MESIN FOTOCOPY <span class="brush" >JABODETABEK</span>  !! </div></div>
				<amp-carousel class="blog-carousel slidecar" layout="fixed-height" height=330>
							<?php 	$data_produk = ("select *  from produk where hot like '%sewa%' ORDER BY produk.harga_baru ASC");$query_p = $db->query($data_produk); $totalrate23=0; $totalpembeli=0;	?>
							<?php
							$result = $db->query($data_produk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_id = $a_data['id_produk'];
							$info_paket=$a_data['infopaket'];
							$a_nama_produk = strtoupper($a_data['nama_produk']);
							$a_category = $a_data['category'];
							$urutan++;
							$a_brand = $a_data['brand'];
							$a_special = $a_data['special'];
							$a_image_satu = $a_data['image_satu'];
							$a_image_dua = $a_data['image_dua'];
							$a_image_tiga = $a_data['image_satu'];
							$a_hot = $a_data['hot'];
							$a_deskripsi_a = $a_data['deskripsi_a'];
							$a_harga_lama = $a_data['harga_lama'];
							$a_harga_baru = $a_data['harga_baru'];
							$a_rekomendasi = $a_data['rekomendasi'];
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
							$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));
							?>				
					<div class="capronego blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>																											
						<div class="infopro">
						<a href="<?php echo "$c_url/sewa-mesin-fotocopy-$a_brands-$a_link";?>" class="capronego">
							<h5 class="text-left margin-0"><b><?PHP echo $a_nama_produk; ?></b></h5>
								<div class="pricepro">
									<a class="vendor-info-text-new ng-binding">Biaya Per Bulan </a>
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
<?php 	$sms_nego ="sms:".$hptelp_tekhnisi."?body=Pak, Saya Mau Sewa Mesin Fotocopynya yang ".$a_nama_produk.". Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A";?>						
							<div class="pt20 mt30">
								<a href="<?php echo $sms_nego;?>" class="button button-small  primary-bg light-color" >Nego</a>			
								<a href="<?php echo "$c_url/sewa-mesin-fotocopy-$a_brands-$a_link";?>" class="button button-small  primary-bg light-color" >Info</a>
							</div>
							<div class="kanwil"><span class="primary-color"> Daerah : <?php echo ucwords($query['city']); ?></span></div>
						</div>
					</div>					
					<?php } ?>
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->	
				<div class="left">
                    <div class="rfq-description-container">
                        <div class="rfq-description">
							<div class="time-line-item"><h2>Support Teknisi Profesional Untuk Kantormu</h2><p><small><b>Sewa Mesin Fotocopy Jakarta, Bogor, Depok, Tangerang, Bekasi, Karawang, Cikarang. Teknisi khusus untuk 1 Kantor Pengguna jasa sewa mesin fotocopy, dan bebas memilih teknisi lain apabila pelanggan tidak puas dengan pelayanannya </b></small></p></div>
							<div class="time-line-item"><h2>Penanganan Mesin Fotocopy 1 Jam Maximal</h2><p><small><b>Mesin fotocopy yang mengalami kerusakan parah sekalipun mesinnya akan diganti dengan unit yang baru lagi. Jangan Khawatir apabila mesin rusak parah sekalipun. Gratiss biaya apapun dalam perawatanya. </b></small></p></div>
							<div class="time-line-item"><h2>Sewa Mesin Fotocopy Murah - Mulai Rp 600.000</h2><p><small><b>Harga yang ditawarkan pun juga bermacam macam, sama sekali tidak akan memberatkan Kantor Pengguna jasa Sewa Mesin Fotocopy. Harga tersebut untuk pembayaran bulanan, dan minimal kontrak 1 Tahun. </b></small></p><br><br>			
							<center><a <?php echo "href='whatsapp://send?phone=".$hptelp_tekhnisi."&text= Selamat Pagi. Mas ".$marketing_tekhnisi.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="button primary-bg light-color"><i class="fa fa-credit-cart"></i> Permintaan Sewa Mesin Fotocopy </a></center>
			<div class="space-2"></div></div>
						</div>
                    </div>
                </div>	
	</div><!-- SLIDER ENDS -->
	<amp-accordion>
		<section>
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Keunggulan Sewa di <?php echo $site_name;?>!! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
             <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
<div id="ctl00_cphContent_divContent" class="padding">
<p class="MsoNormal"><b class="">Alasan Memilih Sewa di Tempat Kami :</b></p>
<ol>
<li class="">Siap menjamin kualitas mesin fotocopynya bisa beroperasi Normal</li>
<li>Gratis Service + Sparepart + Toner selama sewa di tempat kami</li>
<li>Gratiss Pelatihan Penggunaan, Instalasi awal</li>
<li>Penanganan Kerusakan cepat dan tepat</li>
<li>Harga sewa yang bisa menyesuaikan Kemampuan Pelanggan</li>
<li>Kami siap mengganti mesin fotocopy yang rusak parah dengan Mesin Baru</li>
<li>Siap memenuhi tuntutan jaman, dan kebutuhan pelanggan</li>
<li>Syaratnya cuma KTP + Lokasi Asli Pelanggan</li>
<li>Pembayaran Mudah, Bisa Bulanan atau Tahunan Temponya 1 Bulan</li>
<li>Tidak ada minimal waktu sewa, semua terserah pelanggan</li>
</ol>
</div>
						</div>
					</div>		
				</div>	
				
			</div>
		</section>
	</amp-accordion>	
