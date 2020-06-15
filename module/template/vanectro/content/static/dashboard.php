<?php
$n="\r\n %0A";
$m_url="$c_url";
$ts = gmdate("D, d M Y H:i:s") . " GMT";
header('Content-Type: text/html');
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: cache");
header("Cache-Control:  public, must-revalidate");
header('HTTP/1.1 200 OK');
header("access-control-allow-credentials:true");
header("access-control-allow-headers:Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token");
header("access-control-allow-methods:POST, GET, OPTIONS");
header("access-control-allow-origin:".$_SERVER['HTTP_HOST']);
header("access-control-expose-headers:AMP-Access-Control-Allow-Source-Origin");
// change to represent your site's protocol, either http or https
header("amp-access-control-allow-source-origin:https://".$_SERVER['HTTP_HOST']);
?>
<div class="dashboard">
<?php 
	switch ($_GET['act']) {
		case 'dashboard': require_once $pathdashboard.'/mdashboard.php'; break;
		case 'akun-saya': require_once $pathdashboard.'/akun-saya.php'; break;
		case 'tambah-alamat': require_once $pathdashboard.'/tambah-alamat.php'; break;
		case 'edit-alamat': require_once $pathdashboard.'/edit-alamat.php'; break;
		case 'riwayat-pesanan': require_once $pathdashboard.'/riwayat-pesanan.php'; break;
		case 'permintaan-barang':  require_once $pathdashboard.'/permintaan-barang.php';  break;
		case 'incaran': require_once $pathdashboard.'/incaran.php';  break;
		default : require_once $pathdashboard.'/mdashboard.php';  break;	
	}	
?>
	
		<div id="kontenload" class="mb50"></div>
		<div class="vjax-layer-tambahalamat"></div>
		<div class="vjax-layer-keranjanga"></div>
		<div class="vjax-layer-searcha"></div>
		<div class="vjax-layer-mchat"></div>
		<div class="vjax-layer-mkategory"></div>
		<div class="vjax-layer-mbantuan"></div>
		<div class="vjax-layer-sidebara"></div>
		<div class="vjax-layer"><div class="vjax-load"></div></div>
		<div id="loadjsvjax"></div>		
</div>		
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>
<script>
	(function() {
			var css = document.createElement('link');
			css.href = '<?php echo $c_cdn;?>/fonts/fa/css/ampico.css';
			css.rel = 'stylesheet';
			css.type = 'text/css';
			document.getElementsByTagName('head')[0].appendChild(css);
	})();		
	function goBack(){window.history.back();}
	function gantitab(evt, tabno) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tab-content");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tab-link");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" current", "");
	  }
	  document.getElementById(tabno).style.display = "block";
	  evt.currentTarget.className += " current";
	}		
</script>