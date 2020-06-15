<?php
error_reporting(0);
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$jam = date("H");
$nomor_chat = $d_telp;
$wa_chat = str_replace(" ","",$d_telp)  ;

if(isset($_SERVER['HTTP_REFERER'])){$link_sumber= $_SERVER['HTTP_REFERER'];}
else{$link_sumber=$app->CURRENT_URL();}
?>
<span class="hidden hide kontakutama" id="kontakutama3"><?php echo $wa_chat;?></span>
<script>
	var alinkchat = "<?php echo callwa ($wa_chat,$link_sumber); ?>";
	$('#tombolchatfooter').click(function() {
		$('<a href="'+alinkchat+'" target="blank"></a>')[0].click(); 
		return false;
	});
	$('#tombollivechat').click(function() {
		$('<a href="'+alinkchat+'" target="blank"></a>')[0].click(); 
		return false;
	});
</script>