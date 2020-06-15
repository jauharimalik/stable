<?php 
switch ($_GET['act']) {
	case 'sign':	
	$pesan="";
	
	if (isset($_POST['login'])) {
			$usercust = $db->escape_string($_POST['usercust']);
			$passcust = $db->escape_string(md5($_POST['passcust']));
	$sql2 = "select * from users where  email = '$usercust' and password = '$passcust'";
	$hasil2 = $db->num_rows($sql2);
	$data2 = $db->fetch($sql2); 
			if ($hasil2 > 0) {
					$_SESSION['userid'] = $data2['user_id'];	
					$_SESSION['username'] = $data2['username'];
					$_SESSION['password'] = $data2['password'];
					$_SESSION['fullname'] = $data2['fullname'];
					$_SESSION['email'] = $data2['email'];
					$_SESSION['level'] = $data2['level'];
					$_SESSION['avatar'] = $data2['avatar'];
					echo "<meta http-equiv='refresh' content='0;url=".$c_url."/admin/ws-dashboard' />";
				} else {
	$sql = "select * from cust_users where  cust_mail = '$usercust' and cust_pass = '$passcust'";
	$hasil = $db->num_rows($sql);
	$data = $db->fetch($sql); 
			if ($hasil != 0) {
				if ($data['status'] == "Y") {
					$_SESSION['cust'] = $data['cust_fn'];	
					$_SESSION['ecust'] = $data['cust_mail'];
					$_SESSION['custid'] = $data['cust_id'];
					echo "<meta http-equiv='refresh' content='0;url=".$c_url."/keranjang-belanja' />";	
				} else {
					 $pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, Email user diblokir</div>";
				}	
				
			} else {
				//header('location:../../index');
				$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, kombinasi email dan password salah</div>";
			}}
	}
if (!empty($_SESSION['cust'])) {echo "<meta http-equiv='refresh' content='0;url=".$c_url."/dashboard' />";} else { 
?>
    <div class="container-fluid container-full pt51">
	<amp-img width="424" height="243" src="<?PHP echo $c_cdn; ?>/new/images/login.png" layout="responsive"></amp-img>	
		<div class="bordered-title">
			<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Login Akun <span class="brush"><?php echo $site_name; ?></span></div>
		</div>		
	</div><!-- SLIDER ENDS -->
    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<form method="post" action-xhr="<?php echo $c_url; ?>/masuk" target="_top" class="i-amphtml-error">
					<fieldset>
						<input  type="email" name="usercust" id="user" placeholder="Username / Email"  class="input" required="">
						<input  type="password" name="passcust" id="user" placeholder="Password"  class="input" required="">
						<center><button type="submit" name="login" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> Login </button></center>
					</fieldset>
				</form>
			</div><!-- COL-XS-12 ENDS -->
		</div>	
	</div><!-- SLIDER ENDS -->
                <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
							<div id="ctl00_cphContent_divContent" class="padding">
								<p class="MsoNormal"><b>Portal Bantuan Pelanggan :</b></p>
									<ul class="tcvpb_shortcode_ul ">
										<li> Merasa kesulitan dengan sistem yang kami sediakan ?? Butuh bantuan atau ingin konsultasi langsung..</li>
										<li> Belum punya akun di <?php echo $site_name;?> Silahkan Daftar Akun Baru .</li>
									</ul>
							</div>
						</div>
					</div>			
					<div align="center">
						<a href="<?php echo $c_url?>/daftar" class="button chat2 primary-bg light-color margin-left-0">Register Akun</a>
					</div>	
				</div>
<?php 	
} break; case 'signup': 
	if (isset($_POST['signup'])) {
		$sql = "select cust_mail from cust_users where cust_mail='$_POST[emailcust]'";
		$cekmail = $db->num_rows($sql);
		if ($cekmail != 0) {
			$pesan = "<div class=\"msg msg-warn\"><i class=\"fa fa-warning\" style='vertical-align:middle'></i> Email sudah terdaftar, silahkan login</div>";
		} else {
			if ($_POST['passc']!=$_POST['passcust']) {
				$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, terjadi kesalahan password tidak sama</div>";
			} else {
				$fncust = $db->escape_string($_POST['fullnamecust']);
				$ecust = $db->escape_string($_POST['emailcust']);
				$nohp = $db->escape_string($_POST['nomorhp']);
				$pcust = $db->escape_string(md5($_POST['passcust']));
				$konfirm = $db->escape_string(md5($_POST['passc']));
				$status=$db->escape_string("Y");
				$tanggal=$db->escape_string(date('Y-m-d'));
								
				if($pcust!=$konfirm){echo "<script>javascript: alert('password tidak sama')></script>";}
				else{				
				$data_insert = array("cust_fn"=>$fncust, "cust_mail"=>$ecust, "cust_pass"=>$pcust, "status"=>$status, "tgl_daftar"=>$tanggal);
				$oke1=$db->insert("cust_users", $data_insert);
				
				if($oke1){
				$sql2 = "select * from cust_users where  cust_mail ='".$ecust."'";
				$hasil = $db->num_rows($sql2);
				$data = $db->fetch($sql2); 		
				$custid=$data['cust_id'];
				
				$data_insert2 = array("nohp"=>$nohp, "nama"=>$fncust, "username"=>$custid, "email"=>$ecust);
				$oke2=$db->insert("profile", $data_insert2);	
				if($oke2){
				$_SESSION['ecust']=$ecust;
				$_SESSION['cust']=$fncust;
				$_SESSION['custid'] = $custid;
				} else{ echo"gagal";}
				} else{ echo"gagal";}
				echo "<meta http-equiv='refresh' content='0;url=".$c_url."/keranjang-belanja' />";				
			} }
		} 
	}
	if (!empty($_SESSION['cust'])) {echo "<meta http-equiv='refresh' content='0;url=".$c_url."/dashboard' />";} else {
?>	
    <div class="container-fluid container-full pt51">
	<amp-img width="424" height="243" src="<?PHP echo $c_cdn; ?>/new/images/login.png" layout="responsive"></amp-img>	
		<div class="bordered-title">
			<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Daftar Akun <span class="brush"><?php echo $site_name; ?></span></div>
		</div>		
	</div><!-- SLIDER ENDS -->
    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<form method="post" action-xhr="<?php echo $c_url; ?>/masuk" target="_top" class="i-amphtml-error">
					<fieldset>
						<input  type="text" name="fullnamecust" id="user" placeholder="Nama Lengkap"  class="input" required="">
						<input  type="email" name="emailcust" id="user" placeholder="Email"  class="input" required="">
						<input  type="password" name="passc" id="user" placeholder="Password"  class="input" required="">
						<input  type="password" name="passcust" id="user" placeholder="Password"  class="input" required="">
						<input  type="telp" name="nomorhp" id="user" placeholder="Nomor Handphone"  class="input" required="">
						<center><button type="submit" name="signup" id="lacakorder" class="button chat2 primary-bg light-color margin-left-0"> Daftar </button></center>
					</fieldset>
				</form>
			</div><!-- COL-XS-12 ENDS -->
		</div>	
	</div><!-- SLIDER ENDS -->
                <div class="container-fluid">
					<div class="padding">
						<div class="listview bgGrey bordered rounded">
							<div id="ctl00_cphContent_divContent" class="padding">
								<p class="MsoNormal"><b>Portal Bantuan Pelanggan :</b></p>
									<ul class="tcvpb_shortcode_ul ">
										<li> Monitoring penuh pada perangkat yang kamu beli dari kami, untuk memudahkanmu dalam perawatan, serta menangani kerusakan yang kamu temui...</li>
										<li> Sudah punya akun di <?php echo $site_name;?> Silahkan Login Terlebih Dahulu .</li>
									</ul>
							</div>
						</div>
					</div>			
					<div align="center">
						<a href="<?php echo $c_url?>/masuk" class="button chat2 primary-bg light-color margin-left-0">Login Akun</a>
					</div>	
				</div>
<?php 
}
 break; case 'logout':
		unset($_SESSION['ecust']);
		unset($_SESSION['cust']);		
		unset($_SESSION['custid']); 
	
		//echo "<script>window.location.current();</script>";
		echo "<meta http-equiv='refresh' content='0;url=".$c_url."/masuk' />";
		break; } 
?>