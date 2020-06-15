    <div class="container-fluid container-full hala pt51">
<div class="halb">		
<amp-selector role="tablist"
  layout="container"
  class="ampTabContainer">
  <div role="tab"
    class="tabButton"
    selected
    option="spoilera"><i class="fa fa-address-card-o"></i> Kontak</div>
  <div role="tabpanel" class="tabContent">
	<div class="container-fluid container-full">
		<div class="row">
			<div class="col-xs-12">
				<amp-iframe width="600" height="400"
				            layout="responsive"
				            sandbox="allow-scripts allow-same-origin allow-popups"
				            frameborder="0"
				            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.932748510755!2d106.96884031476945!3d-6.272573995459958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698cba6fcac23b%3A0x9de0909f3425d211!2sVANECTRO!5e0!3m2!1sen!2sid!4v1510780290709">
					<amp-img layout="fill" src="<?php echo $c_cdn;?>/new/images/amp/google-maps.png" placeholder></amp-img>
				</amp-iframe><!-- GOOGLE MAPS ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FULL ENDS -->
	<div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Hubungi Kami <?php echo $site_name;?> Via :</div></div>	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
								<div id="ctl00_cphContent_divDataFound">
									<div class="padding">
										<div class="listview bgGrey bordered rounded">
											<div id="ctl00_cphContent_divContent">
												<p class="MsoNormal">
													<p><b><?php echo "$d_alamat2";?> <br> <?php echo "$d_alamat3";?></b></p>						
												</p>
												<b><span>Nomer Telephone :</span></b><br>
												<ul class="kontak_orange">
													<li><a id="masterSMS" class="txtNotLink clickable" href="tel:<?php echo "$d_telp";?>"><?php echo "$d_telp";?></a></li>
													<li><a id="masterSMS" class="txtNotLink clickable" href="tel:<?php echo "$d_telp2";?>"><?php echo "$d_telp2";?></a></li>
													<li><a id="masterSMS" class="txtNotLink clickable" href="tel:<?php echo "$d_telphp2";?>"><?php echo "$d_telphp2";?></a> (Telkomsel)</li>
													<li><a id="masterSMS" class="txtNotLink clickable" href="mailto:<?php echo "$mail_marketing";?>"><?php echo "$mail_marketing";?></a></li>
												</ul>
												<b><span> Kontak Whatsapp :</span></b><br>	
													<a href="sms:<?php echo $telponya; ?>?body=Pak Mario, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
													class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $marketing_mesin." - ".$posisi_marketing2;?> </a>	
													<a href="sms:<?php echo $hptelp_akunting; ?>?body=Mas <?php echo $marketing_sparepart;?>, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
													class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $marketing_sparepart." - ".$posisi_sparepart;?> </a>	
													<a href="sms:<?php $telp_tekhnisi=str_replace(" ","",$telp_tekhnisi);$telp_tekhnisi=ltrim($telp_tekhnisi,"0"); $hp2="+62".$telp_tekhnisi; echo $hp2; ?>?body=Mas <?php echo $marketing_tekhnisi;?>, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
													class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $marketing_tekhnisi." - ".$posisi_tekhnisi;?> </a>	
											</div>
										</div>
									</div>
								</div>	
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div><!-- CONTAINER-FULL ENDS -->	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerb"><i class="fa fa-send-o"></i> Pesan</div>
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
    option="spoilerc"><i class="fa fa-legal"></i> Legalitas</div>
  <div role="tabpanel" class="tabContent">
				<div class="left">
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="rfq-title"><?php echo $legal_pt;?></div>
                        </div>
                        <div class="rfq-description">
							<p><?php echo $site_name;?> Merubah legalitasnya menjadi <?php echo $legal_pt;?>, dikarenakan beberapa alasan yang mendukung dan mengharuskan Kami 
							untuk upgrade Dokumen Legal, Kalau kamu takut jika tertipu silahkan Cek Dokumen Legal yang kami Miliki. </p><br>
                            <p><a class="alt-link"><b>Nomor Siup : </b><br><b><?php echo $legal_siup;?> </b></a></p><hr>
							<p><a class="alt-link"><b>TDP : </b><br><b><?php echo $legal_tdp;?> </b></a></p><hr>
							<p><a class="alt-link"><b>NPWP : </b><br><b><?php echo $legal_npwp;?> </b></a></p><hr>
							<p><a class="alt-link"><b>SK. Kementrian : </b><br><b><?php echo $legal_skmenteri;?> </b></a></p><hr>
                        </div>
                    </div>
                </div>
 </div>
</amp-selector>		
</div>	
	</div><!-- SLIDER ENDS -->
<?php 
if (isset($_POST['kirim'])) {

$to = $mail_marketing2.", jauharimalik@vanectro.com,".$_POST['email'].",".$mail_marketing;
$subject = "Pesan Dari Kontak ".$site_name;


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$mail_marketing.'' . "\r\n";
mail($to,$subject,$message,$headers);
} 
?>
	


	