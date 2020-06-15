<?php
if (isset($_POST['nego2'])) {
	$EmailFrom = $_POST['email'];
	$EmailTo = $EmailFrom.", jauharimalik@vanectro.com, ".$marketing_mail2.", ".$mail_marketing.", ".$c_email_admin.", ".$_POST['email'];
	$Subject = "Nego Harga";

	$id_produk = addslashes($_POST['id_produk']);
	$Name = Trim(stripslashes($_POST['nama'])); 
	$Tel = Trim(stripslashes($_POST['telepon'])); 
	$Kota = Trim(stripslashes($_POST['alamat']));
	$daerah = Trim(stripslashes($_POST['daerah']));  
	$seri_mesin = Trim(stripslashes($_POST['seri_mesin'])); 
	$tanggal=date("Y-m-d");	
	$jadwal=date('d - M - Y', strtotime("+3 days"));
	
$asal   = "vanectro";
$tujuan = !empty($_POST['alamat']) ? urlencode($_POST['alamat']) : null;
$urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$asal."&destinations=".$tujuan."&language=id-ID";
$result = file_get_contents($urlApi);
$data   = json_decode($result, true);
$jarak=$data['rows'][0]['elements'][0]['distance']['text'];
$jarak=$jarak+1;
if($jarak<=14){$tarif=$jarak*4000;}
elseif($jarak==15){$tarif=60000;}
elseif($jarak<=30){$tarif=150000;}
elseif($jarak<=60){$tarif=300000;}
else{$tarif=60000;}
$tarif=$tarif+150000;

	$data_insert = array("nama_produk"=>$seri_mesin, "sn"=>$id_produk,  "ongkos"=>$tarif, "nama"=>$Name, "nohp"=>$Tel, "alamat"=>$Kota, "tanggal"=>$tanggal, "daerah"=>$daerah);
	$db->insert("service", $data_insert);	
	echo "<meta http-equiv='refresh'content='0; url=sms:".$telp_tekhnisi."?body=Pak, Tolong dijadwalkan Teknisi ke  ".$Kota.", segera direspon ya&#10; %0ATerima Kasih. &#10; %0A Saya : ".$Name."&#10; %0AKota: ".$daerah."&#10; %0A'>";
}
?>				<?php if (isset($tarif)) { ?>	
				<amp-lightbox id="negojahat1" class="dark-bg" layout="">
					<div class="lightbox light" tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong> Ongkos Servis!!</strong></span>
									<a href="<?php echo $app->CURRENT_URL(); ?>" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Jenis Jasa : Service Mesin Fotocopy</b><br>
												<b>Tarif Service : Rp <?php echo format_rupiah($tarif); ?></b><br>
												<b>Jadwal 	  : <?php echo $jadwal;?></b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" value="<?php if(isset($_POST['nama'])){echo $_POST['nama'];}?>" type="text" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" value="<?php if(isset($_POST['telepon'])){echo $_POST['telepon'];}?>" class="input" required="">
														<input name="id_produk" type="hidden" class="input" placeholder="ID Service / Serial Number" value="<?php echo $id_produk;?>"  required="">
														<input name="seri_mesin" type="hidden" class="input" placeholder="Seri mesin yang di servis" value="<?php echo $seri_mesin;?>"  required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Alamat Mesin Berada" class="input" required=""><?php if(isset($_POST['alamat'])){echo $_POST['alamat'];}?></textarea>
														<center><button type="submit" name="nego2" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Konfirmasi </button></center>
														<center><a type="button" href="<?php echo $app->CURRENT_URL(); ?>" class="button chat2 primary-bg light-color margin-left-0"> Batal Nego </a></center>
													</fieldset>
												</form>													
											</div>
										</div>	
									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>				
				<?php } ?>	
				<amp-lightbox id="service1" class="dark-bg" layout="nodisplay">
					<div class="lightbox light" tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>MINTA SERVIS !! </strong></span>
									<a on="tap:service1.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Jenis Jasa : Service Mesin Fotocopy</b><br>
												<b>Harga Awal : Rp 150.000 + (Transport)</b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" value="<?php if(isset($_POST['nama'])){echo $_POST['nama'];}?>" type="text" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" class="input" required="">
														<input name="id_produk" type="hidden" class="input" placeholder="ID Service / Serial Number" required="">
														<input name="seri_mesin" type="text" class="input" placeholder="Seri mesin yang di servis" required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="daerah" type="hidden" value="<?php if(isset($judul)){echo $judul;}?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Alamat Lengkap" class="input" required=""></textarea>
														<center><button type="submit" name="nego2" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Kirim </button></center>
													</fieldset>
												</form>												
											</div><!-- COL-XS-12 ENDS -->
										</div><!-- ROW ENDS -->

									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>	

<?php
if (isset($_POST['nego4'])) {
	$EmailFrom = $_POST['email'];
	$EmailTo = $EmailFrom.", jauharimalik@vanectro.com, ".$marketing_mail2.", ".$mail_marketing.", ".$c_email_admin.", ".$_POST['email'];
	$Subject = "Nego Harga";

	$id_produk = addslashes($_POST['id_produk']);
	$Name = Trim(stripslashes($_POST['nama'])); 
	$Tel = Trim(stripslashes($_POST['telepon'])); 
	$Kota = Trim(stripslashes($_POST['alamat']));
	$daerah = Trim(stripslashes($_POST['daerah']));  
	$seri_mesin = Trim(stripslashes($_POST['seri_mesin'])); 
	$tanggal=date("Y-m-d");	
	$jadwal=date('d - M - Y', strtotime("+3 weeks"));
	
$asal   = "vanectro";
$tujuan = !empty($_POST['alamat']) ? urlencode($_POST['alamat']) : null;
$urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$asal."&destinations=".$tujuan."&language=id-ID";
$result = file_get_contents($urlApi);
$data   = json_decode($result, true);
$jarak=$data['rows'][0]['elements'][0]['distance']['text'];
$jarak=$jarak+1;
$tarif2=1500000;


	$data_insert = array("nama_produk"=>$seri_mesin, "sn"=>$id_produk,  "ongkos"=>$tarif2, "nama"=>$Name, "nohp"=>$Tel, "alamat"=>$Kota, "tanggal"=>$tanggal, "daerah"=>$daerah);
	$db->insert("service", $data_insert);	
}
?>				<?php if (isset($tarif2)) { ?>	
				<amp-lightbox id="negojahat2" class="dark-bg light" layout="">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong> Ongkos Servis!!</strong></span>
									<a href="<?php echo $app->CURRENT_URL(); ?>" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Jenis Jasa : Overhould Mesin Fotocopy</b><br>
												<b>Biaya : Rp <?php echo format_rupiah($tarif2); ?></b><br>
												<b>Jadwal 	  : <?php echo $jadwal;?></b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" value="<?php if(isset($_POST['nama'])){echo $_POST['nama'];}?>" type="text" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" value="<?php if(isset($_POST['telepon'])){echo $_POST['telepon'];}?>" class="input" required="">
														<input name="id_produk" type="hidden" class="input" placeholder="ID Service / Serial Number" value="<?php echo $id_produk;?>"  required="">
														<input name="seri_mesin" type="hidden" class="input" placeholder="Seri mesin yang di servis" value="<?php echo $seri_mesin;?>"  required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Alamat Lengkap" class="input" required=""><?php if(isset($_POST['alamat'])){echo $_POST['alamat'];}?></textarea>
														<center><button type="submit" name="nego4" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Konfirmasi </button></center>
														<center><a type="button" href="<?php echo $app->CURRENT_URL(); ?>" class="button chat2 primary-bg light-color margin-left-0"> Batal Nego </a></center>
													</fieldset>
												</form>													
											</div>
										</div>	
									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>				
				<?php } ?>	
				<amp-lightbox id="service2" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>MINTA SERVIS !! </strong></span>
									<a on="tap:service2.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Jenis Jasa : Overhould Mesin Fotocopy</b><br>
												<b>Harga Awal : Rp 1.500.000 </b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" value="<?php if(isset($_POST['nama'])){echo $_POST['nama'];}?>" type="text" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" class="input" required="">
														<input name="id_produk" type="hidden" class="input" placeholder="ID Service / Serial Number" required="">
														<input name="seri_mesin" type="text" class="input" placeholder="Seri mesin yang di servis" required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="daerah" type="hidden" value="<?php if(isset($judul)){echo $judul;}?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Alamat Lengkap" class="input" required=""></textarea>
														<center><button type="submit" name="nego4" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Kirim </button></center>
													</fieldset>
												</form>												
											</div><!-- COL-XS-12 ENDS -->
										</div><!-- ROW ENDS -->

									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>	
	
<?php
if (isset($_POST['nego6'])) {
	$EmailFrom = $_POST['email'];
	$EmailTo = $EmailFrom.", jauharimalik@vanectro.com, ".$marketing_mail2.", ".$mail_marketing.", ".$c_email_admin.", ".$_POST['email'];
	$Subject = "Nego Harga";

	$id_produk = addslashes($_POST['id_produk']);
	$Name = Trim(stripslashes($_POST['nama'])); 
	$Tel = Trim(stripslashes($_POST['telepon'])); 
	$Kota = Trim(stripslashes($_POST['alamat']));
	$daerah = Trim(stripslashes($_POST['daerah']));  
	$seri_mesin = Trim(stripslashes($_POST['seri_mesin'])); 
	$tanggal=date("Y-m-d");	
	$jadwal=date('d - M - Y', strtotime("+3 days"));
	
$asal   = "vanectro";
$tujuan = !empty($_POST['alamat']) ? urlencode($_POST['alamat']) : null;
$urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$asal."&destinations=".$tujuan."&language=id-ID";
$result = file_get_contents($urlApi);
$data   = json_decode($result, true);
$jarak=$data['rows'][0]['elements'][0]['distance']['text'];
$jarak=$jarak+1;
$tarif3=4000000;


	$data_insert = array("nama_produk"=>$seri_mesin, "sn"=>$id_produk,  "ongkos"=>$tarif3, "nama"=>$Name, "nohp"=>$Tel, "alamat"=>$Kota, "tanggal"=>$tanggal, "daerah"=>$daerah);
	$db->insert("service", $data_insert);	
}
?>				<?php if (isset($tarif3)) { ?>	
				<amp-lightbox id="negojahat3" class="dark-bg" layout="">
					<div class="lightbox light" tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong> Ongkos Servis!!</strong></span>
									<a href="<?php echo $app->CURRENT_URL(); ?>" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Jenis Jasa : Kontrak Service Fotocopy</b><br>
												<b>Biaya : Rp <?php echo format_rupiah($tarif3); ?></b><br>
												<b>Jadwal 	  : <?php echo $jadwal;?></b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" value="<?php if(isset($_POST['nama'])){echo $_POST['nama'];}?>" type="text" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" value="<?php if(isset($_POST['telepon'])){echo $_POST['telepon'];}?>" class="input" required="">
														<input name="id_produk" type="hidden" class="input" placeholder="ID Service / Serial Number" value="<?php echo $id_produk;?>"  required="">
														<input name="seri_mesin" type="hidden" class="input" placeholder="Seri mesin yang di servis" value="<?php echo $seri_mesin;?>"  required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Alamat Lengkap" class="input" required=""><?php if(isset($_POST['alamat'])){echo $_POST['alamat'];}?></textarea>
														<center><button type="submit" name="nego6" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Konfirmasi </button></center>
														<center><a type="button" href="<?php echo $app->CURRENT_URL(); ?>" class="button chat2 primary-bg light-color margin-left-0"> Batal Nego </a></center>
													</fieldset>
												</form>													
											</div>
										</div>	
									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>				
				<?php } ?>	
				<amp-lightbox id="service3" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>MINTA SERVIS !! </strong></span>
									<a on="tap:service3.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<!-- HORIZONTAL PRODUCT LIST STARTS -->
										<div class="row">
											<div class="col-xs-12 text-left">
												<b>Jenis Jasa : Kontrak Service</b><br>
												<b>Harga Awal : Rp 4.000.000</b><br>
												<hr>
												<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
													<fieldset>
														<input name="nama" placeholder="Nama Lengkap" value="<?php if(isset($_POST['nama'])){echo $_POST['nama'];}?>" type="text" class="input" required="">
														<input name="telepon" placeholder="Nomor yang bisa di Hubungi" type="tel" class="input" required="">
														<input name="id_produk" type="hidden" class="input" placeholder="ID Service / Serial Number" required="">
														<input name="seri_mesin" type="text" class="input" placeholder="Seri mesin yang di servis" required="">
														<input name="sumber" type="hidden" value="<?php echo $app->CURRENT_URL(); ?>" required="">
														<input name="daerah" type="hidden" value="<?php if(isset($judul)){echo $judul;}?>" required="">
														<input name="username" type="hidden" value="<?php if(isset($_SESSION['custid'])){$cid=$_SESSION['custid']; echo $cid;} ?>" required="">
														<textarea name="alamat" placeholder="Alamat Lengkap" class="input" required=""></textarea>
														<center><button type="submit" name="nego6" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Kirim </button></center>
													</fieldset>
												</form>												
											</div><!-- COL-XS-12 ENDS -->
										</div><!-- ROW ENDS -->

									</div><!-- CONTAINER-FLUID ENDS -->
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>	
		