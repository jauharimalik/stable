				<div class="left">
                    <div class="rfq-back-img">
                        <div class="sprite rfq-model"></div>
                    </div>
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">SMS Center <?php echo $c_title;?>??</div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan via SMS"</div>
                        </div>
						
					<div class="rfq-description-container">	
                        <div class="go-to-form-btn">
                            <a href="sms:<?php echo $telponya; ?>?body=Pak Mario, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
					class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $posisi_marketing;?> </a>	
					<a href="sms:<?php $telp_marketing2=str_replace(" ","",$telp_marketing2);$telp_marketing2=ltrim($telp_marketing2,"0"); $hp2="+62".$telp_marketing2; echo $hp2; ?>?body=Mas <?php echo $marketing_mesin2;?>, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
					class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $posisi_marketing2;?> </a>	
					<a href="sms:<?php $telp_tekhnisi=str_replace(" ","",$telp_tekhnisi);$telp_tekhnisi=ltrim($telp_tekhnisi,"0"); $hp2="+62".$telp_tekhnisi; echo $hp2; ?>?body=Mas <?php echo $marketing_tekhnisi;?>, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
					class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $posisi_tekhnisi;?> </a>	
					
                        </div>
					</div>	
                    </div>
                </div>
				<div class="left">
                    <div class="rfq-back-img">
                        <div class="spritewa rfq-model"></div>
                    </div>
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Hubungi via Whatsapp <?php echo $c_title;?>??</div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">Kirimi Kami pesan melalui Whatsapp bila ada yang ingin ditanyakan mengenai produk, service, promo, dll</div>
                        </div>
						
					<div class="rfq-description-container">	
                        <div class="go-to-form-btn">
					<a href="<?php  echo "https://api.whatsapp.com/send?phone=".$hp1."&text=Maaf ".$marketing_mesin.", saya mau nanya tentang mesin fotocopy ".$n." Tolong Segera Di Respond...".$n.$n."Saya : ".$n."Kota: ";?>" 
					class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $marketing_mesin;?> </a>	
					<a href="<?php  $telp_marketing2=str_replace(" ","",$telp_marketing2);$telp_marketing2=ltrim($telp_marketing2,"0"); $hp2="+62".$telp_marketing2;
					 echo "https://api.whatsapp.com/send?phone=".$hp2."&text=Maaf ".$marketing_mesin2.", saya mau nanya tentang mesin fotocopy ".$n." Tolong Segera Di Respond... ".$n.$n."Saya : ".$n."Kota: ";?>" 
					class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> <?php echo $marketing_mesin2;?> </a>	
					<a href="<?php echo $c_url?>/chat" class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> Live Chat </a>	

                        </div>
					</div>	
                    </div>
                </div>	
<?php  require PLUG.'/mobile/help3.php'; ?>