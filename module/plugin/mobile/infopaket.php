				<amp-lightbox id="shipping-details-<?php echo $a_id?>" class="dark-bg" layout="nodisplay">
					<div class="lightbox light " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong> Info <?PHP echo $a_nama_produk; ?>  !!</strong></span>
									<a on="tap:shipping-details-<?php echo $a_id?>.close" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$a_image_tiga; ?>" layout="responsive" alt="<?PHP echo $a_nama_produk; ?>" ></amp-img>
												<b>Harga Awal : Rp <?php echo format_rupiah($a_harga_baru); ?></b><br>												
												<hr>
												<b><?php echo $info_paket ?></b>
												<div class="mt30"><b>Buruan Pesan Sebelum Kehabisan !!</b></div>												
											</div>
										</div>	
									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>
					</div>
				</amp-lightbox>	