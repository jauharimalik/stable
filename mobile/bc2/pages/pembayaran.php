    <div class="container-fluid container-full pt51">
	<amp-img width="334" height="186" src="<?PHP echo $c_cdn_img; ?>/mobile/banner/bayar.jpg" layout="responsive"></amp-img>		
	</div><!-- SLIDER ENDS -->
	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Klik Disini : Cara Pembayarannya !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<ol>
					<li> Pembayaran bisa kamu lakukan setelah kamu melakukan pemesanan.</li> 
					<li> Transfer sesuai dengan nominal yang telah disepakati.</li> 
					<li> Pilihlah metode pembyaran yang manapun sesuai dengan metode pembayaran yang kamu inginkan.</li> 
					<li> Pembayaran melalui Kredit tidak bisa langsung diproses pada hari yang sama.</li> 
					<li> Untuk virtual account sedang dalam tahap pengembangan dimohon melakukan konfirmasi pesanan secara manual.</li> 
					<li> Lakukan konfirmasi pembayaran setelah kamu melakukan pembayaran.</li> 
					<li> Info lebih lanjut silahkan hubungi Customer Support Kami di <?php echo $d_telp;?>.</li> 
					<li> Berhati" terhadap penipuan yang mengatas namakan Vanectro.Com, apabila kamu menemukanya mohon hubungi kami di <?php echo $d_telp;?>.</li> 
				</ol>
			</div>
		</section>
	</amp-accordion>	
	<amp-accordion>
		<section>
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Nomer Rekening : BCA !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="space-2"></div>
				<center><amp-img width="128" height="32" src="<?php echo $c_cdn_img; ?>/mobile/bca-min.png" class="fixed-height"></amp-img>	</center>
				<table >
					<tbody>
						<tr><td colspan="2">Atas Nama</td><td>:</td><td><?php echo $nama_bca;?></td></tr>
						<tr><td colspan="2">Rekening</td><td>:</td><td><?php echo $nomor_bca;?></td></tr>
						<tr><td colspan="2">Cabang</td><td>:&nbsp;</td><td><?php echo $cabang_bca;?></td></tr>
					</tbody>
				</table>	
			</div>
		</section>
	</amp-accordion>	
	<amp-accordion>
		<section >
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Nomer Rekening : MANDIRI !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="space-2"></div>
				<center><amp-img width="128" height="32" src="<?php echo $c_cdn_img; ?>/mobile/mandiri-min.png" class="fixed-height"></amp-img>	</center>
				<table >
					<tbody>
						<tr><td colspan="2">Atas Nama</td><td>:</td><td><?php echo $nama_mandiri;?></td></tr>
						<tr><td colspan="2">Rekening</td><td>:</td><td><?php echo $nomor_mandiri;?></td></tr>
						<tr><td colspan="2">Cabang</td><td>:&nbsp;</td><td><?php echo $cabang_mandiri;?></td></tr>
					</tbody>
				</table>	
			</div>
		</section>
	</amp-accordion>	
	<amp-accordion>
		<section >
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Nomer Rekening : BRI !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="space-2"></div>
				<center><amp-img width="128" height="32" src="<?php echo $c_cdn_img; ?>/mobile/bri-min.png" class="fixed-height"></amp-img></center>	
				<table >
					<tbody>
						<tr><td colspan="2">Atas Nama</td><td>:</td><td><?php echo $nama_bri;?></td></tr>
						<tr><td colspan="2">Rekening</td><td>:</td><td><?php echo $nomor_bri;?></td></tr>
						<tr><td colspan="2">Cabang</td><td>:&nbsp;</td><td><?php echo $cabang_bri;?></td></tr>
					</tbody>
				</table>	
			</div>
		</section>
	</amp-accordion>		

	<div class="container-fluid pekat tabContent">	
		<div class="row">
			<div class="col-xs-1 spartan">
				<amp-img
						srcset="<?php echo $c_cdn_img;?>/m/Page-Images/Brand-Channel-Brand-Image-Mobile-20161109112929-0.png"
						width="40"
						height="40"
						layout="responsive"></amp-img>

			</div><!-- COL-XS-4 ENDS -->
			<div class="col-xs-6 spartan">
				<h4 class="margin-bottom-0"> Konfirmasi Pembayaran</h4>
				<p> Konfirmasikan Segera !!</p>
			</div>
			<div class="col-xs-2 spartan spartanbtn">
				<a href="<?php echo $c_url; ?>/konfirmasi-pembayaran" class="button button-small  primary-bg light-color margin-left-0">Konfirmasi <i class="fa fa-caret-right icon-at-right"></i></a>
			</div><!-- COL-XS-6 ENDS -->
		</div><!-- ROW ENDS -->
		<div class="row spartan">
			<h4 class="margin-bottom-0"> </h4>
			<div class="col-xs-12 ">
				<table>
					<tbody>
						<tr><td colspan="2">Nama</td><td>:</td><td><a class="txtNotLink clickable" href="tel:<?php echo $telp_marketing;?>"><?php echo $marketing_mesin;?></a></td></tr>
						<tr><td colspan="2">Telp</td><td>:</td><td>
							<a class="txtNotLink clickable" href="intent://send/62<?php echo $telp_marketing;?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">0<?php echo $telp_marketing;?></a> 
						</td></tr>
						<tr><td colspan="2">BBM</td><td>:</td><td> <a class="txtNotLink clickable" href="bbmi://<?php echo $bbm_marketing;?>"><?php echo $bbm_marketing;?></a></td></tr>
					</tbody>
				</table>	
			</div><!-- COL-XS-6 ENDS -->				
		</div><!-- ROW ENDS -->	
		<div class="row spartan">
			<h4 class="margin-bottom-0"> </h4>
			<div class="col-xs-12 ">
				<table>
					<tbody>
						<tr><td colspan="2">Nama</td><td>:</td><td><a class="txtNotLink clickable" href="tel:<?php echo $telp_marketing2;?>"><?php echo $marketing_mesin2." - ".$posisi_marketing2;?></a></td></tr>
						<tr><td colspan="2">Telp</td><td>:</td><td>
							<a class="txtNotLink clickable" href="intent://send/62<?php echo $telp_marketing2;?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">0<?php echo $telp_marketing2;?></a> 
						</td></tr>
						<tr><td colspan="2">BBM</td><td>:</td><td> <a class="txtNotLink clickable" href="bbmi://<?php echo $bbm_marketing2;?>"><?php echo $bbm_marketing2;?></a></td></tr>
					</tbody>
				</table>	
			</div><!-- COL-XS-6 ENDS -->				
		</div><!-- ROW ENDS -->				
	</div>				
                <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
							<div id="ctl00_cphContent_divContent" class="padding">
								<p class="MsoNormal"><b>Penting !! Harap Dibaca :</b></p>
									<ul class="tcvpb_shortcode_ul ">
										<li> Jangan pernah melakukan transaksi pembayaran ke Nomer Rekening Pribadi, Jika sampai hal itu terjadi, Maka resiko tersebut adalah tanggung jawab pelanggan.</li>
										<li> Customer melakukan pembayaran DP terlebih dahulu dengan nominal yang sudah disepakati dengan Marketing Support Kami.</li>
										<li> Jika pelanggan melakukan pemesanan lebih dari jam 15:00, proses pengiriman unit barang akan dilakukan di jam operasional kantor berikutnya.</li>
									</ul>
							</div>
						</div>
					</div>			
					<div align="center">
						<a href="<?php echo $m_url?>/order" class="button chat2 primary-bg light-color margin-left-0">Cara Pemesanan</a>
						<a href="<?php echo $m_url?>/konfirmasi-pembayaran" class="button chat2 primary-bg light-color margin-left-0">Konfirmasi Pembayaran</a>
					</div>	
				</div>