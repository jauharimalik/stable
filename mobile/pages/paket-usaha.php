<?php
if (isset($_POST['urutan'])) {
	if($_POST['urutan']=="Produk Terbaru"){$urutanya = ("produk.date asc");}
	else if($_POST['urutan']=="Produk Terpopuler"){$urutanya = ("produk.hits desc");}
	else if($_POST['urutan']=="Produk Termurah"){$urutanya = ("produk.harga_baru asc");}
	else if($_POST['urutan']=="Produk Termahal"){$urutanya = ("produk.harga_baru desc");}
	else {$urutanya = ("produk.rekomendasi desc,  produk.harga_baru asc, produk.brand asc,  produk.hot desc ");}
}
else {$urutanya = ("produk.rekomendasi desc,  produk.harga_baru asc, produk.brand asc,  produk.hot desc ");}

if (isset($_POST['filtr'])) {
	if($_POST['filtr']=="Mesin Fotocopy Hitam Putih"){$filtrnya = ("(category='Mesin Fotocopy Hitam Putih')");}
	else if($_POST['filtr']=="Mesin Fotocopy Warna"){$filtrnya = ("(category='Mesin Fotocopy Warna') ");}
	else if($_POST['filtr']=="Rekomendasi Usaha"){$filtrnya = ("(nama_produk like '%usaha%' or deskripsi_a like '%usaha%' or nama_paket like 'paket') and (category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");}
	else if($_POST['filtr']=="Harga Tinggi"){$filtrnya = ("(harga_baru >= 35000000) and (category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");}
	else if($_POST['filtr']=="Harga Murah"){$filtrnya = ("(harga_baru <= 28000000) and (category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");}
	else {$filtrnya = ("(category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");}
}
else {$filtrnya = ("(category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih')");}

$data_produk = ("select * from produk where (harga_baru>1000000) AND  $filtrnya and (brand like '%canon%') order by $urutanya");	

if (isset($_POST['nego2'])) {
$EmailFrom = $_POST['email'];
$EmailTo = $EmailFrom.", jauharimalik@vanectro.com, romi@vanectro.com, mario@vanectro.com, info@vanectro.com, ".$_POST['email'];
$Subject = "Nego Harga";

$id_produk = addslashes($_POST['id_produk']);
$Name = Trim(stripslashes($_POST['nama'])); 
$Tel = Trim(stripslashes($_POST['telepon'])); 
$Kota = Trim(stripslashes($_POST['alamat'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$seri_mesin = Trim(stripslashes($_POST['seri_mesin'])); 
$harga_nego = str_replace('.', '', $_POST['harga_nego']);
$harga_mesin = str_replace('.', '', $_POST['harga_mesin']);
$total=(($harga_mesin/100)*80);

$urlsekarang = Trim(stripslashes($_POST['sumber'])); 
$username = $_POST['username']; 
$tanggal=date('Y-m-d');
if($total<=$harga_nego){
	$data_insert = array("id_produk"=>$id_produk, "seri_mesin"=>$seri_mesin, "harga_mesin"=>$harga_mesin, "nama"=>$Name, "email"=>$Email, "telepon"=>$Tel, "harga_nego"=>$harga_nego, "alamat"=>$Kota, "tanggal"=>$tanggal, "username"=>$username, "sumber"=>$urlsekarang);
	$db->insert("penawaran", $data_insert);	
	echo "<meta http-equiv='refresh'content='0; url=sms:".$telponya."?body=Pak, Saya Mau Nego ".$seri_mesin.", Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : ".$Name."&#10; %0AKota: ".$Kota."&#10; %0A'>";
}

else {$negoid=$id_produk; $negojahat="Negonya Jangan Jahat Jahat dong !!";}
}	
?>
<div class="container-fluid container-full pt51 hala">
<div class="halb hala">	
    <div class="container-fluid container-full">
				<amp-carousel width="690" height="400" class="preview" layout="responsive" type="slides"delay="5000">			  
					<a>							  
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/paket-usaha-fotocopy-murah.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/paket-usaha-fotocopy-murah.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>
					</a>							 
					<a>
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/peluang-usaha-fotocopy.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/peluang-usaha-fotocopy.jpg 1301w"
					         width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>
					</a>
					<a>
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/bingung-usaha-fotocopy.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/bingung-usaha-fotocopy.jpg 1301w"
							width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>		
							 
					</a>
					<a>
					<amp-img srcset="<?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/pilihan-paket-usaha-fotocopy.jpg 1300w, <?php echo $c_cdn;?>/new/images/banner-slide/paket-usaha/pilihan-paket-usaha-fotocopy.jpg 1301w"
							width="691"
					         height="400"
							 class="fotoslide"
					         layout="responsive"></amp-img>		
							 
					</a>
				</amp-carousel>		
	</div>
    <div class="container-fluid container-full">
		<div class="row">
			<div class="col-xs-12">							
				<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Paket Usaha Fotocopy <span class="brush" ><?php echo date('Y');?></span>  !! </div></div>
				<amp-carousel class="blog-carousel slidecar" layout="fixed-height" height=330>
							<?php
							$result = $db->query($m_dataproduk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_id = $a_data['id_produk'];
							$info_paket=$a_data['infopaket'];
							$a_nama_produk = strtoupper($a_data['nama_paket']);
							$a_nama_produk2 = strtoupper($a_data['nama_produk']);
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
							$a_harga_baru = $a_data['harga_baru']+0;
							$a_rekomendasi = $a_data['rekomendasi'];
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
							if($a_harga_lama == 0){$a_harga_lama=$a_harga_baru*2;}
							if($a_harga_baru !=0){$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));}
							?>				
					<div class="capronego blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>																											
						<div class="infopro">
						<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="capronego">
							<h5 class="text-left margin-0"><b><?PHP echo $a_nama_produk; ?></b><br><small><?php echo $a_nama_produk2; ?></small></h5>
								<div class="pricepro">
									<div id="normalPrice" class="productLineThrough">Rp <?php echo format_rupiah($a_harga_lama); ?></div>
								</div>
								<div class="divDetailProductItemPrice">Rp <?php echo format_rupiah($a_harga_baru); ?></div>
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
							<div class="pt20 mt30">
								<a href="<?php echo $sms_nego;?>" class="button button-small  primary-bg light-color" >Nego</a>			
								<a on="tap:shipping-details-<?php echo $a_id?>" class="button button-small  primary-bg light-color" >Info</a>
							</div>
							<?php  require PLUG.'/mobile/infopaket.php'; ?>
							<div class="kanwil"><span class="primary-color"> Daerah : <?php echo ucwords($query['city']); ?></span></div>
						</div>
					</div>					
					<?php } ?>
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
				<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS"><span class="brush" >GRATISS</span> Perlengkapan Usaha !! </div></div>	
				<amp-carousel class="blog-carousel" layout="fixed-height" height=150>
							<?php 	$data_produk = ("select *  from produk where category='Perlengkapan'  order by produk.id_produk ASC");$query_p = $db->query($data_produk); $totalrate23=0; $totalpembeli=0;	?>
							<?php
							$result = $db->query($data_produk);
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
							$a_image_tiga = $a_data['image_4'];
							$a_hot = $a_data['hot'];
							$a_deskripsi_a = $a_data['deskripsi_a'];
							$a_harga_lama = $a_data['harga_lama'];
							$a_harga_baru = $a_data['harga_baru'];
							$a_rekomendasi = $a_data['rekomendasi'];
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
							if($a_harga_lama == 0){$a_harga_lama=$a_harga_baru*2;}
							if($a_harga_baru !=0){$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));}
							include PLUG.'/mobile/nego.php';
							?>				
					<div class="capronego plkpn blog-carousel-item" >
						<div class="preview"><amp-img src="<?PHP echo $a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" width="99" height="99"></amp-img>	</div>																										
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="capronego blog-carousel-item">
							<h6 class="margin-0"><?PHP echo $a_nama_produk; ?></h6>
							<div class="">Rp <?php echo format_rupiah($a_harga_baru); ?></div>		
						</a>						
						</div>						
					</div>					
					<?php } ?>	
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_cdn_img?>/perlengkapan/travo.jpg" layout="responsive" alt="Travo" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">Travo Pure</h6>
							<div class="">Rp 650.000</div>		
						</a>						
						</div>						
					</div>					
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_cdn?>/new/images/amp/toner-bp.png" layout="responsive" alt="Toner Mesin Fotocopy" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">Toner 1 Kg</h6>
							<div class="">Rp 150.000</div>		
						</a>						
						</div>						
					</div>		
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_cdn_img?>/perlengkapan/buku-manual.jpg" layout="responsive" alt="Buku Manual" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">Manual Penggunaan</h6>
							<div class="">Rp 150.000</div>		
						</a>						
						</div>						
					</div>		
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_cdn ?>/new/images/amp/sandisk-otg.png" layout="responsive" alt="Driver" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">USB OTG Mesin</h6>
							<div class="">Rp 225.000</div>		
						</a>						
						</div>						
					</div>		
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_cdn?>/new/images/amp/free-ongkir.png" layout="responsive" alt="Pengiriman" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">Ongkos Kirim</h6>
							<div class="">Gratiss !!</div>		
						</a>						
						</div>						
					</div>		
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?php echo $c_cdn_img;?>/mobile/banner/servis-fotocopy.jpg" layout="responsive" alt="Service" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">Service & Instalasi</h6>
							<div class="">Rp 150.000</div>		
						</a>						
						</div>						
					</div>	
					<div class="capronego plkpn blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_cdn?>/new/images/amp/free-konsul.png" layout="responsive" alt="Konsultasi" ></amp-img>																											
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<a class="capronego blog-carousel-item">
							<h6 class="margin-0">Konsultasi Usaha</h6>
							<div class="">Rp 5.000.000</div>		
						</a>						
						</div>						
					</div>						
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->	
			</div><!-- COL-XS-12 ENDS -->		
		</div>
	</div>
</div>	
	</div><!-- SLIDER ENDS -->
	<?php  require_once PLUG.'/mobile/share.php'; ?>
    <div class="container-full">
				<div class="space-2"></div>
				<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Paket <span class="brush" >USAHA</span> Fotocopy di <?php echo ucwords($c_title);?> !! </div>
				<amp-youtube width="480"
				  height="270"
				  layout="responsive"
				  data-videoid="qBY-ER422uA"
				  autoplay >
				</amp-youtube>						
				<!-- BONES-PRODUCT-GRID AND BONES-PRODUCT-LIST-ITEM STARTS -->	
				<div id="meshSection1" class="container-fluid  meshSection">
					<div class="meshTitle">
						<div class="meshTitleVanectro"> Bingung Nyari Mesin Fotocopy untuk <b>USAHA</b> ??</div>
					</div>
					<br><br>
					<div class="meshDescription">
					Cari penyedia Mesin Fotocopy yang TERPERCAYA, Bertanggung Jawab, Menguntungkan Usaha. Cari penyedia yang Ngasih <b>SOLUSI</b> !! di <?php echo $site_name;?> Paket usaha fotocopy dengan mesin baru atau mesin rekondisi harga termurah rekomendasi bagi yang ingin memulai usaha Fotocopy
					<ul class="text-left">
						<li><b>GRATISS ONGKIR, Se-Indonesia !!</b></li>
						<li><b>GARANSI RESMI, Gratiss Seumur Hidup !!</b></li>
						<li><b>GARANSI 100% Uang Kembali / Return !!</b></li>				
						<li><b>12.000++ SERVICE POINT, SE-INDONESIA !!</b></li>
						<li><b>GRATISS KONSULTASI & TUTORIAL !!</b></li>
						<li><b>RESPON TEKNISI CEPAT - 15 MENIT !!</b></li>
						<li><b>KETERSEDIAAN SPAREPART MURAH !!</b></li>
					</ul></div>	
					<div class="space-2"></div>
				</div>				
				<?php  require_once PLUG.'/mobile/keunggulan.php'; ?>
	</div>
	<div class="pekat container-fluid">		
		<div class="row">
			<div class="subkebutuhan col-xs-12">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Kenapa Harus <span class="brush" ><?php echo $site_name;?></span>??</div>
				<hr>
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/call-center-female-workers.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Gratiss Konsultasi<br><small>Konsultasi Seumur Hidup</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/free-delivery.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">Gratiss Ongkir<br><small>Semua Kota Se-Indonesia</small></h4>
					</div>
				</div>	
				<div class="apakahusaha">					
					<div class="col-xs-3"> 
						<amp-img width="50" height="50" src="<?php echo $c_cdn;?>/new/images/amp/world-grid-with-placeholder.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
					</div>
					<div class="col-xs-9 box-point"> 
						<h4 class="pointkeunggulan">100.000++ Teknisi<br><small>Sampai Plosok Se-Indonesia</small></h4>
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
$sql = "SELECT * FROM videos where (title like '%usaha%' or title like '%rekondisi%')order by videos.id desc";
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
				<a href="<?php echo $c_url;?>/tv/" class="button button-small  primary-bg light-color margin-left-0">Kesini Aja <i class="fa fa-caret-right icon-at-right"></i></a>
			</div><!-- COL-XS-6 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	

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
