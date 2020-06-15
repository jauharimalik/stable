<?php
error_reporting(0);
$n="\r\n %0A";
$m_url="$c_url";
$ts = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: 31536000");
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
header("Content-Type: text/html");

function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB.DS."faq.php");
$n="\r\n %0A"; 

include(LIB.'/ImgCompressor.class.php');
$setting = array('directory' => ROOT.'/compressed/', 'directory' => ROOT.'/compressed/','directory' => ROOT.'/compressed/', 'file_type' => array('image/jpeg','image/png','image/gif'));
$ImgCompressor = new ImgCompressor($setting);

$tempatfile = TEMP.DS."cache/m/".$urlnyaamp.".html";
?>
<!DOCTYPE html>
<html AMP lang="id">
<head>
		<title><?php echo $page_title; ?></title>
		<?php require_once PLUG."/meta.php";?>
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="#083d77">
		<link rel="apple-touch-icon" sizes="72x72" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_72.png">
		<link rel="apple-touch-icon" sizes="180x180" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_180.png">	
		<link rel="icon" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_32.png">	
		<link rel="icon" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo_16.png">
		<link rel="mask-icon" type="image/png" href="<?php echo $c_cdn_img;?>/icon/logo.png">
		<link rel="manifest" href="<?php echo $c_url;?>/manifest.json">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="purple">		
		<script type="application/ld+json">
			[
				{
					"@context": "http://schema.org",
					"@type": "WebSite",
					"name": "<?php echo $page_title; ?>",
					"alternateName": "<?php echo $page_title." - Jual Mesin Fotocopy"; ?>",
					"description": "<?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>",
					"url": "<?php echo $app->CURRENT_URL(); ?>",
					"genre": "Jual Mesin Fotocopy",
					"keywords": "Mesin Fotocopy, <?php echo $page_title; ?> <?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>",
					"version": "1.0.0",
					"creator": {
						"@type": "Organization",
						"areaServed": "Indonesia",
						"email": "<?php echo $mail_marketing ?>",
						"logo": "<?php echo $c_cdn_img;?>/icon/logo_32.png",
						"telephone": "+62-21-8273-4557",
						"sameAs": "<?php echo $c_url;?>",
						"founder": {
							"@type": "Person",
							"givenName": "Ivan",
							"familyName": "Riansyah",
							"email": "<?php echo $mail_marketing ?>",
							"jobTitle": "C.E.O"
						}
					},
					"audience": {
                    	"@type": "Audience",
						"audienceType": "Customer",
                        "description": "Customer <?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>."
					}
				}
			]
		</script>
<style>
@font-face {
	font-family: 'Ubuntu';
	font-style: normal;
	font-weight: normal;
	font-display: swap;
	src: url(<?php echo $c_cdn;?>/fonts/ubuntu/Ubuntu-Regular.ttf) format('truetype');
}
body > *{overflow: hidden;}
a, button{text-decoration: none;color: #083d77;}
html,body,.margin0{margin:0;}
body,input,html,button,button,textarea {
    font-size: 1.3rem;
    line-height: 1.8;
    -webkit-font-smoothing: antialiased;
    color: #3e3e3e;
    text-align: left;
	font-family:Ubuntu;
}
html{font-size: 62.5%;}
.mbantuan header {
    height: 45px;
    padding: 0 5px;
    width: 100%;
    position: fixed;
    display: block;
    z-index: 100;
    top: 0;
	box-shadow: 0 1px 6px rgba(0,0,0,.12);
}
.mbantuan header a{float:left;line-height: 30px;background: none;font-size: 14px;margin: 8px;width:24px;}
.mbantuan header{background:#fff!important;}
.mbantuan header a{text-align: center;}
.mbantuan .cari{background: #F6F6F6;border-radius:4px;width: 72%;box-shadow: 0 1px 6px rgba(0,0,0,.12);color:#000;}
.mbantuan .cari img{margin:0 10px;}
.footer p,.ulasan i{margin:0;}
.footer{box-shadow: 6px 0 6px rgba(0,0,0,.12);    border-top: 1px solid #eee;
    bottom: 0;
    z-index: 3;
    position: fixed;
    width: 100%;
    text-decoration: none;
    background: #fff;
}
.footer a{text-align: center;padding-top: 10px;float: left;width: 20%;}
.footer img {text-align: center;display: block;margin: auto;width: 24px;}
.mesh:after {
    content: "";
    background-image: url(<?php echo $c_url;?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;
    margin-right: 10px;
    float: right;
}
.footer p{color:#000;font-size:12px;margin:5px 0;line-height: 1;}

.mbantuan .hasilnya{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    padding: 10px 20px;    
	margin: 10px 0;
    width: 95%;
    background: #fff;
}
.hasilnya a{padding:10px; display:flex;border-bottom: 1px solid #eee;}
.exe:before{
	content: "\f002";
	font-family: "Font Awesome 5 Free";
	font-weight:900;
    margin-right: 10px;
}
.mbantuan .judul-hasilnya{
    vertical-align: middle;
    border-bottom: 1px solid #eee;
    margin-bottom: 5px;
    padding-top: 5px;
    padding-bottom: 10px;
    display: inline-block;
    display: block;
    width: 95%;
    font-size: 12px;
    color: #000;
}
.mbantuan .panel2{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    vertical-align: middle;
    text-align: left;
    margin-bottom: 10px;
    padding: 10px;
	background:#fff;
}
.mbantuan .menunya{display: block;box-shadow: 0 1px 6px rgba(0,0,0,.12);margin:5px 0;}
.mbantuan .menuli{font-size: 1.3rem;
    display: block;
    padding: 10px;
    margin: 0;
    border-bottom: 1px solid #eee;
}
.mbantuan .menuli i{margin-right:10px;}
.mbantuan .menuli:after {
	content:"";
    background-image: url(<?php echo $c_url; ?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;margin-right: 10px;
    float: right;
}
.mbantuan .menunya .active{color:#083d77;}
.mbantuan .menunya .active:after{-webkit-transform: rotate(-90deg);}
.hide {display:none;}
.mbantuan .panel a{
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    font-size: 14px;
	padding: 10px;
	display:block;
	color:#000;
	border-bottom:1px solid #eee;
}
.hide{display:none;}
button {background: 0 0;line-height: 1.2;}
button, fieldset {border: none;}
.dblock {display: block;}
.cart-quantity {
    text-align: center;
    border-radius: 50%;
    position: absolute;
    width: 20px;
    color: #fff;
    top: 3px;
    line-height: 20px;
    margin-left:-8px;
    font-size: 10px;
    background-color: #f8011e;
}
.p10{ padding: 10px;}
.bayangan{box-shadow: 0 1px 6px rgba(0,0,0,.12);padding-left: 10px;}
.fleft{float:left;}
.mt50 {margin-top: 50px;}
#menu section[expanded]>h6 span, ol.circle-list>li:last-child:after, .eee-bg {background: #eee;}
ol.circle-list>li:after,.gantung, .white-bg {background: #fff;}
.kotakisi{padding: 10px 2%;margin: 10px 0;box-shadow: 0 1px 6px rgba(0,0,0,.12);width: 100%;background: #fff;text-align: left;}
.kotakisi:nth-child(2){padding-left:0;}
.mb50{margin-bottom:90px;}
.more {margin-right: 15px;right: 0px;position: absolute;font-size: 12px;}
.more i{margin-left: 10px;}
.labeli{width: 100%;margin: 5px 10px;}
#main2,.mt90{margin:55px 0;}
.white-bg, .gantungan{background:#fff;}
h2{margin: 10px 0;padding-left: 20px;font-size: 14px;color: #000;}
.lazy {width:100%;height:auto;}
img[data-src] {opacity: 0;background:#eee;}
.kotak2{padding:15px 20px;color: #000;}
.kotak2 .h2{font-size: 14px;color: #083d77;}
.btn, .kotak2 .mesh{
    text-align: center;
    border-radius: 8px;
    border: 3px solid;
    margin: 10px 0;
    padding: 8px;
    display: block;
    color: #083d77;
}
.vjax-layer{
    width: 100vw;
    background: #fff;
    z-index: 2147483646;
}
.vjax-load{
	padding-top:50%;
    width: 100vw;
    background: #fff;
    opacity: 1;
    position: fixed;
    height: 100vh;
    top: 0;
    z-index: 200;
	display:none;
}
.btn{
    border-radius: 4px;
    padding: 8px;
    display: inline-block;
    width: 90%;
    font-size: 12px;
    margin: 10px 0;
    color: #fff;
    background: #083d77;
}
.gold-col, .rating{font-size: 10px;padding-top: 5px;color: #fdb913;}
.kotakmar img{width: 60px;height: 60px;float: left;border-radius: 50%;margin: 10px;}
.labelmar{
    margin-bottom: 10px;
    display: inline-block;
    font-size: 12px;
    text-align: left;
    font-weight: normal;
    color: #000;
}
.btnmini{
    border-radius: 8px;
    padding: 8px 10px;
    width: 100%;
    font-size: 12px;
    color: #fff;
    background: #083d77;
}
</style>
</head>
<body dir="ltr">

	<div id="top2"></div>
	<div id="main">	
		<div id="main2" class="eee-bg">	
<?php 
require_once(LIB.DS."faq.php");
?>
		<div class="mbantuan">
			<header>
				<a class="fleft vjax"  data-load="hide-mbantuan" id="klose-mbantuan"><i class="fa fa-arrow-left"></i></a>
				<a class="cari vjax" data-load="searcha">
					<img width="12" height="12" alt="keranjang" title="keranjang" data-src="<?php echo $c_url; ?>/compressed/amp/header/search.webp" />
					Cari di <?php echo $site_name;?>
				</a>
				<a class="fleft vjax" data-load="keranjanga" id="sidebara">
					<img class="lazy" width="24" height="24" alt="keranjang" title="keranjang" data-src="<?php echo $c_url; ?>/compressed/amp/header/chat.svg"/>
				</a>
			</header>		
				<div class="hasilnya">
					<div class="judul-hasilnya"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></div>
					<div class="width95 eee-col borb1 dinblock nodecoration">		
						<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
							<span class="fs22 dinblock black-col mb10 mr10">Terimakasih sudah menghubungi kami, bantuan apa yang kamu butuhkan ??</span>
						</div>						
					</div>
				</div>	
				<div class="panel2">		 
					<a class="menuli" aria-label="Daftar Harga Mesin Fotocopy" href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Daftar Harga Mesin Fotocopy </a>
					<a class="menuli"  aria-label="Cek Harga Pengiriman Mesin Fotocopy" href="<?php echo $c_url;?>/pengiriman">Cek Tarif Ongkir </a>
					<a class="menuli"  aria-label="Cari Mesin Fotocopy" href="<?php echo $c_url;?>/cari-mesin-fotocopy">Konsultasi Memilih Mesin Fotocopy </a>
					<a class="menuli"  aria-label="Compare Mesin Fotocopy" href="<?php echo $c_url;?>/perbandingan-mesin-fotocopy">Compare Mesin Fotocopy </a>
					<a class="menuli"  aria-label="Cek Status Pesanan" href="<?php echo $c_url;?>/detail-pesanan">Cek Status Pemesanan </a>
					<a class="menuli"  aria-label="Konfirmasi Pembayaran" href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran </a>
					<a class="menuli"  aria-label="Kontak Alamat Mesin Fotocopy" href="<?php echo $c_url;?>/hubungi">Kontak & Alamat <?php echo $site_name;?> </a>
				</div>	
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="kotakmar">
						<img class="lazy" width="60" height="60" data-src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
						<span class="btnmini"><i class="fab fa-whatsapp mr5 "></i> Chat Whatsapp</span>
					</a>
				</div>							
				<div class="panel2">
					<div class="judul-hasilnya"><b>ARTIKEL BANTUAN LAINNYA : </b></div>
						<?php
							$data_faq2 = "select * from faq_category order by urutan asc";
							$dua_result_faq = $db->query($data_faq2);
							while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
								$dua_faq_judul = ltrim($dua_data_faq['short_name']);
								$dua_faq_link2 = $dua_data_faq['link'];
								$dua_faq_link=(ltrim($dua_faq_link2));
								$dua_faq_link=strtolower($dua_faq_link);				
						?>						
					<div class="menunya">
						<h4 class="accordion menuli"><b><?php echo $dua_faq_judul;?></b></h4>
						<div class="hide panel">
							<?php
								$data_faq3 = "select * from faq where link='".$dua_faq_link."' order by urutan asc";
								$dua_result_faq3 = $db->query($data_faq3);
								while ($dua_data_faq3 = $dua_result_faq3->fetch_array(MYSQLI_BOTH)) {		
									$dua_faq_judul3 = substr((judul_faq($dua_data_faq3['judul'])),0,45);
									$dua_faq_link3 = $dua_data_faq3['link2'];
									$dua_faq_link3=rtrim(ltrim($dua_faq_link3));
									$dua_faq_link3=strtolower($dua_faq_link3);		
									$dua_faq_link3=$c_url."/panduan-pelanggan/".$dua_faq_link."/".$dua_faq_link3;			
							?>						
							<a aria-label="<?php echo $dua_faq_judul3;?>" href="<?php echo $dua_faq_link3;?>"><?php echo $dua_faq_judul3;?></a>
							<?php } ?>
						</div>				
					</div>
					<?php } ?>	
					
				</div>
			
		</div>
		
			
			<div class="footer">
				<a aria-label="Home" href="<?php echo $c_url;?>">
					<img class="lazy" width="20" height="20" alt="home" title="home" data-src="<?php echo $c_url; ?>/compressed/amp/footer/home1.svg" />
					<p>Home</p>
				</a>
				<a aria-label="Telephone" data-load="keranjanga" class="vjax" role="button">
					<img class="lazy" width="20" height="20" alt="telp" title="telp" data-src="<?php echo $c_url; ?>/compressed/amp/footer/cart1.svg" />
					<p>Blog</p>
				</a>
				<a aria-label="SMS" data-load="mbantuan" class="vjax" role="button">
					<img class="lazy" width="20" height="20" alt="sms" title="sms" data-src="<?php echo $c_url; ?>/compressed/amp/footer/help1.svg" />
					<p>Bantuan</p>
				</a>
				<a aria-label="WA" data-load="mchat" class="vjax" role="button">
					<img class="lazy" width="20" height="20" alt="wa" title="wa" data-src="<?php echo $c_url; ?>/compressed/amp/footer/chat1.svg" />
					<p>Chat</p>
				</a>
				<a aria-label="Akunku"  href="<?php echo $c_url;?>/masuk" role="button">
					<img class="lazy" width="20" height="20" alt="user" title="user" data-src="<?php echo $c_url; ?>/compressed/amp/footer/user1.svg" />
					<p>Akun</p>
				</a>		
			</div>						
		</div>
		<div class="vjax-layer-keranjanga"></div>
		<div class="vjax-layer-searcha"></div>
		<div class="vjax-layer-mchat"></div>
		<div class="vjax-layer-mbantuan"></div>
		<div class="vjax-layer-sidebara"></div>
		<div class="vjax-layer"><div class="vjax-load"></div></div>
	</div>
	
<script async type="text/javascript">
	function lazyload(){
		[].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
		img.setAttribute('src', img.getAttribute('data-src'));
		img.onload = function() {
			img.removeAttribute('data-src');
		};
		});
	}
	function accordion(){	
		var acc = document.getElementsByClassName("accordion");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				console.log("tesass");
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}	
	}
	(function() {lazyload();accordion();})();
	
	var async = async || [];
	(function () {
		var done = false;
		var script = document.createElement("script"),
		head = document.getElementsByTagName("body")[0] || document.documentElement;
		script.src = '<?php echo $c_cdn;?>/new/javascript/v1/jq3.js';
		script.type = 'text/javascript'; 
		script.async = true;
		script.onload = script.onreadystatechange = function() {
			
		if (!done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
			done = true;
			while(async.length) { 
				var obj = async.shift();
					if (obj[0] =="ready") {$(obj[1]);}
					else if (obj[0] =="load"){$(window).load(obj[1]);}
				}
				async = {
					push: function(param){
						if (param[0] =="ready") {$(param[1]);}
						else if (param[0] =="load"){$(window).load(param[1]);}
					}
				};
				script.onload = script.onreadystatechange = null;
				var vload="<center><img style='width:100%; height:40px;' src='<?php echo $c_cdn;?>/new/images/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Sedang Loading... Mohon Tunggu Sebentar.</h2></center>";
				
				$(window).scroll(function(){
					var hT = $('#main2').offset().top;
					var	hH = $('#loadmore').outerHeight();
					var wH = $(window).height();
					var wS = $(this).scrollTop();
					if (wS > (hT+hH-wH)){lazyload();accordion();loadicon();}
				});
				function loadicon(){
					var css = document.createElement('link');
					css.href = '<?php echo $c_cdn;?>/fonts/fa/css/ampico.css';
					css.rel = 'preload';
					css.type = 'text/css';
					css.as = 'style';
					css.async = 'async';
					document.getElementsByTagName('head')[0].appendChild(css);
					
					var css2 = document.createElement('link');
					css2.href = '<?php echo $c_cdn;?>/fonts/fa/css/ampico.css';
					css2.rel = 'stylesheet';
					css2.type = 'text/css';
					css2.async = 'async';
					document.getElementsByTagName('body')[0].appendChild(css2);		
					lazyload();
				};					
				
				function klosevjax(a){$("."+a).hide();$(".vjax-layer").hide();lazyload();accordion();loadicon();}				
				$(".vjax").click(function(){lazyload();accordion();loadicon();
					var urlload = $(this).data('load');
					var query="load";
					$(".vjax-load").show();
					$(".vjax-load").html(vload);
					if(!$(".vjax-layer-"+urlload).is(':empty')){					
						$(".vjax-layer").hide();$("."+urlload).show();	
					}
					else{
						$.ajax({ 
							type:"post", 
							url:"<?php echo $c_url;?>/ajaxp-"+urlload,
							data : {query : query},
							success:function(data){
								$(".vjax-layer-"+urlload).html(data);
								
								
								$("#textcari").change(function(){$("#hasilcariitem").show();$("#hasilcariitem").html(vload);cariitem();});
								$("#klose-"+urlload).click(function(){klosevjax(urlload);});
							}
						});	
					}
				});
			

				function cariitem(){
					var optcarikar=$("#optcarinya").text();	
					var textcari=$("#textcari").val();
					$("#hasilcariitem").html(vload);
					$.ajax({ 
						type:"post", 
						url:"<?php echo $c_url;?>/ajaxp-msearch",
						data :  {textcari : textcari, optcarikar:optcarikar},
						success:function(data){
							$("#hasilcariitem").html(vload);
							$("#hasilcariitem").html(data);
						}
					});
				};				
				if (head && script.parentNode) {head.removeChild(script);}
			}
		};
		head.insertBefore(script, head.firstChild);
	})();
	
	if('serviceWorker' in navigator) {
		navigator.serviceWorker
	   .register('<?php echo $c_url;?>/sw.js')
		  .then(function() { console.log("Service Worker Registered"); });
	}			
	</script>	
</body>
</html>	
<?php
/*$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();?>	