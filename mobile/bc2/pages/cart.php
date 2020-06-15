	<?php 
		$subtotal = 0;$submasa = 0;
		if (isset($_REQUEST['command'])) {		
			if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){remove_product($_REQUEST['pid']);}			
			else if($_REQUEST['command']=='update'){
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['produkid'];
					$q=intval($_REQUEST['qty'.$pid]);
					if($q>0 && $q<=999){
						$_SESSION['cart'][$i]['qty']=$q;
					}					
				}
			}
		}
if(isset($_POST['checkout'])) {$provinsi=$_POST['provinsi'];echo "<meta http-equiv='refresh' content='0;url=".$c_url."/checkout' />";}
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);	
switch ($_GET['act']) {
	case 'cart':
		?>	
	<br><br>
	<div class="container-fluid container-full pt51">
		<div class="space-2"></div>
		<div class="row">
			<div class="col-xs-12">
				<?php if (!empty($_SESSION['cart'])) {?>
				<form method="post" name="formcart" action="<?php echo $app->CURRENT_URL(); ?>" target="_top" on="submit-success:success-lightbox;submit-error:error-lightbox">
						<input type="hidden" name="command">
						<input type="hidden" name="pid">	
					<amp-accordion class="accordion">
						<section>
							<header class="h5 accordion-title">KERANJANG BELANJA <small>( <?php if (!empty($_SESSION['cart'])) { if (is_array($_SESSION['cart'])) {$max = count($_SESSION['cart']);echo $max;}} else {echo"0";} ?> Items )</small></header>
							<div class="padding-left-0 padding-right-0">
					<?php if (is_array($_SESSION['cart'])) {
							$max = count($_SESSION['cart']);							
							for ($i=0; $i<$max; $i++) {
								$pid = $_SESSION['cart'][$i]['produkid'];
								$q = $_SESSION['cart'][$i]['qty'];
								$s = $_SESSION['cart'][$i]['size'];
								
								$data_produk = ("select *  from produk where id_produk = '".$pid."' ORDER BY produk.id_produk ASC, produk.date DESC, produk.time");
								$result = $db->query($data_produk);
								while ($data = $result->fetch_array(MYSQLI_BOTH)) {
								$total = $q * $data['harga_baru'];
								$a_brand = $data['brand']; if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
								$subtotal += (($q * $data['harga_baru'])+(($q * $data['harga_baru'])*(10/100)));
								$ppn = ($subtotal*(10/100));
								$_SESSION['subtotal'] = $subtotal;
								$nama_seo = $data['nama_produk'];
								$masa = ($data['panjang']*$data['lebar']*$data['tinggi']);
								$submasa += ($q * $masa);
								?>							
								<div class="cart-product-item clearfix">
									<a href="<?php echo $c_url."/".$a_brands."-".$data['link'].""; ?>" class="preview">
									<?php if(!empty($data['image_satu'])){?>
										<amp-img
												src="<?php echo $c_url."/".$data['image_satu']; ?>"
												width="140"
												height="140"
												layout="responsive"></amp-img>
									<?php } ?>			
									</a>
									<div class="price font-2">Rp. <?php echo number_format($subtotal, 0,',','.'); ?></div>
									<a href="<?php echo $c_url."/".$a_brands."-".$data['link'].""; ?>" class="title"><?php echo $data['nama_produk']; ?></a>

									<a href="javascript:del(<?php echo $pid ?>)" title="Hapus dari keranjang" class="remove-from-cart"><i class="fa fa-times"></i></a>
									<div class="space-2"></div>
									<div class="clearfix options">
										<div class="pull-left"><span>Merk : <?php echo $data['brand']; ?></span></div>
										<div class="pull-left">
											Jumlah : <input name="qty<?php echo $pid ?>" type="text" step="1"onchange="update_cart()" name="quantity" title="Qty"  class="form-control text-center input-qty qty" size="1" min="1"  value="<?php echo $q; ?>">
										</div>
									</div>
									
									
								</div><!-- CART-PRODUCT-ITEM ENDS -->
							<?php }} ?>
							<div class="space-2"></div>
							<button name="update" value="UPDATE HARGA" onclick="update_cart()"  class="button button-large button-full grass-bg margin-0">UPDATE HARGA</button>							
							</div>
						</section>
					</amp-accordion><!-- PRODUCTS IN CART ACCORDION ENDS -->
				</form>		
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->

	<div class="container-fluid">
		<form action-xhr="<?php echo $c_url."/checkout"; ?>" method="post">								
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
				<h5 class="margin-0 font-2 pull-left"><b>TOTAL</b></h5>
				<h5 class="margin-0 pull-right"><b>Rp <?php $totalnya=$ppn+$subtotal; echo number_format($totalnya, 0,',','.'); ?></b></h5>
				<div class="space-2 clear-both"></div>						
			</div>
		</div>			
				<div class="space-3"></div>
				<button name="checkout" class="button button-large button-full grass-bg margin-0" type="submit">Check Out</button> 
		</form>	
				<div class="divider-30 colored"></div>
				<h5 class="margin-top-0">Pembayaran Aman</h5>

				<p class="margin-0">Jangan melakukan pembayaran apabila transfer ke Rekening Tujuan selain atas nama Perusahaan atau atas namamu sendiri. Harap diperhatikan!!</p>

				<div class="space-2"></div>
				
				
			</div><!-- COL-XS-12 ENDS -->
	
					<?php }
} else {?>
						<div class="emptycart"><center>
							<amp-img src="<?php echo $c_cdn;?>/new/images/amp/empty.svg" width=90 height=90></amp-img>
							<p class="emptycart">Keranjang Belanja Kamu Kosong !!</p>
							<a class="chat btn btn-primary search-button" href="<?php echo $c_url;?>">Lanjutkan Berbelanja</a>
							</center>
						</div>				
					<?php } ?>		
		<script language="javascript">
			function del(pid){				
				document.formcart.pid.value=pid;
				document.formcart.command.value='delete';
				document.formcart.submit();			
			}
			function update_cart(){
				document.formcart.command.value='update';
				document.formcart.submit();
			}
		</script>					
<?php break; case 'checkout': 
if(isset($_SESSION['custid'])){$cid=$_SESSION['custid'];
	$data_produks2 = ("select *  from profile where username='".$cid."' "); 
	$results2 = $db->query($data_produks2);
	while ($a_datas2 = $results2->fetch_array(MYSQLI_BOTH)) {	
	$nama_s3=$a_datas2['nama'];
	$email_s3=$a_datas2['email'];
	$phone_s3=$a_datas2['nohp'];
	$provinsi_s3=$a_datas2['provinsi'];
	$kota_s3=$a_datas2['kota'];
	$pos_s3=$a_datas2['kodepos'];
	$alamat_s3=$a_datas2['alamat'];
	}
}
 ?>
    <div class="container-fluid container-full pt51">
		<div class="row">
			<div class="col-xs-12">							
				<div class="pageHeader"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Informasi <span class="brush" >PEMESANAN</span>  !! </div></div>
			<div class="container-fluid">
			<?php if(!isset($_POST['billingaddr'])){ ?>
		<form action-xhr="<?php echo $app->CURRENT_URL(); ?>" method="post">	
				<input name="nama" placeholder="Masukkan Nama Asli Sesuai KTP" value="<?php if(isset($nama_s3)){echo $nama_s3;} ?>" type="text" class="input" required/>
				<input name="email" placeholder="Masukkan E-Mail Asli" type="email" value="<?php if(isset($email_s3)){echo $email_s3;} ?>" class="input" required/>
				<input type="tel" class="input" placeholder="Masukkan Nomor HP yang bisa di Hubungi" value="<?php if(isset($phone_s3)){echo $phone_s3;} ?>" name="phone" required=""/>
				<select name="provinsi" class="input" required>
<?php
$data_prov =("SELECT * FROM tbl_provinsi");
$prov = $db->query($data_prov);

$data_prov234 =("SELECT * FROM tbl_provinsi where provinsi='$provinsi_s3'");
$prov234 = $db->query($data_prov234);
$dataprov234 = $prov234->fetch_array(MYSQLI_BOTH);
if(isset($provinsi_s3)){echo '<option value="'.$dataprov234['prov_id'].'" >'.$provinsi_s3.'</option>';} 
else{echo'<option >Pilih Provinsi Tujuan Pengiriman</option>';}
while ($dataprov = $prov->fetch_array(MYSQLI_BOTH)) {
echo'<option value="'.$dataprov['provinsi_id'].'">'.$dataprov['provinsi'].'</option>';
}
?>
				</select>	
<input type="hidden" name="pengirim" value="55">
<input type="hidden" name="ongkir" value="0">
				<div class="space-3"></div>
				<button type="submit" name="billingaddr"  class="button button-large button-full grass-bg margin-0" type="submit">Check Out</button> 
		</form>
<?php } if(isset($_POST['billingaddr'])){ ?>
		<form action-xhr="<?php echo $app->CURRENT_URL(); ?>" method="post">	
				<select name="kota_" class="input" required>
<?php
$data_prov =("SELECT * FROM tbl_kota where provinsi_id='".$_POST['provinsi']."' ");
$prov = $db->query($data_prov);

$data_prov234 =("SELECT * FROM tbl_kota where provinsi_id='".$_POST['provinsi']."' and kota='$kota_s3'");
$prov234 = $db->query($data_prov234);
$dataprov234 = $prov234->fetch_array(MYSQLI_BOTH);
if(isset($kota_s3)){echo '<option value="'.$dataprov234['prov_id'].'" >'.$kota_s3.'</option>';} 

if(isset($a_data['prov_id'])){echo '<option value="'.$a_data['kota_id'].'" >'.$a_data['kota'].'</option>';} 
else{echo'<option >Pilih Kota Tujuan Pengiriman</option>';}
while ($dataprov = $prov->fetch_array(MYSQLI_BOTH)) {
echo'<option value="'.$dataprov['kota_id'].'">'.$dataprov['kota'].'</option>';
}
?>
				</select>	
				<textarea name="alamat_" placeholder="Detail Alamat Pengiriman"class="input" required=""><?php if(isset($alamat_s3)){echo $alamat_s3;} ?></textarea>
				<input type="tel" class="input" placeholder="Masukkan Kode Pos Daerah" value="<?php if(isset($pos_s3)){echo $pos_s3;} ?>"  name="kodepos" required=""/>
<input type="hidden" name="nama_" value="<?php echo $_POST['nama'] ?>" />
<input type="hidden" name="email" value="<?php echo $_POST['email'] ?>" />
<input type="hidden" name="provinsi_" value="<?php echo $_POST['provinsi']; ?>"/>
<input type="hidden" name="phone_" value="<?php echo $_POST['phone'] ?>" />	
<?php
$subtotal = 0; $submasa = 0;
if (!empty($_SESSION['cart'])) {								
if (is_array($_SESSION['cart'])) {
$max = count($_SESSION['cart']);
$no=1;							
for ($i=0; $i<$max; $i++) {
$pid = $_SESSION['cart'][$i]['produkid'];
$q = $_SESSION['cart'][$i]['qty'];
$s = $_SESSION['cart'][$i]['size'];			
								
$data_produk = ("select *  from produk where produk.id_produk = '".$pid."'");
$result = $db->query($data_produk);
while ($data = $result->fetch_array(MYSQLI_BOTH)) {								

$total = $q * $data['harga_baru'];
$subtotal += ($q * $data['harga_baru']);											
																					
$nama_seo = $data['nama_produk'];
$masa = ($data['panjang']*$data['lebar']*$data['tinggi']);
$submasa += ($q * $masa);
?>
<input type="hidden" name="seri_mesin" value="<?php echo strtoupper($data['nama_produk']); ?>"/>
<input type="hidden" name="harga_mesin" value="<?php echo number_format($data['harga_baru'], 0,',','.'); ?>"/>
<?php $no++;								
}}
} 
}	
?>
<input type="hidden" name="ongkir_" value="0">
<input type="hidden" name="pengirim" value="55">
<input type="hidden" name="ongkir" value="0">
<input type="hidden" name="provinsi" value="<?php echo $_POST['provinsi'];?>">

				<div class="space-3"></div>
				<button type="submit" name="billingaddr2"  class="button button-large button-full grass-bg margin-0" type="submit">Check Out</button> 
		</form>

<?php }
if(isset($_POST['billingaddr2'])){
$kota2 =  $_POST['kota_']; 
$kota1 = $db->query("SELECT * FROM tbl_kota WHERE kota_id like '%$kota2%'");
$data = $kota1->fetch_array(MYSQLI_BOTH);
$kota=$data['kota']; 

$province = $_POST['provinsi_'];
$prov = $db->query("SELECT * FROM tbl_provinsi WHERE provinsi_id = '$province'");
$data = $prov->fetch_array(MYSQLI_BOTH);
$provinsinya=$data['provinsi']; 


//membuat kode order id
$kode = strtoupper(substr(uniqid(), 7));
$kodeord = strtoupper(substr($kota2, 0, 3)).$kode; 
$kodepos = $_POST['kodepos'];
$nama = $_POST['nama_'];
$email = $_POST['email'];
$provinsi = $provinsinya;
$alamat = $_POST['alamat_'];
$phone = $_POST['phone_'];
$ongkir_ = $_POST['ongkir_'];
$tanggal=date('Y-m-d');
$seri_mesin=$_POST['seri_mesin'];
$harga_mesin=$_POST['harga_mesin'];

if(isset($_SESSION['custid'])){$custid = $_SESSION['custid'];	
$data_insert = array("order_id"=>$kodeord,  "cust_id"=>$custid, "nama"=>$nama, "kota"=>$kota, "provinsi"=>$provinsi, "kodepos"=>$kodepos, "alamat"=>$alamat, "phone"=>$phone, "tgl_pesan"=>$tanggal);
$berhasil= $db->insert("orders", $data_insert);
} else {
$data_insert = array("order_id"=>$kodeord,  "nama"=>$nama, "kota"=>$kota, "provinsi"=>$provinsi,    "kodepos"=>$kodepos, "alamat"=>$alamat, "phone"=>$phone, "tgl_pesan"=>$tanggal);
$berhasil= $db->insert("orders", $data_insert);
}					
if(isset($_SESSION['cart'])){ $max=count($_SESSION['cart']);
for ($i=0; $i<$max; $i++) {
$pid = $_SESSION['cart'][$i]['produkid'];
$q = $_SESSION['cart'][$i]['qty'];	
}	
$data_produk4 = ("select * from produk where id_produk ='".$pid."'");
$result4 = $db->query($data_produk4);
$data = $result4->fetch_array(MYSQLI_BOTH);	
			
$total = $q * $data['harga_baru'];
$subtotal=0;
$subtotal += ($q * $data['harga_baru']);
$data_insert2 = array("order_id"=>$kodeord, "produk_id"=>$pid, "qty"=>$q, "total"=>$total);
$db->insert("order_detail", $data_insert2);
}
//action
$EmailFrom = $email;
$Email = Trim(stripslashes($email)); 
$EmailTo = $Email.", jauharimalik@vanectro.com, romi@vanectro.com, mario@vanectro.com, info@vanectro.com";


$Name = Trim(stripslashes($nama )); 
$Tel = Trim(stripslashes($phone)); 
$Kota = Trim(stripslashes($kota)); 
$Email = Trim(stripslashes($email)); 
$seri_mesin = Trim(stripslashes($seri_mesin)); 
$harga_mesin = Trim(stripslashes($harga_mesin)); 
$total=($harga_mesin+($harga_mesin*(10/100)));
$harga_nego = Trim(stripslashes($harga_mesin)); 
$tanggal=date('Y-m-d');
$kodeord = $kodeord;	
$Subject = "Order - ".$Name." - ".$kodeord;
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}


$Body = "";
$Body .= " 
<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Nego Mesin Fotocopy</title>
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    .kontak-kantor{background: url(../../new/img/bullet-login.png) no-repeat 0 0;padding-left: 35px!important;width: 70%;font-size:14px; font-weight:normal;}
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
#masterHeader {
    width: 800px;
	margin:auto;
	margin-top:-20px;
    background-color: #355482;
    text-align: center;
    z-index: 999;
    height: 49px;	
    position: absolute;
    overflow: hidden;	
}	

#masterLogo {background-image: url(https://www.vanectro.com/cdn/images/mobile/vanectro-logo-web-mobile.png);}
#masterLogo {
    height: 49px;
    width: 100%;
	color:#fff;
	text-decoration:none;
	text-transform:uppercase;
	font-size:20px;
    background-position: center 49%;
    background-repeat: no-repeat;
    background-size: auto 55%;
}
.footer{text-align:center;}
.footer a{text-decoration:none; color:blue; text-transform:uppercase;}
.pesanan{margin-top:40px;}
    </style>
</head>
<body>
    <div class='invoice-box'>
		<div id='masterHeader'>
            <a href='https://www.vanectro.com'><div id='masterLogo'>VANECTRO</div></a>
        </div>
		<div class='pesanan'>
        <table cellpadding='0' cellspacing='0'>
            <tr class='top'>
                <td colspan='2'>
                    <table>
                        <tr>
                            <td class='kontak-kantor'>
								<b>PT. VANECTRO ANDALAN NUSANTARA</b><br>
								Ruko Sentra Office Blok D No. 35 <br>
								JL. Boulevard Grand Galaxy Park,Bekasi Indonesia <a href='https://www.vanectro.com/map'>Share lokasimu </a><br>
								021 8273 4557 / 0812 8033 6345<br>
							</td>
                            <td>
                                No Pesanan #: ".$kodeord."<br>
                                Tanggal : ".date('d / m / Y')." <br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class='information'>
                <td colspan='2'>
                    <table>
                        <tr>
                            <td>
                                <b>".$Name." </b><br>
                                ".$Kota."<br>
                                ".$Tel." / ".$Email."
                            </td>
                            
                            <td>
                               <b>PT. VANECTRO ANDALAN NUSANTARA</b><br>
                                Mario Mulyadi ( Marketing )<br>
                                0812 8033 6345 / mario@vanectro.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class='heading'>
                <td>Seri Mesin</td>
                <td>Harga Tertera</td>
            </tr>
            
            <tr class='details'>
                <td>".$seri_mesin."</td>
                <td>".$harga_mesin."</td>
            </tr>
               
            <tr class='total'>
                <td></td>
                <td>
                   Total: Rp ".$total."
                </td>
            </tr>
        </table>
		</div>
    </div>
</body>
</html>
";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>\n". 
"MIME-Version: 1.0\n" . 
"Content-type: text/html; charset=iso-8859-1");

unset($_SESSION['cart']);

if(!$berhasil){ echo "<meta http-equiv='refresh' content='0;url=".$c_url."/order' />";}
else{ echo "<meta http-equiv='refresh' content='0;url=".$c_url."/detail-pesanan/".$kodeord."' />";}	
}
break;

}	
?>
			</div>
			</div>
		</div><!-- ROW ENDS -->
	</div>					