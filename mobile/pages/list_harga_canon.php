	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Mesin Fotocopy Canon Baru <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	
							$result = $db->query($data_produk_catalog);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];$a_nama_produk = str_replace('Canon', '', $a_nama_produk);
							$a_category = $a_data['category'];
							$a_brand = $a_data['brand'];
							$a_special = $a_data['special'];
							$a_image_satu = $a_data['image_satu'];
							$a_image_dua = $a_data['image_dua'];
							$a_image_tiga = $a_data['image_3'];
							$a_id = $a_data['id_produk'];
							$a_hot = $a_data['hot'];
							$a_deskripsi_a = $a_data['deskripsi_a'];
							$a_harga_lama = $a_data['harga_lama'];
							$a_harga_baru = $a_data['harga_baru'];
							if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
							$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));
							?>	
										<tr>
										  <td data-label="Merk"><?php echo ucwords($a_brand);?></td>
										  <td data-label="Type"><?php echo ucwords($a_nama_produk);?></td>
										  <td data-label="Harga">Rp <?php echo format_rupiah($a_harga_baru); ?></td>
										</tr>
							<?php } ?>
								   </tbody>
								</table>
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->				
			</div>
		</section>
	</amp-accordion>			
