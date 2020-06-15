<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($_GET['pg'])){$pg=$_GET['pg']; echo $page_title." Halaman : ".$pg;} else {echo $page_title;} ?></title>
	<?php require_once PLUG."/meta.php"; ?>
<style>
@font-face {
font-family: 'Ubuntu Regular';
font-style: normal;
font-weight: normal; font-display: swap;
src: local('Ubuntu Regular'), url('<?php echo $c_cdn;?>/fonts/ubuntu/Ubuntu-R.woff') format('woff');
}

a, button{text-decoration: none;color: #083d77;}
html,body,.margin0{margin:0;}
body,input,html,button,button,textarea {
    font-size: 1.3rem;
    line-height: 1.8;
    -webkit-font-smoothing: antialiased;
    color: #3e3e3e;
    text-align: left;
	font-family:Ubuntu Regular;
}

.error-wrapper {
    margin: 10% 10%;
    width: 80%;
}
.w40{width:40%;}
.w60{width:60%;}
.w40, .w60, .fleft{float:left;}
img {
    display: block;
    max-width: 100%;
    height: auto;
}
h4.title {
    font-size: 35px;
    font-weight: 500;
    line-height: 1.31;
    margin: 20px 0px;
}
p.description {
    font-size: 24px;
    line-height: 1.46;
    color: #888888;
}
p {
    margin: 0 0 10px;
}
.button-primary {
    display: inline-block;
    background: #ff7200;
    padding: 10px 15px;
    border: 1px solid #ff7200;
    cursor: pointer;
    border-radius: 8px;
    color: #fff;
    text-align: center;
	text-decoration:none;
    font-size: 20px;
    font-weight: 500;
}
</style>
</head>
<body class="">
	<div class="error-wrapper">
		<div class="w40">
			<img class="logo" src="<?php echo $c_url;?>/compressed/logo-besar_compressed.webp">
			<h4 class="title">Oops terjadi kesalahan...</h4>
			<p class="description">Sepertinya Anda tersesat. Error <?php echo $kodeerror;?> Halaman yang Anda cari tidak ditemukan.</p><br><Br>
			<a href="<?php echo $c_url;?>" class="button-primary m-top-30">Kembali Ke awal</a>
		</div>
		<div class="w60"><img class="img-responsive island" src="<?php echo $c_url;?>/compressed/banner/404.webp"/></div>
	</div>
</body>
</html>	