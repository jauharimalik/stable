<?php
$urutanya = ("produk.rekomendasi desc,  produk.harga_baru asc, produk.brand asc,  produk.hot desc  LIMIT $start, $c_perpage");
$filtrnya = ("(category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");
$data_produk = ("select * from produk where (harga_baru>1000000) AND  $filtrnya and (brand like '%canon%') and (hot='Baru') order by $urutanya");	
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
					<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/Canon-1-min.jpg 1300w,<?php echo $c_cdn_img; ?>/mobile/banner/Canon-1-min.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>
					</a>							 
					<a href="">
					<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/Canon-2-min.jpg 1300w, <?php echo $c_cdn_img; ?>/mobile/banner/Canon-2-min.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>		
					</a>
					<a href="">
					<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/Canon-3-min.jpg 1300w,<?php echo $c_cdn_img; ?>/mobile/banner/Canon-3-min.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>		
							 
					</a>
				</amp-carousel>		
	</div>
	<div class="pekat2 container-fluid container-full">	
		<!-- TITLE STARTS -->

		<div class="margin-bottom-5"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga <span class="brush" >CANON</span> <?php echo $nama_bln[date('m')]." - ".date('Y');?> !! </div>	</div>																	
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
							$a_nama_produk = ucwords(strtoupper($a_data['nama_produk']));
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
	<div class="container-fluid">					
		<!-- TITLE STARTS -->
		<div class="row">			
			<div class="col-xs-12">
				<!-- PAGINATION STARTS -->
				<div class="pagination">
					  <?PHP 
							if (!isset($_POST['p_kategori'])) {
							if(isset($page)){
							$totalPages = ceil($total_artikel / $c_perpage);
							if ($totalPages == 0){
							$totalPages = 1;
							}
							$show_page = 7;
							$i=1;
							if($page <=1 ){
							}
							else{
							$j = $page - 1;
							echo "<a href='$paging/1'>Firts</a>";
							echo "<a href='$paging/$j' rel='prev' class='fa fa-angle-left'></a>";
							}
							
							if ($page >= $show_page){
							$total_prev = $page - 3; #4 5 6 7 8 9 10
							$total_next = $page + 3; #10
							if ($total_next >= $totalPages){
							$total_next = $totalPages;
							$total_prev = $total_next - 6;
							}
							$i = $total_prev;
							while ($i <= $total_next){
							if($i<>$page){
							echo "<a href='$paging/$i'>$i</a>";
							}
							else{
							echo "<a class='active'>$i</a>";
							}
							$i++;
							}
							}else{
							while($i <= $show_page and $i < $totalPages + 1){
							
							if($i<>$page){
							echo "<a href='$paging/$i'>$i</a>";
							}
							else{
							echo "<a class='active'>$i</a>";
							}
							$i++;
							}
								
							}
							if($page == $totalPages){
							echo "<a class='active'>Last</a>";
							}
							else{
							$j = $page + 1;
							echo "<a href='$paging/$j' rel='next' class='fa fa-angle-right'> </a>";
							echo "<a href='$paging/$totalPages'> Last </a>";
							}
								
							}
							}
							?>	
				</div><!-- PAGINATION ENDS -->
			</div>			
		</div><!-- ROW ENDS -->			
	</div><!-- CONTAINER-FLUID ENDS -->
	<?php  require_once PLUG.'/mobile/rekomendasi.php'; ?>	
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
				<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Mesin Fotocopy <span class="brush" >CANON</span> di <?php echo ucwords($c_title);?>!! </div>
				<amp-youtube width="480"
				  height="270"
				  layout="responsive"
				  data-videoid="kf3Mzuy5nWo"
				  autoplay >
				</amp-youtube>						
				<!-- BONES-PRODUCT-GRID AND BONES-PRODUCT-LIST-ITEM STARTS -->	
				<div id="meshSection1" class="meshSection">
					<div class="meshTitle">
						<div class="meshTitleVanectro"> TANPA BIAYA <b>TAMBAHAN BULANAN</b></div>
					</div>
					<div class="meshDescription">
					Beli Mesin Fotocopy gak ada garansi, Kena Biaya per Klik atau per lembar?? Itu beli apa nyewa Om?? 
					Jadilah Customer Cerdas Garansi itu gak ada Biaya, GRATISS !! Cari penyedia yang gak Bikin RUGI !!
					<ul class="text-left">
						<li><b>GARANSI SEUMUR HIDUP !!</b></li>
						<li><b>10.000++ SERVICE CENTER !!</b></li>
						<li><b>BISA MOBILE PRINT & SCAN !!</b></li>
						<li><b>HARGA SPAREPART MURAH !!</b></li>
						<li><b>TERSEDIA SPAREPART ORI & KW !!</b></li>
					</ul></div>	
					<div class="space-2"></div>
					<center><a on="tap:infopengadaan" class="button primary-bg light-color"><i class="fa fa-gift"></i> Cek Pelayanannya Aja </a></center>
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
						srcset="<?php echo $c_cdn;?>/new/images/amp/maintenance.svg"
						width="46"
						height="46"
						layout="responsive"></amp-img>

			</div><!-- COL-XS-4 ENDS -->
			<div class="col-xs-6 spartan">
				<h4 class="margin-bottom-0">SPAREPART & TONER</h4>
				<p>Gratiss Ongkir</p>
			</div>
			<div class="col-xs-2 spartan spartanbtn">
				<a href="<?php echo $c_url;?>/sparepart-fotocopy" class="button button-small  primary-bg light-color margin-left-0">Kesini Aja <i class="fa fa-caret-right icon-at-right"></i></a>
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
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/ktp.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Garansi Seumur Hidup<br><small> Jaminan Return Barang</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/bisahp2.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Bisa Print dari HP<br><small> Cetak Dimanapun & Kapanpun</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/seindo.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">10.000++ Service Center<br><small>Sampai Plosok Se-Indonesia</small></h4>
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
$sql = "SELECT * FROM videos where (title like '%canon%')order by videos.id desc";
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
						<amp-img width="278" height="186" src="<?php echo "$c_url/tv/upload/videos/$a_thumbnail"; ?>" layout="responsive" alt="<?php echo $a_title;?>" ></amp-img>																																
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
				<a href="<?php echo $c_url;?>/tv/searchs/canon/" class="button button-small  primary-bg light-color margin-left-0">Kesini Aja <i class="fa fa-caret-right icon-at-right"></i></a>
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
						<?php 	$data_produk = ("select *  from produk  LEFT JOIN aktivitas_pelanggan ON aktivitas_pelanggan.id_produk = produk.id_produk where produk.brand='Canon'  ORDER BY id DESC, tanggal DESC LIMIT 6"); ?>
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
					