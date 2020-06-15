				<div class="pageHeader inline">
					<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Mesin Bagus Harga Bersaing !!</div>	
					<button class="pull-right fa fa-info-circle info-icon" on="tap:infopromo"></button>
				</div>	
			<amp-carousel class="blog-carousel slidecar" layout="fixed-height" height=330>
							<?php 
							$data_rekomendasi = ("select * from produk where (harga_baru>1000000) AND  
							(category='Mesin Fotocopy Warna' or   category='Mesin Fotocopy Hitam Putih') 
							and (hot='Baru' or hot='Rekondisi') 
							order by  produk.rekomendasi desc,  produk.harga_baru asc, produk.brand asc,  produk.hot desc  
							LIMIT 6"); $totalrate23=0; $totalpembeli=0;
									
							$result = $db->query($data_rekomendasi);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_id = $a_data['id_produk'];
							$a_nama_produk = strtoupper(strtolower($a_data['nama_produk']));
							$a_category = $a_data['category'];
							$urutan++;
							$a_brand = $a_data['brand'];
							$a_special = $a_data['special'];
							$a_image_satu = $a_data['image_satu'];
							$a_image_dua = $a_data['image_dua'];
							$a_image_tiga = $a_data['image_satu'];
							$a_hot = $a_data['hot'];
							$a_deskripsi_a = $a_data['deskripsi_a'];
							$a_harga_lama = $a_data['harga_lama'];
							$a_harga_baru = $a_data['harga_baru'];
							$a_rekomendasi = $a_data['rekomendasi'];
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
							if($a_harga_lama == 0){$a_harga_lama=$a_harga_baru*2;}
							if($a_harga_baru !=0){$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));}
							include PLUG.'/mobile/nego.php';
							?>				
					<div class="capronego blog-carousel-item" >
						<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>																											
						<div class="infopro">
						<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="capronego">
							<h5 class="text-left margin-0 d-inline-block"><b><?PHP echo $a_nama_produk; ?></b></h5>
							<div class="pricepro">
								<a class="vendor-info-text-new ng-binding">Uang Muka </a>
							</div>
							<div class="divDetailProductItemPrice">Rp <?php echo format_rupiah(uangmuka($a_harga_baru)); ?></div>
							<div class="recommendedItemDiscountPercentage">- <?php echo format_rupiah($c); ?>% </div>	
							<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'"); if($total_review>2){?>
							<div class="pt20 rating">
								<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
								<span > ( <?php echo $total_review; ?> Ulasan ) </span>
							</div>
							<?php } else { ?> 
							<div class="pt20 rating">
								<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
								<span > ( 0 Ulasan ) </span>
							</div>							
							<?php } ?>
						</a>	
							<div class="pt20 mt30">
							<a href="<?php echo $sms_nego;?>" class="button button-small  primary-bg light-color" >Nego</a>	
							<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="button button-small  primary-bg light-color" >Detail</a>		
							</div>						
							<div class="kanwil"><span class="primary-color"> Daerah : <?php echo ucwords($query['city']); ?></span></div>
						</div>
					</div>	
					<?php } ?>
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->	