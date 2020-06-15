<?php
//load file security
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

$sql = "select * from blokir where ip='$ip'";
$result = $db->num_rows($sql);
if ($result>0){
	echo "<script type='text/javascript'>alert('Mau Ngapain Om !!! Alamat Sama IP Omnya : $ip udah kesimpen kok !! hehe');</script>"; 
	echo "<meta http-equiv='refresh' content='0;URL=".$c_url."' />";   
} 
