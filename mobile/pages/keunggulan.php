<div class="container-fluid container-full pt51 hala">
	<br><br><br><br>
	<div class="halb hala">	
		<div class="container-fluid container-full">
			<a>
				<amp-img srcset="<?php echo $c_cdn;?>/new/images/gallery.svg 1300w, <?php echo $c_cdn;?>/new/images/gallery.svg 1301w"width="691"height="400"class="fotoslide"layout="responsive"></amp-img>
			</a>	
		</div>
	</div>	
</div><!-- SLIDER ENDS -->
	
    <div class="container-full">
				<div class="space-2"></div>
				<div id="meshSection1" class="container-fluid  meshSection">
					<div class="meshTitle">
						<div class="meshTitleVanectro">Apa keunggulan dan perbedaan <?php echo $site_name;?> dibanding penjual Lainnya ??</div>
					</div>
					<br><br>
					<div class="meshDescription">Harga di tempat kami memang sedikit lebih mahal dari penjual lainnya, tapi kami memasang harga yang realistis kok. Berikut adalah sedikit perbedaan kami dari penjual lainnya.
					<ul class="text-left">
						<li><b>Lokasi tersedia di seluruh kota se-Indonesia</b></li>
						<li><b>Harga jujur sudah diberitahukan di tagihan</b></li>
						<li><b>Kondisi barang 100% original</b></li>	
						<li><b>Durasi pengiriman 1 - 14 hari pengiriman</b></li>
						<li><b>Garansi service life time atau seumur hidup</b></li>
						<li><b>Jaminan 100% uang kembali / tukar unit baru</b></li>
						<li><b>Kecepatan respon keluhan 10 - 15 Menit</b></li>		
						<li><b>Bonus USB OTG berisi video tutorial, dll</b></li>
						<li><b>Biaya instalasi 100% Gratiss se-Indonesia</b></li>
						<li><b>Bonus Stabilizer, Travo, Meja, Toner, dll</b></li>
						<li><b>Mesin Fotocopy bisa dijual Kembali</b></li>						  
					</ul>						
					</div>	
					<div class="space-2"></div>
				</div>				
				<?php  require_once PLUG.'/mobile/keunggulan.php'; ?>
	</div>
	<?php  require_once PLUG.'/mobile/share.php'; ?>
	<div class="pekat container-fluid">		
		<div class="row">
			<div class="subkebutuhan col-xs-12">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Keuntungan pelanggan <span class="brush" ><?php echo $site_name;?></span>??</div>
				<hr>
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/call-center-female-workers.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Paket USB OTG<br><small>Video Tutorial, Buku Service, dll</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/pelatihaninstalasi.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Gratiss Instalasi<br><small>Pelatihan & Instalasi se-Indonesia</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/mobile-print.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Mobile Print & Scan<br><small>Gratiss Instalasi & Pelatihan </small></h4>
					</div>						
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/sertifikasi.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Sertifikat Resmi<br><small>Pelatihan Usaha, Teknisi, Operator</small></h4>
					</div>						
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/barcode.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Program Kasir<br><small>Gratiss program kasir dan keuangan</small></h4>
					</div>						
				</div>					
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div>


	<div class="container-fluid sbawah pt20">		
		<div class="row">
			<div class="col-xs-12 ">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> <?php echo format_rupiah($total_pelanggan);?>++ <span class="brush">PELANGGAN</span> Terdaftar !! </div>
				<hr>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div>
	<div class="container-fluid">					
		<!-- TITLE STARTS -->
		<div class="row">
			<div class="col-xs-12">
				<amp-carousel class="blog-carousel" layout="fixed-height" height=199>	
						<?php 	$data_produk = ("select *  from produk  LEFT JOIN aktivitas_pelanggan ON aktivitas_pelanggan.id_produk = produk.id_produk where produk.nama_produk like '%canon%' and produk.hot='Rekondisi'  ORDER BY id DESC, tanggal DESC LIMIT 6"); ?>
						<?php
						$result = $db->query($data_produk);
						while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {	
						$rate =$a_data['rating']; $tanggal =$a_data['tanggal']; $namapel=$a_data['nama']; $namapel = str_replace(' ', '.', $namapel); $namapel = str_replace('..', '.', $namapel); $namapel = str_replace('...', '.', $namapel); $emailpel=strtolower($namapel); ?>	

					<a href="<?php echo $c_url."/pembeli-".$a_data['link']; ?>" class="capro23 blog-carousel-item">
						<div class="preview"><amp-img src="<?php echo $c_cdn_img."/".$a_data['foto']; ?>" layout="fill" class="contain"></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<small><?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star rating"  title="<?php echo $rate;?>"></i><?php }?> -  <?php echo date('d/m/Y', strtotime($a_data['tanggal']));?></small>							
							<h5 class="padding10 margin-0 "> Pengiriman <?php echo ucwords($a_data['lokasi']); ?> </h5>
							<small><?php echo ucwords($a_data['tipemesin'])." - ".ucwords($namapel); ?></small>
						</div>
					</a>
							
 <?php } ?>					
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
				<center><a href="<?php echo $c_url;?>/pelanggan-setia" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-photo"></i> Lihat Semua Pelanggan <i class="fa fa-caret-right icon-at-right"></i></a></center>	
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->			
		
	</div><!-- CONTAINER-FLUID ENDS -->	

				<amp-lightbox id="infopromo" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>PROMO TERBATAS</strong></span>
									<a on="tap:infopromo.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>

	<div class="container-fluid">
		<!-- HORIZONTAL PRODUCT LIST STARTS -->
		<div class="row">
			<div class="col-xs-12">
				<div class="bones-products-grid cols-2">
					<div class="bones-h-product-list-item">
						<a class="preview">
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/efisien.svg"
									width="63"
									height="150"
									layout="responsive"></amp-img>
							<span class="badge font-2 secondary-bg">DISKON 27%</span>
						</a>
						<a ><h2>MURAH </h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Efektif</a>
							<a>Efisien</a>
						</div>
						<p>Mesin Terjamin, Gratiss Bonuss RBV + Install !!</p>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->
					
					<div class="bones-h-product-list-item">
						<a class="preview">
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/aman_2.svg"
									width="63"
									height="150"
									layout="responsive"></amp-img>
							<span class="badge font-2 secondary-bg">SEUMUR HIDUP</span>
						</a>
						<a ><h2>GARANSI </h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Uang Kembali</a>
							<a>Replace </a>
						</div>
						<p>Gratiss Konsultasi 24 Jam + Paket Tutorial Mesin.</p>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->
					<div class="bones-h-product-list-item">
						<a class="preview">
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/kantor-toko.svg"
									width="63"
									height="150"
									layout="responsive"></amp-img>
							<span class="badge font-2 secondary-bg">PEMULA</span>
						</a>
						<a ><h2>REKOMENDASI</h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Usaha</a>
							<a>Kantoran</a>
						</div>
						<p>Gratiss Perhitungan Bulanan + Training!!</p>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->					

				</div><!-- BONES-PRODUCTS-GRID ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->

	</div><!-- CONTAINER-FLUID ENDS -->
			
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>	
				<amp-lightbox id="infopengadaan" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>Kenapa Kami ??</strong></span>
									<a on="tap:infopengadaan.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>

	<div class="container-fluid">
		<!-- HORIZONTAL PRODUCT LIST STARTS -->
		<div class="row">
			<div class="col-xs-12">
				<div class="bones-products-grid cols-2">
					<div class="bones-h-product-list-item">
						<a class="preview">
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/no-fees.svg"
									width="63"
									height="150"
									layout="responsive"></amp-img>
							<span class="badge font-2 secondary-bg">No Cash Per Click</span>
						</a>
						<a ><h2>JUJUR</h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Cicilan 0%</a>
							<a>Per Keluhan</a>
						</div>
						<p>Tidak Ada Biaya Tambahan, Hemat!!</p>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->
					
					<div class="bones-h-product-list-item">
						<a class="preview">
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/mudah-cepat.svg"
									width="63"
									height="150"
									layout="responsive"></amp-img>
							<span class="badge font-2 secondary-bg">100% FREE</span>
						</a>
						<a ><h2>Cepat & Murah </h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Install</a>
							<a>Service</a>
						</div>
						<p>Harga Sparepart Original Murah, GRATISS Service!!</p>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->
					<div class="bones-h-product-list-item">
						<a class="preview">
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/terjamin.svg"
									width="63"
									height="150"
									layout="responsive"></amp-img>
							<span class="badge font-2 secondary-bg">KOMITMEN</span>
						</a>
						<a ><h2>TERJAMIN</h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Perjanjian</a>
							<a>Bergaransi</a>
						</div>
						<p>Eksklusif Mengutamakan Kepuasan Pelayanan!!</p>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->					

				</div><!-- BONES-PRODUCTS-GRID ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->

	</div><!-- CONTAINER-FLUID ENDS -->
			
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>		
