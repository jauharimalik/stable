<?php
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$site_image="$c_cdn_img/mobile/banner/cara-pemesanan-min.jpg";	
$page_title="Dashboard Akunku - $site_name";
$site_description=$page_title." Info akun $site_name";		

require_once(LIB .DS. 'cache.php');

//action
$pesan="";
$cust  = array($_SESSION['username']);

if(isset($_SESSION['ecust'])){
	$usercust = $_SESSION['ecust'];
	$cid = $_SESSION['c_id'];
	$dashboard_user = "select * from users where  email = '$usercust' and user_id  = '$cid'";
	$hasil2 = $db->num_rows($dashboard_user);
	$dashboard_data_user = $db->fetch($dashboard_user); 
	if ($hasil2 > 0) {
		$_SESSION['custid'] = $dashboard_data_user['user_id'];	
		$_SESSION['cust'] = $dashboard_data_user['username'];
		$_SESSION['ecust'] = $dashboard_data_user['email'];
	} else {
		$dashboard_user = ("select * from cust_users LEFT JOIN profile ON cust_users.cust_id = profile.username where cust_users.cust_id = '$cid' and cust_users.cust_mail='$usercust'");
		$dashboard_cek_user = $db->num_rows($dashboard_user);
		$dashboard_data_user =$db->fetch($dashboard_user); 
		if ($dashboard_cek_user != 0) {
			if ($dashboard_data_user['status'] == "Y") {
				$_SESSION['cust'] = $dashboard_data_user['cust_fn'];	
				$_SESSION['ecust'] = $dashboard_data_user['cust_mail'];
				$_SESSION['custid'] = $dashboard_data_user['cust_id'];
			}	
		} 
	}
	$pathdashboard = TEMPLATE_DIR.DS."content/dashboard/";
	$pageurl = "content/static/dashboard.php";
	$p="akun";
	require_once(TEMPLATE_DIR."/index.php");
	
} else{ 
	header("Location: ".$c_url."/masuk");
}	