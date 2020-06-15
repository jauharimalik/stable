<?php
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$site_image="$c_cdn/new/images/login.png";
$page_title="Informasi Akun - Layanan Pelanggan $site_name";
$site_description=$page_title." Informasi lebih detail Ke $site_name Aja...";

if (isset($_SESSION['ecust'])){ header('location:'.$c_url.'/dashboard');}
	switch ($_GET['act']) {
		case 'logout':
			unset($_SESSION['ecust']);
			unset($_SESSION['cust']);		
			unset($_SESSION['custid']); 
			unset($_SESSION['nama']); 	
			unset($_SESSION['avatar']); 
			unset($_SESSION['nohp']); 	
			session_destroy();
			header('location:'.$c_url.'/masuk');
			break;
			
		case 'sign':	
			$pesan="";
			if (isset($_POST['login'])) {
				$usercust = $db->escape_string($_POST['usercust']);
				$passcust = $db->escape_string(md5($_POST['passcust']));
				
				$sql2 = "select * from users where (email = '$usercust' and password = '$passcust') or (username = '$usercust' and password = '$passcust') ";
				$hasil2 = $db->num_rows($sql2);
				$data2 = $db->fetch($sql2); 
				if ($hasil2 > 0) {
					$_SESSION['userid'] = $data2['user_id'];	
					$_SESSION['username'] = $data2['username'];
					$_SESSION['fullname'] = $data2['fullname'];
					$_SESSION['email'] = $data2['email'];
					$_SESSION['ecust'] = $data2['email'];
					$_SESSION['level'] = $data2['level'];
					$_SESSION['nohp'] = $data2['no_telp'];
					$_SESSION['avatar'] = $data2['avatar'];
					$_SESSION['c_id'] = $data2['user_id'];	
					$_SESSION['nama'] = $data2['fullname'];
					
					header('location:'.$c_url.'/dashboard'); exit;
				} else {
					$sql = "select * from cust_users LEFT JOIN profile ON cust_users.cust_id = profile.username where  cust_users.cust_mail = '$usercust' and cust_users.cust_pass = '$passcust'";
					echo $sql;
					$hasil = $db->num_rows($sql);
					$data = $db->fetch($sql); 
					if ($hasil != 0) {
						if ($data['status'] == "Y") {
							$_SESSION['cust'] = $data['cust_fn'];
							$_SESSION['nama'] = strtoupper($data['nama']);
							if(isset($data['foto'])){$_SESSION['avatar'] = $c_url."/".$data['foto'];}
							else {$_SESSION['avatar'] = $c_url."/new/images/amp/foo/user.webp";}
							$_SESSION['nohp'] = $data['nohp'];		
							$_SESSION['ecust'] = $data['cust_mail'];
							$_SESSION['custid'] = $data['cust_id'];

							$_SESSION['c_id'] = $_SESSION['custid'];	
							$_SESSION['username'] = $_SESSION['cust'];
							$_SESSION['fullname'] = $_SESSION['cust'];
							$_SESSION['email'] = $_SESSION['ecust'];
							$_SESSION['ecust'] = $_SESSION['ecust'];
							$_SESSION['level'] = $data['level'];
							$_SESSION['avatar'] = $_SESSION['avatar'];
							$_SESSION['nohp'] = $_SESSION['nohp'];
					
							
							$pesan="Hore berhasil login email ".$_SESSION['ecust']." akun ".$_SESSION['username'];
							header('location:'.$c_url.'/dashboard'); exit;
						} else {
							$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, Email user diblokir</div>";
						}	
					} else {
						$pesan = "<div class=\"msg msg-error\"><i class=\"fa fa-times\" style='vertical-align:middle'></i> Oops, kombinasi email dan password salah</div>";
					}
				}
			}
			$halamanlogin="login1.php";
			break; 


			
		case 'signup': 
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
						header('location:'.$c_url.'/dashboard');				
					} }
				} 
			}
		$halamanlogin="login2.php";
		break; 
	} 	


				
$pageslogin=TEMPLATE_DIR."/content/static/".$halamanlogin;
$pageurl = "content/static/masuk.php";
$p="akun";

require_once(LIB .DS. 'cache.php');
require_once(TEMPLATE_DIR."/index.php");
