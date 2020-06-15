	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Mesin Fotocopy Canon Baru <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	$data_produk = ("select *  from produk where $filtrnya and  brand='Canon' and hot='baru' ORDER BY produk.id_produk ASC, produk.date DESC, produk.time"); ?>
							<?php
							$result = $db->query($data_produk);
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
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Mesin Fotocopy Fuji Xerox Baru <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
								<?php 	$data_produk = ("select *  from produk where $filtrnya and brand='fuji xerox' and category like '%mesin fotocopy%' and hot like '%baru%' and harga_baru >=1000000 ORDER BY produk.harga_baru ASC,  produk.id_produk DESC"); ?>
								<?php
								$result = $db->query($data_produk);
								while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
								$a_link = $a_data['link'];
								$a_nama_produk = $a_data['nama_produk'];
								$a_nama_produk = str_replace('Canon', '', $a_nama_produk);
								$a_nama_produk =str_replace("DocuCentre","DC",$a_nama_produk);
								$a_nama_produk =str_replace("Catridge","",$a_nama_produk);								
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
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Mesin Fotocopy Warna<i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	$data_produk = ("select *  from produk where $filtrnya and category='Mesin Fotocopy Warna' ORDER BY produk.brand ASC,  produk.harga_baru DESC"); ?>
							<?php
							$result = $db->query($data_produk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];
							$a_nama_produk = str_replace('Canon', '', $a_nama_produk);
							$a_nama_produk = str_replace('DocuCentre', 'DC', $a_nama_produk);
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
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Mesin Fotocopy Rekondisi <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	$data_produk = ("select *  from produk where $filtrnya and category like '%mesin fotocopy%' and hot='Rekondisi' and harga_baru>=1000000 ORDER BY produk.harga_baru ASC,  produk.id_produk DESC"); ?>
							<?php
							$result = $db->query($data_produk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];
							$a_nama_produk = str_replace('Canon', '', $a_nama_produk);
							$a_nama_produk = str_replace('DocuCentre', 'DC', $a_nama_produk);
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
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Sewa Mesin Fotocopy <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	$data_produk = ("select *  from produk where category like '%Mesin Fotocopy%' and sewa like '%sewa%' ORDER BY produk.id_produk ASC, produk.date DESC, produk.time"); ?>
							<?php
							$result = $db->query($data_produk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];
							$a_nama_produk = str_replace('SEWA MESIN FOTOCOPY - CANON', '', $a_nama_produk);
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
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Daftar Harga Paket Usaha Fotocopy <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	$data_produk = ("select *  from produk where category like '%Mesin Fotocopy%' and paket like '%paket%' ORDER BY produk.nama_paket ASC"); ?>
							<?php
							$result = $db->query($data_produk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];
							$a_nama_produk = explode('-',$a_nama_produk);
							$a_nama_produk = $a_nama_produk[0];
							$a_nama_produk = str_replace('DocuCentre', 'Fuji Xerox DC', $a_nama_produk);
							$a_category = $a_data['category'];
							$a_brand = $a_data['nama_paket'];
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
	<amp-accordion>
		<section>
			<h6><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Harga Toner Mesin Fotocopy Xerox<i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 margin-bottom-0">			
								<br><br><table>
								  <thead>
									<tr>
									  <th scope="col">Merk</th>
									  <th scope="col">Type</th>
									  <th scope="col">Harga</th>
									</tr>
								  </thead>
								  <tbody>
							<?php 	$data_produk = ("select *  from produk where category='Toner' ORDER BY produk.harga_baru ASC,  produk.id_produk DESC"); ?>
							<?php
							$result = $db->query($data_produk);
							while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
							$a_link = $a_data['link'];
							$a_nama_produk = $a_data['nama_produk'];$a_nama_produk = substr($a_nama_produk ,0,25);
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
							$a_nama_produk =str_replace("DocuCentre","DC",$a_nama_produk);
							$a_nama_produk =str_replace("Catridge","",$a_nama_produk);
							if($a_brand=='Canon'){$a_brands='canon'; } else {$a_brands='fujixerox';}
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
