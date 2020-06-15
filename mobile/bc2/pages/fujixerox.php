<?php
$urutanya = ("produk.rekomendasi desc,  produk.harga_baru asc, produk.brand asc,  produk.hot desc  LIMIT $start, $c_perpage");
$filtrnya = ("(category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");
$data_produk = ("select * from produk where (harga_baru>1000000) AND (hot like '%baru%') and $filtrnya and (brand like '%Fuji Xerox%') order by $urutanya");		
?>
<div class="container-fluid container-full pt51 hala">
<div class="halb hala">		
<amp-selector role="tablist"
  layout="container"
  class="ampTabContainer">
  <div role="tab"
    class="tabButton"
    selected
    option="spoilera"><i class="fa fa-tags"></i> Promo </div>
  <div role="tabpanel" class="tabContent">
    <div class="container-fluid container-full">
				<amp-carousel width="690" height="400" class="preview" layout="responsive" type="slides"delay="5000">			  
					<a href="">							  
					<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/bilocun.jpg 1300w,<?php echo $c_cdn_img; ?>/mobile/banner/bilocun.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>
					</a>							 
					<a href="">
					<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/ibuki.jpg 1300w, <?php echo $c_cdn_img; ?>/mobile/banner/ibuki.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>		
					</a>
					<a href="">
					<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/fujixerox.jpg 1300w,<?php echo $c_cdn_img; ?>/mobile/banner/fujixerox.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>		
							 
					</a>
				</amp-carousel>		
	</div>
	<div class="pekat2 container-fluid container-full">	
		<!-- TITLE STARTS -->

		<div class="margin-bottom-5"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Promo <span class="brush" >Fuji Xerox</span> <?php echo $nama_bln[date('m')]." - ".date('Y');?> !! </div>	</div>																	
		<!-- HORIZONTAL PRODUCT LIST STARTS -->
		<div class="row">
			<div class="col-xs-12">										
				<div class="padding-0">
							<?php
							$totalrate23=0; $totalpembeli=0;
							$result = $db->query($m_dataproduk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_id = $a_data['id_produk'];
							$a_nama_produk = strtoupper(strtolower($a_data['nama_produk']));
							$a_category = $a_data['category'];
							$urutan++;
							$a_brand = $a_data['brand'];
							$a_special = $a_data['special'];
							$a_image_satu = $a_data['image_satu'];
							$a_image_dua = $a_data['image_dua'];
							$a_image_tiga = $a_data['image_satu'];
							$a_hot = $a_data['hot'];
							if($a_category=="Mesin Fotocopy Warna"){$a_hot="Warna";}
							$a_deskripsi_a = $a_data['deskripsi_a'];
							$a_harga_lama = $a_data['harga_lama'];
							$a_harga_baru = $a_data['harga_baru'];
							$a_rekomendasi = $a_data['rekomendasi'];
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
							if($a_harga_lama == 0){$a_harga_lama=$a_harga_baru*2;}
							if($a_harga_baru !=0){$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));}
							include PLUG.'/mobile/nego.php';
							?>				
						<div class="col-xs-7 capronego capronego34 blog-carousel-item" >
						<div class="gambar34">
							<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>																											
						</div>
						<div class="infopro">
						<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="capronego">
								<h5 class="text-left margin-0 d-inline-block"><b><?PHP echo $a_nama_produk; ?></b></h5>
								<div class="pricepro">
									<div id="normalPrice" class="productLineThrough">Rp <?php echo format_rupiah($a_harga_lama); ?></div>
								</div>
								<div class="divDetailProductItemPrice">Rp <?php echo format_rupiah($a_harga_baru); ?></div>
								<div class="recommendedItemDiscountPercentage">- <?php echo format_rupiah($c); ?>% </div>		
								<div class="pt20"></div>
								<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'"); if($total_review>2){?>
								<div class="rating">
									<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
									<span > ( <?php echo $total_review; ?> Ulasan ) </span>
								</div>
								<?php } else { ?> 
								<div class="rating">
									<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
									<span > ( 0 Ulasan ) </span>
								</div>							
								<?php } ?>
							</a>
							<div class="pt20 mt30">
							<a href="<?php echo $sms_nego;?>" class="button button-small  primary-bg light-color" >Nego</a>	
							<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="button button-small  primary-bg light-color" >Detail</a>	
							</div>
							<div class="kanwil"><span class="primary-color"> Daerah : <?php echo ucwords($query['city']); ?></span></div>
						</div>				
						</div>				
					<?php } ?>

				</div><!-- BONES-PRODUCTS-GRID ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div>	
	<?php require_once PLUG.'/mobile/rekomendasi.php'; ?>	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerb"><i class="fa fa-question-circle"></i> Bantuan</div>
  <div role="tabpanel" class="tabContent">
	<?php  require_once PLUG.'/mobile/help.php'; ?>	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerc"><i class="fa fa-youtube-play"></i> Info</div>
  <div role="tabpanel" class="tabContent">
    <div class="container-fluid container-full">
				<div class="space-2"></div>
				<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Dealer Resmi Mesin Fotocopy <span class="brush" >Fuji Xerox</span>!! </div>
				<amp-youtube width="480"
				  height="270"
				  layout="responsive"
				  data-videoid="GRQkOzGB_Q0"
				  autoplay >
				</amp-youtube>						
		<!-- BONES-PRODUCT-GRID AND BONES-PRODUCT-LIST-ITEM STARTS -->	
		<div id="meshSection1" class="meshSection">
            <div class="meshTitle">
                <div class="meshTitleVanectro">KAMI DEALER RESMI, BUKAN <b>RESELLER</b> !!</div>
            </div>
            <div class="meshDescription text-left">
			Pertama dan satu-satunya Dealer Resmi Mesin Fotocopy Fuji Xerox yang berani ngasih GRATISS Pelayanan Lebih & Kualitas Mesin Terbaik, Konsultasi Pelanggan 24 Jam, Teknisi Daerah tidak mau datang, Tenang Kami Siap Membantu dengan Teknisi Sendiri.
            <ul class="text-left">
				<li><b>Mesin Rusak Ganti Unit Baru!!</b></li>
				<li><b>1.200++ Tenaga Teknisi Daerah!!</b></li>
				<li><b>Service Center Terbesar se-Indonesia!!</b></li>
				<li><b>Driver Mesin Tanpa Malware / Virus!!</b></li>
				<li><b>100% Bisa Scan + Copy Gak Pake Ribet!!</b></li>
				<li><b>Tanpa Biaya Bulanan / Klik !!</b></li>
            </ul>
			NB : <?php echo $site_name;?> Tidak pernah mengharuskan pembelian Sparepart 1blok, Original atau Tidak semua sudah jadi hak keputusan pelanggan. Tidak ada biaya tambahan apapun.
			</div>	
			<div class="space-2"></div>
		</div>				
		<?php  require_once PLUG.'/mobile/keunggulan.php'; ?>	
	</div>
 </div>
</amp-selector>		
</div>	
	</div><!-- SLIDER ENDS -->
	<?php  require_once PLUG.'/mobile/share.php'; ?>
	<div class="tabcontent container-fluid">
		<div class="row">
			<div class="col-xs-1 spartan padding010">
				<amp-img
						srcset="<?php echo $c_cdn;?>/new/images/amp/online-store.svg"
						width="46"
						height="46"
						layout="responsive"></amp-img>

			</div><!-- COL-XS-4 ENDS -->
			<div class="col-xs-6 spartan">
				<h4 class="margin-bottom-0">PROMO PAKET</h4>
				<p>Paket Usaha Fotocopy</p>
			</div>
			<div class="col-xs-2 spartan spartanbtn">
				<a href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy" class="button button-small  primary-bg light-color margin-left-0">Kesini Aja <i class="fa fa-caret-right icon-at-right"></i></a>
			</div><!-- COL-XS-6 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->
	<div class="pekat container-fluid">		
		<div class="row">
			<div class="subkebutuhan col-xs-12">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Kenapa Harus <span class="brush" ><?php echo $site_name;?></span>??</div>
				<hr>
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" class="circle" height="50" src="<?php echo $c_cdn;?>/new/images/amp/channel-resmi.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Channel Resmi Astra<br><small> Importir Mesin Fotocopy Xerox</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" class="circle" height="50" src="<?php echo $c_cdn;?>/new/images/amp/respon-cepat.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Respon Teknis Cepat<br><small>Kedatangan Teknisi Cepat </small></h4>
					</div>
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" class="circle" height="50" src="<?php echo $c_cdn;?>/new/images/amp/cepet-banget.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">1Hari Pengiriman<br><small>Bayar Sekarang, Besok Sampai</small></h4>
					</div>						
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
$sql = "SELECT * FROM videos where (title like '%xerox%' or title like '%fuji%' or title like '%docu%') order by videos.id desc limit 6";
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
										
					<a href="<?php echo "$c_url/tv/video/$a_id/";?>" class="capro2 capro24 tvlayer blog-carousel-item">
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

	<div class="tabcontent container-full">
		<div class="row pekat2">
			<div class="col-xs-1 spartan padding010">
				<amp-img
						srcset="<?php echo $c_cdn;?>/new/images/amp/video-tutorial.svg"
						width="46"
						height="46"
						layout="responsive"></amp-img>

			</div><!-- COL-XS-4 ENDS -->
			<div class="col-xs-6 spartan">
				<h4 class="margin-bottom-0">DOWNLOAD GRATIS</h4>
				<p>Video Tutorial Fotocopy</p>
			</div>
			<div class="col-xs-2 spartan spartanbtn">
				<a href="<?php echo $c_url;?>/tv/searchs/xerox/" class="button button-small  primary-bg light-color margin-left-0">Kesini Aja <i class="fa fa-caret-right icon-at-right"></i></a>
			</div><!-- COL-XS-6 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
<?php $total_pelanggan = $db->num_rows("SELECT * FROM aktivitas_pelanggan order by tanggal desc"); $total_pelanggan= $total_pelanggan+1680; ?>	
	
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
				<amp-carousel class="blog-carousel" type="slides" autoplay delay="5500" layout="fixed-height" height=209>	
						<?php 	$data_produk = ("select *  from produk  LEFT JOIN aktivitas_pelanggan ON aktivitas_pelanggan.id_produk = produk.id_produk where (produk.brand='xerox' or aktivitas_pelanggan.tipemesin like '%docu%' or aktivitas_pelanggan.tipemesin like '%fuji%')  ORDER BY id DESC, tanggal DESC LIMIT 6"); ?>
						<?php
						$result = $db->query($data_produk);
						while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {	
						$rate =$a_data['rating']; $tanggal =$a_data['tanggal']; $namapel=$a_data['nama']; $namapel = str_replace(' ', '.', $namapel); $namapel = str_replace('..', '.', $namapel); $namapel = str_replace('...', '.', $namapel); $emailpel=strtolower($namapel); ?>	

					<a href="<?php echo $c_url."/pembeli-".$a_data['link']; ?>" class="capro23 blog-carousel-item">
						<div class="preview"><amp-img src="<?php echo $c_cdn_img."/".$a_data['foto']; ?>" layout="fill" class="contain"></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<small><?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star rating"  title="<?php echo $rate;?>"></i><?php }?> -  <?php echo date('d/m/Y', strtotime($a_data['tanggal']))." - ".ucwords($namapel);?></small>							
							<br><h5 class="margin-0"> Pengiriman <?php echo ucwords($a_data['lokasi']); ?> </h5>
							<small><?php echo ucwords($a_data['tipemesin']); ?></small>
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
