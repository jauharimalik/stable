<?php
$n="\r\n %0A";
$m_url="$c_url";
$ts = gmdate("D, d M Y H:i:s") . " GMT";
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
<!DOCTYPE html>
<html lang="id">
<head>
	<title><?php echo $page_title;?></title>
	<?php require_once PLUG."/meta.php"; ?>
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#083d77">
	<link rel="apple-touch-icon" sizes="72x72" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_72.png">
	<link rel="apple-touch-icon" sizes="180x180" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_180.png">	
	<link rel="icon" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_32.png">	
	<link rel="icon" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_16.png">
	<link rel="mask-icon" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="purple">
	<script src="<?php echo $c_cdn;?>/new/javascript/v1/jquery-1.9.1.min.js" type="text/javascript"></script>
<style>
@font-face {
	font-family: 'Ubuntu';
	font-style: normal;
	font-weight: normal;
	font-display: swap;
	src: url(<?php echo $c_cdn;?>/fonts/ubuntu/Ubuntu-Regular.ttf) format('truetype');
}

*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    margin: 0!important;
    -webkit-text-size-adjust: 100%;
    -moz-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
}
body,input,html,button,button,textarea,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6,a{
		font-size: 1.3rem;
		line-height: 1.8;
		-webkit-font-smoothing: antialiased;
		color: #3e3e3e;
		text-align: left;
		font-family:Ubuntu;
}
html{font-size: 62.5%;}
header {
		height: 41px;
		padding: 0 5px;
		background: #fff;
		width: 100%;
		position: sticky;
		display: block;
		z-index: 100;
	    top: 0px;
		box-shadow:0 1px 6px rgba(0,0,0,.12);
}
header a{margin-left: 10px;text-decoration:none;}
h2{text-align: center;margin: 0;padding: 10px;display:inline-block;}
#main{text-align:center;background:#eee;min-height:100vh;}
.kotakisi{margin:10px 0;float: left; box-shadow: 0 1px 6px rgba(0,0,0,.12);width:100%;background:#fff;text-align:left;}
button, .button{align-items: center;vertical-align: middle;border-radius: 8px;margin-right: 10px;margin-bottom: 10px;padding: 5px 10px;display: inline-block;font-size: 14px;font-weight: bold;border:none;}
.w90{width:90%;}
.light-color, .white-col {color: #fff;}
.primary-bg {background: #083d77;}
.hide{display:none;}
.fotoakun{width: 20%;display: block;border-radius: 50%;margin: 10px;float:left;}
.profile{text-align: left;display: block;width: 72%;float: left;padding: 10px;}
.profile h2, .profile p{margin:0;padding:0;}
.logout {text-align: center;border-radius: 8px;border: 3px solid;padding: 8px;font-size: 12px;background: #fff;color: #2d3e50;width: 95%;display: inline-block;margin: 0 auto;}
</style>
</head>
<body dir="ltr">
	<header>
		<a onclick="goBack()" aria-label="Kembali Home Page <?php echo $legal_pt;?>"><i class="fa fa-arrow-left"></i></a>
		<h2>Akunku - <?php echo $site_name;?></h2>
	</header>	
<div id="main">
	<div class="kotakisi">
		<img class="fotoakun" src="<?php echo $_SESSION['avatar']; ?>" alt="profile">
		<div class="profile">
			<h2><?php echo $_SESSION['nama']; ?></h2>
			<p><?php echo $_SESSION['nohp']."<br>".$_SESSION['ecust']; ?></p>
		</div>
	</div>
	<a href="<?php echo $c_url;?>/keluar" class="logout"><b>Logout</b></a>
</div>
	<script async type="text/javascript">
		(function() {
			var css = document.createElement('link');
			css.href = '<?php echo $c_cdn;?>/fonts/fa/css/ampico.css';
			css.rel = 'stylesheet';
			css.type = 'text/css';
			document.getElementsByTagName('head')[0].appendChild(css);
		})();		
		function goBack(){window.history.back();}
		if('serviceWorker' in navigator) {
		  navigator.serviceWorker
				   .register('<?php echo $c_url;?>/sw.js')
				   .then(function() { console.log("Service Worker Registered"); });
		}		
	</script>
</body>
</html>