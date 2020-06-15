<?PHP
$a_id=$produk_ids;
$a_link=$ulasan_link;
$a_nama_produk = $ulasan_nama_produk;
$a_hot = $ulasan_hot; 
$a_brand = $ulasan_brand; 
$a_brands = strtolower(str_replace(" ","-",$a_brand));

$total_pembeli2 = $db->num_rows("select * from aktivitas_pelanggan where id_produk = '".$a_id."'"); 
$total_ulasan_pelanggan = $db->num_rows("select * from ulasan where pid = '".$a_id."'");
$total_pemesan2 = $db->num_rows("select * from order_detail where produk_id = '".$a_id."' group by produk_id"); 
$page_title="Daftar Harga Mesin Fotocopy Baru, Rekondisi - ".date('M-Y');
$site_name="Vanectro.Com";
$site_description="Daftar Harga Mesin Fotocopy Baru & Rekondisi ".date('M-Y')."  -  Telp. $d_telp";
	$total_artikel = $db->num_rows("select * from ulasan where pid = ".$a_id." and status ='y'  order by ulasan.id DESC, ulasan.tanggal DESC");
	if ($total_artikel == 0){header("location:$c_url");}
	if (isset($_GET['pg'])){$page = abs((int)$_GET['pg']);
		if($_GET['pg']==1){ header("Location: $c_url/ulasan/$a_brands-$a_link",TRUE,301);}
	}
	else{$page = 1;}
//untuk pelengkap file load_content.php
$paging = "$c_url/ulasan/$a_brands-$a_link"; //default url untuk pagingnya 
$calc = $c_perpage * $page;
$start = $calc - $c_perpage;
$data_art = $db->select("ulasan", "id, pid, status", "pid like '%$a_id%' and status like '%y%'", "ulasan.id DESC, ulasan.tanggal DESC", "$start, $c_perpage");
?>
<article class="product container-fluid container-full pt51">
    <section>
        <div class="d-block">
			<div class="container-fluid dp__title border-bottom">
				<h1 class="dp__name Mesin_Fotocopy_Paling_LARIS"><?php echo strtoupper($a_nama_produk);?> - <span class="brush" ><?php echo strtoupper($a_hot);?></span></h1> 
				<div class="container-fluid container-full border-top border-btm clearfix">
				  <div class="row">
					<div class="col-xs-4 pt20">
						<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");?>
						<div class="primary-color">
						<b>
							<?php if($total_review>2){ echo $total_review; } else { echo "5";} 
							$test1 = ("select *  from produk_statistik where produk_id = ".$a_id."");
							$test2 = $db->query($test1);$totaltest=0;
							while ($test3 = $test2->fetch_array(MYSQLI_BOTH)) 
							{$viewer = $test3['hits'];$totaltest += $viewer;}?>
						</b>
						<b><small class="primary-color">Ulasan </small></b>
						</div>
					</div>					  
					<div class="col-xs-4 pt20">
						<b><small class="primary-color">Terjual </small> <?php $terjual=int(($totaltest/215)+1); $total_order2=$total_ulasan_pelanggan+$total_pembeli2+$total_pemesan2+$terjual; echo $total_order2;?></b>
					</div>
					<div class="col-xs-4 pt20">
						<b><small class="primary-color">Dilihat </small> <?php echo $totaltest;?></b>
					</div>				
				  </div>
				</div>
			</div>
			<div class="dp__header--right">
				<div class="dp__header__body">
					<div class="dp__header__info">
						<div class="dp__action dp__price__wrapper">
								<a href="<?php echo $c_url."/".$a_brands."-".$a_link; ?>" class="button button--cta button--lg full" >
									<span class="button__group"><i class="mi mi-24 marr--md">shopping_cart</i>Lihat Produk</span>
								</a> 							
							<div class="wl__add">
								<div class="popover">
									<div class="popover__trigger">
										<button class="button__group">
											<i class="mi mi-16 text--red marr--sm">favorite</i>
											<span class="wl__link">Tambah ke Watchlist</span>
										</button>
									</div> 
								</div> <!---->
							</div>
						</div>
					</div> 
				</div> 
			</div>			
        </div>

        <!-- Offer - start -->
        <!-- Offer - end -->

        <!-- Share - start -->
		<div class="space-2"></div>
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
        <!-- Share - end -->
		<div class="space-2"></div>
    </section>
	<div class="container-fluid container-full hala">
		<div class="pekat2 rate rating">
			<section class="rating__aggregate rating__color--5">
				<div class="rating__aggregate__score">5 / 5</div> 
				<article class="rating__stars">
					<?php for($i=0;$i<5;$i++){ ?><i class="mi mi-24">star</i><?php } ?>
				</article> 
				<div class="rating__count"><?php if($total_review>2){ echo $total_review; } else { echo "5";} ?> Ulasan</div>
			</section> 
		</div>	
		<div class="container-fluid">					
			<!-- TITLE STARTS -->
			<div class="row">
				<div class="col-xs-12">		
		<?php $ulasan = ("select *  from ulasan where pid = ".$a_id." and status ='y' ORDER BY tanggal DESC limit 10");
				$hasilulasan = $db->query($ulasan);$total=0;
				while ($data_u = $hasilulasan->fetch_array(MYSQLI_BOTH)) {	
					$rate = $data_u['rating'];
					$review = $data_u['review'];
					$uid = $data_u['userid'];
					$unama = $data_u['nama'];
					$u_judul = $data_u['judul'];
					$u_tanggal=$data_u['tanggal']
		?>		
					<div class="inneronecolumn left artikelpilihan">
						<h2><?php echo $u_judul;?><br><small> <article class="rating rating__stars"><?php for($i=0;$i<=$rate;$i++){ ?><i class="mi mi-16">star</i><?php } ?> </article></small></h2>
						<div class="hr"></div>
						<p><b><a class="small"><?php echo date('d - M - Y', strtotime($u_tanggal));?> <br><small>Diulas oleh : <?php echo $unama;?></small></a></b> <br><?php echo $review;?></p>
						
					</div>
		<?php } ?>
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
</article>				