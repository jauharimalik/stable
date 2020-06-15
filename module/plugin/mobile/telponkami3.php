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
                            <div class="rfq-title">Chat Whatsapp Marketing Mesin <?php echo $site_name;?></div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan kepada Tim Marketing Mesin Fotocopy Kami via smsephone"</div>
                        </div>
						<div class="rfq-description-container">	
							<div class="go-to-form-btn">
								
								<a <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-whatsapp"></i> <?php echo $marketing_mesin;?> </a>	
								
							</div>
						</div>	
                    </div>
                </div>
				<div class="left">			
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Chat Whatsapp Penjual Sparepart Fotocopy</div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan kepada Tim Penjualan Sparepart Fotocopy Kami via smsephone"</div>
                        </div>
						<div class="rfq-description-container">	
							<div class="go-to-form-btn">
								<a <?php echo "href='whatsapp://send?phone=".$hptelp_akunting."&text= Selamat Pagi. Ibu ".$marketing_akunting.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-whatsapp"></i> <?php echo $marketing_akunting;?> </a>
							</div>
						</div>	
                    </div>
                </div>					
				<div class="left">		
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Chat Whatsapp Tim Sewa Mesin Fotocopy</div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan kepada Tim Sewa Mesin Fotocopy Kami via smsephone"</div>
                        </div>
						<div class="rfq-description-container">	
							<div class="go-to-form-btn">
								<a <?php echo "href='whatsapp://send?phone=".$hptelp_tekhnisi."&text= Selamat Pagi. Mas ".$marketing_tekhnisi.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-whatsapp"></i> <?php echo $marketing_tekhnisi;?> </a>	
							</div>
						</div>	
                    </div>
                </div>					