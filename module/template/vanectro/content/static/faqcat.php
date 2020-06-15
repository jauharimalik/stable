<?php require_once(LIB.DS."faq.php"); ?>
		<div class="mbantuan">		
<?php
	if(isset($p2)){
		if(!isset($p3)){
		if(($p2 !='' )){		
?>	
			<header>
				<a class="fleft" id="goback" href="<?php echo $c_url."/panduan-pelanggan/".$faq_link;?>">
					<img class="back" width="24" height="24" alt="goback" title="goback"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/amp/header/back.webp"/>
				</a>
				<a class="h5" href="<?php echo $c_url."/panduan-pelanggan/".$faq_link;?>"><h5><b><?php echo judul_faq($a_faq_sname);?></b></h5></a>
			</header>	
			<div class="hasilcariitem34">
				<?php if(isset($a_faq_widget)){ if($a_faq_widget!=''){?>
				<div class="hasilnya">
					<div class="isinyaan">
						<?php echo faq($a_faq_widget); ?>
					</div>
				</div>
				<?php }} ?>
				<div class="hasilnya">
					<div class="isinyaan">
						<?php echo judul_faq($a_faq_header);?>
					</div>
				</div>				
				<div class="hasilnya">
					<div class="judul-hasilnya"><b><?php echo judul_faq($a_faq_page_title);?></b></div>
					<div class="isinyaan">		
						<?php echo judul_faq($a_faq_ketentuan);?>
					</div>
				</div>				
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="kotakmar">
						<img class="lazy" width="60" height="60" data-src="<?php echo $c_url;?>/compressed/cs.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
						<span class="btnmini"><i class="fab fa-whatsapp mr5 "></i> Chat Whatsapp</span>
					</a>
				</div>	
				<div class="panel2">
					<div class="judul-hasilnya"><b>Info Lain Tentang <?php echo $p2; ?> </b></div>
						<?php
							$dua_result_faq = $db->query($data_faq2);
							while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
								$dua_faq_judul = judul_faq($dua_data_faq['judul']);
								$dua_faq_link2 = $dua_data_faq['link2'];
								$dua_faq_link3 = $dua_data_faq['link'];
								$dua_faq_link=(ltrim($dua_faq_link2));
								$dua_faq_link=strtolower($dua_faq_link);
								$dua_faq_link23=(ltrim($dua_faq_link3));
								$dua_faq_link23=strtolower($dua_faq_link23);
								$dua_faq_link=$c_url."/panduan-pelanggan/".$dua_faq_link23."/".$dua_faq_link;					
						?>				
					<a class="menuli" aria-label="Daftar Harga Mesin Fotocopy" href="<?php echo $dua_faq_link;?>"><?php echo $dua_faq_judul;?></a>
					<?php } ?>	
				</div>								
			</div>
<?php 
		}}
	if(isset($p3)){
		if($p3 !=''){		
		$result_faq = $db->query($data_faq);
		while ($a_data_faq = $result_faq->fetch_array(MYSQLI_BOTH)) {		
			$faq_judul = judul_faq($a_data_faq['judul']);
			$faq_deskripsi = faq($a_data_faq['deskripsi']);
			$faq_category = faq($a_data_faq['kategori']);
			$faq_link = faq($a_data_faq['link']);
			$faq_deskripsi = str_replace("<br><br><br>","<br>",$faq_deskripsi);
			$faq_deskripsi = str_replace("<br><br>","<br>",$faq_deskripsi);
			$faq_urutan = $a_data_faq['urutan'];
			$status=urutan_faq($faq_urutan)[0];
			$status2=urutan_faq($faq_urutan)[1];
?>	
			<header>
				<a class="fleft" id="goback" href="<?php echo $c_url."/panduan-pelanggan/".$faq_link;?>">
					<img class="back" width="24" height="24" alt="goback" title="goback"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/amp/header/back.webp"/>
				</a>
				<a class="h5" href="<?php echo $c_url."/panduan-pelanggan/".$faq_link;?>"><h5><b><?php echo $faq_judul;?></b></h5></a>
			</header>	
			<div class="hasilcariitem34">
				<div class="hasilnya">
					<div class="judul-hasilnya"><b><?php echo $faq_category." - ".$faq_judul;?></b></div>
					<div class="isinyaan">		
						<?php echo $faq_deskripsi;?>
					</div>
				</div>
				<div class="boxputih">
					<div class="w25"><b>Bagikan !!</b></div>
					<div class="sharing">
						<a class="sexy" href="https://facebook.com/sharer/sharer.php?u=<?php echo $url_sekarang;?>" target="_blank">
							<img alt="Unit Mesin Fotocopy Baru"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/share/fb.svg" class="">
						</a>
						<a class="sexy"  target="_blank" href="https://twitter.com/share?url=<?php echo $url_sekarang;?>&amp;text=Jual Mesin Fotocopy Canon -  Ir 5000 | 6000 - Vanectro&amp;via=Vanectro">
							<img alt="Unit Mesin Fotocopy Baru"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/share/twit.svg" class="">
						</a>
						<a class="sexy"  target="_blank" href="https://plus.google.com/share?url=<?php echo $url_sekarang;?>">
							<img alt="Unit Mesin Fotocopy Baru"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/share/gp.svg" class="">
						</a>
						<a class="sexy"  target="_blank" href="whatsapp://send?text=<?php echo $faq_category." - ".$faq_judul;?>&#10; %0AKunjungi : <?php echo $url_sekarang;?>">
							<img alt="Unit Mesin Fotocopy Baru"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/share/wa3.svg" class="">
						</a>
						<a class="sexy" target="_top" href="http://line.me/R/msg/text/?<?php echo $faq_category." - ".$faq_judul;?>%0D%0A<?php echo $url_sekarang;?>">
							<img alt="Unit Mesin Fotocopy Baru"src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/share/line.svg" class="">
						</a>
					</div>	
				</div>
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="kotakmar">
						<img class="lazy" width="60" height="60" data-src="<?php echo $c_url;?>/compressed/cs.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
						<span class="btnmini"><i class="fab fa-whatsapp mr5 "></i> Chat Whatsapp</span>
					</a>
				</div>	
				<div class="panel2">
					<div class="judul-hasilnya"><b>Info Lain Tentang <?php echo $faq_category; ?> </b></div>
						<?php
							$dua_result_faq = $db->query($data_faq2);
							while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
								$dua_faq_judul = judul_faq($dua_data_faq['judul']);
								$dua_faq_link2 = $dua_data_faq['link2'];
								$dua_faq_link3 = $dua_data_faq['link'];
								$dua_faq_link=(ltrim($dua_faq_link2));
								$dua_faq_link=strtolower($dua_faq_link);
								$dua_faq_link23=(ltrim($dua_faq_link3));
								$dua_faq_link23=strtolower($dua_faq_link23);
								$dua_faq_link=$c_url."/panduan-pelanggan/".$dua_faq_link23."/".$dua_faq_link;					
						?>				
					<a class="menuli" aria-label="Daftar Harga Mesin Fotocopy" href="<?php echo $dua_faq_link;?>"><?php echo $dua_faq_judul;?></a>
					<?php } ?>	
				</div>								
			</div>
<?php } ?>			
<?php }}} else {  ?>	
			<header>
				<a class="fleft" id="goback">
					<img class="back" width="24" height="24" alt="goback" title="goback" data-src="<?php echo $c_url; ?>/compressed/amp/header/back.webp"/>
				</a>
				<a class="cari vjax" data-load="searcha">
					<img width="12" height="12" alt="pencarian" title="pencarian" data-src="<?php echo $c_url; ?>/compressed/amp/header/search.webp" />
					Ada yang bisa dibantu ??
				</a>
			</header>						
			<div class="hasilnya">
				<div class="judul-hasilnya"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></div>
				<div class="isinyaan">		
					Terimakasih sudah menghubungi kami, bantuan apa yang kamu butuhkan ??
				</div>
			</div>
			<div id="hasilcariitem34">
				<div class="panel2">		 
					<a class="menuli"  aria-label="Cek Status Pesanan" href="<?php echo $c_url;?>/detail-pesanan">Cek Status Pemesanan </a>
					<a class="menuli"  aria-label="Konfirmasi Pembayaran" href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran </a>
					<a class="menuli"  aria-label="Kontak Alamat Mesin Fotocopy" href="<?php echo $c_url;?>/hubungi">Kontak & Alamat <?php echo $site_name;?> </a>
				</div>	
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="kotakmar">
						<img class="lazy" width="60" height="60" data-src="<?php echo $c_url;?>/compressed/cs.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
						<span class="btnmini"><i class="fab fa-whatsapp mr5 "></i> Chat Whatsapp</span>
					</a>
				</div>							
				<div class="panel2">
					<div class="judul-hasilnya"><b>ARTIKEL BANTUAN LAINNYA : </b></div>
						<?php
							$data_faq2 = "select * from faq_category order by urutan asc";
							$dua_result_faq = $db->query($data_faq2);
							while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
								$dua_faq_judul = ltrim($dua_data_faq['short_name']);
								$dua_faq_link2 = $dua_data_faq['link'];
								$dua_faq_link=(ltrim($dua_faq_link2));
								$dua_faq_link=strtolower($dua_faq_link);				
						?>						
					<div class="menunya">
						<h4 class="accordion menuli"><b><?php echo $dua_faq_judul;?></b></h4>
						<div class="hide panel">
							<?php
								$data_faq3 = "select * from faq where link='".$dua_faq_link."' order by urutan asc";
								$dua_result_faq3 = $db->query($data_faq3);
								while ($dua_data_faq3 = $dua_result_faq3->fetch_array(MYSQLI_BOTH)) {		
									$dua_faq_judul3 = substr((judul_faq($dua_data_faq3['judul'])),0,45);
									$dua_faq_link3 = $dua_data_faq3['link2'];
									$dua_faq_link3=rtrim(ltrim($dua_faq_link3));
									$dua_faq_link3=strtolower($dua_faq_link3);		
									$dua_faq_link3=$c_url."/panduan-pelanggan/".$dua_faq_link."/".$dua_faq_link3;			
							?>						
							<a aria-label="<?php echo $dua_faq_judul3;?>" href="<?php echo $dua_faq_link3;?>"><?php echo $dua_faq_judul3;?></a>
							<?php } ?>
						</div>				
					</div>
					<?php } ?>	
					
				</div>
			</div>
<?php } ?>		
		</div>

<input type="text" id="chatwa1" value="<?php echo $wacekpengiriman_akunting;?>" class="hidden">
<input type="text" id="chatwa2" value="<?php echo $wacekpengiriman_marketing;?>" class="hidden">
	
<script async type="text/javascript">
	var bck = document.getElementById("goback");
	bck.addEventListener("click", function(){window.history.back()});
	
	var wa1 = document.getElementById("chatwas1");
	var chatwa1 = document.getElementById("chatwa1").value;
	if(wa1){wa1.addEventListener("click", function(){window.location.href = chatwa1;});}
	
	
	var wa2 = document.getElementById("chatwas2");
	var chatwa2 = document.getElementById("chatwa2").value;
	if(wa2){wa2.addEventListener("click", function(){window.location.href = chatwa2;});}
</script>						
		</div>
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>			