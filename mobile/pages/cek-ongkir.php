    <?php 	if(!isset($_REQUEST['order_id'])){ ?>	
	<div class="container-fluid container-full pt51">
		<amp-img width="320" height="110" src="<?PHP echo $c_cdn; ?>/new/images/kirim-barang.png" layout="responsive"></amp-img>
		<div class="row">
			<div class="col-xs-12">
				<div class="bordered-title">
					<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Cek Tarif <span class="brush">PENGIRIMAN</span> disini.</div>
				</div><!-- TITLE ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div>
	<div class="container-fluid">	
		<div class="row">
			<div class="col-xs-12">
				<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
					<fieldset>
						<input name="name" id="lacakpesanan" placeholder="Masukkan Nama Kotamu !!" type="text" class="input" required>
						<center><button type="submit" name="cari" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-search"></i> Cari </button></center>
					</fieldset>
				</form>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- SLIDER ENDS -->
	
	<?php 
if(isset($_POST["cari"])){
 $judul2=$_POST["name"];
 $judul2=strtolower($judul2);
 if(($judul2=="jakarta")||($judul2=="bogor")||($judul2=="depok")||($judul2=="semarang")||($judul2=="rembang")||($judul2=="jogja")||($judul2=="diy")||($judul2=="yogya")||($judul2=="batam")||($judul2=="tangerang")||($judul2=="bekasi")||($judul2=="karawang")||($judul2=="banten")){ ?>
 	<div class="container-fluid container-full margin-top-minus-30">
		<div class="row">
			<div class="col-xs-12 spartan">
					<table>
						<tbody>
							<tr>
								<td><b>Kota </b></td><td>:</td><td><?php echo ucwords($judul2); ?></td>
							</tr>
							<tr>
								<td><b>Ekspedisi </b></td><td>:</td><td> Vanectro Express</td>
							</tr>
							<tr>
								<td ><b>Estimasi </b></td><td>:</td><td>Bayar Dulu, Besok Sampai !!</td>
							</tr>
							<tr>
								<td ><b>Tarif </b></td><td>:</td><td>Gratiss Om !! </td>
							</tr>							
						</tbody>
					</table>
			</div><!-- COL-XS-4 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
<?php } else { 
 $data_result = ("select k.kota, k.kota_id, h.hrg_kota_tujuan, h.hrg_kota,h.hrg_hari, h.hrg_kurir, h.hrg_jumlah from tbl_harga h,  tbl_kota k where k.kota_id=h.hrg_kota_tujuan and h.hrg_kota='55' and  k.kota	like '%$judul2%' order by k.kota DESC, h.hrg_kurir DESC  "); 

 $result = $db->query($data_result);
    while($row = $result->fetch_array(MYSQLI_BOTH)){ 
	$kota= ucwords(str_replace("Kabupaten","",$row['kota']));
	$kota= ucwords(str_replace("Kota","",$row['kota']));
	$kota= ucwords(str_replace("Kabupaten","",$kota));
	$kota= ucwords(str_replace("Kota","",$kota));	
	$estimasi = $row['hrg_hari'];
	$ekspedisi = strtolower($row['hrg_kurir']);
	$tarif=(number_format($row['hrg_jumlah'], 0,',','.'));
	if($ekspedisi=="tiki"){$ekspedisi="MARHATI";}
	if($ekspedisi=="jne"){$ekspedisi="GOGO EKSPRESS";}
	if($ekspedisi=="pos"){$ekspedisi="SAKAI";}
	if($estimasi<1){$estimasi="4-7";}
	?>	
	<div class="container-fluid container-full margin-top-minus-30">
		<div class="row">
			<div class="col-xs-12 spartan">
					<table>
						<tbody>
							<tr>
								<td><b>Kota </b></td><td>:</td><td><?php echo $kota; ?></td>
							</tr>
							<tr>
								<td><b>Ekspedisi </b></td><td>:</td><td><?php echo ucwords($ekspedisi); ?></td>
							</tr>
							<tr>
								<td ><b>Estimasi </b></td><td>:</td><td><?php echo $estimasi; ?> Hari</td>
							</tr>
							<tr>
								<td ><b>Tarif </b></td><td>:</td><td><?php echo "Rp ".$tarif." / KG"; ?> </td>
							</tr>							
						</tbody>
					</table>
			</div><!-- COL-XS-4 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
	<?php } ?>
<?php }}} ?>
<div class="space-2"></div>
<div class="container-fluid margin-top-minus-30">
<table class="syarat"> 
	<thead>
		<tr> <td>BONUSS </td> <td>HARGA</td></tr> 
	</thead> 
	<tbody>
		<tr><td>INSTALASI MESIN FOTOCOPY</td> <td>GRATISS!!</td></tr>
		<tr><td>TRAINING PENGGUNAAN</td> <td>GRATISS!!</td></tr>
		<tr><td>PERLENGKAPAN JARINGAN</td> <td>GRATISS!!</td></tr>
		<tr><td>DRIVER MESIN</td> <td>GRATISS!!</td></tr>
		<tr><td>BUKU MANUAL &amp; TUTORIAL</td> <td>GRATISS!!</td></tr>
		<tr><td>TONER </td> <td>GRATISS!!</td></tr> 
		<tr><td>PANDUAN SERVIS</td> <td>GRATISS!!</td></tr> 
		<tr><td>CD TUTORIAL</td> <td>GRATISS!!</td></tr> 		
	</tbody>
</table>
</div>
<div class="space-2"></div>
<div class="container-fluid">
	<div class="padding">
		<div class="listview bgGrey bordered rounded">
			<div id="ctl00_cphContent_divContent" class="padding">
			<p class="MsoNormal"><b>Syarat & Ketentuan (C.O.D) :</b></p>
			<ul class="tcvpb_shortcode_ul ">
				<li> Customer melakukan pembayaran DP terlebih dahulu dengan nominal yang sudah disepakati dengan Marketing Support Kami, Barang segera diproses.</li>
				<li> Jika pelanggan melakukan pemesanan lebih dari jam 15:00, proses pengiriman unit barang akan dilakukan di jam operasional kantor berikutnya.</li>
			</ul>
			</div>
		</div>
	</div>			
	<div align="center">
		<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="button chat2 primary-bg light-color margin-left-0">Kembali</a>
		<a href="<?php echo $m_url?>/harga-mesin-fotocopy" class="button chat2 primary-bg light-color margin-left-0">Lanjut Berbelanja</a>
	</div>	
</div>


	