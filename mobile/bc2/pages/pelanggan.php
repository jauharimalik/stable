<?php 
$total_artikel = $db->num_rows("SELECT * FROM aktivitas_pelanggan order by tanggal desc");
if ($total_artikel == 0){header("location:$c_url");}
	$paging = "$c_url/pelanggan-setia"; //default url untuk pagingnya 
	if (isset($_GET['pg'])){$page = abs((int)$_GET['pg']);
	if($_GET['pg']==1){ header("Location: $paging",TRUE,301);}
	} else{$page = 1;}		
//untuk pelengkap file load_content.php
$c_perpage=8;
$calc = $c_perpage * $page;
$start = $calc - $c_perpage;
$total_pelanggan = $db->num_rows("SELECT * FROM aktivitas_pelanggan order by tanggal desc"); 
$total_pelanggan= $total_pelanggan+1680;
?>
	<div class="container-fluid container-full pt51">
		<div class="row">
			<div class="col-xs-12 margin-bottom-0">
				<div class="background-row bg-pelanggan text-center">
					<div class="background-row-content">
						<h3 class="row-1"><?php echo $total_pelanggan;?>++ Pelanggan Setia !!  </h3>
						<h3 class="row-2">Dari Sabang - Merauke</h3>
						<h3 class="row-3"><?php echo $site_name;?>, Jadi Kepercayaan Sejak 2010 !!</h3>
					</div>
				</div>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
	<div class="pekat2 container-fluid container-full">	
		<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Prioritaskan <span class="brush">KEPUASAN</span>Pelanggan !! </div>	</div>
	</div>
	<div class="container-fluid container-full pekat">
		<div class="row">
			<div class="col-xs-12">
				<div class=" cols-2">
				<?php $data_produk = ("select * from aktivitas_pelanggan  order by id DESC LIMIT $start, $c_perpage");$query_p = $db->query($data_produk); ?>
				<?php while ($a_data = $query_p->fetch_array(MYSQLI_BOTH)) {  
						$a_link = $a_data['link'];
						$a_id = $a_data['id'];
						$a_nama = $a_data['nama'];
						$a_lokasi =substr( $a_data['lokasi'], 0, 25);
						$a_image_tiga = $a_data['photosmall'];
						$a_tanggal = $a_data['tanggal'];
						$tipemesin = substr($a_data['tipemesin'], 0, 25);
				?>	<div class="clear-both"></div>				
					<div class="margin-bottom-0 bones-h-product-list-item border-bottom light-bg margin-bottom-5">
						<a href="<?php echo $c_url."/pembeli-".$a_link; ?>" class="primary-color border-bottom gbpos">
							<amp-img src="<?php echo $c_cdn_img.'/'.$a_image_tiga;?>" width="317" height="177" layout="responsive"></amp-img>
						</a>
						<div class="gbpos2">
							<span class="tanggal">
								<a class="border-bottom tg"><?php echo date('d', strtotime($a_tanggal)); ?></a>
								<a class="bln"><?php echo date('M - Y', strtotime($a_tanggal)); ?></a>
							</span>	
						</div>
						<a href="<?php echo $c_url."/pembeli-".$a_link; ?>"><h2>Pengiriman <?php echo $a_nama; ?></h2></a>
						<span class="stars secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories">
							<a>Daerah <?php echo $a_lokasi; ?></a>
						</div>
						<div class="prices">
							<span class="current font-2"><?php echo $tipemesin; ?></span>
						</div>
					</div><!-- BONES PRODUCT LIST ITEM ENDS -->
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
							$total_prev = $total_next - 5;
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
	
	