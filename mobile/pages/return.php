    <div class="container-fluid container-full pt51">
<div class="halb">		
<amp-selector role="tablist"
  layout="container"
  class="ampTabContainer">
  <div role="tab"
    class="tabButton"
    selected
    option="spoilera"><i class="fa fa-pencil-square"></i> Form</div>
  <div role="tabpanel" class="tabContent">
	<div class="container-fluid container-full">
		<div class="row">
			<div class="col-xs-12">
				<amp-img width="320" height="110" src="<?PHP echo $c_cdn; ?>/new/images/kirim-barang.png" layout="responsive"></amp-img>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FULL ENDS -->
	<div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Cara Return Pesanan:</div></div>	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="artikelpilihan">
				<p>Kamu bisa mengembalikan barang dengan cara berikut:</p>
					<ol>
						<li> Pengembalian barang menggunakan Jasa Pengiriman TIKI / JNE / Wahana / DLL 
							<ul>
								<li>Kamu tetap dapat memanfaatkan jasa pengiriman lain yang terdekat dari lokasimu.</li>
								<li>Kamu hanya perlu mengirimkan email bukti resi pengiriman ke <?php echo $telp_marketing;?> dengan subjek: PENGEMBALIAN - [nomor pesanan]. Contoh: PENGEMBALIAN-1234567.</li>
								<li>Atau bisa juga dengan cara mengisi form resi disebelah ini untuk melakukan konfirmasi pengiriman.</li>
							</ul>
						</li> 
						<li>Pastikan barang terbungkus rapi lengkap dengan pelindung.</li>
						<li> Beri label pengiriman sebagai berikut: <br> 
						<div class="return-addrs"><h4><?php echo $legal_pt;?> </h4> UP: Pengembalian Pesanan<br> 
						<b><?php echo "$d_alamat2";?> <br> <?php echo "$d_alamat3";?></b><br><br> 
						No. Pengembalian: [ <i>isi no. pesanan di sini</i>]<br> No. Handphone: [ <i>isi no. handphone di sini</i>] </div>
						</li> 							
					</ol>	
				</div>			
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div><!-- CONTAINER-FULL ENDS -->	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerb"><i class="fa fa-barcode"></i> Resi</div>
  <div role="tabpanel" class="tabContent">
	<div class="container-fluid container-full">	
		<amp-img width="1300" height="233" src="<?PHP echo $c_cdn; ?>/new/images/header-email-us.jpg" layout="responsive"></amp-img>
		<div class="row">
			<div class="col-xs-12">
				<div class="bordered-title">
					<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Silahkan Kirimi Kami <span class="brush">PESAN</span> disini.</div>
				</div><!-- TITLE ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div>
	<div class="container-fluid">	

		<div class="row">
			<div class="col-xs-12">
				<form method="post" action-xhr="<?php echo $c_url;?>/hubungi" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox">
					<fieldset>
						<input name="nama" placeholder="Nama Lengkap" type="text" class="input" required>
						<input name="email" placeholder="E-Mail" type="email" class="input" required>
						<input name="telp" placeholder="Nomor yang bisa di Hubungi" type="tel" class="input" required>
						<textarea name="isi" placeholder="Pesan yang akan disampaikan" class="input" required></textarea>
						<center><button type="submit" name="kirim" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Kirim </button></center>
					</fieldset>
				</form>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerc"><i class="fa fa-info"></i> Ketentuan</div>
  <div role="tabpanel" class="tabContent">
		<div class="artikelpilihan container-fluid">
			<p>Pengembalian barang bisa dilakukan dalam waktu 3 -5 hari sejak barang diterima, dihitung dari barang diterima hingga tanggal kirim. Kamu bisa mengembalikan barang yang sudah dibeli di <?php echo $site_name;?> karena hal-hal berikut:</p>
			<div class="space-2"></div>
			<table class="syarat"> 
				<thead>
					<tr> 
						<td>Alasan</td> 
						<td>Tukar</td> 
						<td>Uang</td>
					</tr> 
				</thead> 
				<tbody>
					<tr> 
						<td>Barang rusak ( <i>Defect On Arrival</i> )</td> 
						<td>Garansi</td> 
						<td>Garansi</td>
					</tr>
					<tr> 
						<td>Barang yang diterima melewati batas waktu pengiriman yang dijanjikan</td> 
						<td>-</td> 
						<td>Garansi</td>
					</tr>
					<tr> 
						<td>Pembatalan transaksi</td>
						<td>-</td> 
						<td>-</td> 
					</tr> 
				</tbody>
			</table>
			<div>
				<strong>Ketentuan barang Rusak (Defect on Arrival)</strong><br>
				<ul> 
					<li>Cacat barang, dan yang bukan karena kesalahan penggunaan. Contoh : jatuh dan pecah, kesalahan instalasi, bencana alam, tersambar petir, 
					perubahan tegangan listrik, dan lain lain.</li> <li>Kerusakan barang akibat proses pengiriman <?php echo $site_name;?> *Khusus Wilayah Jakarta.</li>
				</ul> 
			</div>
			<div>
				<strong>Ketentuan barang yang memiliki spesifikasi tidak sesuai</strong><br>
				<ul> 
					<li>Spesifikasi barang yang diterima berbeda dengan spesifikasi yang dipesan di website.</li> 
					<li>Kelengkapan barang yang diterima tidak sesuai dengan persetujuaan saat pemesanan.</li> 
					<li>Barang yang diterima tidak sesuai dengan yang dipesan, mencakup jumlah, tipe.</li>
				</ul> 
			</div>
			<div>
				<strong>Ketentuan Pembatalan transaksi</strong><br>
				<ul> 
					<li> Pelanggan bisa membatalkan transaksi. <br> Note: Sebelum barang diterima oleh pihak Pelanggan, seluruh dana atau DP yang diberikan ke pihak 
					Vanectro.Com akan dianggap hangus, apabila pesanan dibatalkan. </li>
				</ul> 
			</div>
			<div>
				<strong>Kondisi barang yang Dikembalikan</strong><br>
				<ul> 
					<li>Kembalikan barang secara lengkap, sesuai dengan kelengkapan saat diterima:
						<ol> 
						<li>Kartu garansi (jika ada)</li> 
						<li>Buku panduan barang (jika ada)</li> 
						<li>Kelengkapan barang seperti aksesoris yang ada dalam paket penjualan</li> 
						<li>Kardus dalam keadaan baik, tidak ada coretan, tidak ada kerusakan atau penyok (untuk kasus selain rusak akibat pengiriman)</li> 
						<li>Bersih dari username/password/pin</li> 
						<li>IMEI barang sama dengan yang tertera di kardus</li>
						</ol> 
					</li> 
					<li>barang dalam keadaan terbungkus rapi lengkap dengan pelindung agar tidak mudah rusak.</li> 
					<li>Label pengiriman tidak ditempel langsung pada barang</li>
				</ul> 
			</div>
		</div>
 </div>
</amp-selector>		
</div>	
	</div><!-- SLIDER ENDS -->
<div class="container-fluid">		
	<div align="center">
		<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="button chat2 primary-bg light-color margin-left-0">Kembali</a>
		<a href="<?php echo $c_url?>/panduan-pelanggan" class="button chat2 primary-bg light-color margin-left-0">Panduan Pelanggan</a>
	</div>		
</div>		