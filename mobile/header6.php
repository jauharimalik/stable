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
header {
    height: 45px;
    padding: 0 5px;
    width: 100%;
    position: fixed;
    display: block;
    z-index: 100;
    top: 0;
	background:#083c76;
	box-shadow: 0 1px 6px rgba(0,0,0,.12);
}
header a{float:left;line-height: 30px;background: none;font-size: 14px;margin: 8px;width:24px;}
#logo{width: 55%;font-weight: bold;color: #000;line-height: 1.3;}
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
.miconm{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    vertical-align: middle;
    text-align: center;
    border-radius: 8px;
    margin-top: 10px;
    margin:10px 1% 0 1%;
    display: inline-block;
    width: 22%;
}
.miconm a{text-decoration:none;text-align: center;font-size: 10px;color: #000;}
.miconm .lazy{margin: 10% auto 0;width: 60px;display: block;height: 60px;}
.black-col{color: #000;} 
#main2,.mt90{margin-top:45px;}
.zoom5, .vhico1, .vhico2, .vhico3 {zoom: .5;}

.gantungan{width: 100%;top:45px;z-index: 2;position: fixed;box-shadow: 0 1px 6px rgba(0,0,0,.12);white-space: nowrap!important;overflow-x: auto!important;overflow-y: hidden!important;}
.gantungan a{display: inline-block!important;margin-left: 8px;padding:10px;text-decoration: none;}
.gantungan .select{
    color: #083d77;
    font-weight: bold;
    border-bottom: 3px solid #083d77;
    outline: none;
}
.slidebox,.sbslide{width: 100%;z-index: 2;white-space: nowrap!important;overflow-x: auto!important;overflow-y: hidden!important;}
.keunggulan{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    overflow: hidden;
    border-radius: 4px;
    border: 1px solid;
    margin: 5px 8px 5px 0;
    padding: 10px 5px;
    width: 130px;
    color: #eee;
    display: inline-block;
}
.keunggulan .text{
    text-align: center;
    padding-top: 5px;
    font-size: 12px;
    color: #083d77;
    text-decoration: none;margin: 0;
}
.keunggulan img{width: 60px;margin: auto;display: block;}
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
.rating span{color: #083d77;}
.kanwil{border-top: 1px solid #eee;width: 90%;font-size: 9px;}
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
.sb{
	width: 80%;
    box-shadow: 0 2px 6px rgba(0,0,0,.12);
    border-radius: 8px;
    margin-left: 10px;
    border-top: 1px solid #eee;
}
.sbslide a:first-child{margin-left:10px;}
.sbslide a:last-child{margin-right:20px;}
.icon_header{float:right;margin-right:20px;}
.cari{background: #F6F6F6;border-radius:4px;width: 72%;box-shadow: 0 1px 6px rgba(0,0,0,.12);color:#000;}
.cari img{margin:0 10px;}
</style>
</head>
<body dir="ltr">
	<header itemscope="" itemtype="https://schema.org/WPHeader">
		<a class="fleft vjax" data-load="sidebara" id="sidebara"><img class="lazy" width="24" height="24" alt="keranjang" title="keranjang" data-src="<?php echo $c_url; ?>/compressed/amp/header/menu3.webp"/></a>
		<a class="cari vjax" data-load="searcha">
			<img width="12" height="12" alt="keranjang" title="keranjang" data-src="<?php echo $c_url; ?>/compressed/amp/header/search.webp" />
			Cari di <?php echo $site_name;?>
		</a>
		<a class="fleft vjax" data-load="keranjanga" id="keranjanga">
			<img class="lazy" width="24" height="24" alt="keranjang" title="keranjang" data-src="<?php echo $c_url; ?>/compressed/amp/header/cart.webp"/>
			<span class="cart-quantity">0</span>
		</a>
	</header>
	<div class="gantungan" style="display:none;">
		<a option="0" class="select"><i class="mr5 fa fa-home"></i> Home </a>
		<a on="tap:promotoday"> Promo Mesin Fotocopy</a>	
		<a option="1"> Menu Bantuan Pelanggan </a>
		<a option="2"> Kontak & Alamat <?php echo $site_name;?></a>
	</div>		
	<div id="top2"></div>
<?php
$kategory = array(
	"Daftar Harga" => array("href='$c_url/harga-mesin-fotocopy'","/compressed/mobilehome/harga2.svg","Harga Mesin Fotocopy"),
	"Canon Baru" => array("href='$c_url/mesin-fotocopy-canon'","/compressed/mobilehome/canon2.svg","Harga Mesin Fotocopy Canon Baru"),	
	"Warna Baru" => array("href='$c_url/mesin-fotocopy-warna'","/compressed/mobilehome/warna2.svg","Harga Mesin Fotocopy Warna Baru"),	
	"Paket Usaha" => array("href='$c_url/promo-paket-usaha-fotocopy'","/compressed/mobilehome/paket2.svg","Paket Usaha Fotocopy Murah"),		
	"Rekondisi" => array("href='$c_url/mesin-fotocopy-rekondisi'","/compressed/mobilehome/rekondisi2.svg","Mesin Fotocopy Bekas / Rekondisi"),		
	"Servis" => array("href='$c_url/service-mesin-fotocopy'","/compressed/mobilehome/service2.svg","Service Mesin Fotocopy"),	
	"Sparepart" => array("href='$c_url/sparepart-fotocopy'","/compressed/mobilehome/sparepart2.svg","Jual Sparepart Mesin Fotocopy"),	
	"Lainnya" => array("data-load='mkategory' class='vjax' ","/compressed/mobilehome/lainnya2.svg","Kategori Lainnya")	
);
?>	
	<div id="main">	
		<div id="main2" class="eee-bg">	
			<div class="kotakisi">
				<div class="labeli"><b>Kategori Mesin Fotocopy Unggulan</b></div>
				<?php 
				foreach ($kategory as $kategory_key =>$isi_kategory){		
				?>
				<div class="miconm">
					<a aria-label="<?php echo $isi_kategory[2];?>" <?php echo $isi_kategory[0];?>>
						<img class="lazy" width="60" height="60" data-src="<?php echo $c_url.$isi_kategory[1];?>" alt="<?php echo $isi_kategory[2];?>"/>
						<?php echo $kategory_key;?>
					</a>
				</div>
				<?php } ?>
			</div>
			<div class="kotakisi">
				<h2>Dealer Resmi Mesin Fotocopy Canon & Fuji Xerox</h2>
				<div class="sbslide">
					<a on="tap:infodetail_dealerresmi">
						<img class="sb" data-src="<?php echo $c_url;?>/compressed/mobilehome/banner1.webp" alt="Dealer Resmi Mesin Fotocopy Canon & Fuji Xerox"/>																											
					</a>
					<a on="tap:infodetail_dealerresmi">
						<img class="sb" data-src="<?php echo $c_url;?>/compressed/mobilehome/banner2.webp" alt="Dealer Resmi Mesin Fotocopy Canon & Fuji Xerox"/>																											
					</a>
				</div>
				<div class="kotak2">
					<div class="h2"><b>Dijamin Mesin Fotocopy 100% Original</b></div>
					<p>
						Iming iming mesin fotocopy harga murah. Tapi menyesal di belakang karena mesin fotocopynya bermasalah dan tidak ada Pertanggung Jawaban. 
						Pastikan mesin fotocopymu bergaransi resmi lebih dari 1 tahun di seluruh Indonesia. Jangan sampai salah pilih yang cuma bisa memberi janji !! 
						Mau menyesal karena sudah membuang banyak uang untuk Mesin Fotocopy yang Tidak Jelas ?? 
						<a on="tap:infodetail_dealerresmi" class="mesh"><b>Informasi Detail : Baca Selengkapnya </b></a>
					</p>			
				</div>	
			</div>	
			<div class="hilang kotakisi">
				<a id="loadmore" class="btn"><b>Informasi Detail : Load More <i class="fa fa-chevron-right"></i></b></a>
			</div>
			<div id="kontenload" class="mb50"></div>
			<div class="footer">
				<a aria-label="Home" href="<?php echo $c_url;?>">
					<img class="lazy" width="20" height="20" alt="home" title="home" data-src="<?php echo $c_url; ?>/compressed/amp/footer/home1.svg" />
					<p>Home</p>
				</a>
				<a aria-label="Telephone" data-load="keranjanga" class="vjax" role="button">
					<img class="lazy" width="20" height="20" alt="telp" title="telp" data-src="<?php echo $c_url; ?>/compressed/amp/footer/cart1.svg" />
					<p>Blog</p>
				</a>
				<a aria-label="SMS" href="<?php echo $c_url;?>/panduan-pelanggan" role="button">
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
		<div class="vjax-layer-mkategory"></div>
		<div class="vjax-layer-mbantuan"></div>
		<div class="vjax-layer-sidebara"></div>
		<div class="vjax-layer"><div class="vjax-load"></div></div>
	</div>
	
<script async>
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
	(function() {lazyload();})();
	
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
					if (wS > (hT+hH-wH)){loadmore();loadicon();}
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
				function loadmore(){
					var query="load";
					$(".hilang").html(vload);	
					$.ajax({ 
						type:"post", 
						url:"<?php echo $c_url;?>/ajaxp-loadmorem",
						data : {query : query},
						success:function(data){
							$(".hilang").hide();
							$("#kontenload").html(data);
							lazyload();								
						}
					});
				}
				function klosevjax(a){$("."+a).hide();$(".vjax-layer").hide();}				
				$(".vjax").click(function(){
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
								lazyload();accordion();loadicon();
								
								$("#textcari").change(function(){$("#hasilcariitem").show();$("#hasilcariitem").html(vload);cariitem();});
								$("#klose-"+urlload).click(function(){klosevjax(urlload);});
							}
						});	
					}
				});
				
				$("#loadmore").click(function(){loadmore();});

				function cariitem(){
					var optcarikar=$("#optcarinya").text();	
					var textcari=$("#textcari").val();
					var urlsearch = textcari.replace(' ','-');
					var urlsearch = urlsearch.replace('--','-');
					var urlsearch = urlsearch.replace('%20','-');
					var urlsearch = urlsearch.replace(/\s/g,'-');
					$("#hasilcariitem").html(vload);
					$.ajax({ 
						type:"post", 
						url:"<?php echo $c_url;?>/ajaxp-msearch",
						data :  {textcari : textcari, optcarikar:optcarikar},
						success:function(data){
							window.history.pushState("Details", "Pencarian Mesin Fotocopy di <?php echo $site_name;?> : "+textcari, "<?php echo $c_url; ?>/search/"+urlsearch);
							console.log(urlsearch);
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
ob_end_flush();
*/
?>	