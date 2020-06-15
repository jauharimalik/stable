<!DOCTYPE html>
<html lang="id">
<head>
	<title><?php if(isset($_GET['pg'])){$pg=$_GET['pg']; echo $page_title." Halaman : ".$pg;} else {echo $page_title;} ?></title>
	<?php require_once PLUG."/meta.php"; require_once TEMPLATE_DIR.DS."/style.php"; ?>
</head>
<body class="">
	<?php require_once TEMPLATE_DIR.DS."content/common/header.php"; ?>
	<div id="main2">
		<?php require_once TEMPLATE_DIR.DS.$pageurl; ?>
	</div>
	<?php require_once TEMPLATE_DIR.DS."script.php"; ?>
</body>
</html>	
<?php
$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);