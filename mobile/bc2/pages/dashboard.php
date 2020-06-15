
<?php
	defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
	if (empty($_SESSION['ecust'])) {echo "<meta http-equiv='refresh' content='0;url=".$c_url."/masuk' />";}
	if(isset($_GET['act'])){$act=$_GET['act'];}
//action
include ROOT.DS.'ongkir/config.php'; 
$pesan="";
if (isset($_POST['edit'])) {
	require_once(INC.DS."/anti_xss.php");
	$edit = $_REQUEST['edit'];
		//edit
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$nohp = $_POST['nohp'];

		$do = $db->query("update profile set nama='$nama', nohp='$nohp' where id='$id'");
		if ($do){$pesan = "<div class=\"msg msg-sukses\"><i class=\"fa fa-check-square-o\" style='vertical-align:middle'></i> Terima kasih, Profile berhasil tersimpan</div>"; }
		else{$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\" style='vertical-align:middle'></i> Oops, Terjadi kesalahan</div>";}	
}
if (isset($_POST['update_alamat'])) {
	require_once(INC.DS."/anti_xss.php");
	$update_alamat = $_REQUEST['update_alamat'];
		//update_alamat
		$id = $_POST['id'];
		$alamat = $_POST['alamat'];
		$kodepos = $_POST['kodepos'];
		$prov_id = $_POST['prov_id'];
		$kecamatan= $_POST['kecamatan'];
		$kota = $_POST['kota'];
		$prov= $db->query("SELECT * FROM tbl_provinsi where provinsi_id='".$prov_id."'");
		while ($dataprov = $prov->fetch_array(MYSQLI_BOTH)) {
		$provinsi=$dataprov['provinsi'];
		}	
		$kota2= $db->query("SELECT * FROM tbl_kota where kota_id='".$kota."'");
		while ($datakota2 = $kota2->fetch_array(MYSQLI_BOTH)) {
		$kota3=$datakota2['kota'];
		}		
		$do = $db->query("update profile set alamat='$alamat', kota='$kota3', provinsi='$provinsi',kodepos='$kodepos', prov_id='$prov_id', kecamatan='$kecamatan'  where id='$id'");
		if ($do){$pesan = "<div class=\"msg msg-sukses\"><i class=\"fa fa-check-square-o\" style='vertical-align:middle'></i> Terima kasih, Profile berhasil tersimpan</div>"; }
		else{$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\" style='vertical-align:middle'></i> Oops, Terjadi kesalahan</div>";}	
}
if (isset($_POST['gantiakun'])) {
	require_once(INC.DS."/anti_xss.php");
	$gantiakun = $_REQUEST['gantiakun'];
		$id = $_POST['id'];
		$profid = $_POST['profid'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		$di = $db->query("update profile set email='$email'  where id='$profid'");
		$do = $db->query("update cust_users set cust_mail='$email', cust_pass='$password' where cust_id='$id'");
		if ($do){$pesan = "<div class=\"msg msg-sukses\"><i class=\"fa fa-check-square-o\" style='vertical-align:middle'></i> Terima kasih, Profile berhasil tersimpan</div>"; }
		else{$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\" style='vertical-align:middle'></i> Oops, Terjadi kesalahan</div>";}	
}	
if (isset($_FILES["file"]["tmp_name"])) {
	require_once(INC.DS."/anti_xss.php");
			$id = $_POST['id'];
			$images = $_FILES["file"]["tmp_name"];
			$new_images = $_FILES["file"]["name"];
			copy($_FILES["file"]["tmp_name"],CDN.DS."/new/images/customer/".$_FILES["file"]["name"]);
			$bukti="new/images/customer/".$new_images;
			
		$do = $db->query("update profile set foto='$bukti' where id='$id'");
		if ($do){$pesan = "<div class=\"msg msg-sukses\"><i class=\"fa fa-check-square-o\" style='vertical-align:middle'></i> Terima kasih, Profile berhasil tersimpan</div>"; }
		else{$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\" style='vertical-align:middle'></i> Oops, Terjadi kesalahan</div>";}	
}	
$cust=explode(" ", $_SESSION['cust']);  
if(isset($_SESSION['custid'])){$cid=$_SESSION['custid'];} else{$cid=$_SESSION['custid'];}
$data_produk = ("select *  from profile where username='".$cid."' "); 
$result = $db->query($data_produk);
while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {
?>
<div class="container-fluid container-full pt51">
	<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Selamat  <?php echo $selamat ?> <span class="brush"><?php echo (strtoupper($a_data['nama'])); ?> </span> </div></div>			
<?php
switch ($_GET['act']) {
case 'dashboard':
?>	
				<div id="meshSection2" class="container-fluid border-bottom">
					<div class="row">
						<div class="col-xs-12 left2 spartan">
							<div class="col-xs-3"><amp-img class="circle border3 light-color" width="70" height="70" src="<?php if(empty($a_data['foto'])){echo $c_cdn;?>/new/images/customer/user.png<?php } else { echo $c_cdn."/".$a_data['foto'];}?>" ></amp-img></div>
							<div class="col-xs-9">
									<table class="light-color">
										<tbody>
											<tr><td><b><?php echo (strtoupper($a_data['nama'])); ?></b></td></tr>
											<tr><td><?php echo (strtoupper($a_data['nohp'])); ?></td></tr>
											<tr><td>
												<div class="space-2"></div>
												<div class="mt30">
													<a href="<?php echo $c_url."/akun-saya";?>" class="button button-small  light-bg primary-color">Profile</a>
													<a href="<?php echo $c_url."/keluar";?>" class="button button-small  light-bg primary-color">Log Out</a>
												</div>
											</td></tr>
									</table>
							</div><!-- COL-XS-4 ENDS -->
						</div><!-- COL-XS-4 ENDS -->		
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->		
				<table class="primary-color">
					<tbody>
					<tr><td>Email</td><td>:</td><td><b><?php echo (strtoupper($a_data['email'])); ?></b></td></tr>
					<tr><td>Provinsi</td><td>:</td><td><b><?php echo (strtoupper($a_data['provinsi'])); ?></b></td></tr>
					<tr><td>Kota</td><td>:</td><td><b><?php echo (strtoupper($a_data['kota'])); ?></b></td></tr>
					<tr><td>Kode Pos</td><td>:</td><td><b><?php echo (strtoupper($a_data['kodepos'])); ?></b></td></tr>
					<tr><td>Kecamatan</td><td>:</td><td><b><?php echo (strtoupper($a_data['kecamatan'])); ?></b></td></tr>
					</tbody>
				</table>
<?php break; case 'akun-saya': ?>
				<div id="meshSection2" class="container-fluid border-bottom">
					<div class="row">
						<div class="col-xs-12 left2 spartan">
							<div class="col-xs-3"><amp-img class="circle border3 light-color" width="70" height="70" src="<?php if(empty($a_data['foto'])){echo $c_cdn;?>/new/images/customer/user.png<?php } else { echo $c_cdn."/".$a_data['foto'];}?>" ></amp-img></div>
							<div class="col-xs-9">
									<table class="light-color">
										<tbody>
											<tr><td><b><?php echo (strtoupper($a_data['nama'])); ?></b></td></tr>
											<tr><td><?php echo (strtoupper($a_data['nohp'])); ?></td></tr>
											<tr><td>
												<div class="space-2"></div>
												<div class="mt30">
													<a href="<?php echo $c_url."/dashboard";?>" class="button button-small  light-bg primary-color">Dashboard</a>
													<a href="<?php echo $c_url."/keluar";?>" class="button button-small  light-bg primary-color">Log Out</a>
												</div>
											</td></tr>
									</table>
							</div><!-- COL-XS-4 ENDS -->
						</div><!-- COL-XS-4 ENDS -->		
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->						
    <div class="container-fluid container-full">
		<div class="bordered-title">
			<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Edit Profile </span></div>
			<amp-carousel class="collapsible-captions"
			  height="200"
			  layout="fixed-height"
			  type="slides">
			  <figure>
				<div class="fixed-height-container">
					<amp-img layout="fill" src="<?php if(empty($a_data['foto'])){echo $c_cdn;?>/new/images/customer/user.png<?php } else { echo $c_cdn."/".$a_data['foto'];}?>"></amp-img>
					<amp-image-lightbox id="lightbox1" layout="nodisplay"></amp-image-lightbox>
				</div>
			  </figure>
			  
			</amp-carousel>	
		</div>		
	</div><!-- SLIDER ENDS -->

<?php
if(isset($_SESSION['custid'])){$cid=$_SESSION['custid'];} else{$cid=$_SESSION['custid'];}
$data_produk = ("select *  from profile where username='".$cid."' "); 
$result = $db->query($data_produk);
while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
?>
<?php if(!isset($_POST['update_alamat2'])){?>
			<div class="container-fluid container-full border-bottom">
			<div class="space-2"></div>
			<div class="container-fluid">
			<form enctype="multipart/form-data" action-xhr="<?php echo $app->CURRENT_URL(); ?>" class="text-center" method="post"  id="customerProfileForm" >
					<input type="hidden" name="id" value="<?php echo $a_data['id']; ?>">
					<input class="input" type="file" name="file" onchange="this.form.submit()">
			</form>
			<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top" class="i-amphtml-error">
					<small>Nama Lengkap</small><input  type="text" name="nama" id="user" value="<?php if(isset($a_data['nama'])){echo (strtoupper($a_data['nama']));} else { echo "Nama Lengkap"; } ?>"  class="input" required="">
					<small>Nomor Handphone</small><input  type="tel" name="nohp" id="user" value="<?php if(isset($a_data['nohp'])){echo (strtoupper($a_data['nohp']));} else { echo "Nomor Handphone"; } ?>"  class="input" required="">
					<input type="hidden" name="id" value="<?php echo $a_data['id']; ?>">
					<center><button type="submit" name="edit" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> Simpan </button></center>
			</form>
			</div><!-- COL-XS-4 ENDS -->			
			</div><!-- COL-XS-4 ENDS -->				
<div class="container-fluid">
<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top" class="i-amphtml-error">
			<div class="space-2"></div>
			<fieldset>
				<small>Provinsi</small>
				<select name="prov_id" class="input" required>
<?php
$data_prov =("SELECT * FROM tbl_provinsi");
$prov = $db->query($data_prov);
if(isset($a_data['prov_id'])){echo '<option value="'.$a_data['prov_id'].'" >'.$a_data['provinsi'].'</option>';} 
else{echo'<option >Pilih Provinsi</option>';}
while ($dataprov = $prov->fetch_array(MYSQLI_BOTH)) {
echo'<option value="'.$dataprov['provinsi_id'].'">'.$dataprov['provinsi'].'</option>';
}
?>
				</select>
				<center><button type="submit" name="update_alamat2" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> Next </button></center>
</form>
</div>
<?php } else { ?>
<div class="container-fluid">
<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top" class="i-amphtml-error">				
						<input type="hidden" name="id" value="<?php echo $a_data['id']; ?>">
						<small>Kota</small>
				<select name="kota" class="input" required>
<?php
$data_prov =("SELECT * FROM tbl_kota where provinsi_id='".$_POST['prov_id']."'");
$prov = $db->query($data_prov);
if(isset($a_data['kota_id'])){echo '<option value="'.$a_data['kota_id'].'" >'.$a_data['kota'].'</option>';} 
else{echo'<option >Pilih Kota</option>';}
while ($dataprov = $prov->fetch_array(MYSQLI_BOTH)) {
echo'<option value="'.$dataprov['kota_id'].'">'.$dataprov['kota'].'</option>';
}
?>
				</select>						
						<input  type="hidden" name="prov_id" placeholder="Nama Kota" id="user" value="<?php if(isset($a_data['provinsi_id'])){echo (strtoupper($a_data['provinsi_id']));} else { echo $_POST['prov_id']; } ?>"  class="input" required="">
						<small>Kode Pos</small><input  type="text" class="input" placeholder="Kode Pos" name="kodepos" value="<?php if(isset($a_data['kodepos'])){echo (strtoupper($a_data['kodepos']));} ?>" required>
						<small>Kecamatan</small><input  type="text" class="input" placeholder="Kecamatan" name="kecamatan" value="<?php if(isset($a_data['kecamatan'])){echo (strtoupper($a_data['kecamatan']));} ?>" required>
						<small>Alamat Lengkap</small><textarea class="input" required  placeholder="Alamat Lengkap" type="text" name="alamat"><?php if(isset($a_data['alamat'])){echo (strtoupper($a_data['alamat']));} ?></textarea>
						<input type="hidden" name="id" value="<?php echo $a_data['id']; ?>">
						<center><button type="submit" name="update_alamat" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> Simpan Alamat </button></center>
			</fieldset>
</form>
<?php } ?>
</div>
</div>
<?php } break;
case 'riwayat-pesanan':
$custs = $_SESSION['cust'];
$cid=$_SESSION['custid'];
$cek_query = ("select * from cust_users where  cust_fn = '$custs'"); 
$result = $db->query($cek_query);
$cek_user = $db->num_rows($cek_query);
$data_user = $result->fetch_array(MYSQLI_BOTH);	
if ($cek_user != 0) {
	if ($data_user['status'] == "Y") {
	$_SESSION['cust'] = $data_user['cust_fn'];	
	$_SESSION['ecust'] = $data_user['cust_mail'];
	$_SESSION['custid'] = $data_user['cust_id'];
	} else {$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, Email user diblokir</div>";}	
}
$custid = $_SESSION['custid'];
?>
				<div id="meshSection2" class="container-fluid border-bottom">
					<div class="row">
						<div class="col-xs-12 left2 spartan">
							<div class="col-xs-3"><amp-img class="circle border3 light-color" width="70" height="70" src="<?php if(empty($a_data['foto'])){echo $c_cdn;?>/new/images/customer/user.png<?php } else { echo $c_cdn."/".$a_data['foto'];}?>" ></amp-img></div>
							<div class="col-xs-9">
									<table class="light-color">
										<tbody>
											<tr><td><b><?php echo (strtoupper($a_data['nama'])); ?></b></td></tr>
											<tr><td><?php echo (strtoupper($a_data['nohp'])); ?></td></tr>
											<tr><td>
												<div class="space-2"></div>
												<div class="mt30">
													<a href="<?php echo $c_url."/dashboard";?>" class="button button-small  light-bg primary-color">Dashboard</a>
													<a href="<?php echo $c_url."/keluar";?>" class="button button-small  light-bg primary-color">Log Out</a>
												</div>
											</td></tr>
									</table>
							</div><!-- COL-XS-4 ENDS -->
						</div><!-- COL-XS-4 ENDS -->		
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->		
				<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">HISTORY PEMESANAN</div></div>			
					<table class="listprod">
						<tr>
							<th>NOMOR</th>
							<th>TANGGAL </th>
							<th>SUBTOTAL</th>							
							<th>STATUS</th>
						</tr>	
						<?php
						$no=1;
						$d = ("select o.tgl_pesan, o.order_id, o.nama, o.status, sum(od.qty) as item, sum(od.total) as subtotal from orders o, order_detail od where o.order_id=od.order_id and o.cust_id='$custid' group by od.order_id"); 
						$cekd = $db->num_rows($d);
						$resultd = $db->query($d);
						if ($cekd>0) {
						while ($data = $resultd->fetch_array(MYSQLI_BOTH)) {			
						?>																	
						<tr>
							<td><?php echo "<a href='detail-pesanan/$data[order_id]'>".$data['order_id']."</a>"; ?></td>
							<td><?php echo date('d/m/Y', strtotime($data['tgl_pesan'])); ?></td>
							<td><?php echo "Rp. ".number_format($data['subtotal'], 0,',','.'); ?></td>							
							<td><?php echo "<a href='detail-pesanan/$data[order_id]'  class='button button-small  primary-bg light-color'>Detail</a>"; ?></td>
						</tr>	
						<?php
							$no++;
							}
						}else{
							?>
						<tr>
							<td colspan="4">Tidak ada history belanja</td>
						</tr>
							<?php
						}
						?>				
					</table>
<?php
break;								
case 'permintaan-barang':
$custs = $_SESSION['cust'];
$cid=$_SESSION['custid'];
$cek_query = ("select * from cust_users where  cust_fn = '$custs'"); 
$result = $db->query($cek_query);
$cek_user = $db->num_rows($cek_query);
$data_user = $result->fetch_array(MYSQLI_BOTH);				
if ($cek_user != 0) {
	if ($data_user['status'] == "Y") {
		$_SESSION['cust'] = $data_user['cust_fn'];	
		$_SESSION['ecust'] = $data_user['cust_mail'];
		$_SESSION['custid'] = $data_user['cust_id'];
	} else {$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, Email user diblokir</div>";}	
}
$custid = $_SESSION['custid'];
$custnama = $_SESSION['cust'];	
//$c = mysql_query("select p.produk_nama, o.size, p.harga, o.qty, o.total from order_detail o, produk p where o.produk_id=p.produk_id and o.cust_id='$custid'");
//$sub = mysql_fetch_array(mysql_query("select sum(total) as subtotal from order_detail where order_id='$kodeord' group by order_id"));
?>	
					<div id="meshSection2" class="container-fluid border-bottom">
						<div class="row">
							<div class="col-xs-12 left2 spartan">
								<div class="col-xs-3"><amp-img class="circle border3 light-color" width="70" height="70" src="<?php if(empty($a_data['foto'])){echo $c_cdn;?>/new/images/customer/user.png<?php } else { echo $c_cdn."/".$a_data['foto'];}?>" ></amp-img></div>
								<div class="col-xs-9">
										<table class="light-color">
											<tbody>
												<tr><td><b><?php echo (strtoupper($a_data['nama'])); ?></b></td></tr>
												<tr><td><?php echo (strtoupper($a_data['nohp'])); ?></td></tr>
												<tr><td>
													<div class="space-2"></div>
													<div class="mt30">
														<a href="<?php echo $c_url."/dashboard";?>" class="button button-small  light-bg primary-color">Dashboard</a>
														<a href="<?php echo $c_url."/keluar";?>" class="button button-small  light-bg primary-color">Log Out</a>
													</div>
												</td></tr>
										</table>
								</div><!-- COL-XS-4 ENDS -->
							</div><!-- COL-XS-4 ENDS -->		
						</div><!-- ROW ENDS -->
					</div><!-- CONTAINER-FLUID ENDS -->	
					<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">PERMINTAAN BARANG</div></div>
					<table class="listprod">
						<tr>
							<th>TANGGAL </th>
							<th>ITEM</th>
							<th>HARGA</th>							
							<th>STATUS</th>
						</tr>	
						<?php
						$no=1;
						$d = ("select * from penawaran  where username='$custid'"); 
						$cekd = $db->num_rows($d);
						$resultd = $db->query($d);
						if ($cekd>0) {
						while ($data = $resultd->fetch_array(MYSQLI_BOTH)) {			
						?>																	
						<tr>
							<td><?php echo date('d/m/Y', strtotime($data['tanggal'])); ?></td>
							<?php /*
							<td><form name="formshipping" class="form form-cust" action="<?php echo $c_url;?>/invoice" method="post" style="">
								
			<?php 
			$data_produk = ("select *  from profile where username='".$custid."' "); 
			$result = $db->query($data_produk);		
			while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {$kota2=$a_data['kota']	;
			$kode = strtoupper(substr(uniqid(), 7));
			$kodeord = strtoupper(substr($kota2, 0, 3)).$kode; 	
			$kodepos = 17146;
			$ongkir_ = 0;
			if(empty($_SESSION['cart'])){$_SESSION['subtotal'] = 0;}			
			$pid = $data['id_produk'];
			$q = 1;			
			$max=1;
			$_SESSION['cart'][$max]['produkid']=$pid;
			$_SESSION['cart'][$max][$q] = $q;
			$_SESSION['subtotal']+=($data['harga_nego']*$q);			
			?>
			<?php echo "
			<input type='hidden' name='kodeord_' value='".$kodeord."' />
			<input type='hidden' name='custid' value='".$custid."' />
			<input type='hidden' name='nama_' value='".$custnama."' />
			<input type='hidden' name='kota_' value='".$kota2."' />
			<input type='hidden' name='provinsi_' value='".$a_data['provinsi']."' />
			<input type='hidden' name='kodepos_' value='".$a_data['kodepos']."' />
			<input type='hidden' name='phone_' value='".$a_data['nohp']."' />
			<input type='hidden' name='ongkir_' value='".$ongkir_."' />
			<input type='hidden' name='alamat_' value='".$a_data['alamat']."' />
			<input type='hidden' name='email' value='".$_SESSION['ecust']."' />
			<input type='hidden' name='seri_mesin' value='".$data['seri_mesin']."' />
			<input type='hidden' name='harga_mesin' value='".$data['harga_nego']."' />			
			";} ?>
						
							<input type="submit" name="ordernow" class="buton primary btn btn-secondary btn-block" value="NEXT" onclick="window.location='invoice'">
						</form>			
							</td>*/ ?>
							<td><?php echo $data['seri_mesin']; ?></td>
							<td><?php echo "Rp. ".number_format($data['harga_nego'], 0,',','.'); ?></td>							
							<td><?php echo $data['status']; ?></td>
						</tr>	
						<?php
							$no++;
							}
						}else{
							?>
						<tr>
							<td colspan="4">Tidak ada history belanja</td>
						</tr>
							<?php
						}
						?>				
					</table>
<?php require_once PLUG.'/mobile/help2.php'; ?>
<?php break; case 'incaran':
if(isset($_REQUEST['pengen'])){$pid = $_POST['produkid'];$tanggal=date('Y-m-d');$uid=$_POST['param1'];
	$data_insert = array("uid"=>$uid, "pid"=>$pid, "tanggal"=>$tanggal);$db->insert("keinginan", $data_insert);}						
	$custs = $_SESSION['cust'];
	$cid=$_SESSION['custid'];
	$cek_query = ("select * from cust_users where  cust_fn = '$custs'"); 
	$result = $db->query($cek_query);
	$cek_user = $db->num_rows($cek_query);
	$data_user = $result->fetch_array(MYSQLI_BOTH);	
						
if ($cek_user != 0) {
	if ($data_user['status'] == "Y") {
		$_SESSION['cust'] = $data_user['cust_fn'];	
		$_SESSION['ecust'] = $data_user['cust_mail'];
		$_SESSION['custid'] = $data_user['cust_id'];
	} else {$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\"></i> Oops, Email user diblokir</div>";}	
}
$custid = $_SESSION['custid'];
$custnama = $_SESSION['cust'];	
?>
					<div id="meshSection2" class="container-fluid border-bottom">
						<div class="row">
							<div class="col-xs-12 left2 spartan">
								<div class="col-xs-3"><amp-img class="circle border3 light-color" width="70" height="70" src="<?php if(empty($a_data['foto'])){echo $c_cdn;?>/new/images/customer/user.png<?php } else { echo $c_cdn."/".$a_data['foto'];}?>" ></amp-img></div>
								<div class="col-xs-9">
										<table class="light-color">
											<tbody>
												<tr><td><b><?php echo (strtoupper($a_data['nama'])); ?></b></td></tr>
												<tr><td><?php echo (strtoupper($a_data['nohp'])); ?></td></tr>
												<tr><td>
													<div class="space-2"></div>
													<div class="mt30">
														<a href="<?php echo $c_url."/dashboard";?>" class="button button-small  light-bg primary-color">Dashboard</a>
														<a href="<?php echo $c_url."/keluar";?>" class="button button-small  light-bg primary-color">Log Out</a>
													</div>
												</td></tr>
										</table>
								</div><!-- COL-XS-4 ENDS -->
							</div><!-- COL-XS-4 ENDS -->		
						</div><!-- ROW ENDS -->
					</div><!-- CONTAINER-FLUID ENDS -->	
					<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">WISH LIST MESIN FOTOCOPY</div></div>
					<div class="container-fluid">
					<table class="listprod">
						<tr>
							<th>TANGGAL </th>
							<th>ITEM</th>						
							<th>BATAL</th>
						</tr>	
						<?php
						$no=1;
						$d = ("select * from keinginan where uid='$custid'"); 
						$cekd = $db->num_rows($d);
						$resultd = $db->query($d);
						if ($cekd>0) {
						while ($data = $resultd->fetch_array(MYSQLI_BOTH)) {$param0=$data['id'];			
						?>																	
						<tr>
							<td><?php echo date('d/m/Y', strtotime($data['tanggal'])); ?></td>
							<td>
			<?php 
			$data_produk = ("select *  from produk where id_produk='".$data['pid']."' "); 
			$result = $db->query($data_produk);		
			while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {$nama_item=$a_data['nama_produk'];	$harga_baru=$a_data['harga_baru'];if($a_data['brand']=="Canon"){$brands="canon";} else {$brands="fujixerox";}$linknya=$brands."-".$a_data['link'];}
			?>					<a href="<?php echo $c_url."/".$linknya;?>"> <?php echo $nama_item; ?> </a>		
							</td>
							<td ><form action="" method="POST"><input type="hidden" name="param0" value="<?php echo $data['id']; ?>"><input type="submit" name="hapus" class="buton primary btn btn-secondary btn-block" value="Hapus"></form></td>
<?php
if(isset($_REQUEST['hapus'])){
		//delete
		$h_id = abs((int)$_REQUEST['param0']);
		if ($db->query("delete from keinginan where id='$h_id'")){
			header($c_url."/mesin-fotocopy-incaran");
			exit();
		}
	}
?>							
						</tr>	
						<?php $no++;}} else { ?>
						<tr>
							<td colspan="3">Tidak ada incaran mesin fotocopy</td>
						</tr><?php } ?>				
					</table>					
					</div>
<?php
break; }
?>
<?php } require_once PLUG.'/mobile/akun.php'; ?>
</div>