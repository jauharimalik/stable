<?PHP
error_reporting(E_ALL);
$n="\r\n %0A";
$m_url="$c_url";
$site_name="Vanectro.Com";
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
header("Content-Type: text/html");

?>
<!doctype html>
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
		<link rel="manifest" href="manifest.json">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="purple">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
		
        <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
        <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
		<script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
		<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
		<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
		<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
		<script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
		<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
		<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
		<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
		<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>		
        <script async src="https://cdn.ampproject.org/v0.js"></script>
		<script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
		<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>


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
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<?php 
	if(isset($_REQUEST["p"])){ 
		switch ($_GET["p"]) {		
			case "": require_once PLUG.DS."mobile/style2.php"; break;
			case "produk": require_once PLUG.DS."mobile/style-produk2.php"; break;
			case "sewaproduk": require_once PLUG.DS."mobile/style-produk2.php"; break;			
			case "ulasan": require_once PLUG.DS."mobile/style-produk2.php"; break;
			case "pelanggandetail": require_once PLUG.DS."mobile/style-produk2.php"; break;
			default: require_once PLUG.DS."mobile/style2.php"; break;
		}
	} else {require_once PLUG.DS."mobile/style2.php";}
?>

</head>
<body dir="ltr">
      <amp-font
      layout="nodisplay"
      font-family="Ubuntu"
      timeout="3000"
      on-error-remove-class="my-font-loading"
      on-error-add-class="my-font-missing"></amp-font>

	<header itemscope="" itemtype="https://schema.org/WPHeader">
        <button class="toast pull-left" on="tap:mainSideBar.toggle"><span></span></button>
		<a id="logo" href="<?php echo $c_url;?>"><div id="masterLogo"></div></a>
		<a class="pull-right cart " href="<?php echo $c_url;?>/keranjang-belanja"><i class="fa fa-shopping-cart"></i>
			<span class="cart-quantity"><?php if (!empty($_SESSION['cart'])) { if (is_array($_SESSION['cart'])) {$max = count($_SESSION['cart']);echo $max;}} else {echo"0";} ?></span>
		</a>		
	</header>
	<div class="mobile-header-block__search search2 pt51" id="gdn-search-product">
		<form class="amp-search" role="search" method="get" target="_top" action="<?php echo $c_url;?>/pencarian">
			<input type="text" name="keyword" placeholder="Cari di <?php echo $site_name;?>" value="" title="Search for:" />
			<button type="submit" class="search fa fa-search"></button>
			<input type="hidden" name="amp" value="1" />
		</form>
	</div>
<amp-sidebar id="sidebar-search" layout="nodisplay" side="right" sizes="(min-width:500px) 360px, 80vw">

</amp-sidebar>

<?php $h=date("H"); if($h<=10){$selamat="Pagi";} elseif($h<=16){$selamat="Siang";} elseif($h<=19){$selamat="Sore";}else{$selamat="Malam";}?>
<?php 

if(isset($query['city'])){$query['city']=$query['city'];}
else {$query=array('city' => 'Jakarta');}

$urutan=0;


$telp_marketing=str_replace(" ","",$telp_marketing); $telp_marketing=ltrim($telp_marketing,"0"); $hp1="+62".$telp_marketing;
$telponya=$hp1;	
$telp_marketing=str_replace(" ","",$telp_marketing); $telp_marketing=ltrim($telp_marketing,"0"); $hp1="+62".$telp_marketing;
$telponya=$hp1;	
?>
<div id="top"></div>
<div id="main">
