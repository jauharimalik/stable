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
    option="spoilera"><i class="fa fa-search"></i> Pencarian</div>
	<div role="tabpanel" class="tabContent">
	<amp-img width="334" height="152" src="<?PHP echo $c_cdn; ?>/new/images/sesuai-kebutuhan.png" layout="responsive"></amp-img>	
	<?php if(!isset($_POST['cari'])){ ?>
	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> Cari Berdasar Kebutuhan !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">		
							<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
								<fieldset>
									<select name="kebutuhan" class="input" required>
										<option>Pilih Kebutuhan</option>
										<option value="usaha">Kebutuhan Usaha</option>
										<option value="kantoran">Kebutuhan Kantor</option>
									</select>
									<select name="jenis" class="input" required>
										<option>Jenis Mesin</option>
										<option value="bw">Mesin Fotocopy Hitam Putih</option>
										<option value="warna">Mesin Fotocopy Warna</option>
									</select>
									<select name="prioritas" class="input" required>
										<option>Prioritas Kebutuhan</option>
										<option value="speed">Mesin Fotocopy Speed Tinggi</option>
										<option value="kapasitas">Mesin Fotocopy Kapasitas Tinggi</option>
									</select>
									<input name="harga" placeholder="Masukkan Nominal Budget Kebutuhanmu" type="tel" class="input" required>
									<center><button type="submit" name="cari" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-search"></i> Cari Mesin </button></center>
								</fieldset>
							</form>	
							<div class="space-2"></div>
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->
			</div>
		</section>
	</amp-accordion>	
	<?php } function int($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}$skor=0;$skor2=0;
	if(isset($_POST['cari'])){
	$kebutuhan=$_POST['kebutuhan'];
	if($kebutuhan=="kantoran"){$jkebutuhan="Baru";} else {$jkebutuhan="Rekondisi";}
	$jenis=$_POST['jenis'];
	if($jenis=="bw"){$jcat="Mesin Fotocopy Hitam Putih";} else {$jcat="Mesin Fotocopy Warna";}
	$prioritas=$_POST['prioritas'];
	$harga=str_replace('.','',$_POST['harga']);
	$min = 10000;	
	if($harga<=$min){echo "<script type='text/javascript'>alert('Maaf Harganya Terlalu Rendah, Produk Tidak Ditemukan');</script>";}
	else { $harga2=$harga;
	
			$query = ("SELECT * FROM produk where hot='".$jkebutuhan."' and category='".$jcat."' and (harga_baru between '".$min."' and '".$harga2."') order by harga_baru desc limit 3");
			$hasil = $db->query($query);
			while ($row = $hasil->fetch_array(MYSQLI_BOTH)) {
				$serimesin=$row['nama_produk'];
				$speed=int($row['nama_produk']);
				$speed_mesin = substr($speed,-2);
				$speed_mesin2 = substr($speed,0,2);
				if($speed_mesin>$speed_mesin2){$speed_mesin=$speed_mesin;} else {$speed_mesin=$speed_mesin2;}
				$kapasitas_awal = substr($speed,0,2);
				$kapasitas = ((($kapasitas_awal+($kapasitas_awal*0.2)) * 10000));
				if($speed_mesin==00){$speed_mesin = substr($speed,0,2);}
				$a_id=int($row['id_produk']);
				$a_harga_baru = $row['harga_baru'];
				$a_nama_produk = $row['nama_produk'];
				$rekomendasi=0;
				if($row['hot']=='Baru'){$skor2++;}
				if($row['category']=='Mesin Fotocopy Warna'){$skor++;}
				if($row['brand']=='Canon'){$brand="canon";} else { $brand="fujixerox";}	
			
	
	?>		
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> <?php echo $row['nama_produk']; ?> <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">	
<table> 			
	<tbody> 			
		<tr><td> <?php if($row['category']=='Mesin Fotocopy Warna'){echo"Hasil Cetak Warna";} else {echo "Hasil Cetak Hitam Putih";}  ?></td></tr> 			
		<tr><td> <?php echo $speed_mesin;?> Lembar / Menit</td></tr> 						
		<tr><td> <?php if($row['harga_baru']<=1000000){ echo "<span class='red'> Hubungi : $d_telp / $telp_marketing </span>";} else { echo "Rp ".format_rupiah($row['harga_baru']);}?> </td></tr> 			
		<tr><td> Copy Maks <?php echo format_rupiah($kapasitas); ?> Lembar / Bulan </td></tr> 			
		<tr><td> Jenis Mesin <?php if($row['category']=='Mesin Fotocopy Warna'){echo"Warna";} else {echo "Fotocopy Hitam Putih";} ?> Unit <?php echo $row['hot']; ?></td></tr> 			
		<tr><td> Hasil Cetak <?php if($row['category']=='Mesin Fotocopy Warna'){echo"Warna";$rekomendasi++;} else {echo "Hitam Putih";} ?>, 
				 <?php if($kapasitas>=250000){echo"Kapasitas Besar";$rekomendasi++;} else {echo "Kapasitas Standard";} ?>, <?php if($row['brand']=='Canon'){echo"Garansi Resmi 1 Tahun";} else {echo "Garansi Seumur Hidup";$rekomendasi++;} ?>.</td></tr> 			
		<tr><td> Sangat Cocok untuk <?php if($row['hot']=='Rekondisi'){echo"Pelaku Usaha Fotocopy";} else {echo "Perkantoran atau Pemerintahan";} ?> yang membutuhkan Mesin <?php if($row['hot']=='Rekondisi'){echo"Rekondisi";} else {echo "Baru";} ?> 
				<?php if($row['category']=='Mesin Fotocopy Warna'){echo"Hasil Cetak Warna";} ?> dengan <?php if($row['brand']=='Canon'){echo"Biaya Bulanan Rendah, Tangguh &amp; Murah";} else { echo" Kualitas Tinggi, Bergaransi, Hemat Biaya Perawatan";}?>.</td></tr> 			
	</tbody> 			
</table>
						<div class="mt30">
						<a on="tap:nego<?php echo $a_id;?>" class="button button-small  primary-bg light-color" >Nego Aja</a>	
						<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="button button-small  primary-bg light-color" >Detail</a>
						</div>			
				<amp-lightbox id="nego<?php echo $a_id;?>" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>NEGO !! </strong></span>
									<a on="tap:nego<?php echo $a_id;?>.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Seri Mesin : <?PHP echo $a_nama_produk; ?></b><br>
												<b>Harga Awal : Rp <?php echo format_rupiah($a_harga_baru); ?></b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox" class="i-amphtml-error">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" type="text" class="input" required="">
														<input name="email" placeholder="E-Mail" type="email" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" class="input" required="">
														<input name="harga_nego" placeholder="Masukkan Tawaran Harga" type="tel" class="input" required="">
														<input name="id_produk" type="hidden" value="<?php echo $a_id;?>" required="">
														<input name="seri_mesin" type="hidden" value="<?php echo $a_nama_produk;?>" required="">
														<input name="harga_mesin" type="hidden" value="<?php echo format_rupiah($a_harga_baru);?>" required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Kota / Alamat Pengiriman" class="input" required=""></textarea>
														<center><button type="submit" name="nego2" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Kirim </button></center>
													</fieldset>
												</form>												
											</div><!-- COL-XS-12 ENDS -->
										</div><!-- ROW ENDS -->

									</div><!-- CONTAINER-FLUID ENDS -->
			
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>	
				<?php if (isset($negojahat)) { ?>	
				<amp-lightbox id="negojahat" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong> Maaf, Coba Nego Lagi!!</strong></span>
									<a href="<?php echo $app->CURRENT_URL(); ?>" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Seri Mesin : <?PHP echo $a_nama_produk; ?></b><br>
												<b>Harga Awal : Rp <?php echo format_rupiah($a_harga_baru); ?></b><br>
												<b><?php echo $negojahat;?></b><br>
											</div>
										</div>	
									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>				
				<?php } ?>	
<div class="space-2"></div>
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->				
			</div>
		</section>
	</amp-accordion>	
	<?php } ?>			
	<center><a href="<?php echo $app->CURRENT_URL(); ?>" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-refresh"></i> Cari Mesin Lain </a></center>	
	<?php }} ?>
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
	


	