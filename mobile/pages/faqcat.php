<div class="container-fluid container-full pt51">
	<amp-img width="334" height="186" src="<?PHP echo $c_cdn_img; ?>/mobile/banner/cara-pemesanan-min.jpg" layout="responsive"></amp-img>	
</div><!-- SLIDER ENDS -->

<?php
	if(isset($p3)){
		if($p3 !=''){
		$result_faq = $db->query($data_faq);
		while ($a_data_faq = $result_faq->fetch_array(MYSQLI_BOTH)) {		
			$faq_judul = judul_faq($a_data_faq['judul']);
			$faq_deskripsi = $a_data_faq['deskripsi'];

			$faq_deskripsi=str_replace('cekg_gb_refund1',"<amp-img width='100' height='100' src='".$c_cdn."/new/images/return/ketentuan-pengembalian1.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang' layout='fixed'></amp-img>", $faq_deskripsi);
			$faq_deskripsi=str_replace('cekg_gb_refund2',"<amp-img width='100' height='100' src='".$c_cdn."/new/images/return/ketentuan-pengembalian2.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang' layout='fixed'></amp-img>", $faq_deskripsi);
			$faq_deskripsi=str_replace('cekg_gb_refund3',"<amp-img width='100' height='100' src='".$c_cdn."/new/images/return/ketentuan-pengembalian5.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang' layout='fixed'></amp-img>", $faq_deskripsi);
			$faq_deskripsi=str_replace('cekg_gb_refund4',"<amp-img width='100' height='100' src='".$c_cdn."/new/images/return/ketentuan-pengembalian4.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang' layout='fixed'></amp-img>", $faq_deskripsi);
			
			$faq_deskripsi = faq($faq_deskripsi);
			$faq_urutan = $a_data_faq['urutan'];
			$status=urutan_faq($faq_urutan)[0];
			$status2=urutan_faq($faq_urutan)[1];
?>	
	<amp-accordion>
		<section expanded>
			<h6>
				<div class="pageHeader inline">
					<div class="new-product-title Mesin_Fotocopy_Paling_LARIS"><?php echo $faq_judul;?> <i class="fa fa-caret-down"></i></div>
				</div>
			</h6>	
			<div class="container-fluid"><?php echo $faq_deskripsi;?>	</div>
		</section >
	</amp-accordion>
<?php }}} ?>	
	
<div class="space-2"></div>	
                <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
							<div id="ctl00_cphContent_divContent" class="padding">
								<p class="MsoNormal"><b>Layanan Bantuan Terkait Lainnya :</b></p>
									<ul class="tcvpb_shortcode_ul ">
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
										<li class="item-data"><a target="_self" href="<?php echo $dua_faq_link;?>"><?php echo $dua_faq_judul;?></a></li>
									<?php }?>										
									</ul>
							</div>
						</div>
					</div>				
				</div>
		
                <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
							<div id="ctl00_cphContent_divContent" class="padding">
								<p class="MsoNormal"><b>Panduan Pelanggan :</b></p>
									<ul class="tcvpb_shortcode_ul ">
									<?php
										$data_faq_lainya="select * from faq_category";
										$dua_result_faq2 = $db->query($data_faq_lainya);
										while ($dua_data_faq2 = $dua_result_faq2->fetch_array(MYSQLI_BOTH)) {		
											$dua_faq_judul2 = judul_faq($dua_data_faq2['short_name']);
											$dua_faq_link22 = $dua_data_faq2['link'];
											$dua_faq_link23=(ltrim($dua_faq_link22));
											$dua_faq_link23=strtolower($dua_faq_link23);
											$dua_faq_link23=$c_url."/".$dua_faq_link22;													
									?>	
										<li class="item-data"><a target="_self" href="<?php echo $dua_faq_link23;?>"><?php echo $dua_faq_judul2;?></a></li>
									<?php }?>										
									</ul>
							</div>
						</div>
					</div>				
				</div>	
<div class="space-2"></div>					
