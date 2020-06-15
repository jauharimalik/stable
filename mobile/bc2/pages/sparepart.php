	<div class="container-fluid container-full pt51">
		<div class="row">
			<div class="col-xs-12 sbawah">
				<amp-carousel width="690" height="400" class="preview" layout="responsive" type="slides"delay="5000">
					<a>							  
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/spare-part-mesin-fotocopy-baru-bekas.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/spare-part-mesin-fotocopy-baru-bekas.jpg 1301w"
							width="690"
					         height="400" 
							 class="fotoslide"
					         layout="responsive"></amp-img>
					</a>							 
					<a>
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/sparepart-mesin-fotocopy-kanibalan.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/sparepart-mesin-fotocopy-kanibalan.jpg 1301w"
					         width="690"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>	
					</a>
					<a>
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/Sparepart-cunsumable-mesin-fotocopy.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/Sparepart-cunsumable-mesin-fotocopy.jpg 1301w"
					         width="690"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>	
					</a>
				</amp-carousel>		
				<div class="bordered-title">
					<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Cek Harga <span class="brush">SPAREPART</span> disini.</div>
				</div><!-- TITLE ENDS -->
			</div>			
		</div>
	</div>
	<div class="pekat2 container-fluid container-full">	
		<div class="margin-bottom-5"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Promo <span class="brush" >SPAREPART</span> <?php echo $nama_bln[date('m')]." - ".date('Y');?> !! </div>	</div>																	
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
							$a_nama_produk = ucwords(strtolower($a_data['nama_produk']));
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
							?>			
						<div class="col-xs-7 part capronego capronego34 blog-carousel-item" >
						<div class="gambar34 ">
							<amp-img width="150" height="150" class="middle border3margin-10 circle" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>																											
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
							<?php  require PLUG.'/mobile/nego.php'; ?>								
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
							$show_page = 6;
							$i=1;
							if($page <=1 ){
							}
							else{
							$j = $page - 1;
							echo "<a href='$paging/1'>Firts</a>";
							echo "<a href='$paging/$j' rel='prev' class='fa fa-angle-left'></a>";
							}
							
							if ($page >= $show_page){
							$total_prev = $page - 2; #4 5 6 7 8 9 10
							$total_next = $page + 2; #10
							if ($total_next >= $totalPages){
							$total_next = $totalPages;
							$total_prev = $total_next - 4;
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
	<?php  require_once PLUG.'/mobile/share.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
			<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Video <span class="brush" >TUTORIAL</span> <?php echo $site_name;?> !! </div>
				<amp-carousel class="blog-carousel" layout="fixed-height" height=205>
<?php
$sql = "SELECT * FROM videos order by videos.id desc";
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
				<a href="<?php echo $c_url;?>/tv/searchs/part/" class="button button-small  primary-bg light-color margin-left-0">Kesini Aja <i class="fa fa-caret-right icon-at-right"></i></a>
			</div><!-- COL-XS-6 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	


	