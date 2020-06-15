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
		<script async custom-element="amp-font" src="<?php echo $c_cdn;?>/new/amp/amp-font-0.1.js"></script>
        <script async custom-element="amp-sidebar" src="<?php echo $c_cdn;?>/new/amp/amp-sidebar-0.1.js"></script>
        <script async custom-element="amp-accordion" src="<?php echo $c_cdn;?>/new/amp/amp-accordion-0.1.js"></script>
        <script async custom-element="amp-form" src="<?php echo $c_cdn;?>/new/amp/amp-form-0.1.js"></script>
        <script async custom-template="amp-mustache" src="<?php echo $c_cdn;?>/new/amp/amp-mustache-0.2.js"></script>
		<script async custom-element="amp-image-lightbox" src="<?php echo $c_cdn;?>/new/amp/amp-image-lightbox-0.1.js"></script>
		<script async custom-element="amp-lightbox" src="<?php echo $c_cdn;?>/new/amp/amp-lightbox-0.1.js"></script>
		<script async custom-element="amp-list" src="<?php echo $c_cdn;?>/new/amp/amp-list-0.1.js"></script>
		<script async custom-element="amp-selector" src="<?php echo $c_cdn;?>/new/amp/amp-selector-0.1.js"></script>
		<script async custom-element="amp-carousel" src="<?php echo $c_cdn;?>/new/amp/amp-carousel-0.1.js"></script>
		<script async custom-element="amp-fit-text" src="<?php echo $c_cdn;?>/new/amp/amp-fit-text-0.1.js"></script>
		<script async custom-element="amp-bind" src="<?php echo $c_cdn;?>/new/amp/amp-bind-0.1.js"></script>
		<script async custom-element="amp-iframe" src="<?php echo $c_cdn;?>/new/amp/amp-iframe-0.1.js"></script>
		<script async custom-element="amp-video" src="<?php echo $c_cdn;?>/new/amp/amp-video-0.1.js"></script>
		<script async custom-element="amp-access" src="<?php echo $c_cdn;?>/new/amp/amp-access-0.1.js"></script>
        <script async defer src="<?php echo $c_cdn;?>/new/amp/v0.js"></script>
		<script async custom-element="amp-install-serviceworker" src="<?php echo $c_cdn;?>/new/amp/amp-install-serviceworker-0.1.js"></script>
		<script async custom-element="amp-analytics" src="<?php echo $c_cdn;?>/new/amp/amp-analytics-0.1.js"></script>
		<script async custom-element="amp-animation" src="<?php echo $c_cdn;?>/new/amp/amp-animation-0.1.js"></script>
		<script async custom-element="amp-position-observer" src="<?php echo $c_cdn;?>/new/amp/amp-position-observer-0.1.js"></script>
		<script async custom-element="amp-date-countdown" src="<?php echo $c_cdn;?>/new/amp/amp-date-countdown-0.1.js"></script>				
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
<link rel="preconnect" href="https://cdn.ampproject.org" crossorigin>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<style amp-custom="">
@font-face {
	font-family: 'Ubuntu';
	font-style: normal;
	font-weight: normal;
	font-display: swap;
	src: url(<?php echo $c_cdn;?>/fonts/ubuntu/Ubuntu-Regular.ttf) format('truetype');
}

body,input,html,button,button,textarea {
    font-size: 1.3rem;
    line-height: 1.8;
    -webkit-font-smoothing: antialiased;
    color: #3e3e3e;
    text-align: left;
	font-family:Ubuntu;
}
body > * {max-width: 600px;margin: 0px auto;}
html{font-size: 62.5%;}
header {
    height: 51px;
    padding: 0 5px;
    background: #083d77;
    width: 100%;
    position: fixed;
    display: block;
    z-index: 100;
}
button {background: 0 0;line-height: 1.2;}
button, fieldset {border: none;}
amp-selector[role=tablist].tabs-with-flex [role=tabpanel] {display: none;width: 100%;order: 1;}
amp-selector [option][selected] {color: #083d77;font-weight:bold; border-bottom: 3px solid #083d77;outline: none;border-radius: 0.25rem;}

.no-bg{background:none;}
.primary-bg{background: #083d77;}
ol.circle-list>li:after, .white-bg{background: #fff;}
.f8-bg{background: #f8f8f8;}
#menu section[expanded]>h6 span, .eee-bg{background: #eee;}
.ccc-bg{background: #ccc;}
 ol.circle-list>li:last-child:after, .eee-bg{background: #eee;}
.mesh-bg {background-color: #2d3e50;}
.merah-bg{background-color: #f8011e;}
.fb-bg, .fa-facebook {background-color: #4867AA;}
.twitter-bg, .fa-twitter {background-color: #00ACED;}
.gplus-bg, .fa-google-plus {background-color: #dc4e41;}
.yt-bg, .fa-youtube {background-color: #c90d0e;}

.nodecoration{text-decoration:none;}
ol.circle-list>li:after, .primary-col, .primary-color,  ol.circle-list>li:last-child:after, #menu section[expanded]>h6 span, a{color: #083d77;text-decoration:none;}
.light-color, .white-col{color: #fff;}
.f8-col{color: #f8f8f8;}
.eee-col{color: #eee;}
.ccc-col{color: #ccc;}
.mesh-col {color: #2d3e50;}
.merah-col{color: #f8011e;} 
.black-col{color: #000;} 
.fb-col, {color: #4867AA;}
.twitter-col {color: #00ACED;}
.gplus-col{color: #dc4e41;}
.yt-col {color: #c90d0e;}
.gold-col, .rating{color: #fdb913;}

.fwnormal{font-weight:normal;}
.bold, .fbbold{font-weight:bold;}
.fw300{font-weight:300;}

.fs8em, .alamat {font-size: .8em;}
.fs12rem, h5 {font-size: 1.2rem;}
.fs13rem, h6 {font-size: 1.3rem;}
.fs16rem {font-size: 1.6rem;}
.fs17rem, #mainSideBar li i, #menu i {font-size: 1.7rem;}

small, .small, .fs9{font-size: 9px;}
.fs10{font-size: 10px;}
.fs11{font-size: 10px;}
.fs17{font-size: 17px;}
.fs12{font-size: 12px;}
.fs14{font-size: 14px;}
.fs16{font-size: 16px;}
.fs20{font-size: 20px;}
.fs24{font-size: 24px;}
.fs28{font-size: 28px;}
.fs30{font-size: 30px;}
.fs35{font-size: 35px;}

.w24px{width:24px;}
.w30px{width:30px;}
.w300px{width:300px;}
.w150px{width:150px;}
.w110{width: 110px;}
.lazyload:after,.w100{width:100%;}
.w90{width:90px;}
.width95{width:95%;}
.width90{width:90%;}
.w80{width:80%;}
.w87{width:87%}
.w60{width: 60%;}
.w70{width: 70%;}
.w50{width:50%;}
.w50px{width:50px;}
.w48{width:47.5%;}
.w40{width:40%;}
.w35{width:35%;}
.w30{width:30%;}
.w49{width:49px;}
.w45{width:45%;}
.w33{width:33.33%;}
.w20{width:20%;}
.w22{width:22%;}
.w25{width:25%;}
.w10{width:10%;}
.w20px{width: 20px;}
.w17{width:17%;}

.h150{height:150px;}
.h100{height:100%;}
.h15px{height:15px;}
.h18px{height:18px;}
.h30px{height:30px;}
.h40px{height:40px;}
.height1{height:1px;}
.height3{height:3px;}
.height5{height:5px;}
.hfull{height:100vh;}
.h51{height:51px;}
.h49{height:49px;}
.h38{height:38px;}
.h24 {height: 24%;}

.fleft{float:left;}
.fright{float:right;}
.fnone{float:none;}

.login:not(.active), .hidden, .hide{display:none;}
amp-selector[role=tablist].tabs-with-flex [role=tab][selected]+[role=tabpanel], .dblock{display:block;}
.dinblock{display:inline-block;}
.dinline{display:inline;}
.dtabcel{display: table-cell;}
.dtabel{display:table;}
.dflex{display:flex;}
.dinflex{display: inline-flex;}

.posfix{position:fixed;}
.posstik{position:sticky;}
.posrel{position:relative;}
.posabs{position:absolute;}

.z1{z-index:1;}
.z2{z-index:2;}
.z3{z-index:3;}

.p0{padding:0;}
.p05{padding:0 5px;}
.p8{padding:8px;}
.p10{padding:10px;}
.p20{padding:20px;}
.p105{padding: 10px 5px;}
.pl28{padding-left:28px;}

.pt100{padding-top: 100px;}
.pt60{padding-top: 60px;}
.pt10{padding-top:10px;}
.pb10{padding-bottom:10px;}
.pl10{padding-left:10px;}
.pr10{padding-right:10px;}

.pt8{padding-top:8px;}
.pb8{padding-bottom:8px;}
.pl8{padding-left:8px;}
.pr8{padding-right:8px;}

.pt5{padding-top:5px;}
.pb5{padding-bottom:5px;}
.pl5{padding-left:5px;}
.pr5{padding-right:5px;}

.pt15{padding-top:15px;}
.pb15{padding-bottom:15px;}
.pl15{padding-left:15px;}
.pr15{padding-right:15px;}

.pt20{padding-top:20px;}
.pb20{padding-bottom:20px;}
.pl20{padding-left:20px;}
.pr20{padding-right:20px;}

.pt30{padding-top:30px;}
.pb30{padding-bottom:30px;}
.pl30{padding-left:30px;}
.pr30{padding-right:30px;}

.pt50{padding-top:50px;}
.pb50{padding-bottom:50px;}
.pl50{padding-left:50px;}
.pr50{padding-right:50px;}

.top50{top: 50px;}
.top24{top: 24px;}
.top0{top: 0px;}

.right0{right: 0px;}
.right20{right: 20px;}
.left0{left:0;}
.left20{left:20px;}
.bottom0{bottom:0;}
.bottom10{bottom:10px;}
.bottom70{bottom:70px;}

.m0{margin:0;}
.mauto{margin:auto;}
.mt1{margin-top:1%;}
.mb1{margin-bottom:1%;}
.ml1{margin-left:1%;}
.mr1{margin-right:1%;}

.mt5{margin-top:5px;}
.mb5{margin-bottom:5px;}
.ml5{margin-left:5px;}
.mr5{margin-right:5px;}

.mt10{margin-top:10px;}
.mb10{margin-bottom:10px;}
.ml10{margin-left:10px;}
.mr10{margin-right:10px;}

.mt15{margin-top:15px;}
.mb15{margin-bottom:15px;}
.ml15{margin-left:15px;}
.mr15{margin-right:15px;}

.mt20{margin-top:20px;}
.mb20{margin-bottom:20px;}
.ml20{margin-left:20px;}
.mr20{margin-right:20px;}

.mt50{margin-top:50px;}
.mb50{margin-bottom:50px;}
.ml50{margin-left:50px;}
.mr50{margin-right:50px;}

.mt150{margin-top:150px;}
.mb150{margin-bottom:150px;}
.ml150{margin-left:150px;}
.mr150{margin-right:150px;}

.zoom5{zoom:.5;}
.zoom6{zoom:.6;}
.bor1{border: 1px solid;}
.bnone{border:none;outline: none;}
.bor3{border: 3px solid;}
.br50{border-radius:50%;}
.br8{border-radius:8px;}
.br4{border-radius:4px;}

.bort1{border-top: 1px solid;}
.borb1{border-bottom: 1px solid;}
.bort3{border-top: 3px solid;}
.borb3{border-bottom: 3px solid;}
.borl10{border-left: 10px solid;}
.border-bottom {border-bottom: 2px solid #eee;}

.backposleft55{background-position: left 55%;}
.backnorep{background-repeat: no-repeat;}

.tl{text-align:left;}
.tr{text-align:right;}
.tc{text-align:center;}

.vam{vertical-align: middle;}

.opa1{opacity: 1;}
.opa87{opacity: .87;}

.toast span, .toast:after, .toast:before {
    position: absolute;
    display: block;
    width: 19px;
    height: 3px;
    border-radius: 2px;
    background-color: #FFF;
    -webkit-transform: translate3d(0,0,0) rotate(0);
    transform: translate3d(0,0,0) rotate(0);
}
.toast:after, .toast:before {
    content: '';
    width: 16px;
    left: 15px;
    -webkit-transition: all ease-in .4s;
    transition: all ease-in .4s;
}
.top17, .toast:before {top: 17px;}
.top31, .toast:after {top: 31px;}
.overhide{overflow:hidden;}
#masterLogo {background-image: url(<?php echo $c_cdn_img;?>/mobile/vanectro-logo-web-mobile.png);background-size: auto 44%;}
.search{position: absolute;top: 16px;font-size: 16px;}
.cart-quantity {top: 11px;margin-left: -8px;}

.lh10{line-height:10px;}
.lh30{line-height:30px;}
.lh52{line-height : 52px;}
.lh15{line-height: 1.5;}
#menu h6 span:after {position: absolute;right: 20px;top: 0;font-family: FontAwesome;font-size: 12px;line-height: 47px;content: '\f0dd';}
.overtext{text-overflow: ellipsis;white-space: nowrap;overflow: hidden;}
.wsnormal{white-space: normal;}
.bs6{box-shadow: 0 1px 6px rgba(0,0,0,.12);}
.bs10{box-shadow: 0 6px 10px rgba(0,0,0,.12);}
.garistengah, .linethrough{text-decoration: line-through;}
.zoom5, .vhico1, .vhico2, .vhico3 {zoom :.5;}
.zoom4{zoom:0.4;}
.aic{align-items:center;}
.jtc{justify-content:center;}
amp-accordion section[expanded] .bukahide:after {content: "\f077";}
.memail:after, amp-accordion section:not([expanded]) .bukahide:after {content: "\f078";}
.lsnone, .circle-list {list-style-type: none;}
ol.circle-list>li:before {
    content: "";
    position: absolute;
    left: -15px;
    border-left: 1px solid #888;
    width: 1px;
}
.h100, ol.circle-list>li:before {height: 100%;}
.h0, ol.circle-list>li:last-child:before {height: 0%;}
ol.circle-list>li {counter-increment: custom}
ol.circle-list>li:after, ol.circle-list>li:last-child:after {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: solid 1px #888;
    display: inline-block;
    content: counter(custom) " ";
    position: absolute;
    left: -25px;
    top: 0;
    text-align: center;
}
.vh1{background:url('<?php echo $c_url;?>/compressed/mobilehome/home.webp')no-repeat;display:inline-block;}
.vh-download-daftar-harga{background-position:-130px -0px;}
.w70px,.vhico3{width:70px;}
.h70px, .vhico3{height:70px;}
.vh-katalog-canon{background-position:-520px -0px;}
.vh-katalog-paket{background-position:-650px -0px;}
.vh-katalog-rekondisi{background-position:-780px -0px;}
.vh-katalog-service{background-position:-910px -0px;}
.vh-katalog-sewa{background-position:-1040px -0px;}
.vh-katalog-sparepart{background-position:-1170px -0px;}
.vh-katalog-warna{background-position:-1300px -0px;}
.vh-katalog-xerox{background-position:-1430px -0px;}

.w130px, .vhico1, .vhico2, .vhico3{width:130px;}
.h130px, .vhico1, .vhico2, .vhico3{height:130px;}
.vh-canon{background-position: 0px -0px;}
.vh-fujixerox{background-position:-260px -0px;}
.vh-harga{ background-position:-390px -0px;}
.vh-lainnya{background-position:-1560px -0px;}
.vh-paket{background-position:-1690px -0px;}
.vh-rekondisi{background-position:-1820px -0px;}
.vh-service{background-position:-1950px -0px;}
.vh-sewa{background-position:-2080px -0px;}
.vh-sparepart{background-position:-2210px -0px;}
.vh-warna{background-position:-2393px -0px;}


.vh2{background:url('<?php echo $c_url;?>/compressed/mobilehome/home2.webp');display:inline-block;}
.vh2-corder{background-position:0px -773px;width:228px;height:91px;}
.vh2-kkosong{background-position:-228px -666px;width:240px;height:198px;display:inline-block;}
.vh2-offline{background-position:-468px -0px;width:1008px;height:864px;}
.vh2-pn1{background-position:-1476px -732px;width:248px;height:132px;}

.vh3{background:url('<?php echo $c_url;?>/compressed/mobilehome/home3.webp');display:block;}
.w96px,.vh3{width:96px;}
.h96px,.vh3{height:96px;}
.vh3-simpleaja{background-position:0px -0px;}
.vh3-teknisiindo{background-position:-96px -0px;}
.vh3-tutorial{background-position:-192px -0px;}
.vh3-uang-kembali{background-position:-288px -0px;}
.vh3-aman{background-position:-384px -0px;}
.vh3-cod{background-position:-480px -0px;}
.vh3-forum{background-position:-576px -0px;}
.vh3-free-ongkir{background-position:-672px -0px;}
.vh3-garansi{background-position:-768px -0px;}
.vh3-instalasi{background-position:-864px -0px;}
.vh3-jujur{background-position:-960px -0px;}
.vh3-kepuasan{background-position:-1056px -0px;}
.vh3-konsultasi{background-position:-1152px -0px;}
.vh3-lacak{background-position:-1248px -0px;}
.vh3-mobileprint{background-position:-1344px -0px;}
.vh3-nego{background-position:-1440px -0px;}
.vh3-original{background-position:-1536px -0px;}
.vh3-otg{background-position:-1632px -0px;}
.vh3-refund{background-position:-1728px -0px;}
</style>

</head>
<body dir="ltr">

	<header class="posstik top0" itemscope="" itemtype="https://schema.org/WPHeader">
        <button role="button" aria-label="Menu <?php echo $legal_pt;?>"  class="toast bnone posrel dblock fleft h51 pr15 pl15 w10" on="tap:mainSideBar.toggle"><span class="opa1 top24"></span></button>
		<a id="logo" aria-label="Logo <?php echo $legal_pt;?>" class="dblock fleft w60 mr10" href="<?php echo $c_url;?>"><div id="masterLogo" class="ml10 h49 w100 backposleft55 backnorep dinblock "></div></a>
		<a on="tap:pencarian" class="fleft white-bg mt15 br8 w10">
			<i class="pt5 pb5 pl10 pr10 fa fa-search"></i>
		</a>	
		<a on="tap:trolibelanja.toggle" class="fright mr10 cart w10"><i class="white-col opa87 fs17 lh52 h51 m0 fa fa-shopping-cart"></i>
			<span class="cart-quantity w20px fs10 merah-bg posabs br50 white-col mr5 tc dinblock "><?php if (!empty($_SESSION['cart'])) { if (is_array($_SESSION['cart'])) {$max = count($_SESSION['cart']);echo $max;}else {echo"0";}} else {echo"0";} ?></span>
		</a>		
	</header>
<?php $h=date("H"); if($h<=10){$selamat="Pagi";} elseif($h<=16){$selamat="Siang";} elseif($h<=19){$selamat="Sore";}else{$selamat="Malam";}

if(isset($query['city'])){$query['city']=$query['city'];}
else {$query=array('city' => 'Jakarta');}

$urutan=0;


$telp_marketing=str_replace(" ","",$telp_marketing); $telp_marketing=ltrim($telp_marketing,"0"); $hp1="+62".$telp_marketing;
$telponya=$hp1;	
$telp_marketing=str_replace(" ","",$telp_marketing); $telp_marketing=ltrim($telp_marketing,"0"); $hp1="+62".$telp_marketing;
$telponya=$hp1;	
?>
<div class="target">
  <a class="target-anchor" id="top"></a>
  <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start" layout="nodisplay"></amp-position-observer>
</div>
<div id="top2"></div>

<div id="main" class="eee-bg">	
	<div class="top50 w100 posfix z2 eee-bg">
		<amp-selector id="carouselSelector" on="select:categorynya.toggle(index=event.targetOption, value=true)" layout="container">
			<amp-carousel id="carouselPreview" class="carousel-preview bs6 pl10 white-bg" height="45" layout="fixed-height" type="carousel">
				<a option="0" class="fs12 black-col p10" selected> <i class="mr5 fa fa-home"></i> Home </a>
				<a on="tap:promotoday" class="fs12 black-col p10"> Promo Mesin Fotocopy</a>	
				<a option="1" class="fs12 black-col p10"> Menu Bantuan Pelanggan </a>
				<a option="2" class="fs12 black-col p10 mr10"> Kontak & Alamat <?php echo $site_name;?></a>
			</amp-carousel>
		</amp-selector>
	</div>
	<amp-selector id="categorynya" class="tabs-with-flex mt50" role="tablist">
		<div class="hidden" id="sample1-tab1" role="tab" aria-controls="sample1-tabpanel1" selected option>Home</div>
		<div role="tabpanel" aria-labelledby="sample1-tab1" id="sample1-tabpanel1" class="dblock eee-bg"> 
			<div class="white-bg w100 pb20 mb15 pl5" >
				<div class="mb5 ml5 pt5 pl5 vam dblock fs12"><b>Kategori Mesin Fotocopy Unggulan</b></div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Harga Mesin Fotocopy" href="<?php echo $c_url;?>/harga-mesin-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-harga"></div></div>		
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Daftar Harga</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Mesin Fotocopy Canon" href="<?php echo $c_url;?>/mesin-fotocopy-canon" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-canon"></div></div>								
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Canon Baru</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Mesin Fotocopy Warna" href="<?php echo $c_url;?>/mesin-fotocopy-warna" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-warna"></div></div>						
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Warna Baru</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Paket Usaha Fotocopy" href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-paket"></div></div>							
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Paket Usaha</span>
					</a>
				</div>		
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Mesin Fotocopy Rekondisi" href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-rekondisi"></div></div>						
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Rekondisi</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Service Mesin Fotocopy" href="<?php echo $c_url;?>/service-mesin-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-service"></div></div>				
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Servis</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a aria-label="Sparepart Mesin Fotocopy" href="<?php echo $c_url;?>/sparepart-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-sparepart"></div></div>			
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Sparepart</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a on="tap:kategori_lainya"class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-lainnya"></div></div>
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Lihat Lainnya</span>
					</a>
				</div>		
			</div>
			<div class="white-bg w100 pt10 mt15" >
				<h2 class="m0 pl5 ml10 mr10 mb10 vam black-col fs12">Dealer Resmi Mesin Fotocopy Canon & Fuji Xerox</h2>
				<a on="tap:infodetail_dealerresmi">
				<amp-img class="w100" width="370" height="208" src="<?php echo $c_cdn;?>/new/images/amp/foo/video.webp" layout="responsive" alt="Dealer Resmi Mesin Fotocopy Canon & Fuji Xerox" ></amp-img>																											
				</a>
				<div class="white-bg pt15 pb15 pl20 pr20 black-col">
					<div class="fs14 merah-col"><b>Dijamin Mesin Fotocopy 100% Original</b></div>
					<br>
					<div class="home__slogan__desc fs12">
						Iming iming mesin fotocopy harga murah. Tapi menyesal di belakang karena mesin fotocopynya bermasalah dan tidak ada Pertanggung Jawaban. 
						Pastikan mesin fotocopymu bergaransi resmi lebih dari 1 tahun di seluruh Indonesia. Jangan sampai salah pilih yang cuma bisa memberi janji !! 
						Mau menyesal karena sudah membuang banyak uang untuk Mesin Fotocopy yang Tidak Jelas ?? 
						<a on="tap:infodetail_dealerresmi" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Informasi Detail : Baca Selengkapnya <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
					</div>			
				</div>	
			</div>	
			<div class="white-bg w100 mt10 pt10">			
				<div class="w100 mb5 ml10 pb5 pt5 vam dblock fs12">
					<b>Keunggulan <?php echo $site_name;?> </b> 
					<a class="posabs right0 mr15" aria-label="Keunggulan Kami" href="<?php echo $c_url;?>/keunggulan-kami">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
					<div class="pl5 pr5">
						<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=140>
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-cod mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Terima C.O.D</b></h5>
									<span class="fs8 black-col mt10"> Se-Pulau Jawa </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-free-ongkir mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Harga Termasuk Ongkir</b></h5>
									<span class="fs8 black-col mt10"> Ongkir Jelas Se-Indonesia </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-garansi mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Garansi Seumur Hidup</b></h5>
									<span class="fs8 black-col mt10"> Jaminan Garansi Terpanjang </span>	
								</div>
							</div>		
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-instalasi mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Instalasi Se-Indonesia</b></h5>
									<span class="fs8 black-col mt10"> Instalasi Fotocopy Se-Indonesia </span>	
								</div>
							</div>							
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-teknisiindo mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>16.000+ Service Center </b></h5>
									<span class="fs8 black-col mt10"> 180.000++ Teknisi Se-Indonesia </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-original mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Mesin Fotocopy Original </b></h5>
									<span class="fs8 black-col mt10"> Jaminan Pesanan 100% Original </span>	
								</div>
							</div>						
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-kepuasan mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Review Pelanggan Asli </b></h5>
									<span class="fs8 black-col mt10"> Diulas Oleh Pelanngan Asli </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-nego mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Harga Bisa Dinego </b></h5>
									<span class="fs8 black-col mt10"> Nego Aja Sampek Deal </span>	
								</div>
							</div>		
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-jujur mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Jujur & Informatif</b></h5>
									<span class="fs8 black-col mt10"> Tidak Lebay Memihak Brand </span>	
								</div>
							</div>			
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-simpleaja mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Mudah Dipahami</b></h5>
									<span class="fs8 black-col mt10"> Gak Banyak Neko Neko </span>	
								</div>
							</div>		
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-lacak mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Bisa Lacak Pesanan</b></h5>
									<span class="fs8 black-col mt10"> Pantau Status Pesanan-mu </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-forum mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Tersedia Forum Diskusi</b></h5>
									<span class="fs8 black-col mt10"> Bebas Diskusi Tentang Copier </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-tutorial mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Gratiss Video Tutorial</b></h5>
									<span class="fs8 black-col mt10"> Bonuss Langsung Pembelian </span>	
								</div>
							</div>		
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-konsultasi mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Gratiss Konsultasi</b></h5>
									<span class="fs8 black-col mt10"> Gratiss Konsultasi Selamanya </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-aman mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Transaksi Aman</b></h5>
									<span class="fs8 black-col mt10"> Transaksi Aman dan Mudah </span>	
								</div>
							</div>		
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-uang-kembali mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>100% Uang Kembali</b></h5>
									<span class="fs8 black-col mt10"> Jaminan Pemesanan Pelanggan </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-refund mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Garansi Return Barang</b></h5>
									<span class="fs8 black-col mt10"> Bisa Langsung Tukar Barang </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-mobileprint mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Mobile Print Online</b></h5>
									<span class="fs8 black-col mt10"> Print Dimanapun Kapanpun </span>	
								</div>
							</div>	
							<div class="w150px bor1 pt10 pb10 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<div class="vh3 vh3-otg mt5 mb5 mauto zoom6"></div>
								<div class="infopro fs10 pt5 pl10 tc primary-col">
									<h5 class="wsnormal w100 fs12 m0"><b>Gratiss USB OTG</b></h5>
									<span class="fs8 black-col mt10"> Beserta Isiannya Lengkap </span>	
								</div>
							</div>						
						</amp-carousel>
					</div>
			</div>
			<div class="white-bg w100 pt10 mt15" >
				<div class="w100 mb5 ml10 pb5 pt5 vam dblock fs12">
					<b>Jual Mesin Fotocopy Canon</b> 
					<a class="posabs right0 mr15" aria-label="Mesin Fotocopy Canon" href="<?php echo $c_url;?>/mesin-fotocopy-canon">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
				<div class="pl5 pr5">
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=410>
						<?php 	
							$data_produk_paket = ("select *  from produk where paket ='' and category like '%mesin fotocopy%' and brand like '%canon%' and hot like '%baru%' and harga_baru >10000000 ORDER BY produk.rekomendasi DESC, produk.harga_baru ASC limit 8"); 
							$urutan_paket=0;
							
							$result_paket = $db->query($data_produk_paket);
							while ($a_data_paket = $result_paket->fetch_array(MYSQLI_BOTH)) {
								
								$a_link_paket = $a_data_paket['link'];
								$a_id_paket = $a_data_paket['id_produk'];
								$a_nama_paket = $a_data_paket['nama_paket'];
								$a_nama_produk_paket = strtoupper($a_data_paket['nama_produk']);
								$a_nama_produk_paket = str_replace("PAKET USAHA FOTOCOPY","",$a_nama_produk_paket);
								$a_nama_produk_paket = str_replace("PEMULA","",$a_nama_produk_paket);
								$a_nama_produk_paket = str_replace("-","",$a_nama_produk_paket);
								$a_nama_produk_paket = $a_nama_produk_paket;
								$a_nama_produk = $a_nama_produk_paket;
								$a_category_paket = $a_data_paket['category'];
								$urutan_paket++;
								$a_brand_paket = $a_data_paket['brand'];
								$a_special_paket = $a_data_paket['special'];
								$a_image_tiga_paket = $a_data_paket['image_satu'];
								$a_hot_paket = $a_data_paket['hot'];
								$a_deskripsi_a_paket = $a_data_paket['deskripsi_a'];
								$a_harga_lama_paket = $a_data_paket['harga_lama'];
								$a_harga_baru_paket = $a_data_paket['harga_baru'];
								$a_rekomendasi_paket = $a_data_paket['rekomendasi'];
								
								$a_brands = strtolower($a_brand_paket);
								$a_brands = str_replace(" ","",$a_brands);
								
								if($a_harga_lama_paket == 0){$a_harga_lama_paket=$a_harga_baru_paket*2;}
								if($a_harga_baru_paket !=0){$a=$a_harga_lama_paket;$b=($a_harga_baru_paket);
								$c=(($a-$b)/($a/100));}
									
								$stok2=int3($a_nama_produk_paket); 
								$stok2 = substr($stok2,3); 
								$stok=int3((22-date("d"))+$stok2); 
								
								if($stok>=0){ $stok=$stok." Unit"; } 
								else {$stok="1 Unit";}
							
								include (PLUG.'/mobile/nego.php'); 	
								if (file_exists($a_image_tiga_paket)){ 
									$image34 = str_replace('.png', '', $a_image_tiga_paket);
									$image34 = str_replace('.jpg', '', $a_image_tiga_paket); 	
									$image34 = str_replace('.jpeg', '', $a_image_tiga_paket); 									
									$image36 = $c_url."/".$a_image_tiga_paket.".webp";
									if (file_exists($image36)){ $image34=$image36;}
									else {
									$result = $ImgCompressor->run($a_image_tiga_paket, 'jpg', 5);  
									$image35 = $result['gb'];$images = $result['mini'];
									$results2 = $ImgCompressor->mini($images,$image35, 150, 150,'mini_');  
									$image34 = str_replace('.png', '', 'mini_'.$image35);
									$image34 = str_replace('.jpg', '', $image34); 								
									$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
									$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
									}
								}								
						?>										
							<div class="w150px bor1 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<amp-img class="w150px" width="150" height="150" src="<?php echo $a_image_tiga_paket; ?>" layout="responsive" alt="<?php echo $a_nama_produk_paket; ?>" ></amp-img>																											
								<div class="infopro fs10 pt5 pl10">
								<a aria-label="<?php echo $a_nama_produk_paket; ?>" href="<?php echo "$c_url/$a_brands-$a_link_paket";?>" class="capronego">
									<h5 class="tl pb10 wsnormal w100 fs12 m0 h38"><b><?php echo $a_nama_produk_paket; ?></b></h5>
									<div class="dinflex width90 mr10 fs12 br4 bor1 pi__limited">
										<div class="primary-bg aic dinflex pt0 pb0 pl5 pr5 kartustok"><span class="posrel z1 mr15 white-col">Stok :</span></div>
										<div class="pi__limited__quantity pl20 primary-col dflex aic "><?php echo $stok; ?></div>
									</div>
									<span class="tl fs8 black-col dblock w100 pt10"> <?php echo $a_category_paket; ?> </span>
									<div class="garistengah fs9">Rp <?php echo format_rupiah($a_harga_lama_paket); ?></div>
									<div class="merah-col fs14"><b>Rp <?php echo format_rupiah($a_harga_baru_paket); ?></b></div>	
									<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id_paket."'"); if($total_review>2){?>
									<div class="pt10 rating">
										<?php for($i=0;$i<5;$i++) { ?>
										<i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
										<span class="tc  primary-col"> ( <?php echo $total_review; ?> Ulasan ) </span>
									</div>
									<?php } else { ?> 
									<div class="pt10 rating">
										<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
										<span class="tc  primary-col"> ( 0 Ulasan ) </span>
									</div>							
									<?php } ?>
								</a>	
									<div class="pt10">
										<a aria-label="<?php echo $a_nama_produk_paket; ?>"  href="<?php echo "$c_url/$a_brands-$a_link_paket";?>" class="b4 dinline w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col" ><i class="fa fa-th-list mr5"></i> Klik : Info Detail </a>
									</div>							
									<div class="kanwil fs9 width90 mt10 pb5 bort1 eee-col"> <span class="tc  primary-col">Daerah : <?php echo ucwords($query['city']); ?></span></div>
								</div>
							</div>					
						<?php } ?>
						</amp-carousel>
					</div>
			</div>	
			<div class="white-bg w100 mt15">
				<a aria-label="Daftar Harga Mesin Fotocopy" href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy" class="w100  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<div class="vh1 vhico2 zoom5 mt10 br50 vh-download-daftar-harga"></div>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Download Daftar Harga Mesin Fotocopy</b><br>
						Update Terbaru <?php echo $nama_bln[date('m')]." - ".date('Y'); ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-download mr5 "></i>Download Sekarang </span>
					</div>
				</a>
			</div>
			<div class="white-bg w100 pt10 mt15" >
				<div class="w100 mb5 ml10 pb5 pt5 vam dblock fs12">
					<b>Jual Paket Usaha Fotocopy Murah</b> 
					<a class="posabs right0 mr15" aria-label="Paket Usaha Fotocopy" href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
				<div class="pl5 pr5">
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=410>
						<?php 	
							$data_produk_paket = ("select *  from produk where paket !='' and brand not like '%xerox%' ORDER BY  produk.harga_baru ASC limit 12"); 
							$urutan_paket=0;
							
							$result_paket = $db->query($data_produk_paket);
							while ($a_data_paket = $result_paket->fetch_array(MYSQLI_BOTH)) {
								
								$a_link_paket = $a_data_paket['link'];
								$a_id_paket = $a_data_paket['id_produk'];
								$a_nama_paket = $a_data_paket['nama_paket'];
								$a_nama_produk_paket = strtoupper($a_data_paket['nama_produk']);
								$a_nama_produk_paket = str_replace("PAKET USAHA FOTOCOPY","",$a_nama_produk_paket);
								$a_nama_produk_paket = str_replace("PEMULA","",$a_nama_produk_paket);
								$a_nama_produk_paket = str_replace("-","",$a_nama_produk_paket);
								$a_nama_produk_paket = $a_nama_paket." - ".$a_nama_produk_paket;
								$a_nama_produk = $a_nama_produk_paket;
								$a_category_paket = $a_data_paket['category'];
								$urutan_paket++;
								$a_brand_paket = $a_data_paket['brand'];
								$a_special_paket = $a_data_paket['special'];
								$a_image_tiga_paket = $a_data_paket['image_satu'];
								$a_hot_paket = $a_data_paket['hot'];
								$a_deskripsi_a_paket = $a_data_paket['deskripsi_a'];
								$a_harga_lama_paket = $a_data_paket['harga_lama'];
								$a_harga_baru_paket = $a_data_paket['harga_baru'];
								$a_rekomendasi_paket = $a_data_paket['rekomendasi'];
								
								$a_brands = strtolower($a_brand_paket);
								$a_brands = str_replace(" ","",$a_brands);
								
								if($a_harga_lama_paket == 0){$a_harga_lama_paket=$a_harga_baru_paket*2;}
								if($a_harga_baru_paket !=0){$a=$a_harga_lama_paket;$b=($a_harga_baru_paket);
								$c=(($a-$b)/($a/100));}
									
								$stok2=int3($a_nama_produk_paket); 
								$stok2 = substr($stok2,3); 
								$stok=int3((22-date("d"))+$stok2); 
								
								if($stok>=0){ $stok=$stok." Unit"; } 
								else {$stok="1 Unit";}
							
								include (PLUG.'/mobile/nego.php'); 	
								
								if (file_exists($a_image_tiga_paket)){ 
									$image34 = str_replace('.png', '', $a_image_tiga_paket);
									$image34 = str_replace('.jpg', '', $a_image_tiga_paket); 	
									$image34 = str_replace('.jpeg', '', $a_image_tiga_paket); 									
									$image36 = $c_url."/".$a_image_tiga_paket.".webp";
									if (file_exists($image36)){ $image34=$image36;}
									else {
									$result = $ImgCompressor->run($a_image_tiga_paket, 'jpg', 5);  
									$image35 = $result['gb'];$images = $result['mini'];
									$results2 = $ImgCompressor->mini($images,$image35, 150, 150,'mini_');  
									$image34 = str_replace('.png', '', 'mini_'.$image35);
									$image34 = str_replace('.jpg', '', $image34); 								
									$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
									$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
									}
								}								
						?>										
							<div class="w150px bor1 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<amp-img class="w150px" width="150" height="150" src="<?php echo $a_image_tiga_paket; ?>" layout="responsive" alt="<?php echo $a_nama_produk_paket; ?>" ></amp-img>																											
								<div class="infopro fs10 pt5 pl10">
								<a aria-label="<?php echo $a_nama_produk_paket; ?>" href="<?php echo "$c_url/$a_brands-$a_link_paket";?>" class="capronego">
									<h5 class="tl pb10 wsnormal w100 fs12 m0 h38"><b><?php echo $a_nama_produk_paket; ?></b></h5>
									<div class="dinflex width90 mr10 fs12 br4 bor1 pi__limited">
										<div class="primary-bg aic dinflex pt0 pb0 pl5 pr5 kartustok"><span class="posrel z1 mr15 white-col">Stok :</span></div>
										<div class="pi__limited__quantity pl20 primary-col dflex aic "><?php echo $stok; ?></div>
									</div>
									<span class="tl fs8 black-col dblock w100 pt10"> <?php echo $a_category_paket; ?> </span>
									<div class="garistengah fs9">Rp <?php echo format_rupiah($a_harga_lama_paket); ?></div>
									<div class="merah-col fs14"><b>Rp <?php echo format_rupiah($a_harga_baru_paket); ?></b></div>	
									<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id_paket."'"); if($total_review>2){?>
									<div class="pt10 rating">
										<?php for($i=0;$i<5;$i++) { ?>
										<i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
										<span class="tc  primary-col"> ( <?php echo $total_review; ?> Ulasan ) </span>
									</div>
									<?php } else { ?> 
									<div class="pt10 rating">
										<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
										<span class="tc  primary-col"> ( 0 Ulasan ) </span>
									</div>							
									<?php } ?>
								</a>	
									<div class="pt10">
										<a aria-label="<?php echo $a_nama_produk_paket; ?>"  href="<?php echo "$c_url/$a_brands-$a_link_paket";?>" class="b4 dinline w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col" ><i class="fa fa-th-list mr5"></i> Klik : Info Detail </a>
									</div>							
									<div class="kanwil fs9 width90 mt10 pb5 bort1 eee-col"> <span class="tc  primary-col">Daerah : <?php echo ucwords($query['city']); ?></span></div>
								</div>
							</div>					
						<?php } ?>
						</amp-carousel>
					</div>
			</div>
			<div class="white-bg w100 mt15">
				<a <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="w100  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat Whatsapp </span>
					</div>
				</a>
			</div>
			<div class="white-bg w100 pt10 mt15" >
				<div class="w100 mb5 ml10 white-bg pb5 pt5 vam dblock fs12">
					<b>Sewa Mesin Fotocopy Murah</b> 
					<a class="posabs right0 mr15" aria-label="Sewa Mesin Fotocopy"  href="<?php echo $c_url;?>/sewa-mesin-fotocopy">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
				<div class="pl5 pr5">
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=410>
						<?php 	
							$data_produk_sewa = ("select *  from produk where sewa !='' ORDER BY  produk.harga_baru ASC limit 6"); 
							$urutan_paket=0;
							
							$result_sewa = $db->query($data_produk_sewa);
							while ($a_data_paket = $result_sewa->fetch_array(MYSQLI_BOTH)) {
								
								$a_link_paket = $a_data_paket['link'];
								$a_id_paket = $a_data_paket['id_produk'];
								$a_nama_produk_paket = $a_data_paket['nama_produk'];
								$a_nama_produk_paket = str_replace("PAKET USAHA FOTOCOPY","",$a_nama_produk_paket);
								$a_nama_produk_paket = str_replace("PEMULA","",$a_nama_produk_paket);
								$a_nama_produk_paket = str_replace("-","",$a_nama_produk_paket);
								$a_nama_produk_paket = $a_nama_produk_paket;
								$a_nama_produk = $a_nama_produk_paket;
								$a_category_paket = $a_data_paket['category'];
								$urutan_paket++;
								$a_brand_paket = $a_data_paket['brand'];
								$a_special_paket = $a_data_paket['special'];
								$a_image_tiga_paket = $a_data_paket['image_satu'];
								$a_hot_paket = $a_data_paket['hot'];
								$a_deskripsi_a_paket = $a_data_paket['deskripsi_a'];
								$a_harga_lama_paket = $a_data_paket['harga_lama'];
								$a_harga_baru_paket = $a_data_paket['harga_baru'];
								$a_rekomendasi_paket = $a_data_paket['rekomendasi'];
								
								$a_brands = strtolower($a_brand_paket);
								$a_brands = str_replace(" ","",$a_brands);
								
								if($a_harga_lama_paket == 0){$a_harga_lama_paket=$a_harga_baru_paket*2;}
								if($a_harga_baru_paket !=0){$a=$a_harga_lama_paket;$b=($a_harga_baru_paket);
								$c=(($a-$b)/($a/100));}
									
								$stok2=int3($a_nama_produk_paket); 
								$stok2 = substr($stok2,3); 
								$stok=int3((22-date("d"))+$stok2); 
								
								if($stok>=0){ $stok=$stok." Unit"; } 
								else {$stok="1 Unit";}
							
								include (PLUG.'/mobile/nego.php'); 	
								
								if (file_exists($a_image_tiga_paket)){ 
									$image34 = str_replace('.png', '', $a_image_tiga_paket);
									$image34 = str_replace('.jpg', '', $a_image_tiga_paket); 	
									$image34 = str_replace('.jpeg', '', $a_image_tiga_paket); 									
									$image36 = $c_url."/compressed/".$a_image_tiga_paket.".webp";
									if (file_exists($image36)){ $image34=$image36;}
									else {
									$result = $ImgCompressor->run($a_image_tiga_paket, 'jpg', 5);  
									$image35 = $result['gb'];$images = $result['mini'];
									$results2 = $ImgCompressor->mini($images,$image35, 150, 150,'mini_');  
									$image34 = str_replace('.png', '', 'mini_'.$image35);
									$image34 = str_replace('.jpg', '', $image34);
									$image34 = str_replace('.jpeg', '', $image34); 										
									$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
									$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
									}
								}								
						?>										
							<div class="w150px bor1 eee-col mt5 mb5 ml5 pr5 br4 bs6 overhide capronego blog-carousel-item" >
								<amp-img class="w150px" width="150" height="150" src="<?php echo $a_image_tiga_paket; ?>" layout="responsive" alt="<?php echo $a_nama_produk_paket; ?>" ></amp-img>																											
								<div class="infopro fs10 pt5 pl10">
								<a aria-label="<?php echo $a_nama_produk_paket; ?>"  href="<?php echo "$c_url/$a_brands-$a_link_paket";?>" class="capronego">
									<h5 class="tl pb10 wsnormal w100 fs12 m0 h38"><b><?php echo $a_nama_produk_paket; ?></b></h5>
									<div class="dinflex width90 mr10 fs12 br4 bor1 pi__limited">
										<div class="primary-bg aic dinflex pt0 pb0 pl5 pr5 kartustok"><span class="posrel z1 mr15 white-col">Stok :</span></div>
										<div class="pi__limited__quantity pl20 primary-col dflex aic "><?php echo $stok; ?></div>
									</div>
									<span class="tl fs8 black-col dblock w100 pt10"> <?php echo $a_category_paket; ?> </span>
									<div class="garistengah fs9">Rp <?php echo format_rupiah($a_harga_lama_paket); ?></div>
									<div class="merah-col fs14"><b>Rp <?php echo format_rupiah($a_harga_baru_paket); ?></b></div>	
									<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id_paket."'"); if($total_review>2){?>
									<div class="pt10 rating">
										<?php for($i=0;$i<5;$i++) { ?>
										<i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
										<span class="tc  primary-col"> ( <?php echo $total_review; ?> Ulasan ) </span>
									</div>
									<?php } else { ?> 
									<div class="pt10 rating">
										<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
										<span class="tc  primary-col"> ( 0 Ulasan ) </span>
									</div>							
									<?php } ?>
								</a>	
									<div class="pt10">
										<a aria-label="<?php echo $a_nama_produk_paket; ?>"  href="<?php echo "$c_url/$a_brands-$a_link_paket";?>" class="b4 dinline w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col" ><i class="fa fa-th-list mr5"></i> Klik : Info Detail </a>
									</div>							
									<div class="kanwil fs9 width90 mt10 pb5 bort1 eee-col"> <span class="tc  primary-col">Daerah : <?php echo ucwords($query['city']); ?></span></div>
								</div>
							</div>					
						<?php } ?>
						</amp-carousel>
					</div>
			</div>
			<div class="white-bg w100 pt10 mt15" >
				<div class="w100 mb5 ml10 white-bg pb5 pt5 vam dblock fs12">
					<b>Ulasan Kepuasan Pelanggan</b> 
					<a class="posabs right0 mr15" aria-label="Ulasan Pelanggan <?php echo $site_name;?>"  href="<?php echo $c_url;?>/pelanggan-setia">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
				<div class="pl5 pr5">
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=250>
					<?php $data_produk = ("select * from aktivitas_pelanggan  order by id DESC LIMIT 8");$query_p = $db->query($data_produk); ?>
					<?php while ($a_data = $query_p->fetch_array(MYSQLI_BOTH)) {  
							$a_link = $a_data['link'];
							$a_id = $a_data['id'];
							$a_nama = $a_data['nama'];
							$a_lokasi =substr( $a_data['lokasi'], 0, 25);
							$a_image_tiga = $c_cdn_img.'/'.$a_data['photosmall'];
							$a_tanggal = $a_data['tanggal'];
							$tipemesin = substr($a_data['tipemesin'], 0, 25);
							$a_image_tiga = str_replace($c_url."/", '', $a_image_tiga);
							
								if (file_exists($a_image_tiga)){ 
									$image34 = str_replace('.png', '', $a_image_tiga);
									$image34 = str_replace('.jpg', '', $a_image_tiga); 	
									$image34 = str_replace('.jpeg', '', $a_image_tiga); 									
									$image36 = $c_url.'/compressed/'.$image34.".webp";
									if (file_exists($image36)){ $image34=$image36;}
									else {
									$result = $ImgCompressor->run($a_image_tiga, 'jpg', 5);  
									$image35 = $result['gb'];$images = $result['mini'];
									$results2 = $ImgCompressor->mini($images,$image35, 288, 161,'mini_');  
									$image34 = str_replace('.png', '', 'mini_'.$image35);
									$image34 = str_replace('.jpg', '', $image34); 								
									$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
									$a_image_tiga=$c_url."/compressed/".$image34.".webp";
									}
								}							
					?>			
					<div class="w80 mb5 white-bg eee-col bs6 br4 bor1 overhide">
						<a aria-label="Pengiriman <?php echo $a_nama; ?>"  href="<?php echo $c_url."/pembeli-".$a_link; ?>" class="primary-col w100 h150 dblock overhide mr15">
							<amp-img src="<?php echo $a_image_tiga;?>" width="317" height="177" layout="responsive"></amp-img>
						</a>
						<span class="tanggal primary-bg white-col w30 tc mr10 dblock fleft">
							<a class="w100 border-bottom tg white-col fs35 tc mr10  dblock fleft"><?php echo date('d', strtotime($a_tanggal)); ?></a>
							<a class="w100 bln fs12 tc mr10 white-col dblock fleft"><?php echo date('M - Y', strtotime($a_tanggal)); ?></a>
						</span>	
						<a aria-label="Pengiriman <?php echo $a_nama; ?>"   href="<?php echo $c_url."/pembeli-".$a_link; ?>" class="w60 overtext dblock">
							<span class="fs12 m0"><b>Pengiriman <?php echo $a_nama; ?></b></span>
						</a>
						<span class="dblock gold-col secondary-color">
							<?php for($i=0;$i<5;$i++) { ?><i class="fa fa-star"></i><?php } ?>
						</span>
						<div class="categories fs9">
							<a>Daerah <?php echo $a_lokasi; ?></a>
						</div>
						<div class="prices w60 bort1 overtext dblock">
							<span class="primary-col fs12"><b><?php echo $tipemesin; ?></b></span>
						</div>
					</div>
					<?php } ?>	
					</amp-carousel>
				</div>
			</div>			
			<div class="white-bg w100 pt10 mt15" >
				<div class="w100 mb5 ml10 white-bg pb5 pt5 vam dblock fs12">
					<b>Lokasi Kantor Cabang <?php echo $site_name; ?></b> 
					<a class="posabs right0 mr15" on="tap:kantor_cabang">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
				<div class="pl5 pr5">	
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=370>
						<div class="white-bg bs6 width90 mb10" >
							<amp-img class="h150 overhide" src="<?php echo $c_cdn_img.'/about/3-mini.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Jakarta</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Jual Mesin Fotocopy Murah, Gratiss Pengiriman, Instalasi, Konsultasi Usaha se-Jabodetabek. Garansi Resmi Mesin Fotocopy se-Umur Hidup. Garansi Sparepart 3 Tahun.
									<a aria-label="Jual Mesin Fotocopy Jakarta" href="<?php echo $c_url;?>/jual-mesin-fotocopy" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
								</div>			
							</div>	
						</div>	
						<div class="white-bg bs6 width90 mb10" >
							<amp-img class="h150 overhide"  src="<?php echo $c_cdn.'/new/images/cabang/surabaya.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Surabaya</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Hallo arek suroboyo?? Awakmu arep golek mesin fotocopy Kanggo usaha opo gur arep dinggo neng Kantor?? Saiki vanectro nduwe kantor cabang neng Suroboyo loh.
									<a aria-label="Jual Mesin Fotocopy Surabaya"  href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-surabaya" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
								</div>			
							</div>	
						</div>	
						<div class="white-bg bs6 width90 mb10" >
							<amp-img class="h150 overhide"  src="<?php echo $c_cdn.'/new/images/cabang/makasar.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Makasar</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Mengingat Banyaknya Permintaan dari Makasar, Sekarang <?php echo $site_name;?> sudah sampai di Maksar Loh. Jangan Lupa Berkunjung. Gratiss Ongkir + Instalasi. Cek Langsung Aja Om.
									<a aria-label="Jual Mesin Fotocopy Makasar" href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-makasar" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
								</div>			
							</div>	
						</div>	
						<div class="white-bg  bs6 width90 mb10" >
							<amp-img class="h150 overhide"  src="<?php echo $c_cdn.'/new/images/cabang/bima.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Pontianak</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Sekarang udah nggak perlu cemas lagi buat pengguna mesin fotocopy daerah Pontianak dan sekitarnya, Karena <?php echo $site_name;?> sudah membuka Gallery Resmi Service Center Fotocopy disana.
									<a aria-label="Jual Mesin Fotocopy Makassar" href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-pontianak" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
								</div>			
							</div>	
						</div>						
						
					</amp-carousel>
				</div>
			</div>
			<div class="white-bg w100 pt10 mt15" >
				<div class="w100 mb5 ml10 white-bg pb5 pt5 vam dblock fs12">
					<b>Video Tutorial Mesin Fotocopy</b> 
					<a class="posabs right0 mr15" aria-label="Video Tutorial Mesin Fotocopy" href="<?php echo $c_url;?>/tv/">Lihat Semua <i class="ml5 ng-scope fa fa-chevron-right"></i></a>
				</div>
				<div class="pl5 pr5">
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=270>
					<?php 
					$data_video = ("select * from videos  order by hits DESC, duration desc LIMIT 8");
					$query_video = $db->query($data_video);
					while ($a_data_video = $query_video->fetch_array(MYSQLI_BOTH)) {  
							$a_id_video = $a_data_video['id'];
							$a_judul_video = $a_data_video['title'];
							$a_link = strtolower(seo_title($a_judul_video));
							$a_image_tiga = $a_data_video['thumbnail'];
							$a_hits_video = $a_data_video['hits'];
							$link_gambar = $c_url."/tv/upload/videos/".$a_image_tiga;
							$link_video = $c_url."/tv/video/".$a_id_video."/".$a_link;
							
							$link_gambar = str_replace($c_url."/", '', $link_gambar);
							
								if (file_exists($link_gambar)){ 
									$image34 = str_replace('.png', '', $link_gambar);
									$image34 = str_replace('.jpg', '', $link_gambar); 	
									$image34 = str_replace('.jpeg', '', $link_gambar); 									
									$image36 = $c_url.'/compressed/'.$image34.".webp";
									if (file_exists($image36)){ $image34=$image36;}
									else {
									$result = $ImgCompressor->run($link_gambar, 'jpg', 5);  
									$image35 = $result['gb'];$images = $result['mini'];
									$results2 = $ImgCompressor->mini($images,$image35, 288, 161,'mini_');  
									$image34 = str_replace('.png', '', 'mini_'.$image35);
									$image34 = str_replace('.jpg', '', $image34); 								
									$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
									$link_gambar=$c_url."/compressed/".$image34.".webp";
									}
								}								
					?>			
					<div class="w80 mb5 white-bg eee-col bs6 overhide">
						<a aria-label="Tutorial Mesin Fotocopy <?php echo $a_judul_video; ?>" href="<?php echo $link_video; ?>" class="w100 pr10 nodecoration primary-col w100 dblock mr15">
							<amp-img src="<?php echo $link_gambar;?>" width="317" height="177" layout="responsive"></amp-img>
							<div class="dinblock  overtext aic vam black-col width90 pl10 pt10 m0 pr10 lh16 tl fwnormal">
								<span class="fs12 dinblock overhide h40px wsnormal mb5"><b><?php echo $a_judul_video; ?></b></span><br>
								<span class="fs9 dinblock overhide wsnormal mb10">Sudah : <?php echo $a_hits_video; ?> Juta Kali Ditonton</span>
							</div>
						</a>						
					</div>
					<?php } ?>	
					</amp-carousel>
				</div>
			</div>
		</div>
		<div class="hidden" id="sample1-tab2" role="tab" aria-controls="sample1-tabpanel2" option>Bantuan</div>
		<div role="tabpanel" aria-labelledby="sample1-tab2" id="sample1-tabpanel2" class="dblock eee-bg"> 
			<div class="white-bg w100 pt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></span></div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<span class="fs22 dinblock black-col mb10 mr10">Terimakasih sudah menghubungi kami, bantuan apa yang kamu butuhkan ??</span>
					</div>						
				</div>
			</div>	
			<div class="white-bg pr10 w100 pl10 bs6 mb10 tl vam">		 
				<div class="fs16 p10 mt5 mr10"><a aria-label="Daftar Harga Mesin Fotocopy" href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Daftar Harga Mesin Fotocopy <i class="fright fs14 ml10 pt10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Cek Harga Pengiriman Mesin Fotocopy" href="<?php echo $c_url;?>/pengiriman">Cek Tarif Ongkir <i class="fright ml10 fs14 pt10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Cari Mesin Fotocopy" href="<?php echo $c_url;?>/cari-mesin-fotocopy">Konsultasi Memilih Mesin Fotocopy <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Compare Mesin Fotocopy" href="<?php echo $c_url;?>/perbandingan-mesin-fotocopy">Compare Mesin Fotocopy <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Cek Status Pesanan" href="<?php echo $c_url;?>/detail-pesanan">Cek Status Pemesanan <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Konfirmasi Pembayaran" href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Kontak Alamat Mesin Fotocopy" href="<?php echo $c_url;?>/hubungi">Kontak & Alamat <?php echo $site_name;?> <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
			</div>	
			<div class="white-bg w100 bs6 primary-col mt10 pl20 pt10 pb10 borl10 mb10 bl10">
				<a <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="w100  nodecoration">			
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat Whatsapp </span>
					</div>
				</a>
			</div>					
			<div class="white-bg pb20 pt10 tl vam">
				<div class="m0 black-col pl20 fs14"><b>ARTIKEL BANTUAN LAINNYA : </b></div>
				<div class="pt5 pb5 pr10 white-bg eee-col borb1"></div>	
				<amp-accordion class="sample" expand-single-section>
					<?php
						$data_faq2 = "select * from faq_category order by urutan asc";
						$dua_result_faq = $db->query($data_faq2);
						while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
							$dua_faq_judul = ltrim($dua_data_faq['short_name']);
							$dua_faq_link2 = $dua_data_faq['link'];
							$dua_faq_link=(ltrim($dua_faq_link2));
							$dua_faq_link=strtolower($dua_faq_link);				
					?>	
					<section>
						<h6 class="white-bg bnone borb1 fwnormal eee-col fs16 p10 pl20">					
							<span class="black-col"><?php echo $dua_faq_judul;?><i class="fright bukahide ml10 fs14 pt10 fa"></i> </span>
						</h6>
						<div class="fs16 pt10">
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
							<a class="pb10 pl20 pr10 dflex" aria-label="<?php echo $dua_faq_judul3;?>" href="<?php echo $dua_faq_link3;?>">
								<div class="w100 fs14 overtext"><?php echo $dua_faq_judul3;?></div>
							</a>						
							<div class="pt5 mb5 pr10 white-bg eee-col borb1"></div>
						<?php } ?>
						</div>
					</section>
					<?php } ?>
				</amp-accordion>	
			</div>	  

		</div>
		<div class="hidden" id="sample1-tab2" role="tab" aria-controls="sample1-tabpanel2" option>Informasi Alamat</div>
		<div role="tabpanel" aria-labelledby="sample1-tab2" id="sample1-tabpanel2" class="dblock eee-bg"> 
			<div class="white-bg w100 pt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></span></div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<span class="fs22 dinblock black-col mb10 mr10">Terimakasih sudah menghubungi kami, bantuan apa yang kamu butuhkan ??</span>
					</div>						
				</div>
			</div>	
			<div class="white-bg pr10 w100 pl10 bs6 mb10 tl vam">		 
				<div class="fs16 p10 mt5 mr10"><a aria-label="Daftar Harga Mesin Fotocopy" href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Daftar Harga Mesin Fotocopy <i class="fright fs14 ml10 pt10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Tarif Pengiriman Mesin Fotocopy" href="<?php echo $c_url;?>/pengiriman">Cek Tarif Ongkir <i class="fright ml10 fs14 pt10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Konsultasi Mesin Fotocopy" href="<?php echo $c_url;?>/cari-mesin-fotocopy">Konsultasi Memilih Mesin Fotocopy <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Compare Mesin Fotocopy" href="<?php echo $c_url;?>/perbandingan-mesin-fotocopy">Compare Mesin Fotocopy <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Status Pemesanan Mesin Fotocopy" href="<?php echo $c_url;?>/detail-pesanan">Cek Status Pemesanan <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Konfirimasi Pembayaran" href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a aria-label="Kontak dan Alamat" href="<?php echo $c_url;?>/hubungi">Kontak & Alamat <?php echo $site_name;?> <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
			</div>	
			<div class="white-bg w100 bs6 primary-col mt10 pl20 pt10 pb10 borl10 mb10 bl10">
				<a aria-label="Whatsapp Marketing"  <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="w100  nodecoration">			
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat Whatsapp </span>
					</div>
				</a>
			</div>
		</div>
		<div class="hidden" id="sample1-tab3" role="tab" aria-controls="sample1-tabpanel3" option>Pemesanan</div>
		<div role="tabpanel" aria-labelledby="sample1-tab3" id="sample1-tabpanel3" class="dblock eee-bg"> 
			<div class="white-bg w100 pt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Berikut Cara Pemesanan di <?php echo $site_name;?></b></span></div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<span class="fs22 dinblock black-col mb10 mr10">Pilihlah cara pemesanan yang menurutmu mudah saja, pemesanan secara online melalui website, datang langsung ke kantor, atau melalui chat dengan sales kami. </span>
					</div>						
				</div>
			</div>	
			<div class="white-bg w100 pt10 mt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col">
					<b>Pemesanan Melalui WA / SMS / Telp / Chat </b></span>
				</div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<div class="fs22 dinblock black-col mb10 mr10">
		<ol class="pl20 ml0 circle-list">
			<li class="posrel pl10 pb10">Login ke akun Anda sebelum melakukan transaksi.</li>
			<li class="posrel pl10 pb10">Pastikan jumlah point aktif Anda mencukupi minimal transaksi sebesar 1.250 TIX Point.</li>
			<li class="posrel pl10 pb10">Pilih gunakan TIX Point.</li>
			<li class="posrel pl10 pb10">Pastikan TIX Point telah mengurangi harga pada informasi ringkasan pesanan.</li>
			<li class="posrel pl10 pb10">Pilih metode pembayaran Anda dan klik tombol selesaikan pemesanan.</li>
		</ol>
						</div>
					</div>						
				</div>
			</div>				
			<div class="white-bg pr10 w100 pl10 bs6 mb10 tl vam">
				<div class="fs16 p10 mt5 mr10"><a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Daftar Harga Mesin Fotocopy <i class="fright fs14 ml10 pt10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a href="<?php echo $c_url;?>/pengiriman">Cek Tarif Ongkir <i class="fright ml10 fs14 pt10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a href="<?php echo $c_url;?>/cari-mesin-fotocopy">Konsultasi Memilih Mesin Fotocopy <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a href="<?php echo $c_url;?>/perbandingan-mesin-fotocopy">Compare Mesin Fotocopy <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a href="<?php echo $c_url;?>/detail-pesanan">Cek Status Pemesanan <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
				<div class="ccc-bg height1"></div>
				<div class="fs16 p10 mr10"><a href="<?php echo $c_url;?>/hubungi">Kontak & Alamat <?php echo $site_name;?> <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
			</div>	
			<div class="white-bg w100 bs6 primary-col mt10 mb10">
				<a href="" class="w100  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Detail Hubungi : <?php echo $posisi_marketing; ?></b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat Whatsapp </span>
					</div>
				</a>
			</div>					
			<div class="white-bg pb20 pt10 tl vam">
				<div class="m0 black-col pl20 fs14"><b>ARTIKEL BANTUAN LAINNYA : </b></div>
				<div class="pt5 pb5 pr10 white-bg eee-col borb1"></div>	
				<amp-accordion class="sample" expand-single-section>
					<?php
						$data_faq2 = "select * from faq_category order by urutan asc";
						$dua_result_faq = $db->query($data_faq2);
						while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
							$dua_faq_judul = ltrim($dua_data_faq['short_name']);
							$dua_faq_link2 = $dua_data_faq['link'];
							$dua_faq_link=(ltrim($dua_faq_link2));
							$dua_faq_link=strtolower($dua_faq_link);				
					?>	
					<section>
						<h6 class="white-bg bnone borb1 fwnormal eee-col fs16 p10 pl20">					
							<span class="black-col"><?php echo $dua_faq_judul;?><i class="fright bukahide ml10 fs14 pt10 fa"></i> </span>
						</h6>
						<div class="fs16 pt10">
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
							<a class="pb10 pl20 pr10 dflex"  href="<?php echo $dua_faq_link3;?>">
								<div class="w100 fs14 overtext"><?php echo $dua_faq_judul3;?></div>
							</a>						
							<div class="pt5 mb5 pr10 white-bg eee-col borb1"></div>
						<?php } ?>
						</div>
					</section>
					<?php } ?>
				</amp-accordion>	
			</div>	  

		</div>
	</amp-selector>	
	<button id="scrollToTopButton" on="tap:top.scrollTo(duration=200)" class="posfix tc vam aic w50px h51 z2 fs14 bs6 primary-bg right20 bottom70 white-col"><i class="fa fa-chevron-up"></i></button>
	<amp-animation id="showAnim" layout="nodisplay">
		<script type="application/json">
			{
			  "duration": "200ms",
			  "fill": "both",
			  "iterations": "1",
			  "direction": "alternate",
			  "animations": [{
				"selector": "#scrollToTopButton",
				"keyframes": [{
				  "opacity": "1",
				  "visibility": "visible"
				}]
			  }]
			}
		</script>
	</amp-animation>
	<amp-animation id="hideAnim" layout="nodisplay">
		<script type="application/json">
			{
			  "duration": "200ms",
			  "fill": "both",
			  "iterations": "1",
			  "direction": "alternate",
			  "animations": [{
				"selector": "#scrollToTopButton",
				"keyframes": [{
				  "opacity": "0",
				  "visibility": "hidden"
				}]
			  }]
			}
		</script>
	</amp-animation>
	<div class="eee-bg dinblock w100 mb50">
				<div class="white-bg w100 pt20 mt10 tc pb10">
					<a aria-label="Facebook"  href="<?php echo $d_facebook;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-facebook"></a>
					<a aria-label="Twitter" href="<?php echo $d_twitter;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-twitter"></a>
					<a aria-label="Google" href="<?php echo $d_googleplus;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-google-plus"></a>
					<a aria-label="Youtube" href="<?php echo $d_youtube;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-youtube"></a>
				</div>
				<div class="white-bg w100 pb20 tc">
					<small> Copyright © <?php echo date('Y'); ?> ( <a aria-label="Copyright"  href="<?php echo $c_url;?>" target="_blank"><?php echo $site_name;?></a> ).</small>
				</div>	
	</div>
	<div class="posfix z3 fleft bottom0 white-bg w100 z3 primary-col bort3 bs6 footer-shortcut--container">
		<a aria-label="Home" href="<?php echo $c_url;?>" class="w20 pt10 fleft tc icon-content  ">
			<div class="icon-content--img">
				<amp-img class="w30px mb5 tc mauto" width="20" height="20" alt="home" title="home" src="<?php echo $c_cdn; ?>/new/images/amp/foo/home.svg" layout="responsive"></amp-img>
				<p class="fs10 tc black-col m0">Home</p>
			</div>
		</a>
		<a aria-label="Telephone"  on="tap:teleponkami" role="button" class="icon-content pt10 w20 fleft tc active ">
			<div class="icon-content--img">
				<amp-img class="w30px mb5 tc mauto" width="20" height="20" alt="telp" title="telp" src="<?php echo $c_cdn; ?>/new/images/amp/foo/telp.svg" layout="responsive"></amp-img>
				<p class="fs10 tc black-col m0">Telepon</p>
			</div>
		</a>
		<a aria-label="SMS"  on="tap:smskami" role="button" class="w20 fleft tc pt10 icon-content">
			<div class="icon-content--img">
				<amp-img class="w30px mb5 tc mauto" width="20" height="20" alt="sms" title="sms" src="<?php echo $c_cdn; ?>/new/images/amp/foo/sms.svg" layout="responsive"></amp-img>
				<p class="fs10 tc black-col m0">SMS</p>
			</div>
		</a>
		<a aria-label="WA"  on="tap:wakami" role="button" class="icon-content pt10 w20 fleft tc   ">
			<div class="icon-content--img">
				<amp-img class="w30px mb5 tc mauto" width="20" height="20" alt="wa" title="wa" src="<?php echo $c_cdn; ?>/new/images/amp/foo/wa.svg" layout="responsive"></amp-img>
				<p class="fs10 tc black-col m0">Whatsapp</p>
			</div>
		</a>
		<a aria-label="Akunku"  href="<?php echo $c_url;?>/masuk" role="button" class="icon-content pt10 w20 fleft tc  "><div class="icon-content--img ">
			<amp-img class="w30px tc mauto mb5" width="20" height="20" alt="map" title="map" src="<?php echo $c_cdn; ?>/new/images/amp/foo/user.png" layout="responsive"></amp-img>
			<p class="fs10 tc black-col m0">Akun</p></div>
		</a>		
	</div>
</div>

	<amp-lightbox scrollable  id="pencarian" class="eee-bg" layout="nodisplay">
		<header>
			<a class="fleft white-col lh52 fs16 w10 tc" on="tap:pencarian.close"><i class="fa fa-arrow-left"></i></a>
			<div class="h38 w80 mt10 dblock fleft overhide">
				<div class="br4 bor1 eee-bg">
					<div class="overhide">
						<button type="submit" class="search fleft fa fa-search"></button>
						<input type="text" class="no-bg bnone fs14 dinblock w100 fleft pt5 pl28" name="keyword" placeholder="Cari di <?php echo $site_name;?>" value="" title="Search for:" 
			on="change:AMP.setState({
			  productspencarian: {
			  listSrc: '<?php echo $c_url;?>/ajaxamp-ampcari?skey='+ event.value +'&amp;parameter=All',
			  searchProduct: event.value
			}});" value=""/>
						<input type="hidden" name="amp" value="1" />
					</div>
				</div>
			</div>		
		</header>
		<div class="eee-bg hfull pt60 p10">
				
		<div class="white-bg mb10 pt10 pl10 pr10">
			<div class="m0 black-col mb10 fs14">HASIL PENCARIAN : </div>	
			<amp-list width="300" height="300" layout="responsive" src="<?php echo $c_url;?>/ajaxamp-ampcari?parameter=all-cat" [src]="productspencarian.listSrc" class="grid">
			<template type="amp-mustache">
				<a class="pb10 dflex"  aria-label="Hasil Pencarian"  href="{{url}}">
					<div class="w10 mr10 fleft">
						<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
					</div>
					<div class="width90 fs14 fleft">{{nama}}</div>
				</a>	
			</template>
			</amp-list>
		</div>	
		
		<div class="white-bg mb10 pt10 pl10 pr10">
			<div class="m0 black-col mb10 fs14">SEDANG TRENDING : </div>
			<a class="pb10 dflex"  aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy" title="Daftar Harga Mesin Fotocopy">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="Harga Mesin Fotocopy" title="Harga Mesin Fotocopy"  src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Daftar Harga Mesin Fotocopy</div>
			</a>
			<a class="pb10 dflex"  aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/harga-mesin-fotocopy" title="Harga Mesin Fotocopy">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Harga Mesin Fotocopy</div>
			</a>		
			<a class="pb10 dflex" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi" title="Mesin Fotocopy Bekas">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Harga Mesin Fotocopy Bekas</div>
			</a>	
			<a class="pb10 dflex" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/mesin-fotocopy-warna" title="Mesin Fotocopy Warna">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Harga Mesin Fotocopy Warna</div>
			</a>			
			<a class="pb10 dflex" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy" title="Paket Usaha Fotocopy">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Paket Usaha Fotocopy Murah</div>
			</a>	
			<a class="pb10 dflex" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/canon-ir-2004-n-dadf" title="Mesin Fotocopy Terbaik Untuk Usaha Fotocopy Pemula">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Mesin Fotocopy Untuk Usaha Pemula</div>
			</a>	
			<a class="pb10 dflex" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/fujixerox-docucentre-iv-c3370" title="Mesin Fotocopy Warna Terbaik 2019">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Mesin Fotocopy Warna Terbaik 2019</div>
			</a>	
			<a class="pb10 dflex" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-surabaya" title="Kantor Cabang Vanectro di Kota Surabaya">
				<div class="w10 mr10 fleft">
					<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
				</div>
				<div class="width90 fs14 fleft">Kantor Cabang Vanectro di Kota Surabaya</div>
			</a>			
		</div>	
		
		</div>
	</amp-lightbox>		
    <amp-sidebar class='white-bg pb30 black-col' id='mainSideBar' layout='nodisplay'>
        <figure class="primary-bg p10 posrel m0">
            <figcaption>			
				<?php if (empty($_SESSION['cust'])) { ?>
				<h5 class="m0 lh15"><a class="white-col" aria-label="Login Akun"  href="<?php echo $c_url;?>/masuk"><i class="fa fa-user-circle"></i> Masuk - </a>  <a class="light-color" aria-label="Daftar Akun"  href="<?php echo $c_url;?>/daftar">Gabung Gratis </a></h5>
				<?php } else { ?><h5 class="m0 lh15"><a class="white-col" aria-label="Dashboard"  href="<?php echo $c_url;?>/dashboard"><i class="fa fa-user-circle"></i> <?php echo $selamat ?> - <?php echo (strtoupper($_SESSION['cust'])); ?></a></h5>
				<?php } ?>
            </figcaption>
		</figure>
		<div class="vh2-pn1 vh2"></div>	
        <nav id="menu" class="mt15" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <a aria-label="Trending Pencarian" href="<?php echo $c_url;?>" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20"><i class="posabs left20 fa fa-home"></i>Home</a>
			<?php if (!empty($_SESSION['cust'])) { ?>
            <amp-accordion>
                <section>
                    <h6  class="bnone p0 black-col fw300 white-bg"><span class="posrel black-col dblock pt10 pb10 pl50 pr 20"><i class="posabs left20 fa fa-user-circle"></i>Akunku</span></h6>
                    <div>
						<a href="<?php echo $c_url;?>/dashboard" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Dashboard</a>
                        <a href="<?php echo $c_url;?>/akun-saya" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Edit Profile</a>
                        <a href="<?php echo $c_url;?>/riwayat-pesanan" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Riwayat Pemesanan</a>
						<a href="<?php echo $c_url;?>/permintaan-barang" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Nego Harga</a>	
						<a href="<?php echo $c_url;?>/mesin-fotocopy-incaran" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Wish List</a>
						<a href="<?php echo $c_url;?>/panduan-pelanggan" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Panduan Pelanggan</a>
                    </div>
                </section>
            </amp-accordion>			
			<?php } ?>			
            <amp-accordion>
                <section>
                    <h6 class="bnone p0 black-col fw300 white-bg"><span class="posrel black-col dblock pt10 pb10 pl50 pr 20"><i class="posabs left20 fa fa-th"></i>Daftar Produk</span></h6>
                    <div>
                        <a href="<?php echo $c_url;?>/harga-mesin-fotocopy" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Daftar Harga Mesin Fotocopy</a>
                        <a href="<?php echo $c_url;?>/jual-mesin-fotocopy" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20"> Jual Mesin Fotocopy <?php if(isset($query['status'])) { if($query && $query['status'] == 'success') {if($query['country']=="Indonesia"){ echo $query['city']; }  else { echo $query['country']; }} } else { echo "Jakarta"; } ?></a>
						<a href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Promo Paket Usaha Fotocopy</a>
						<a href="<?php echo $c_url;?>/mesin-fotocopy-warna" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Mesin Fotocopy Warna</a>
                        <a href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Mesin Fotocopy Rekondisi</a>
						<a href="<?php echo $c_url;?>/mesin-fotocopy-canon" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Mesin Fotocopy Canon</a>
						<a href="<?php echo $c_url;?>/mesin-fotocopy-fujixerox" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Mesin Fotocopy Fuji Xerox</a>
						<a href="<?php echo $c_url;?>/sparepart-fotocopy" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Sparepart Mesin Fotocopy</a>
						<a href="<?php echo $c_url;?>/sewa-mesin-fotocopy" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Sewa Mesin Fotocopy</a>							
                    </div>
                </section>
            </amp-accordion>		
            <amp-accordion>
                <section>
                    <h6  class="bnone p0 black-col fw300 white-bg"><span class="posrel black-col dblock pt10 pb10 pl50 pr 20"><i class="posabs left20 fa fa-question-circle"></i>Bantuan Pelanggan</span></h6>
                    <div>
						<a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Download Daftar Harga</a>
                        <a href="<?php echo $c_url;?>/penawaran" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Nego Harga</a>
						<a href="<?php echo $c_url;?>/order" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Cara Pemesanan</a>
                        <a href="<?php echo $c_url;?>/pembayaran" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Cara Pembayaran</a>
						<a href="<?php echo $c_url;?>/konfirmasi-pembayaran" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Konfirmasi Pembayaran</a>	
						<a href="<?php echo $c_url;?>/pengiriman" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Cek Tarif Ongkir</a>
						<a href="<?php echo $c_url;?>/detail-pesanan" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Cek Status Pesanan</a>			
						<a href="<?php echo $c_url;?>/panduan-pelanggan" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Panduan Pelanggan</a>
                    </div>
                </section>
            </amp-accordion>
            <amp-accordion>
                <section>
                    <h6  class="bnone p0 black-col fw300 white-bg"><span class="posrel black-col dblock pt10 pb10 pl50 pr 20"><i class="posabs left20 fa fa-address-card"></i>Tentang <?php echo $site_name;?></span></h6>
                    <div>
                        <a href="<?php echo $c_url;?>/tentang-kami" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Profile <?php echo $site_name;?></a>
						<a href="<?php echo $c_url;?>/keunggulan-kami" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Keunggulan <?php echo $site_name;?></a>
						<a href="<?php echo $c_url;?>/syarat-dan-ketentuan" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Syarat & Ketentuan</a>
						<a href="<?php echo $c_url;?>/kebijakan-privasi" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20">Kebijakan Privasi</a>
						<hr>
                    </div>
                </section>
            </amp-accordion>			
            <a href="<?php echo $c_url;?>/hubungi" class="posrel fs13rem black-col fw300 dblock pt10 pb10 pl50 pr 20"><i class="posabs left20 fa fa-map-marker"></i> Kontak & Alamat</a>
        </nav>

        <div class="ccc-bg height1"></div>

        <div class="pt10 pb10 pl20 pr20">
            <p class="alamat margin-top-0"><strong>Address:</strong> <b><?php echo $d_alamat2;?></b><br></p>
            <p class="alamat"><strong>Phone:</strong> <a href="tel:<?php echo $d_telp;?>"><?php echo $d_telp;?></a></p>
            <p class="alamat"><strong>Whatsapp:</strong> <a href="intent://send/62<?php echo $telp_marketing;?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><?php echo $telp_original;?> </a> </p>
            <p class="alamat margin-bottom-0"><strong>E-Mail:</strong> <a href="mailto:<?php echo $mail_marketing;?>"><?php echo $mail_marketing;?></a></p>		
        </div>

        <div class="pt10 pb10 pl20 pr20">
			<a href="<?php echo $d_facebook;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-facebook"></a>
			<a href="<?php echo $d_twitter;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-twitter"></a>
			<a href="<?php echo $d_googleplus;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-google-plus"></a>
			<a href="<?php echo $d_youtube;?>" class="tc fs16rem mr5 w30px h30px lh30 white-col br50 dinblock fab fa-youtube"></a>
        </div>
		<div class="p20 tl">
			<small> Copyright © <?php echo date('Y'); ?> ( <a href="<?php echo $c_url;?>" target="_blank"> <?php echo $site_name; ?></a> ).</small>
		</div>				
    </amp-sidebar>
	<amp-sidebar id="trolibelanja" layout="nodisplay" side="right" sizes="(min-width:500px) 360px, 80vw">
		<header>
			<a class="fleft white-col lh52 fs16 w10 tc" on="tap:trolibelanja.close"><i class="fa fa-arrow-left"></i></a>
			<div class="h38 w80 mt10 dblock fleft overhide">
				<h5 class="fs20  m0 white-col fwnormal"> Keranjang Belanja</h5>		
			</div>		
		</header>
		<div class="eee-bg hfull pt60 p10">
			<div class="white-bg mt10 mb10 tc">
				<div class="vh2-kkosong vh2"></div>	
				<div class="p10">
					<h4 class="h4 m0 vam fs15">Keranjang belanja masih Kosong.</h4>
					<div class="pt10 pb15">
						<p class="m0 vam black-col tc fs14">Ayo diborong Om dan Tante Mesin Fotocopy-nya, sebelum kehabisan.<br>Mumpung lagi Promo !!</p>
					</div>
				</div>
			</div>	
			<div class="white-bg pr10 pl10 pb10 mt10 mb10 tl">
				<h3 class="m0 pt10 pb10 fs16 fwnormal" >Bantuan Cara Pemesanan</h3>
				<a href="<?php echo $c_url;?>/order" title="cara pemesanan mesin fotocopy">
					<div class="vh2-corder vh2"></div>	
				</a>
				<div class="vam p10">
					<div class="fs16 p10"><a href="<?php echo $c_url;?>/order" title="Cara Pemesanan">Cara Pemesanan <i class="fright fs14 ml10 pt10 fa fa-chevron-right"></i></a></div>
					<div class="ccc-bg height1"></div>
					<div class="fs16 p10"><a href="<?php echo $c_url;?>/pembayaran" title="Cara Pembayaran">Cara Pembayaran <i class="fright ml10 fs14 pt10 fa fa-chevron-right"></i></a></div>
					<div class="ccc-bg height1"></div>
					<div class="fs16 p10"><a href="<?php echo $c_url;?>/konfirmasi-pembayaran" title="Konfirmasi Pembayaran">Konfirmasi Pembayaran <i class="fright fs14 pt10 ml10 fa fa-chevron-right"></i></a></div>
					<div class="ccc-bg height1"></div>				
				</div>
			</div>		
		</div>	
	</amp-sidebar>
	<amp-lightbox scrollable  id="infodetail_dealerresmi" class="eee-bg" layout="nodisplay">
		<div class="white-bg posstik z1  bs6 top0 ">
			<div class="white-bg pt10 w100" >
				<a class="fleft black-col fs16 w10 tc" on="tap:infodetail_dealerresmi.close"><i class="fa fa-arrow-left"></i></a>
				<h2 class="m0 pl5 ml10 mr10 mb10 vam dinblock black-col fs16"> Dealer Resmi Mesin Fotocopy</h2>
			</div>
		</div>		
		<div class="eee-bg hfull pt10 p10">
			<div class="white-bg mb10 pt10 pl10 pr10">
				<amp-video width="370" height="208" poster="<?php echo $c_cdn;?>/new/images/amp/foo/video.webp" layout="responsive" autoplay controls>
				  <div fallback>
					<p>Your browser doesn't support HTML5 video.</p>
				  </div>
				  <source type="video/mp4" src="<?php echo $c_cdn;?>/uploads/explainer.mp4">
				  <source type="video/webm" src="<?php echo $c_cdn;?>/uploads/explainer.webm">
				</amp-video>		
				<div class="mesh-col">
					<br>
					<div class="fs14 merah-col"><b>Dijamin Mesin Fotocopy 100% Original</b></div>
					<br>
					<div class="home__slogan__desc fs12">
						Iming iming mesin fotocopy harga murah. Tapi menyesal di belakang karena mesin fotocopynya bermasalah dan tidak ada Pertanggung Jawaban. 
						Pastikan mesin fotocopymu bergaransi resmi lebih dari 1 tahun di seluruh Indonesia. Jangan sampai salah pilih yang cuma bisa memberi janji !! 
						Mau menyesal karena sudah membuang banyak uang untuk Mesin Fotocopy yang Tidak Jelas ?? 
					</div>			
					<br><br>
					<div class="fs14 merah-col"><b>Garansi Purna Jual Memuaskan</b></div>
					<br>
					<div class="home__slogan__desc fs12">
						Beli mesin fotocopy setelah itu bingung dengan purna jualnya? Seller sebelumnya lepas tangan padahal harga mahal? 
						Di <?php echo $site_name;?> DIJAMIN After Sales Service memuaskan, Tersedia Ribuan Service Center se-Indonesia, 
						100% Uang Kembali jika Mesin Fotocopy Bermasalah. Pastikan Penjual yang Terpercaya dan Punya Kantor Cabang di Kotamu. 
						Gratiss Tukar dengan unit baru lainya. Ribuan pelanggan puas dengan pelayanan Kami.
					</div>
					<div class="space-2 mt20 pb20">
						<a href="<?php echo $c_url;?>/tentang-kami"  class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Lihat Profile <?php echo $site_name;?> <i class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
					</div>
				</div>
			</div>	
		</div>
	</amp-lightbox>	
	<amp-lightbox scrollable  id="kategori_lainya" class="eee-bg" layout="nodisplay">
		<div class="white-bg posstik z1  bs6 top0 ">
			<div class="white-bg pt10 w100" >
				<a class="fleft black-col fs16 w10 tc" on="tap:kategori_lainya.close"><i class="fa fa-arrow-left"></i></a>
				<h2 class="m0 pl5 ml10 mr10 mb10 vam dinblock black-col fs16">Semua Kategori Produk</h2>
			</div>
		</div>		
			
		<div class="eee-bg hfull pt10 mb50">
			<div class="white-bg w100 pb20 mb15 pl5" >
				<div class="mb5 ml5 pt5 pl5 vam dblock fs12"><b>Kategori Mesin Fotocopy Unggulan</b></div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/harga-mesin-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-harga"></div></div>		
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Daftar Harga</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/mesin-fotocopy-canon" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-canon"></div></div>								
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Canon Baru</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/mesin-fotocopy-warna" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-warna"></div></div>						
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Warna Baru</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-paket"></div></div>							
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Paket Usaha</span>
					</a>
				</div>		
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-rekondisi"></div></div>						
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Rekondisi</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/sewa-mesin-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-sewa"></div></div>
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Lihat Lainnya</span>
					</a>
				</div>					
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/service-mesin-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-service"></div></div>				
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Servis</span>
					</a>
				</div>
				<div class="w22 ml1 mr1 dinblock tc vam mt10 bs6 br8">
					<a href="<?php echo $c_url;?>/sparepart-fotocopy" class="w100 p0 nodecoration">
						<div class="pt10 pr10 pl10"><div class="vh1 vhico1 vh-sparepart"></div></div>			
						<span class="vam black-col m0 fs10 lh16 tc fwnormal">Sparepart</span>
					</a>
				</div>
			</div>
			<div class="white-bg w100 bs6 primary-col mt10">
				<a <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="w100  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Konsultasi Hubungi : <?php echo $posisi_marketing; ?></b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat Whatsapp </span>
					</div>
				</a>
			</div>					
			<div class="white-bg w100 pt10 bs6 pl10 mt15">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Kategori Produk Lainnya</b></span></div>
				<a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy" class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<div class="fs22 dinblock primary-col mb10">
							<b>Download Daftar Harga</b>
							<br><span class="black-col fs9">Update Harga Mesin Fotocopy Terbaru <?php echo $nama_bln[date('m')]." - ".date('Y'); ?></span>
						</div>
					</div>
					<div class="w22 aic vam dinblock ml20 overhide">
						<div class="vh1 vhico3 vh-katalog-sewa"></div>
					</div>							
				</a>
				<a href="<?php echo $c_url;?>/mesin-fotocopy-baru" class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<div class="fs22 dinblock primary-col mb10">
							<b>Jual Mesin Fotocopy Baru</b>
							<br><span class="black-col fs9">Mesin Fotocopy Baru 100% Original, Canon & Xerox.</span>
						</div>
					</div>
					<div class="w22 aic vam dinblock ml20 overhide">
						<div class="vh1 vhico3 vh-katalog-canon"></div>
					</div>							
				</a>			
				<a href="<?php echo $c_url;?>/mesin-fotocopy-fuji-xerox" class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<div class="fs22 dinblock primary-col mb10">
							<b>Jual Mesin Fotocopy Fuji Xerox</b>
							<br><span class="black-col fs9">Mesin Fotocopy Brand Fuji Xerox Baru.</span>
						</div>
					</div>
					<div class="w22 aic vam dinblock ml20 overhide">
						<div class="vh1 vhico3 vh-katalog-xerox"></div>
					</div>							
				</a>
			</div>			
		</div>			
	</amp-lightbox>	
	<amp-lightbox scrollable  id="kantor_cabang" class="eee-bg" layout="nodisplay">
		<header>
			<a class="fleft white-col lh52 fs16 w10 tc" on="tap:kantor_cabang.close"><i class="fa fa-arrow-left"></i></a>
			<div class="h38 w80 mt10 dblock fleft overhide">
				<div class="br4 bor1 eee-bg">
					<div class="overhide">
						<button type="submit" class="search fleft fa fa-search"></button>
						<input type="text" class="no-bg bnone fs14 dinblock w100 fleft pt5 pl28" name="keyword" placeholder="Masukan Nama Kota atau Daerah" value="" title="Search for:" 
			on="change:AMP.setState({
			  rekananteknisi: {
			  listSrc: '<?php echo $c_url;?>/ajaxamp-carikota?skey='+ event.value +'&amp;parameter=All',
			  searchProduct: event.value
			}});" value=""/>
						<input type="hidden" name="amp" value="1" />
					</div>
				</div>
			</div>		
		</header>
		<div class="eee-bg hfull pt60 p10">
				
		<div class="white-bg mb10 pt10 pl10 pr10">
			<div class="m0 black-col mb10 fs14">LOKASI REKANAN TEKNISI DAERAH : </div>	
			<amp-list width="300" height="300" layout="responsive" src="<?php echo $c_url;?>/ajaxamp-carikota?parameter=all-cat" [src]="rekananteknisi.listSrc" class="grid">
			<template type="amp-mustache">
				<a class="pb10 dflex"  href="{{url}}">
					<div class="w10 mr10 fleft">
						<amp-img width="12" height="12" alt="search" src="<?php echo $c_url; ?>/compressed/amp/cari.png" layout="responsive"></amp-img>
					</div>
					<div class="width90 fs14 fleft">{{name}}</div>
				</a>	
			</template>
			</amp-list>
		</div>	
		
		<div class="white-bg w100 pt10 mt15 pb20" >
				<div class="w100 mb5 ml10 white-bg pb5 pt5 vam dblock fs12">
					<b>Lokasi Kantor Cabang <?php echo $site_name; ?></b> 
				</div>
				<div class="pl5 pr5">	
					<amp-carousel class="slidecar" type="carousel"  layout="fixed-height" height=410>
						<div class="white-bg bs6 width90 mb10" >
							<amp-img class="h150 overhide" src="<?php echo $c_cdn_img.'/about/3-mini.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Jakarta</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Jual Mesin Fotocopy Murah, Gratiss Pengiriman, Instalasi, Konsultasi Usaha se-Jabodetabek. Garansi Resmi Mesin Fotocopy se-Umur Hidup. Garansi Sparepart 3 Tahun.
								</div>
								<a href="<?php echo $c_url;?>/jual-mesin-fotocopy" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
							</div>	
						</div>	
						<div class="white-bg bs6 width90 mb10" >
							<amp-img class="h150 overhide"  src="<?php echo $c_cdn.'/new/images/cabang/surabaya.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Surabaya</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Hallo arek suroboyo?? Awakmu arep golek mesin fotocopy Kanggo usaha opo gur arep dinggo neng Kantor?? Saiki vanectro nduwe kantor cabang neng Suroboyo loh.
								</div>	
								<a href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-surabaya" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>								
							</div>	
						</div>	
						<div class="white-bg bs6 width90 mb10" >
							<amp-img class="h150 overhide"  src="<?php echo $c_cdn.'/new/images/cabang/makasar.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Makasar</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Mengingat Banyaknya Permintaan dari Makasar, Sekarang <?php echo $site_name;?> sudah sampai di Maksar Loh. Jangan Lupa Berkunjung. Gratiss Ongkir + Instalasi. Cek Langsung Aja Om.
								</div>			
								<a href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-makasar" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>
							</div>	
						</div>	
						<div class="white-bg  bs6 width90 mb10" >
							<amp-img class="h150 overhide"  src="<?php echo $c_cdn.'/new/images/cabang/bima.jpg';?>" height="150" layout="fixed-height"></amp-img>
							<div class="white-bg pt15 pb5 pl20 pr20 black-col">
								<div class="fs14 merah-col"><b>Jual Mesin Fotocopy Pontianak</b></div>
								<div class="home__slogan__desc wsnormal fs12 h150 overhide">
									Sekarang udah nggak perlu cemas lagi buat pengguna mesin fotocopy daerah Pontianak dan sekitarnya, Karena <?php echo $site_name;?> sudah membuka Gallery Resmi Service Center disana.
								</div>	
								<a href="<?php echo $c_url;?>/jual-mesin-fotocopy-kota-pontianak" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Cek Lokasi Kantor Cabang Kami <i  class="ml15 ng-scope fa fa-chevron-right"></i> </b></a>	
							</div>	
						</div>						
						
					</amp-carousel>
				</div>
			</div>
	
	
		</div>
	</amp-lightbox>	
	<amp-lightbox scrollable  id="promotoday" class="white-bg" layout="nodisplay">
		<div class="white-bg posstik z1  bs6 top0 ">
			<div class="white-bg pt10 w100" >
				<a class="fleft black-col fs16 w10 tc" on="tap:promotoday.close"><i class="fa fa-arrow-left"></i></a>
				<h2 class="m0 pl5 ml10 mr10 mb10 vam dinblock black-col fs16">Promo Mesin Fotocopy </h2>
				<amp-animation id="hide-timeout-event" layout="nodisplay">
				<script type="application/json">
					{
						"duration": "1s",
						"fill": "both",
						"selector": "#ampdate, #sample",
						"keyframes": { "visibility": "hidden"}
					}
				</script>
				</amp-animation>				
				<amp-date-countdown class="dinblock fright pt5" id="ampdate" end-date="<?php echo date("Y-m-d");?>T24:00:00+07:00" on="timeout: hide-timeout-event.start" height="23" width="100" when-ended="stop" locale='en'>
				  <template type="amp-mustache">
					<div>
						<span class="merah-bg white-col aic tc jtc w24px br4 fs12 dinflex"><b>{{hh}}</b></span> : 
						<span class="merah-bg white-col aic tc jtc w24px br4 fs12 dinflex"><b>{{mm}}</b></span> : 
						<span class="merah-bg white-col aic tc jtc w24px br4 fs12 dinflex"><b>{{ss}}</b></span>
					</div>
				  </template>
				</amp-date-countdown>
			</div>
		</div>
		<div class="white-bg hfull pt10 p10">
			<div class="white-bg pt10 w100" >
						<?php 	
							$data_produk_rekomendasi = ("select *  from produk where rekomendasi !='' and harga_baru >= 10000000 ORDER BY harga_baru ASC limit 6"); 
							$urutan=0;
							$result_produk_rekomendasi = $db->query($data_produk_rekomendasi);
							while ($a_data = $result_produk_rekomendasi->fetch_array(MYSQLI_BOTH)) {		
								$a_link = $a_data['link'];
								$a_id = $a_data['id_produk'];
								$a_nama_produk = strtoupper($a_data['nama_produk']);
								$a_category = $a_data['category'];
								$urutan++;
								$a_brand = $a_data['brand'];
								$a_special = $a_data['special'];
								$a_image_tiga = $a_data['image_satu'];
								$a_hot = $a_data['hot'];
								$a_deskripsi_a = $a_data['deskripsi_a'];
								$a_harga_lama = $a_data['harga_lama'];
								$a_harga_baru = $a_data['harga_baru'];
								$a_rekomendasi = $a_data['rekomendasi'];
								$a_brands=strtolower(str_replace(" ","",$a_brand));
								
								if($a_harga_lama == 0){$a_harga_lama=$a_harga_baru*2;}
								if($a_harga_baru !=0){$a=$a_harga_lama;$b=($a_harga_baru);$c=(($a-$b)/($a/100));}
								
								$stok2=int3($a_nama_produk); 
								$stok2 = substr($stok2,3); 
								$stok=int3((22-date("d"))+$stok2); 
								
								if($stok>=0){ $stok=$stok." Unit"; } 
								else {$stok="1 Unit";}
								
								$a_image_tiga_paket = str_replace($c_url."/", '', $a_image_tiga);
								if (file_exists($a_image_tiga_paket)){ 
									$image34 = str_replace('.png', '', $a_image_tiga_paket);
									$image34 = str_replace('.jpg', '', $a_image_tiga_paket); 	
									$image34 = str_replace('.jpeg', '', $a_image_tiga_paket); 									
									$image36 = $c_url."/".$a_image_tiga_paket.".webp";
									if (file_exists($image36)){ $image34=$image36;}
									else {
									$result = $ImgCompressor->run($a_image_tiga_paket, 'jpg', 5);  
									$image35 = $result['gb'];$images = $result['mini'];
									$results2 = $ImgCompressor->mini($images,$image35, 150, 150,'mini_');  
									$image34 = str_replace('.png', '', 'mini_'.$image35);
									$image34 = str_replace('.jpg', '', $image34); 								
									$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
									$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
									}
								}							
						?>										
							<div class="w48 dinblock bor1 eee-col mt1 mb1 ml1 br4 bs6 overhide capronego blog-carousel-item" >
								<amp-img class="w100" width="110" height="110" src="<?php echo $a_image_tiga_paket; ?>" layout="responsive" alt="<?php echo $a_nama_produk; ?>" ></amp-img>																											
								<div class="infopro fs10 pb5 pl10">
								<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="capronego">
									<h5 class="tl wsnormal w100 fs10 m0 h18px overtext"><b><?php echo $a_nama_produk; ?></b></h5>
									<div class="merah-col fs14"><b>Rp <?php echo format_rupiah($a_harga_baru); ?></b></div>	
									<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'"); if($total_review>2){?>
									<div class="pt5 rating">
										<?php for($i=0;$i<5;$i++) { ?>
										<i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
										<span class="tc  primary-col"> ( <?php echo $total_review; ?> Ulasan ) </span>
									</div>
									<?php } else { ?> 
									<div class="pt5 rating">
										<?php for($i=0;$i<5;$i++) { ?><i  class="glyphicon ng-scope fa fa-star-o"></i><?php } ?>
										<span class="tc  primary-col"> ( 0 Ulasan ) </span>
									</div>							
									<?php } ?>
								</a>	
								</div>
							</div>					
						<?php } ?>
				<div class="fnone"></div>
				<div class="white-bg pt10 pb10 pl20 pr20 black-col">
					<a href="<?php echo $c_url;?>/harga-mesin-fotocopy" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Lihat Semua Promo Mesin Fotocopy </b></a>
					<a href="<?php echo $c_url;?>/harga-mesin-fotocopy" class="tc p8 bor3 br8 dblock mt10 mb10 fs12 mesh-col"><b>Download Daftar Harga Mesin Fotocopy </b></a>
				</div>							
			</div>								
			<div class="fnone"></div>
		</div>
	</amp-lightbox>
 	<amp-lightbox scrollable id="teleponkami" class="eee-bg" layout="nodisplay">
		<div class="white-bg posstik z1  bs6 top0 ">
			<div class="white-bg pt10 w100" >
				<a class="fleft black-col fs16 w10 tc" on="tap:teleponkami.close"><i class="fa fa-arrow-left"></i></a>
				<h2 class="m0 pl5 ml10 mr10 mb10 vam dinblock black-col fs16">Nomor Telephone <?php echo $site_name;?></h2>
			</div>
		</div>					
		<div class="eee-bg hfull pt10">
			<div class="white-bg w100 pt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></span></div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<span class="fs22 dinblock black-col mb10 mr10">Bantuan apa yang kamu butuhkan ?? berikut adalah nomor telephone aktif petugas kami.</span>
					</div>						
				</div>
			</div>		
			<div class="white-bg w100 bs6 primary-col mt10">
				<a href="tel:<?php echo $hp; ?>" class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Pemesanan Mesin Fotocopy</b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-phone mr5 "></i>Telepon Divisi Penjualan</span>
					</div>
				</a>
				<a href="tel:<?php echo $hptelp_tekhnisi; ?>" class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/wawan2.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Divisi Sewa Mesin Fotocopy</b><br>
						<?php echo $marketing_tekhnisi." - ".$telp_tekhnisi_ori; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-phone mr5 "></i>Telephone Divisi Sewa </span>
					</div>
				</a>	
				<a href="tel:<?php echo $hptelp_akunting; ?>" class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/lia.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Pemesanan Sparepart</b><br>
						Ibu <?php echo $marketing_akunting." - ".$telp_akunting_ori; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-phone mr5 "></i>Telephone Divisi Sparepart </span>
					</div>
				</a>		
				<a href="tel:<?php echo $hptelp_tekhnisi2; ?>" class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/fauzan.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Informasi Service Mesin Fotocopy</b><br>
						<?php echo $marketing_tekhnisi2." - ".$telp_tekhnisi_ori2; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-phone mr5 "></i>Telephone Divisi Teknis </span>
					</div>
				</a>				
			</div>					
		</div>			
	</amp-lightbox>	
	<amp-lightbox scrollable id="smskami" class="eee-bg" layout="nodisplay">
		<div class="white-bg posstik z1  bs6 top0 ">
			<div class="white-bg pt10 w100" >
				<a class="fleft black-col fs16 w10 tc" on="tap:smskami.close"><i class="fa fa-arrow-left"></i></a>
				<h2 class="m0 pl5 ml10 mr10 mb10 vam dinblock black-col fs16">SMS Team <?php echo $site_name;?></h2>
			</div>
		</div>					
		<div class="eee-bg hfull pt10">
			<div class="white-bg w100 pt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></span></div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<span class="fs22 dinblock black-col mb10 mr10">Terimakasih sudah menghubungi kami, bantuan apa yang kamu butuhkan ??  </span>
					</div>						   
				</div>
			</div>
			<div class="white-bg w100 bs6 primary-col mt10">
				<a href="sms:<?php echo $hp; ?>?body=Selamat Siang Pak<?php echo $marketing_mesin;?> : Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya tentang Mesin Fotocopynya. Tolong Segera di respond." class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>SMS <?php echo $posisi_marketing; ?> Mesin Fotocopy</b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-envelope mr5 "></i>SMS Divisi Penjualan</span>
					</div>
				</a>
				<a href="sms:<?php echo $hptelp_tekhnisi; ?>?body=Selamat Siang Pak, Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya, Tolong Segera di respond." class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/wawan2.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>SMS  Divisi Sewa Mesin Fotocopy</b><br>
						<?php echo $marketing_tekhnisi." - ".$telp_tekhnisi_ori; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-envelope mr5 "></i>SMS Divisi Sewa </span>
					</div>
				</a>	
				<a href="sms:<?php echo $hptelp_akunting; ?>?body=Selamat Siang Bu, Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya, Tolong Segera di respond." class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/lia.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>SMS  Divisi Penjualan Sparepart</b><br>
						Ibu <?php echo $marketing_akunting." - ".$telp_akunting_ori; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-envelope mr5 "></i>SMS Divisi Sparepart </span>
					</div>
				</a>		
				<a href="sms:<?php echo $hptelp_tekhnisi2; ?>?body=Selamat Siang Pak, Saya barusan melihat di <?php echo $url_sekarang; ?> .Ingin bertanya, Tolong Segera di respond." class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/fauzan.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>SMS Teknisi <?php echo $site_name;?></b><br>
						<?php echo $marketing_tekhnisi2." - ".$telp_tekhnisi_ori2; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fa fa-envelope mr5 "></i>SMS Divisi Teknis </span>
					</div>
				</a>				
			</div>					
		</div>			
	</amp-lightbox>	
	<amp-lightbox scrollable id="wakami" class="eee-bg" layout="nodisplay">
		<div class="white-bg posstik z1  bs6 top0 ">
			<div class="white-bg pt10 w100" >
				<a class="fleft black-col fs16 w10 tc" on="tap:wakami.close"><i class="fa fa-arrow-left"></i></a>
				<h2 class="m0 pl5 ml10 mr10 mb10 vam dinblock black-col fs16">Chat Whatsapp Team <?php echo $site_name;?></h2>
			</div>
		</div>					
		<div class="eee-bg hfull pt10">
			<div class="white-bg w100 pt10 bs6 pl20">
				<div class="mb5 pt5 pb10 eee-col dinblock width95 borb1 vam dblock fs12"><span class="black-col"><b>Ingin menghubungi kami, melalui Whatsapp ??</b></span></div>
				<div class="width95 eee-col borb1 dinblock nodecoration">		
					<div class="dinblock aic vam black-col m0 lh16 tl fwnormal">
						<span class="fs22 dinblock black-col mb10 mr10">Ingin melakukan chat dengan petugas kami ?? Berikut adalah nomor whatsapp  petugas kami.</span>
					</div>						
				</div>
			</div>
			<div class="white-bg w100 bs6 primary-col mt10">
				<a <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/mario1.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Chat WA Penjualan Mesin Fotocopy </b><br>
						<?php echo $marketing_mesin." - ".$telp_original; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat WA Divisi Penjualan</span>
					</div>
				</a>
				<a <?php echo "href='whatsapp://send?phone=".$hptelp_tekhnisi."&text= Selamat Pagi. Pak ".$marketing_tekhnisi.", Saya mau bertanya, dari web : ".$url_sekarang."'";?> class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/wawan2.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Chat WA Divisi Sewa Mesin Fotocopy</b><br>
						<?php echo $marketing_tekhnisi." - ".$telp_tekhnisi_ori; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat WA Divisi Sewa </span>
					</div>
				</a>	
				<a <?php echo "href='whatsapp://send?phone=".$hptelp_akunting."&text= Selamat Pagi. Ibu ".$marketing_akunting.", Saya mau bertanya tentang Sparepart Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/lia.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Chat WA Divisi Penjualan Sparepart</b><br>
						Ibu <?php echo $marketing_akunting." - ".$telp_akunting_ori; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat WA Divisi Sparepart </span>
					</div>
				</a>		
				<a <?php echo "href='whatsapp://send?phone=".$hptelp_tekhnisi2."&text= Selamat Pagi. Mas ".$marketing_tekhnisi2.", Saya mau bertanya tentang Sparepart Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="width95 borb1 eee-col dinblock ml10 pb10  nodecoration">
					<div class="w22 p10 aic vam dinblock overhide">
						<amp-img width="64" height="64" src="<?php echo $c_cdn; ?>/new/images/hubungi/fauzan.webp"  alt="Mesin Fotocopy" title="Mesin Fotocopy"  class="bor1 eee-col mt10 br50" layout="responsive"></amp-img>
					</div>				
					<div class="dinblock aic vam black-col w70 m0 lh16 tl fwnormal">
						<span class="fs12 dinblock mb10"><b>Chat WA Teknisi <?php echo $site_name;?></b><br>
						<?php echo $marketing_tekhnisi2." - ".$telp_tekhnisi_ori2; ?></span><br>
						<span class="b4 w100 pt8 pb8 pl10 pr10 fs12 br4 button button-small  primary-bg white-col"><i class="fab fa-whatsapp mr5 "></i>Chat WA Divisi Teknis </span>
					</div>
				</a>				
			</div>					
		</div>			
	</amp-lightbox>	
<script async type="text/javascript">
	(function() {
		var css = document.createElement('link');
		css.href = '<?php echo $c_cdn;?>/fonts/fa/css/ampico.css';
		css.rel = 'stylesheet';
		css.type = 'text/css';
		document.getElementsByTagName('head')[0].appendChild(css);
	})();
</script>	
<amp-install-serviceworker src="<?php echo $c_url;?>/sw.js" data-iframe-src="<?php echo $c_url;?>/sw.html" layout="nodisplay"></amp-install-serviceworker>
</body>
</html>	
<?php

$tambah = fopen($tempatfile, 'w');
fwrite($tambah,sanitize_output(minify_html(ob_get_contents())));
fclose($tambah);
ob_end_flush();?>	