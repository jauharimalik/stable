<?php

if (isset($_SESSION['username'])) {
	header('location:index.php?page=dashboard');
}
error_reporting(E_ALL | E_STRICT); 
define('ROOT', dirname(dirname(__FILE__)));
define('DS',   DIRECTORY_SEPARATOR); 
define('SYS',  ROOT.DS.'system'.DS); 
define('APPS',  ROOT.DS.'app'.DS);
define('MOD',   ROOT.DS.'module'.DS);
define('DIR',  APPS . 'directories'.DS);
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('PHP_EXT',  '.php');
if (version_compare(phpversion(), '5.3.0', '<') == true) {exit('PHP5.3+ Required');}
date_default_timezone_set("Asia/Jakarta");
//panggil class inti (core)
require (SYS.'core'.DS.'base.php'); 	
	
#MULAI 
//cek installasi (berdasarkan file install.txt yang ada di directory admin)
if (!file_exists(CONFIG.DS.'config.php')){header("location:install");exit();}
//load file konfigurasi
require_once(CONFIG.DS."config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - Vanectro Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $c_cdn;?>/new/admin/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $c_cdn;?>/new/admin/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $c_cdn;?>/new/admin/css/style.css">
	<style>.container:{width:100%!important;}.tile {width:100%;} body{background-color: #f0f0f0;} </style>
</head>
<body>
	<div class="container">
		<div class="main">		
			<div class="tile tile-login">
				<img src="<?php echo $c_cdn;?>/new/images/logo.png" class="logo">
				<form method="post" action="<?php echo $c_url;?>/admin/cek_login.php">
					<div class="input-icon">
						<span class="fa-user fa"></span>
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					<div class="input-icon">
						<span class="fa-lock fa"></span>
						<input type="password" name="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
					</div>
						<input type="submit" value="Log In" class="btn-block buton primary">
				</form>
			</div>
		</div>
	</div>

</body>
</html>