<?php 	if(!isset($_REQUEST['order_id'])){ ?>	
	<div class="container-fluid container-full pt51">
		<amp-img width="1300" height="233" src="<?PHP echo $c_cdn; ?>/new/images/header-email-us.jpg" layout="responsive"></amp-img>
		<div class="row">
			<div class="col-xs-12">
				<div class="bordered-title">
					<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Cek Status <span class="brush">PESANAN</span> disini.</div>
				</div><!-- TITLE ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div>
	<div class="container-fluid">	
		<div class="row">
			<div class="col-xs-12">
				<form method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" target="_top">
					<fieldset>
						<input name="name" id="lacakpesanan" placeholder="Masukkan Nomor Pesananmu !!" type="text" class="input" required>
						<center><button type="submit" name="cari" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-search"></i> Cari </button></center>
					</fieldset>
				</form>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- SLIDER ENDS -->
<?php 
if(isset($_POST["cari"])){
 $judul2=$_POST["name"];
 $data_result=("SELECT * FROM orders where order_id = '".$judul2."'");
 $result = $db->query($data_result);
 $found = $db->num_rows($data_result);
 if($found>=0){
while($row = $result->fetch_array(MYSQLI_BOTH)){ ?>	
	<div class="container-fluid margin-top-minus-30">
		<div class="row">
					<table>
						<tbody>
							<tr>
								<td><b>Nomor </b></td><td>:</td><td><?php echo  $row['order_id']; ?></td>
							</tr>
							<tr>
								<td><b>Status </b></td><td>:</td><td><?php echo  $row['status']; ?></td>
							</tr>
							<tr>
								<td><b>Info </b></td><td>:</td><td ><a href="<?php echo $c_url."/detail-pesanan/".$row['order_id']; ?>" class="button button-small chat2 primary-bg light-color margin-left-0"> Lihat Detail </a></td>
							</tr>
						</tbody>
					</table>
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
<?php }}} 
} else{
	if(isset($_REQUEST['order_id'])){ $orderid = $_REQUEST['order_id']; 
$cariid = $db->num_rows("select order_id from orders where order_id='".$orderid."'");if ($cariid != 0) { ?>
<?php	
$kodeord = $_REQUEST['order_id'];		
$data_produk = ("select * from orders where order_id='$kodeord'"); 
$data_produk2 = ("select p.nama_produk, p.brand, p.image_satu, p.harga_baru, o.qty, o.total from order_detail o, produk p where o.produk_id=p.id_produk and o.order_id='$kodeord'"); 
$c2 = $db->query($data_produk);
$c = $db->query($data_produk2);
$d = $c2->fetch_array(MYSQLI_BOTH);
$d2 = $c->fetch_array(MYSQLI_BOTH);
$c3 = $db->num_rows($data_produk);

if($d['status']=="Menunggu"){$stat=1;$stat_text="Menunggu Pembayaran";}
else if($d['status']=="Dalam Proses"){$stat=2;$stat_text="Proses Pengemasan Barang";}
else if($d['status']=="Dikirim"){$stat=3;$stat_text="Pengiriman Ekspedisi";}
else if($d['status']=="Terkirim"){$stat=4;$stat_text="Barang Diterima";}
else{$stat=0;}
?>
<?php	
if (isset($_POST['confrm3'])) {		
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
	<amp-img width="334" height="186" src="<?PHP echo $c_cdn_img; ?>/mobile/banner/cara-pembayaran-min.jpg" layout="responsive"></amp-img>		
	</div><!-- SLIDER ENDS -->
	<amp-accordion>
		<section expanded="">
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Klik : Konfirmasi Pembayarannya !! <i class="fa fa-caret-down"></i></div></div></h6>	
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
				<div class="container-fluid">	
					<div class="row">
						<div class="col-xs-12">
							<form method="post" action-xhr="<?php echo $c_url;?>/konfirmasi-pembayaran" name="formshipping" enctype="multipart/form-data" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox">
								<fieldset>
									<input name="orderid" placeholder="Nomor Pemesanan" type="hidden" value="<?php echo $d['order_id'];?> " class="input" required>
									<input name="bank" placeholder="Bank Yang Kamu Gunakan" type="text" class="input" required>
									<input name="namapemilik" placeholder="Atas Nama Bank yang Kamu gunakan" type="text" class="input" required>
									<input name="rekpemilik" placeholder="Nomor Rekening Bank yang Kamu gunakan" type="tel" class="input" required>
									<select class="input" required  name="rektujuan" required>
										<option value="BCA">BCA (<?php echo $nomor_bca;?> a.n <?php echo $nama_bca;?>)</option>
										<option value="MANDIRI">MANDIRI (<?php echo $nomor_mandiri;?> a.n <?php echo $nama_mandiri;?>)</option>
										<option value="BRI">BRI (<?php echo $nomor_bri;?> a.n <?php echo $nama_bri;?>)</option>
									</select>
									<input placeholder="Nominal Transfer yang Kamu lakukan.." type="tel" name="transfer" class="input" required>
									<textarea class="input" required  placeholder="Keterangan Tambahan.." type="text" name="ket"></textarea>
									<input type="file" name="file" class="input" required/>
									<p><b>Note</b>: Jumlah Transfer diisi dengan nominal tanpa titik atau koma, contoh: 265000</p>
									<input type="hidden" name="task" value="upload" class="input" required/>
									<center><button type="submit" name="confrm" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-sent"></i> Kirim </button></center>
								</fieldset>
							</form>
						</div><!-- COL-XS-12 ENDS -->
					</div><!-- ROW ENDS -->
				</div><!-- CONTAINER-FLUID ENDS -->	
				
			</div>
		</section>
	</amp-accordion>	
	<amp-accordion>
		<section>
			<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Konfirmasi Pembayaran : MANUAL !! <i class="fa fa-caret-down"></i></div></div></h6>	
			<div>
	<div class="pekat sbawah margin-bottom-0 container-fluid">
		<div class="row margin-bottom-0 ">
			<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Kontak <span class="brush" >MARKETING</span> !!</div>
			<div class="col-xs-12 margin-bottom-0">
				<table>
					<tbody>
						<tr><td colspan="2">Nama</td><td>:</td><td><a class="txtNotLink clickable" href="tel:<?php echo $telp_marketing;?>"><?php echo $marketing_mesin;?></a></td></tr>
						<tr><td colspan="2">Telp</td><td>:</td><td>
							<a class="txtNotLink clickable" href="intent://send/62<?php echo $telp_marketing;?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">0<?php echo $telp_marketing;?></a> 
						</td></tr>
						<tr><td colspan="2">BBM</td><td>:</td><td> <a class="txtNotLink clickable" href="bbmi://<?php echo $bbm_marketing;?>"><?php echo $bbm_marketing;?></a></td></tr>
					</tbody>
				</table>	
			</div><!-- COL-XS-6 ENDS -->				
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
<?php } else { ?>
<div class="container-fluid container-full pt51">
<div class="halb">		
<amp-selector role="tablist"
  layout="container"
  class="ampTabContainer">
  <div role="tab"
    class="tabButton"
    selected
    option="spoilera"><i class="fa fa-info-circle"></i> Info</div>
  <div role="tabpanel" class="tabContent">
	<div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> Detail Pesanan <?php echo $d['order_id'];?> :</div></div>	
				<div class="container-fluid">
					<table>
						<tbody>
							<tr>
								<td><b>Nama </b></td><td>:</td><td><?php echo ucwords($d['nama']);?></td>
							</tr>
							<tr>
								<td><b>Kota </b></td><td>:</td><td><?php echo $d['kota'];?></td>
							</tr>
							<tr>
								<td ><b>Provinsi </b></td><td>:</td><td><?php echo $d['provinsi'];?></td>
							</tr>
							<tr>
								<td ><b>Alamat </b></td><td>:</td><td><?php echo ucwords($d['alamat']." ".$d['kodepos']);?></td>
							</tr>							
						</tbody>
					</table>	
                </div>
				<div class="space-2"></div>
				<?php if($c3>=0){ ?>
				<amp-accordion class="accordion">
					<section>
						<header class="h5 accordion-title">PESANAN BARANG</header>
						<div class="padding-left-0 padding-right-0">
							<?php  $subtotal=0; $c = $db->query($data_produk2); while ($data = $c->fetch_array(MYSQLI_BOTH)){ 
							$subtotal += (($data['qty'] * $data['harga_baru']));
							$ppn = ($subtotal*(10/100));
							?>							
								<div class="cart-product-item clearfix">
									<a class="preview">
										<amp-img src="<?php echo $c_url."/".$data['image_satu']; ?>" width="140" height="140" layout="responsive"></amp-img>		
									</a>
									<div class="price font-2"><?php echo "Rp. ".number_format($data['total'], 0,',','.'); ?></div>
									<a class="title"><?php echo $data['nama_produk']; ?></a>
									<div class="space-2"></div>
									<div class="clearfix options">
										<div class="pull-left"><span>Merk : <?php echo $data['brand']; ?></span></div>
										<div class="pull-left">
											Jumlah : <?php echo $data['qty']; ?>
										</div>
									</div>
								</div><!-- CART-PRODUCT-ITEM ENDS -->	
								<?php } ?>
							<div class="space-2"></div>
						</div>
					</section>
				</amp-accordion><!-- PRODUCTS IN CART ACCORDION ENDS -->		
				
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="bordered-title">
					<h5>TOTAL</h5>
					<h5>Harus Dibayarkan</h5>
				</div><!-- TITLE ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
		<div class="space-2 clear-both"></div>
		<div class="row">
			<div class="col-xs-12">
				<h5 class="margin-0 font-2 pull-left">PPN 10%</h5>
				<h5 class="margin-0 pull-right">Rp <?php echo number_format($ppn, 0,',','.'); ?></h5>
				<div class="space-2 clear-both"></div>		
				<h5 class="margin-0 font-2 pull-left">SUB TOTAL</h5>
				<h5 class="margin-0 pull-right">Rp <?php echo number_format($subtotal, 0,',','.'); ?></h5>		
				<div class="space-2 clear-both"></div>
				<hr>
				<div class="space-2 clear-both"></div>
				<h5 class="margin-0 font-2 pull-left">TOTAL</h5>
				<h5 class="margin-0 pull-right">Rp <?php $totalnya=$ppn+$subtotal; echo number_format($totalnya, 0,',','.'); ?></h5>		
				<div class="space-2 clear-both"></div>					
			</div>
		</div>				
		<div class="space-2"></div>
				<table>
					<tbody>
						<tr><td>Status</td><td>:</td><td><?php echo $stat_text;?></td></tr>
						<?php if($stat<=1){ ?>
						<tr><td>Pembayaran</td><td>:</td><td>
							<div class="mt30">
								<a href="<?php echo $c_url;?>/pembayaran" class="button button-small  primary-bg light-color">Pembayaran</a>
								<form class="d-inlineblock" method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" name="formshipping" enctype="multipart/form-data" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox">
									<fieldset>
										<button type="submit" name="confrm3" class="button button-small  primary-bg light-color"> Konfirmasi </button>
									</fieldset>
								</form>
							</div>
						</td></tr>
						<?php } else { ?>
						<tr><td>Estimasi </td><td>:</td><td>1 - 2 Hari</td></tr>
						<?php }?>
						<tr><td >Kontak </td><td>:</td><td><?php echo "$marketing_mesin2 - $telp_marketing2";?></td></tr>
					</tbody>
				</table>		
	</div><!-- COL-XS-12 ENDS -->
				<?php  } ?>	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerb"><i class="fa fa-truck"></i> Status</div>
  <div role="tabpanel" class="tabContent">
	<div class="container-fluid container-full">	
		<div class="space-2"></div>
		<table>
			<tbody>
				<tr> <td>Status</td><td>:</td><td><?php echo $stat_text;?></td></tr>
						<?php if($stat<=1){ ?>
						<tr><td>Pembayaran</td><td>:</td><td>
							<div class="mt30">
								<a href="<?php echo $c_url;?>/pembayaran" class="button button-small  primary-bg light-color">Pembayaran</a>
								<form class="d-inlineblock" method="post" action-xhr="<?php echo $app->CURRENT_URL(); ?>" name="formshipping" enctype="multipart/form-data" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox">
									<fieldset>
										<button type="submit" name="confrm3" class="button button-small  primary-bg light-color"> Konfirmasi </button>
									</fieldset>
								</form>
							</div>
						</td></tr>
						<?php } else { ?>
						<tr><td>Estimasi </td><td>:</td><td>1 - 2 Hari</td></tr>
						<?php }?>
				<tr><td >Kontak </td><td>:</td><td><?php echo "$marketing_mesin2 - $telp_marketing2";?></td></tr>
			</tbody>
		</table>		
		<?php if($stat >= 2){?>
		<amp-accordion>
			<section>
				<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Penyiapan Barang <i class="fa fa-caret-down"></i></div></div></h6>	
				<div>
					<?php if(!empty($d['foto_proses'])){?>
					<center><amp-img width="278" height="185" src="<?php echo $c_url."/".$d['foto_proses'];?>" layout="responsive"></amp-img></center>
					<?php } ?>
						<hr>
						<table >
							<tbody>
								<tr><td colspan="2">Mulai Proses</td><td>:</td><td><?php echo date('d/m/Y', strtotime($d['tgl_proses']))?></td></tr>
								<tr><td colspan="2">Estimasi Waktu</td><td>:</td><td><?php $selesai_proses=$d['tgl_proses']+4; echo date('d/m/Y', strtotime($selesai_proses));?></td></tr>
								<tr><td colspan="2">Penanggung Jawab</td><td>:&nbsp;</td><td><?php echo "$marketing_mesin2 - $telp_marketing2";?></td></tr>
							</tbody>
						</table>
						<hr>
						<table>
							<tbody>
								<tr><td>Nomor Kantor</td><td>:</td><td><?php echo "$d_telp / $d_telp2";?></td></tr>
								<tr><td>Alamat Kantor</td><td>:</td><td><?php echo "$d_alamat2 - $d_alamat3";?></td></tr>
								<tr><td>Marketing</td><td>:</td><td><?php echo "$marketing_mesin - $telp_marketing";?></td></tr>
							</tbody>
						</table>	
						<hr>
				</div>
			</section>
		</amp-accordion>
		<?php } if($stat >= 3){ ?>
		<amp-accordion>
			<section>
				<h6 aria-expanded="true"><div class="pageHeader inline"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Pengiriman Barang <i class="fa fa-caret-down"></i></div></div></h6>	
				<div>
					<?php if(!empty($d['foto_proses'])){?>
					<center><amp-img width="278" height="185" src="<?php echo $c_url."/".$d['foto_proses'];?>" layout="responsive"></amp-img></center>
					<?php } ?>
						<hr>
						<table >
							<tbody>
								<tr><td colspan="2">Tanggal Pengiriman</td><td>:</td><td><?php echo date('d/m/Y', strtotime($d['tgl_kirim']))?></td></tr>
								<tr><td colspan="2">Estimasi Keterlambatan</td><td>:</td><td><?php $selesai_proses=$d['tgl_kirim']+6; echo date('d/m/Y', strtotime($selesai_proses));?></td></tr>
								<tr><td colspan="2">Penanggung Jawab</td><td>:&nbsp;</td><td><?php echo "$marketing_mesin2 - $telp_marketing2";?></td></tr>
							</tbody>
						</table>
						<hr>
						<table>
							<tbody>
								<tr><td>Dikirim Via</td><td>:</td><td><?php echo strtoupper($d['ekspedisi'])?></td></tr>
								<tr><td>Nomor Resi</td><td>:</td><td><?php echo strtoupper($d['resi']);?></td></tr>
								<tr><td>Kontak Pengiriman</td><td>:</td><td><?php echo $d['nohp_pengiriman'];?></td></tr>
							</tbody>
						</table>	
						<hr>
				</div>
			</section>
		</amp-accordion>		
		<?php } ?>
	</div>
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerc"><i class="fa fa-phone-square"></i> Bantuan</div>
	<div role="tabpanel" class="tabContent">
		<?php  require_once PLUG.'/mobile/help.php'; ?>
	</div>
</amp-selector>		
</div>	
	</div><!-- SLIDER ENDS -->
<?php }}}} ?>


	