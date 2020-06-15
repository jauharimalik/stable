<?PHP
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
$tanggal=date('Y-m-d');

$ipban = explode(",",$ip);
$ipban = $ipban[0];

require_once(LIB.DS."anti_xss.lib.php");



if (anti_xss($c_url) == false){

$sql = "select * from blokir where ip='$ip'";
$result = $db->num_rows($sql);

if ($result<=0){
	$datasta23 = array("ip"=>$ip, "tanggal"=>$tanggal, "lokasi"=>$app->CURRENT_URL(), "ip_public"=>$ipban, "log"=>"1");
	$db->insert("blokir", $datasta23);		
} 
 else {
	
	$do = $db->query("update blokir set log='$alamat', kota='$kota', provinsi='$provinsi',kodepos='$kodepos', prov_id='$prov_id', kota_id='$kota_id', kecamatan='$kecamatan'  where id='$id'"); 
}
 
//require_once(LIB.DS."cloudflare_block.php");
//$cek_bot = is_bot($_SERVER['HTTP_USER_AGENT']);

if($cek_bot<=1){
    //cfban($ipban);
    echo "<script type='text/javascript'>alert('Mau Ngapain Om !!! Alamat Sama IP Omnya : $ip udah kesimpen kok !! hehe');</script>"; 
    echo "<meta http-equiv='refresh' content='0;URL=".$c_url."' />";

} else {
    //cfunban($ipban);
    //cfwhban($ipban); 
    echo "<meta http-equiv='refresh' content='0;URL=".$c_url."' />";     
}

?> 
<style>
body{
	margin-top:20px;
	background:#dcdcdc
}
#preview
{
color:#cc0000;
font-size:12px
}
.imgList 
{
width:195px;
border:solid 1px #dedede;
padding:10px;
margin-left:5px;	
}
.box{
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
.box1{
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.box1:hover{
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 0 10px rgba(0,0,0,0.2);
  -o-box-shadow: 0 0 10px rgba(0,0,0,0.2);
  -ms-box-shadow: 0 0 10px rgba(0,0,0,0.2);
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
}
</style>

<div class="inner-continer">
				<div class='row'>
					<div class='col-md-12'>
						<div class='panel panel-danger'>
							<div class='panel-heading'>
								<h4 class="panel-title">Access Forbiden! (ANTI XSS)</h3>
                                <div class="panel-tools">
                                </div>
							</div>
							<div class='panel-body'>


				<div class='box1'>
					<h4>Access Forbiden! (ANTI XSS) <span class='pull-right'><a href='<?php echo $c_url;?>/masuk' title='back to home page' class='btn btn-danger btn-sm'>Back To Dashboard</a></span></h4>
					<hr>
				</div>
								</div>
						</div>
					</div>
				</div>
</div>
<?php

exit();
}
?>