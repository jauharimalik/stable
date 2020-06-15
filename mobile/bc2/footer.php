</div><div id="masterBackToTop" class=""><a href="#top"><div id="masterBackToTopIcon" class="icon" align="center"></div></a></div>	
<?php 
	if(isset($_REQUEST["p"])){ 
		switch ($_GET["p"]) {		
			case "": require_once PLUG.DS."mobile/footer1.php"; break;
			case "produk": require_once PLUG.DS."mobile/footer2.php"; break;
			case "sewaproduk": require_once PLUG.DS."mobile/footer2.php"; break;			
			case "pelanggandetail": require_once PLUG.DS."mobile/footer1.php"; break;
			default: require_once PLUG.DS."mobile/footer1.php"; break;
		}
	} 
?>
            <div class="space-2"></div>

            <div class="text-center">
                <a href="<?php echo $d_facebook;?>" class="social-ball fa fa-facebook"></a>
                <a href="<?php echo $d_twitter;?>" class="social-ball fa fa-twitter"></a>
                <a href="<?php echo $d_googleplus;?>" class="social-ball fa fa-google-plus"></a>
                <a href="<?php echo $d_youtube;?>" class="social-ball fa fa-youtube"></a>
            </div><!-- TEXT-CENTER/SOCIAL-ICONS ENDS -->

            <div class="space"></div>
			<div id="masterBottomLink" class="centerAligned">
				<a href="<?php echo $c_url;?>">Home</a>
				| <a href="<?php echo $c_url;?>/order">Pemesanan</a>
				| <a href="<?php echo $c_url;?>/pembayaran">Pembayaran</a>	
				| <a href="<?php echo $c_url;?>/syarat-dan-ketentuan">Syarat &amp; Ketentuan</a>					
				| <a href="<?php echo $c_url;?>/tentang-kami">Tentang</a>			
				| <a href="<?php echo $c_url;?>/hubungi">Hubungi Kami</a>
			</div>
			<div id="masterPhone" class="centerAligned txtBlack">
				<a href="tel:<?php echo $d_telp;?>">
					<div id="masterPhoneIcon" class="icon"></div>
					<span class="clickable"><?php echo $d_telp;?></span>
				</a> 
			</div>		
            <div class="text-center">
                <small> Copyright © <?php echo date('Y'); ?> ( <a href="<?php echo $c_url;?>" target="_blank"><?php echo $site_name;?></a> ) All Right Reserved.</small>
            </div><!-- TEXT-CENTER/COPYRIGHT ENDS -->
			<br><br>
            <div class="space-2"></div>
	</div>
    <amp-sidebar id='mainSideBar' layout='nodisplay'>
        <figure class="primary-bg">
            <figcaption>			
                <!-- </h3> <h3 class="welcome light-color"> 
				<?php if($query && $query['status'] == 'success') {if($query['country']=="Indonesia"){ echo 'Selamat '.$selamat.', Warga '.$query['city'].'!'; }  else { echo 'Selamat '.$selamat.', Warga Bekasi'; } } else { echo 'Selamat '.$selamat.', Warga Bekasi'; } ?> --->
				<?php if (empty($_SESSION['cust'])) { ?>
				<h5><a class="light-color" href="<?php echo $c_url;?>/masuk"><i class="fa fa-user-circle"></i> Masuk - </a>  <a class="light-color" href="<?php echo $c_url;?>/daftar">Gabung Gratis </a></h5>
				<?php } else { ?><h5><a class="light-color" href="<?php echo $c_url;?>/dashboard"><i class="fa fa-user-circle"></i> <?php echo $selamat ?> - <?php echo (strtoupper($_SESSION['cust'])); ?></a></h5>
				<?php } ?>
            </figcaption>

            <button on='tap:mainSideBar.toggle' class="fa fa-caret-left light-color"></button>
        </figure><!-- NAVBAR USER CARD ENDS -->
		<amp-img width="150" height="150" src="<?PHP echo $c_cdn; ?>/new/images/banner-slide/pusat-mesin-fotocopy-no-1.jpg" layout="responsive"></amp-img>		
        <nav id="menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <a href="<?php echo $c_url;?>"><i class="fa fa-home"></i>Home</a>
			<?php if (!empty($_SESSION['cust'])) { ?>
            <amp-accordion>
                <section>
                    <h6><span><i class="fa fa-user-circle"></i>Akunku</span></h6>
                    <div>
						<a href="<?php echo $c_url;?>/dashboard">Dashboard</a>
                        <a href="<?php echo $c_url;?>/akun-saya">Edit Profile</a>
                        <a href="<?php echo $c_url;?>/riwayat-pesanan">Riwayat Pemesanan</a>
						<a href="<?php echo $c_url;?>/permintaan-barang">Nego Harga</a>	
						<a href="<?php echo $c_url;?>/mesin-fotocopy-incaran">Wish List</a>
						<a href="<?php echo $c_url;?>/panduan-pelanggan">Panduan Pelanggan</a>
                    </div>
                </section>
            </amp-accordion>			
			<?php } ?>			
            <amp-accordion>
                <section>
                    <h6><span><i class="fa fa-th"></i>Daftar Produk</span></h6>
                    <div>
                        <a href="<?php echo $c_url;?>/harga-mesin-fotocopy">Daftar Harga Mesin Fotocopy</a>
                        <a href="<?php echo $c_url;?>/jual-mesin-fotocopy"> Jual Mesin Fotocopy <?php if(isset($query['status'])) { if($query && $query['status'] == 'success') {if($query['country']=="Indonesia"){ echo $query['city']; }  else { echo $query['country']; }} } else { echo "Jakarta"; } ?></a>
						<a href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy">Promo Paket Usaha Fotocopy</a>
						<a href="<?php echo $c_url;?>/mesin-fotocopy-warna">Mesin Fotocopy Warna</a>
                        <a href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi">Mesin Fotocopy Rekondisi</a>
						<a href="<?php echo $c_url;?>/mesin-fotocopy-canon">Mesin Fotocopy Canon</a>
						<a href="<?php echo $c_url;?>/mesin-fotocopy-fujixerox">Mesin Fotocopy Fuji Xerox</a>
						<a href="<?php echo $c_url;?>/sparepart-fotocopy">Sparepart Mesin Fotocopy</a>
						<a href="<?php echo $c_url;?>/sewa-mesin-fotocopy">Sewa Mesin Fotocopy</a>							
                    </div>
                </section>
            </amp-accordion>		
            <amp-accordion>
                <section>
                    <h6><span><i class="fa fa-question-circle"></i>Bantuan Pelanggan</span></h6>
                    <div>
						<a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Download Daftar Harga</a>
                        <a href="<?php echo $c_url;?>/order">Cara Pemesanan</a>
                        <a href="<?php echo $c_url;?>/pembayaran">Cara Pembayaran</a>
						<a href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran</a>	
						<a href="<?php echo $c_url;?>/penawaran">Penawaran Harga</a>
						<a href="<?php echo $c_url;?>/panduan-pelanggan">Panduan Pelanggan</a>
                    </div>
                </section>
            </amp-accordion>
            <amp-accordion>
                <section>
                    <h6><span><i class="fa fa-address-card"></i>Tentang <?php echo $site_name;?></span></h6>
                    <div>
                        <a href="<?php echo $c_url;?>/tentang-kami">Profile <?php echo $site_name;?></a>
						<a href="<?php echo $c_url;?>/syarat-dan-ketentuan">Syarat & Ketentuan</a>
						<hr>
                    </div>
                </section>
            </amp-accordion>			
            <a href="<?php echo $c_url;?>/hubungi"><i class="shopping-map-with-placeholder-on-top"></i>Kontak & Alamat</a>
        </nav><!-- MENU ENDS -->

        <div class="divider colored"></div>

        <div>
            <p class="alamat margin-top-0"><strong>Address:</strong> <b><?php echo $d_alamat2;?></b><br></p>
            <p class="alamat"><strong>Phone:</strong> <a href="tel:<?php echo $d_telp;?>"><?php echo $d_telp;?></a></p>
            <p class="alamat"><strong>Whatsapp:</strong> <a href="intent://send/6281280336345#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"> <?php echo $telp_marketing;?></a> </p>
            <p class="alamat margin-bottom-0"><strong>E-Mail:</strong> <a href="mailto:<?php echo $mail_marketing;?>"><?php echo $mail_marketing;?></a></p>		
        </div><!-- CONTACT INFORMATION ENDS -->

        <div>
			<a href="<?php echo $d_facebook;?>" class="social-ball fa fa-facebook"></a>
			<a href="<?php echo $d_twitter;?>" class="social-ball fa fa-twitter"></a>
			<a href="<?php echo $d_googleplus;?>" class="social-ball fa fa-google-plus"></a>
			<a href="<?php echo $d_youtube;?>" class="social-ball fa fa-youtube"></a>
        </div><!-- SOCIAL ICONS ENDS -->
            <div class="text-center">
                <small> Copyright © <?php echo date('Y'); ?> ( <a href="<?php echo $c_url;?>" target="_blank"><?php echo $site_name;?></a> ).</small>
            </div><!-- TEXT-CENTER/COPYRIGHT ENDS -->					
    </amp-sidebar><!-- SIDEBAR ENDS -->

<amp-analytics type=googleanalytics>
	<script type=application/json>
		{
          "vars": {
            "account": "UA-99225168-1"
          },
          "triggers": {
            "trackPageview": {
              "on": "visible",
              "request": "pageview"
            }
          }
        }
	</script>
</amp-analytics>
 <amp-install-serviceworker src="/sw.js"
  data-iframe-src="https://www.vanectro.com/sw.html"
  layout="nodisplay">
</amp-install-serviceworker>   
</body>
</html>