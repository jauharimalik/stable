<?php if (isset($_POST['nego2'])) {
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
else {$negojahat="Negonya Jangan Jahat Jahat dong !!";}
}?>										
<div class="container-fluid container-full hala pt51">
<div class="halb hala">		
<amp-selector role="tablist"
  layout="container"
  class="ampTabContainer">
  <div role="tab"
    class="tabButton"
    selected
    option="spoilera"><i class="fa fa-random"></i> Compare</div>
	<div role="tabpanel" class="tabContent">
	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> Perbandingan Antar Mesin !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">		
							<div class="space-2"></div>
				<amp-iframe width="600" height="400"
				            layout="responsive"
				            sandbox="allow-scripts allow-same-origin allow-popups"
				            frameborder="0"
				            src="<?php echo $c_url;?>/compare2">
					<amp-img width="334" height="155" layout="responsive" src="<?PHP echo $c_cdn; ?>/new/images/compare.png" placeholder></amp-img>
				</amp-iframe><!-- GOOGLE MAPS ENDS -->							
							<div class="space-2"></div>
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->
			</div>
		</section>
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerb"><i class="fa fa-volume-control-phone"></i> Bantuan</div>
	<div role="tabpanel" class="tabContent">
		<?php  require_once PLUG.'/mobile/help.php'; ?>	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerc"><i class="fa fa-map-signs"></i> Tahapan</div>
  <div role="tabpanel" class="tabContent">
	<div class="container-fluid">
		<div class="row"><div class="col-xs-12"><div class="bordered-title"><h3>Proses Pencarian</h3><h5>Mesin Fotocopy Berdasar Kebutuhan</h5></div></div></div>
		<div class="row">
			<div class="col-xs-12">
				<div class="time-line-item">
					<h4 class="margin-0">Sesuaikan Anggaran <br> <small> Tahap Pertama </small></h4>
					<p class="margin-0">Isi form diatas dengan budget yang kamu punya, dapatkan spesifikasi dan sarannya, Temukan mesin yang paling cocok denganmu !!</p>
				</div>
				<div class="time-line-item">
					<h4 class="margin-0">Curhatin Keluh Kesahmu <br> <small> Tahap Kedua </small></h4>
					<p class="margin-0">Segera setelah kamu selesai, tanyakan saja tentang ketersediaan, harga, serta pengimanya di <?php echo $marketing_mesin." - ".$telp_marketing; ?>.</p>
				</div>					
				<div class="time-line-item">
					<h4 class="margin-0">Nego Harganya<br> <small> Tahap Ketiga </small></h4>
					<p class="margin-0">Kamu bisa langsung memesan dengan cara yang menurutmu mudah, dan langsung kami proses dihari yang sama..</p>
				</div>						
			</div>
		</div>
	</div>	

  </div>
</amp-selector>	
</div>	
	</div><!-- SLIDER ENDS -->
	<div class="container-fluid container-full sbawah pt20">					
		<!-- TITLE STARTS -->
		<div class="row">
			<div class="col-xs-12">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Cuma Ada Di <span class="brush" ><?php echo $site_name;?></span> !! </div>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->

		<div class="row">
			<div class="col-xs-12">
				<amp-carousel class="blog-carousel" layout="fixed-height" height=145>	
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/courier.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Terima C.O.D</h5>
							<small>Se-Indonesia</small>
						</div>
					</a>
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/free-delivery.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Free Ongkir</h5>
							<small>Sampai Lokasi</small>
						</div>
					</a>					
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/invoice.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Garansi Lifetime</h5>
							<small>Garansi Seumur Hidup</small>
						</div>
					</a>					
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/aman.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Transaksi Aman</h5>
							<small>Rekening Perusahaan</small>
						</div>
					</a>
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/world-grid-with-placeholder.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Service Center</h5>
							<small>10.000+  Se-Indonesia</small>
						</div>
					</a>	
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/customer.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
						<?php $total_pelanggan = $db->num_rows("SELECT * FROM aktivitas_pelanggan order by tanggal desc"); $total_pelanggan= $total_pelanggan+1680; ?>
							<h5 class="margin-0"><?php echo format_rupiah($total_pelanggan);?>++ Ulasan </h5>
							<small>Dulas oleh Pelanggan... </small>
						</div>
					</a>
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/viral.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Forum Diskusi</h5>
							<small>Di Semua Kota</small>
						</div>
					</a>					
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/payment-method.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Jaminan 100% </h5>
							<small>Uang Kembali Full</small>
						</div>
					</a>	
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/return.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Tukar Baru</h5>
							<small>Barang Rusak / Cacat</small>
						</div>
					</a>						
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/mobile-print.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Mobile Print</h5>
							<small>Cetak via HP Tanpa Wifi</small>
						</div>
					</a>					
					<a  class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/24-hours.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Full Support</h5>
							<small>Keluhan Pelanggan</small>
						</div>
					</a>					
					<a  class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/call-center-female-workers.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Konsultasi Gratiss</h5>
							<small>Respon Cepat 5-10 Detik</small>
						</div>
					</a>		
					<a  class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/educational-video.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Service Gratiss</h5>
							<small>Video Tutorial + Remote</small>
						</div>
					</a>
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/low-price.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Harga Termurah</h5>
							<small>Gak Pake Bohong</small>
						</div>
					</a>					
					<a class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/trophy.svg" width=90 height=90></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<h5 class="margin-0">Kualitas Terbaik</h5>
							<small>Bukan Jual Putus</small>
						</div>
					</a>					
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->			
		
	</div><!-- CONTAINER-FLUID ENDS -->	
	


	