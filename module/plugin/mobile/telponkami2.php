<?php
error_reporting(0);
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$jam = date("H");

if(isset($_REQUEST['amptrue'])){$hptelp_akunting = $hptelp_akunting;} 
else {
	if($amptrue != 1){
		if($jam>=17){
			$hptelp_akunting = $hptelp_akunting;
			$hptelp_akunting = $hptelp_akunting;
		} else {
			$hptelp_akunting = "0857 8155 0337";
			$hptelp_akunting = "+6285781550337";
		}

		if(isset($_SERVER['HTTP_REFERER'])){$link_sumber= $_SERVER['HTTP_REFERER'];}
		else{$link_sumber=$app->CURRENT_URL();}		
	}
}
?>
				<div class="left">
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Butuh Bantuan tentang Mesin Fotocopynya??</div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan kepada Tim Marketing Mesin Fotocopy Kami via smsephone"</div>
                        </div>
						<div class="rfq-description-container">	
							<div class="go-to-form-btn">
								
								<a href="sms:<?php echo $hp; ?>?body=Selamat Siang <?php echo $marketing_mesin;?> : Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya tentang Mesin Fotocopynya. Tolong Segera di respond. " class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-envelope"></i> <?php echo $marketing_mesin;?> </a>	
							</div>
						</div>	
                    </div>
                </div>
				<div class="left">	
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Kontak Tim Sparepart Fotocopy - <?php echo $site_name;?></div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan kepada Tim Penjualan Sparepart Fotocopy Kami via smsephone"</div>
                        </div>
						<div class="rfq-description-container">	
							<div class="go-to-form-btn">
								<a href="sms:<?php echo $hptelp_akunting; ?>?body=Selamat Siang <?php echo $marketing_akunting;?> : Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya tentang Mesin Fotocopynya. Tolong Segera di respond." class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-envelope"></i> <?php echo $marketing_akunting;?> </a>
							</div>
						</div>	
                    </div>
                </div>					
				<div class="left">	
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Tim Sewa Mesin Fotocopy <?php echo $site_name;?></div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan kepada Tim Sewa Mesin Fotocopy Kami via smsephone"</div>
                        </div>
						<div class="rfq-description-container">	
							<div class="go-to-form-btn">
								
								<a href="sms:<?php echo $hptelp_tekhnisi; ?>?body=Hallo, Pak <?php echo $marketing_tekhnisi;?> : Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya tentang Sewa Mesin Fotocopynya. Tolong Segera di respond." class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-envelope"></i> <?php echo $marketing_tekhnisi;?> </a>	
							</div>
						</div>	
                    </div>
                </div>					