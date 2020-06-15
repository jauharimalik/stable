<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
header('Content-Type: application/json');


if (!function_exists('int3'))   {
	function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
}

$pmore = "";
if(isset($p)){
	$pmore = "-".$p;
}

//action
$pesan="";
$cust  = array($_SESSION['username']);
	$usercust = $_SESSION['ecust'];
	$cid = $_SESSION['c_id'];
	$dashboard_user = "select * from users where  email = '$usercust' and user_id  = '$cid'";
	$hasil2 = $db->num_rows($dashboard_user);
	$dashboard_data_user = $db->fetch($dashboard_user); 
	if ($hasil2 > 0) {
		$nama = $dashboard_data_user['fullname']; 
		$nohp = $dashboard_data_user['no_telp'];
		$email = $dashboard_data_user['email'];
		$avatar = $dashboard_data_user['avatar'];
		$avatar = $c_url."/".$avatar;
		$level = $dashboard_data_user['level'];
	} 
	
if(isset($_SESSION['ecust'])){
	$usercust = $_SESSION['ecust'];
	$cid = $_SESSION['c_id'];
	$dashboard_user = "select * from users where  email = '$usercust' and user_id  = '$cid'";
	$hasil2 = $db->num_rows($dashboard_user);
	$dashboard_data_user = $db->fetch($dashboard_user); 
	if ($hasil2 > 0) {
		$nama = $dashboard_data_user['fullname']; 
		$nohp = $dashboard_data_user['no_telp'];
		$email = $dashboard_data_user['email'];
		$avatar = $dashboard_data_user['avatar'];
		$avatar = gallery_webpimage($avatar,77,77,"user");
		$level = $dashboard_data_user['level'];
	} 
	else {
		$dashboard_user = ("select * from cust_users LEFT JOIN profile ON cust_users.cust_id = profile.username where cust_users.cust_id = '$cid' and cust_users.cust_mail='$usercust'");
		$dashboard_cek_user = $db->num_rows($dashboard_user);
		$dashboard_data_user =$db->fetch($dashboard_user); 
		if ($dashboard_cek_user != 0) {
			if ($dashboard_data_user['status'] == "Y") {
				$nama = $dashboard_data_user['cust_fn'];
				$nohp = $dashboard_data_user['nohp'];
				$email = $dashboard_data_user['email'];
				$avatar = $dashboard_data_user['foto'];
				$avatar = gallery_webpimage($avatar,77,77,"user");
				$level = ucwords(strtolower($dashboard_data_user['level']));				
			}	
		} 
	}
	
?>
[{
    "nama":"<?php echo $nama; ?>",
    "nohp":"<?php echo $nohp; ?>",
	"email":"<?php echo $email; ?>",
    "avatar":"<?php echo $avatar; ?>",
    "level":"<?php echo $level; ?>",	
	"menu" : [
		{
			"name_tab":"Pembeli",
			"tab":"tab-1",
			"list" : [{
				"namamenu" : "Edit Profile",
				"linkmenu" : "<?php echo $c_url;?>/akun-saya"
			},{
				"namamenu" : "Tambah Alamat",
				"linkmenu" : "<?php echo $c_url;?>/tambah-alamat"				
			},{
				"namamenu" : "Riwayat Transaksi",
				"linkmenu" : "<?php echo $c_url;?>/riwayat-pesanan"				
			},{
				"namamenu" : "Nego Produk",
				"linkmenu" : "<?php echo $c_url;?>/permintaan-barang"				
			},{
				"namamenu" : "Wish List Produk",
				"linkmenu" : "<?php echo $c_url;?>/mesin-fotocopy-incaran"				
			}
			]
		}
		<?php if($level != "Member") {?>
		,{
			"name_tab":"Penjual",
			"tab":"tab-2",
			"list" : [{
				"namamenu" : "Daftar Pesanan",
				"linkmenu" : "<?php echo $c_url;?>/ws-order/listorder"
			},{
				"namamenu" : "Buat PO",
				"linkmenu" : "<?php echo $c_url;?>/ws-order/buatpo"				
			},{
				"namamenu" : "Konfirmasi Pembayaran",
				"linkmenu" : "<?php echo $c_url;?>/ws-order/pembayaran"				
			},{
				"namamenu" : "Permintaan Nego",
				"linkmenu" : "<?php echo $c_url;?>/ws-order/penawaran"				
			},{
				"namamenu" : "Ulasan Pelanggan",
				"linkmenu" : "<?php echo $c_url;?>/ws-ulasan"				
			},{
				"namamenu" : "Tambah Rekening",
				"linkmenu" : "<?php echo $c_url;?>/ws-produk/listproduk"				
			},{
				"namamenu" : "Daftar Kategori Produk",
				"linkmenu" : "<?php echo $c_url;?>/ws-produk/kategori"				
			},{
				"namamenu" : "Daftar Produk",
				"linkmenu" : "<?php echo $c_url;?>/ws-produk/listproduk"				
			},{
				"namamenu" : "Artikel",
				"linkmenu" : "<?php echo $c_url;?>/ws-berita/listberita"				
			},{
				"namamenu" : "Aktivitas Pelanggan",
				"linkmenu" : "<?php echo $c_url;?>/ws-aktivitas-pelanggan/listcust"				
			},{
				"namamenu" : "Story Penjual",
				"linkmenu" : "<?php echo $c_url;?>/ws-aktivitas-kami"				
			},{
				"namamenu" : "Info Toko",
				"linkmenu" : "<?php echo $c_url;?>/ws-tokokami"				
			}
			]			
		}
		<?php } if($level == "Admin"){ ?>
		,{
			"name_tab":"Admin",
			"tab":"tab-3",
			"list" : [{
				"namamenu" : "Daftar Admin",
				"linkmenu" : "<?php echo $c_url;?>/ws-users/listuser"
			},{
				"namamenu" : "Daftar Pelanggan",
				"linkmenu" : "<?php echo $c_url;?>/ws-cust/listcust"				
			},{
				"namamenu" : "Data Toko",
				"linkmenu" : "<?php echo $c_url;?>/ws-tokokami/listtoko"				
			},{
				"namamenu" : "Setting Web",
				"linkmenu" : "<?php echo $c_url;?>/ws-order/penawaran"				
			}
			]			
		}
		<?php } ?>
	]
}]
<?php	
} else{ 
	header("Location: ".$c_url."/masuk");
}