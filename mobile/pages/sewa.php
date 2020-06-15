	<div class="container-fluid container-full pt51">
	<amp-img width="720" height="400" src="<?PHP echo $c_cdn; ?>/new/images/rental-mesin-fotocopy.jpg" layout="responsive"></amp-img>	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<form method="get" action="<?php echo $c_url;?>/mcarisewa" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox">
					<fieldset>
						<div class="iconform"><i class="fa fa-map-marker"></i></div>
						<div class="labelform">
							<p class="lbl-search">Pilih Lokasi</p>
							<select class="input" name="kota" required>
								<option value="">Pilih Kota</option>
								<option value="jakarta">Jakarta</option>
								<option value="bogor">Bogor</option>
								<option value="depok">Depok</option>
								<option value="tangerang">Tangerang</option>
								<option value="bekasi">Bekasi</option>
							</select>						
						</div>
						<div class="iconform"><i class="fa fa-print"></i></div>
						<div class="labelform">
							<p class="lbl-search">Pilih Hasil Cetak Copy | Print</p>
							<select class="input" name="cate">
								<option>Pilih Hasil Cetak</option>
								<option value="bw">Hitam Putih</option>
								<option value="warna">Warna</option>
							</select>	
						</div>		
						<div class="iconform"><i class="fa fa-file"></i></div>
						<div class="labelform">						
							<p class="lbl-search">Pilih Ukuran Kertas</p>	
							<select class="input" name="ukuran">
								<option>Pilih Ukuran Kertas</option>
								<option value="a4">A4</option>
								<option value="folio">FOLIO</option>
								<option value="a3">A3</option>
							</select>		
						</div>	
						<div class="iconform"><i class="fa fa-calculator"></i></div>
						<div class="labelform">										
						<p class="lbl-search">Masukkan Pemakaian Kertas | Rim Perbulan</p>	
						<input name="freecopy" placeholder="Contoh : 1 Rim" type="text" class="input">	
						</div>
						<center><button type="submit" name="kirim" class="button chat2 orangebg light-color margin-left-0"> <i class="fa fa-search"></i> Cari Mesin </button></center>
					</fieldset>
				</form>
			</div><!-- COL-XS-12 ENDS -->
		</div>
	</div>
	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga SEWA MESIN FOTOCOPY <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><table>
								  <thead>
									<tr>
									  <th scope="col">Mesin Fotocopy</th>
									  <th scope="col">Free Copy</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	
								$hpsewa = $db->query($psewam); 
								while ($dsewa = $hpsewa->fetch_array(MYSQLI_BOTH)) { 
									$ukuran_sewa = strtoupper($dsewa['ukuran']);
									$ukuran_sewa = str_replace('A4 | QUARTO | LTR','A4',$ukuran_sewa);
									$ukuran_sewa = str_replace('FOLIO | F4 | A4','FOLIO',$ukuran_sewa);
									$ukuran_sewa = str_replace('A3 | FOLIO | F4 | A4','A3',$ukuran_sewa);
									
									$jenis_mesin = strtoupper($dsewa['jenis']);
									$jenis_mesin = str_replace('HITAM PUTIH','BW',$jenis_mesin);
									$jenis_mesin = str_replace('WARNA | CMYK','WARNA',$jenis_mesin);
									$nama_mesin = $jenis_mesin." | ".$ukuran_sewa;
									
									$pemakaian_sewa = format_rupiah($dsewa['pemakaian']);
									
									if($pemakaian_sewa<=0){$pemakaian_sewa="Sesuai Kebutuhan";}
									else{$pemakaian_sewa=$pemakaian_sewa." Lembar";}	
									
									$harga_sewa = format_rupiah($dsewa['harga']);
									$ppc_sewa = format_rupiah($dsewa['perclick']);
									$sewa_nama_produk = "Sewa mesin fotocopy yang spesifikasinya : ".$jenis_mesin.", ukuran kertas  ".$ukuran_sewa.", kira kira ".$pemakaian_sewa." lembar / bulan, dan kisaran harganya Rp ".$harga_sewa ;
							
							?>	
										<tr>
										  <td data-label="Ukuran"><?php echo ucwords($nama_mesin);?></td>
										  <td data-label="Pemakaian"><?php echo $pemakaian_sewa;?> </td>
										  <td data-label="Harga">Rp <?php echo $harga_sewa; ?></td>
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
	<div class="container judulperaga">
		<div class="row">
			<div class="col-md-12 ">
				<center><h1> Varian Unit Mesin Fotocopy di Sewa kan</h1></center>
			</div>
		</div>
	</div>
	<br>			
	<amp-carousel class="blog-carousel" type="slides" autoplay delay="5500" layout="fixed-height" height=280>
		<?php 
		
		$gambar_peraga = [ array("sewa-mesin-fotocopy.jpg","Samsung"), array("sewa-mesin-fotocopy-1.jpg","Samsung"),  array("sewa-mesin-fotocopy-2.jpg","Fuji Xerox"), array("sewa-mesin-fotocopy-3.jpg","Canon"), 
		array("sewa-mesin-fotocopy-4.jpg","Canon"),  array("sewa-mesin-fotocopy-5.jpg","Canon"),  array("sewa-mesin-fotocopy-6.jpg","Canon"),  array("sewa-mesin-fotocopy-7.jpg","Canon"),   array("sewa-mesin-fotocopy-3.jpg","Fuji Xerox")];
		$total_gambar_peraga = count($gambar_peraga);
		$i = 1;
		while ($i < $total_gambar_peraga){
		?>				
			<div class="capronego" >
				<amp-img width="184" height="184" src="<?php echo $c_url."/compressed/sewa/".$gambar_peraga[$i][0]; ?>" layout="responsive" alt="sewa mesin fotocopy" ></amp-img>
				<div class="categories-car"><h4><span><?php echo $gambar_peraga[$i][1]; ?></span></h4></div>
			</div>	
		<?php $i++; } ?>
	</amp-carousel><!-- BLOG CAROUSEL ENDS -->		
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">	
						<div class="iconform2">
							<amp-img width="30" height="30" src="<?php echo $c_cdn."/new/images/sewa/bebaspakai.svg"; ?>" layout="responsive" alt="sewa mesin fotocopy" ></amp-img>
						</div>
						<div class="labelform2">
							<h2>Support Teknisi Profesional Untuk Kantormu</h2>
							<p><small>Sewa Mesin Fotocopy Jakarta, Bogor, Depok, Tangerang, Bekasi, Karawang, Cikarang. Teknisi khusus untuk 1 Kantor Pengguna jasa sewa mesin fotocopy, dan bebas memilih teknisi lain 
							apabila pelanggan tidak puas dengan pelayanannya.</small></p>
						</div>
						<div class="iconform2"><amp-img width="30" height="30" src="<?php echo $c_cdn."/new/images/sewa/waktu.svg"; ?>" layout="responsive" alt="sewa mesin fotocopy" ></amp-img></div>
						<div class="labelform2">
							<h2>Penanganan Mesin Fotocopy 1 Jam Maximal</h2>
							<p><small>Mesin fotocopy yang mengalami kerusakan parah sekalipun mesinnya akan diganti dengan unit yang baru lagi. Jangan Khawatir apabila mesin rusak parah sekalipun. 
							Gratiss biaya apapun dalam perawatanya. </small></p>
						</div>
						<div class="iconform2"><amp-img width="30" height="30" src="<?php echo $c_cdn."/new/images/sewa/tarifjujur.svg"; ?>" layout="responsive" alt="sewa mesin fotocopy" ></amp-img></div>
						<div class="labelform2">
							<h2>Sewa Mesin Fotocopy Murah - Harga Mulai Rp 284.000</h2>
							<p><small>Harga yang ditawarkan pun juga bermacam macam, sama sekali tidak akan memberatkan Kantor Pengguna jasa Sewa Mesin Fotocopy. Harga tersebut untuk pembayaran bulanan, 
							dan minimal kontrak 1 Tahun. </small></p><br>
							<br>			
						</div>
			</div>
		</div>
	</div>
	</div><!-- SLIDER ENDS -->
	<amp-accordion>
		<section expanded>
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Keunggulan Sewa di <?php echo $site_name;?>!! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
             <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
<div id="ctl00_cphContent_divContent" class="padding">
<p class="MsoNormal"><b class="">Alasan Memilih Sewa di Tempat Kami :</b></p>
<ol>
    <li>Ukuran Kertas : A3 / A4 / F4</li>
    <li>Full Fitur : Print / Scan / Copy / Fax</li>
    <li>Kecepatan : 20 sd 55 PPM</li>
    <li>Fitur Scan : Bisa Scan &amp; Send / Scan to E-mail</li>
    <li>Fitur Print : Mobile Print &amp; Cloud Print</li>
    <li>Fitur Mesin : Wifi, Bolak Balik, Image Repeat, Sortir</li>
    <li>Hasil Print : Hitam Putih &amp; Warna</li>
    <li>Jaminan Penaganan Teknisi 3jam Kurang</li>
    <li>Jaminan Ketepatan Waktu &amp; Kecepatan Teknisi Lapangan</li>
    <li>Gratiss Instalasi &amp; Konsultasi Mesin Fotocopy</li>
    <li>Gratiss Maintenance Mesin Fotocopy Full</li>
    <li>Gratiss Instalasi Jaringan &amp; Pelatihan</li>
</ol>
</div>
						</div>
					</div>		
				</div>	
				
			</div>
		</section>
	</amp-accordion>	
<amp-img width="1198" height="1038" src="<?PHP echo $c_cdn; ?>/new/images/sewa/sewa-mesin-fotocopy-teknisi.jpg" layout="responsive"></amp-img>		
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
						<?php 	$data_produk = ("select *  from produk  LEFT JOIN aktivitas_pelanggan ON aktivitas_pelanggan.id_produk = produk.id_produk where produk.sewa !=''  ORDER BY id DESC, tanggal DESC LIMIT 6"); ?>
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
