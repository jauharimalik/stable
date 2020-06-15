<div class="container-fluid container-full pt51 hala">
<div class="halb hala">		
		<div class="container-fluid container-full">
					<amp-carousel width="690" height="400" class="preview" layout="responsive" type="slides"delay="5000">			  
						<a href="">							  
						<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/pusing-min.jpg 1300w,<?php echo $c_cdn_img; ?>/mobile/banner/pusing-min.jpg 1301w"
								 width="691"
								 height="400"
								 class="fotoslide"
								 layout="responsive"></amp-img>
						</a>							 
						<a href="">
						<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/pilihan-hemat-min.jpg 1300w, <?php echo $c_cdn_img; ?>/mobile/banner/pilihan-hemat-min.jpg 1301w"
								 width="691"
								 height="400"
								 class="fotoslide"
								 layout="responsive"></amp-img>		
						</a>
						<a href="">
						<amp-img srcset="<?php echo $c_cdn_img; ?>/mobile/banner/nyaman-min.jpg 1300w,<?php echo $c_cdn_img; ?>/mobile/banner/nyaman-min.jpg 1301w"
								 width="691"
								 height="400"
								 class="fotoslide"
								 layout="responsive"></amp-img>		
								 
						</a>
					</amp-carousel>		
					
	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Mesin Fotocopy <?php echo $nama_bln[date('m')]." - ".date('Y');?> <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	
							$result = $db->query($data_produk_catalog);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];
							$a_nama_produk = str_replace('Canon', '', $a_nama_produk);
							$a_nama_produk = str_replace('DocuCentre', 'DC', $a_nama_produk);
							$a_nama_produk = str_replace('4470 |', '', $a_nama_produk);
							$a_category = $a_data['category'];
							$a_category = str_replace('Mesin Fotocopy', '', $a_category);
							$a_category = str_replace('Hitam Putih', 'Mesin BW', $a_category);
							$a_category = str_replace('Warna', 'Mesin Warna', $a_category);
							$a_brand = $a_data['brand'];
							$a_special = $a_data['special'];
							$a_image_satu = $a_data['image_satu'];
							$a_image_dua = $a_data['image_dua'];
							$a_image_tiga = $a_data['image_3'];
							$a_id = $a_data['id_produk'];
							$a_hot = $a_data['hot'];
							$a_deskripsi_a = $a_data['deskripsi_a'];
							$a_harga_lama = $a_data['harga_lama'];
							$a_harga_baru = $a_data['harga_baru'];
							$harga_tampil = $a_harga_baru - (($a_harga_baru/100)*2);
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}							
							?>	
										<tr>
										  <td data-label="Merk"><?php echo ucwords($a_brand);?></td>
										  <td data-label="Type"><?php echo ucwords($a_nama_produk);?></td>
										  <td data-label="Harga">Rp <?php echo format_rupiah($a_harga_baru); ?></td>
										</tr>
							<?php } ?>
								   </tbody>
								</table>
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->				
			</div>
		</section>
	</amp-accordion>			
					
		<div class="pekat2 container-fluid container-full">	
			<!-- TITLE STARTS -->
			<div class="margin-bottom-5"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga <span class="brush" >TERBARU </span> <?php echo $nama_bln[date('m')]." - ".date('Y');?> !! </div>	</div>																	
			<!-- HORIZONTAL PRODUCT LIST STARTS -->
			<div class="row">
				<div class="col-xs-12">										
					<div class="padding-0">
								<?php
								$result = $db->query($m_dataproduk);
								while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
								$a_link = $a_data['link'];
								$a_id = $a_data['id_produk'];
								$a_nama_produk = strtoupper($a_data['nama_produk']);
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
		
		</div>
	
</div>	
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
		
	<?php  require_once PLUG.'/mobile/rekomendasi.php'; ?>	
		
	<div class="pekat container-fluid margin-bottom-0">		
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
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/cicilan.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Bisa Diangsur / Kredit<br><small> Cicilan 0% / Kredit Rumahan</small> </h4>
					</div>
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/nego.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Harganya Bisa Nego<br><small> Dapatkan Harga Termurah</small></h4>
					</div>						
				</div>	
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div>

	<div class="container-fluid container-full margin-top-0">	
		<div class="row pekat paddingTop5">
			<div class="col-xs-1 spartan margin-top-0">
				<amp-img
						srcset="<?php echo $c_cdn;?>/new/images/amp/brochure.svg"
						width="46"
						height="46"
						layout="responsive"></amp-img>

			</div><!-- COL-XS-4 ENDS -->
			<div class="col-xs-6 spartan margin-top-0">
				<h4 class="margin-bottom-0">Download Brosur </h4>
				<p>Harga Mesin Fotocopy </p>
			</div>
			<div class="col-xs-2 spartan spartanbtn margin-top-0">
				<a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy" class="button button-small  primary-bg light-color margin-left-0">Download <i class="fa fa-caret-right icon-at-right"></i> </a>
			</div><!-- COL-XS-6 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	

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

	<div class="container-fluid container-full paddingTop5 margin-top-0">
		<div class="row pekat">
			<div class="col-xs-1 spartan">
				<amp-img
						srcset="<?php echo $c_cdn;?>/new/images/amp/gear.svg"
						width="40"
						height="40"
						layout="responsive"></amp-img>

			</div><!-- COL-XS-4 ENDS -->
			<div class="col-xs-6 spartan">
				<h4 class="margin-bottom-0">Sparepart & Toner </h4>
				<p>Promo GRATIS Ongkir !!</p>
			</div>
			<div class="col-xs-2 spartan spartanbtn">
				<a href="<?php echo $c_url;?>/order" class="button button-small  primary-bg light-color margin-left-0">Cek Promo <i class="fa fa-caret-right icon-at-right"></i></a>
			</div><!-- COL-XS-6 ENDS -->
			
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
									<span class="title-popup"><strong>CORPORATE</strong></span>
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
							<span class="badge font-2 secondary-bg">24JAM</span>
						</a>
						<a ><h2>FULL-SUPPORT </h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Cepat</a>
							<a>Hemat </a>
						</div>
						<p>Corporate Client dibantu Tenaga Teknisi Khusus!!</p>
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