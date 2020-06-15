<!DOCTYPE html>
<html lang="id">
<head>
	<title>Login Akun <?php echo $page_title;?></title>
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
#main{text-align:center;padding:10px;background:#eee;min-height:100vh;}
.kotakisi{padding:10px 0;margin:10px 0; box-shadow: 0 1px 6px rgba(0,0,0,.12);width:100%;padding-left: 20px;background:#fff;text-align:left;}
button, .button{align-items: center;vertical-align: middle;border-radius: 8px;margin-right: 10px;margin-bottom: 10px;padding: 5px 10px;display: inline-block;font-size: 14px;font-weight: bold;border:none;}
.w90{width:90%;}
.light-color, .white-col {color: #fff;}
.primary-bg {background: #083d77;}
.gplus-bg, .fa-google-plus {background-color: #dc4e41;}
.fb-bg, .fa-facebook {background-color: #4867AA;}
input{text-align: left;border: none;outline: none;border-bottom: 1px solid;padding: 10px 0 ;width: 90%;}
.login{width: 90%;text-align: center;font-weight: bold;}
.lupapass{font-weight: 600;text-decoration: none;font-size: 12px;margin:10px;display: block;}
.showpass{position: absolute;right: 10%;background: #fff;margin: 6px 0;}
.hide{display:none;}
</style>
</head>
<body dir="ltr">
	<header>
		<a onclick="goBack()" aria-label="Kembali Home Page <?php echo $legal_pt;?>"><i class="fa fa-arrow-left"></i></a>
		<h2>Login Akun <?php echo $site_name;?></h2>
	</header>	
	<div id="main">
		<div class="w90"><div class="vh2 vh2-offline"></div></div>
		<div class="kotakisi">
			<h3>Masuk atau daftar dulu Om !!</h3>	
			<p>Dapatkan berbagai kemudahan tentang mesin fotocopy sebagai Member <?php echo $site_name;?>, 
			sekarang kamu bisa login menggunakan akun sosmed loh.</p>
			<button role="button" aria-label="gmail"  class="w90 button button-small  gplus-bg white-col">Login dengan Google</b></button>
			<button role="button" aria-label="fb"  class="w90 button button-small  fb-bg white-col">Login dengan Facebook</b></button>
		</div>
		<div class="kotakisi">
			<form id="form-login" action="" method="post">
			<h3>Login Akun <?php echo $site_name;?><h3>	
			<input type="email" id="user" name="usercust" value="" aria-label="email" placeholder="Masukkan Email">
			<input type="password" class="mb10" value="" aria-label="pass" name="passcust" id="pass" placeholder="Masukkan Password">
			<a id="showpass" class="showpass" role="button" aria-label="showpass"><i class="icon-eye-open fa fa-eye"></i></a>
			<a id="hidepass" class="showpass hide" role="button" aria-label="showpass"><i class="icon-eye-open fa fa-eye"></i></a>
			<br>
			<a aria-label="lupapw" href="javascript:void(0);" class="lupapass">*Lupa Password</a>
			<button id="login" class="button button-small login primary-bg white-col" name="login" type="submit">Login</button>
			</form>
			<button class="button button-small login primary-bg white-col" role="button" aria-label="daftar" type="submit">Daftar Akun Baru</button>
		</div>		
	</div>
	<script async type="text/javascript">
		$("#showpass").click(function(){$("#pass").attr("type", "text");$("#showpass").addClass("hide");$("#hidepass").removeClass("hide");});
		$("#hidepass").click(function(){$("#pass").attr("type", "password");$("#hidepass").addClass("hide");$("#showpass").removeClass("hide");});
	</script>			
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