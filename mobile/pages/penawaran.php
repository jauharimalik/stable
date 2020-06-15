		<?php			
		$pesan="";
		if (isset($_POST['confrm2'])) {$orderid = $_POST['orderid'];}
		if (isset($_POST['confrm'])) {$orderid = $_POST['orderid'];
			$cariid = $db->num_rows("select order_id from orders where order_id='".$orderid."'");
			if ($cariid != 0) {
				$orderid = $_POST['orderid'];
				$bank = $_POST['bank'];
				$anpemilik = $_POST['namapemilik'];
				$rekpemilik = $_POST['rekpemilik'];
				$rektujuan = $_POST['rektujuan'];
				$jmltransfer = $_POST['transfer'];
				$ket = $_POST['ket'];
				$sekarang=date('Y-m-d');
				$images = $_FILES["file"]["tmp_name"];
				$new_images = "Bukti_Bayar_".$orderid."_".$sekarang."_".$_FILES["file"]["name"];
				$bukti=$new_images;
				copy($_FILES["file"]["tmp_name"],CDN.DS."/images/bukti-pembayaran/".$bukti);
				
				$q_pembayaran = array("order_id"=>$orderid, "bank"=>$bank, "atas_nama"=>$anpemilik, "rek_cust"=>$rekpemilik, "rek_admin"=>$rektujuan, "jml_transfer"=>$jmltransfer, "ket"=>$ket, "tgl_transfer"=>$sekarang, "tgl_transfer"=>$sekarang, "bukti"=>$bukti );
				$db->insert("pembayaran", $q_pembayaran);	
				
				if ($q_pembayaran) {
					$pesan = "<div class=\"msg msg-sukses\"><i class=\"fa fa-check-square-o\"></i> Terima kasih, pesanan anda akan segera kami proses</div>"; 
				} else {
					$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\"></i> Oops, Terjadi kesalahan</div>";
				}
			
			} else {
				$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\"></i> Nomor ID Pemesanan tidak diketahui</div>";
			}
		}
		?>
	<div class="container-fluid container-full pt51">
	<amp-img width="334" height="186" src="<?PHP echo $c_cdn; ?>/new/images/banner-slide/penawaran-mesin-fotocopy.jpg" layout="responsive"></amp-img>	
				<div class="left">
                    <div class="rfq-description-container">
                        <div class="rfq-description">
							<p><a class="alt-link"><b>Harga Murah Meriah :</b><br><small><b>Mau dapet mesin fotocopy murah banget ??. Isi aja formnya, dapatkan harga yang jauh lebih murah dari pasaran. </b></small></a></p><hr>
							<p><a class="alt-link"><b>Gratiss Ongkos Kirim :</b><br><small><b>Pesanan langsung diproses gak pake nunggu, dikirim dihari yang sama. Kenapa harus sulit kalo bisa gampang ??. </b></small></a></p><hr>
							<p><a class="alt-link"><b>Cocok Untuk Pengadaan :</b><br><small><b>Mau beli 1 atau banyak tetep untung. Selain potongan dapet juga Free Ongkir juga, Garansi seumur hidup. </b></small></a></p><hr>
						</div>
                    </div>
                </div>	
	</div><!-- SLIDER ENDS -->
	<amp-accordion>
		<section>
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Diisi : Form Nego !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
				<div class="container-fluid container-full">	
					<amp-img width="1300" height="233" src="<?PHP echo $c_cdn; ?>/new/images/header-email-us.jpg" layout="responsive"></amp-img>
					<div class="row">
						<div class="col-xs-12">
							<div class="bordered-title">
								<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS"><?php if(isset($pesan)){echo $pesan;} else{ ?>Konfirmasi Pembayaranmu <span class="brush">DISINI</span>.<?php } ?></div>
							</div><!-- TITLE ENDS -->
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div>

				
			</div>
		</section>
	</amp-accordion>	
             <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
							<div id="ctl00_cphContent_divContent" class="padding">
								<p class="MsoNormal"><b>Syarat & Ketentuan (C.O.D) :</b></p>
									<ul class="tcvpb_shortcode_ul ">
										<li> Customer melakukan pembayaran DP terlebih dahulu dengan nominal yang sudah disepakati dengan Marketing Support Kami.</li>
										<li> Jika pelanggan melakukan pembayaran lebih dari jam 15:00, proses pengiriman unit barang akan dilakukan di jam operasional kantor berikutnya.</li>
									</ul>
							</div>
						</div>
					</div>		
				</div>	