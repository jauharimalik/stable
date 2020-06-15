<?php 
if(isset($page_title)){$page_title=$page_title;} else {$page_title=$page_title2;}
if(isset($site_description)){ $site_description=$site_description;} else {$site_description=$site_description2;}
if(isset($site_image)){ $site_image=$site_image;} else {$site_image="$c_cdn/mobile/banner/ibuki.jpg";}	
if(isset($meta_type)){ $meta_type=$meta_type;} else {$meta_type="article";}

?>
<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//cdn.ampproject.org' />
<link rel='dns-prefetch' href='//maps.gstatic.com' />
<link rel='dns-prefetch' href='//maps.gstatic.com' />
<link rel='dns-prefetch' href='//fonts.gstatic.com' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//apis.google.com' />
<link rel='dns-prefetch' href='//google-analytics.com' />
<link rel='dns-prefetch' href='//www.google-analytics.com' />
<link rel='dns-prefetch' href='//ssl.google-analytics.com' />
<link rel='dns-prefetch' href='//youtube.com' />
<link rel='dns-prefetch' href='//facebook.com' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//connect.facebook.net' />
<link rel='dns-prefetch' href='//platform.twitter.com' />
<link rel='dns-prefetch' href='//syndication.twitter.com' />
<link rel='dns-prefetch' href='//platform.instagram.com' />

	<meta name="google-site-verification" content="9V_Q2iTkRs3_h2-kFe3Pl-tAyjzk2o2jScAgFJFKY7Q" />
	<meta name="description" content="<?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description Halaman $pg"; } else { echo"$site_description";}?>">
	<meta name="author" content="<?php echo "$site_name";?>">
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=5, width=device-width">
	
	<meta property="place:location:latitude" content="13.062616" /> <!-- Silahkan disesuaikan -->
	<meta property="place:location:longitude" content="80.229508" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:street_address" content="<?php echo $d_alamat2." - ".$d_alamat3 ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:locality" content="<?php echo $d_kota ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:postal_code" content="<?php echo $d_pos ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:country_name" content="<?php echo $d_negara ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:email" content="<?php echo $mail_marketing ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:phone_number" content="+21 82734557" /> <!-- Silahkan disesuaikan -->
	<meta property="business:contact_data:website" content="<?php echo $c_url?>" />


	<meta property="profile:first_name" content="<?php echo $fb_firstname ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="profile:last_name" content="<?php echo $fb_lastname ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="profile:username" content="<?php echo $fb_username ?>" /> <!-- Silahkan disesuaikan -->
	<meta property="og:title" content="<?php echo $page_title." - Jual Mesin Fotocopy"; ?>" />
	<meta property="og:description" content="<?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>" />
	<meta property="og:image" content="<?php echo $site_image ?>" />
	<meta property="og:url" content="<?php echo $app->CURRENT_URL(); ?>" />
	<meta property="og:type" content="<?php echo $meta_type; ?>" /> 
	<meta property="og:site_name" content="<?php echo $site_name; ?>" />
	<meta property="fb:page_id" content="<?php echo $fb_pageid; ?>" />
	<meta property="fb:app_id" content="<?php echo $fb_appid; ?>" />
	<meta property="fb:id" content="<?php echo $fb_id ;?>" />

	<meta name="twitter:card" content="summary" />  
	<meta name="twitter:site" content="<?php echo $site_name ?>" />
	<meta name="twitter:title" content="<?php echo $page_title." - Jual Mesin Fotocopy"; ?>" />
	<meta name="twitter:description" content="<?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>" />
	<meta name="twitter:creator" content="<?php echo $d_twitter_acc ?>" /> <!-- Silahkan disesuaikan -->
	<meta name="twitter:image:src" content="<?php echo $site_image ?>" />
	<meta name="twitter:domain" content="<?php echo $app->CURRENT_URL(); ?>" />
	<meta name="twitter:url" content="<?php echo $app->CURRENT_URL(); ?>" />
	<meta name="twitter:image" content="<?php echo $site_image ?>" />
	
	<meta content='Global' name='Distribution'/>
	<meta content='General' name='Rating'/>
	
	<!--meta info-->
	<meta name="msapplication-TileColor" content="#A800BA">
	<meta content='Id' name='geo.placename'/>
	<meta content='<?php echo $site_name; ?>' name='copyright'/>
	
	<meta content='Indonesia' name='geo.country'/>
	<meta content='en_US' property='og:locale:alternate'/>
	<meta content='en_GB' property='og:locale:alternate'/>
	<meta content='id_ID' property='og:locale:locale'/>
	<meta content='id' name='language'/>
	
	<meta name="googlebot" content="index">
	<meta name="robots" content="index, follow"/>


<?php 

$url_sekarang	=$url_sekarang2;		
$urlnyaamp		= "/".$urlnyaamp2;	

if(isset($total_artikel)){ 
$hal=ceil($total_artikel/10);
$pg=1;
$dourl=$paging;
if(isset($_GET['pg'])){ $pg=$_GET['pg']; }
$pg2=$pg+1; 
$pg3=$pg-1;
if(($pg>1)&&($pg<$hal)&&($pg>2)){?>
	<link rel="next" href="<?php echo $paging."/".$pg2; ?>"/>
	<link rel="prev" href="<?php echo $paging."/".$pg3; ?>"/>
<?php } elseif (($pg>1)&&($pg<$hal)&&($pg==2)){;?>	
	<link rel="next" href="<?php echo $paging."/".$pg2; ?>"/>
	<link rel="prev" href="<?php echo $paging; ?>"/>	
<?php } elseif (($pg<$hal)&&($total_artikel>10)){;?>	
	<link rel="next" href="<?php echo $paging."/".$pg2; ?>"/>
<?php } elseif (($pg==$hal)&&($pg>2)){;?>	
	<link rel="prev" href="<?php echo $paging."/".$pg3; ?>"/>
<?php } elseif (($pg==$hal)&&($pg==2)){;?>	
	<link rel="prev" href="<?php echo $paging; ?>"/>
<?php }} ?>	
	<link rel="canonical" href="<?php echo $c_url.$urlnyaamp2; ?>"/>
	<link rel="amphtml" href="<?php echo $c_url."/amp".$urlnyaamp2;?>">
	<link rel="publisher" href="<?php echo "$d_googleplus"?>"/>
	<link href='<?php echo "$c_url"?>' rel='made'/>
	<link href='<?php echo "$c_url"?>/sitemap.xml' rel='alternate' title='Mesin Fotocopy <?php echo "$c_title"?> - Atom' type='application/atom+xml'/>
	<link href='<?php echo "$d_googleplus"?>/about' rel='author'/>
	<link href='<?php echo "$d_googleplus"?>' rel='me'/>
	<link rel="manifest" href="<?php echo $c_url;?>/manifest.json" />
	<meta name="theme-color" content="#083d77"/>
	
	<meta content='Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, Infoseek, Excite, Magellan, LookSmart, CNET, Googlebot' name='search engines'/>
	<meta name="google-site-verification" content="9V_Q2iTkRs3_h2-kFe3Pl-tAyjzk2o2jScAgFJFKY7Q" />
	<meta content='' name='msvalidate.01'/>
	<meta name="alexaVerifyID" content="1510020b-aa6a-4151-ba2a-39a27f673692"/>
	<meta name="yandex-verification" content="" />
	<?php $total_reviewnya = $db->num_rows("select * from ulasan where pid = 13 and status ='y' ORDER BY tanggal DESC"); $rata2=5; ?>
<?php 
	if(isset($_REQUEST["p"])){ 
		switch ($_GET["p"]) {		
			case "":  ?> 
	<script type="application/ld+json">
		[		
				{
					"@context": "https://schema.org",
					"@type": "WebSite",
					"name": "Mesin Fotocopy",
					"alternateName": "<?php echo $page_title." - ".$site_name; ?>",					
					"description": "<?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>",
					"url": "<?php echo $app->CURRENT_URL(); ?>",
					"genre": "Jual Mesin Fotocopy",
					"keywords": "Mesin Fotocopy, <?php echo $page_title; ?> <?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>",
					"version": "1.0.0",
					"copyrightYear": "<?php echo date('Y');?>",
					"contentLocation": "Bekasi, Jawa Barat",
					"commentCount": "<?php echo $total_reviewnya; ?>",
					"aggregateRating": {
						"@type": "AggregateRating",
						"ratingValue": "5",
						"reviewCount": "<?php echo $total_reviewnya; ?>"
					  },
					"awards": "Dealer Resmi Mesin Fotocopy Terbaik se Indonesia Tahun 2016, 2017. Best Sales Copier Industry",
					"about": "Pusat Penjualan Mesin Fotocopy Online di Indonesia, yang menjual beberapa jenis mesin fotocopy, spare part, accecories, dan juga mesin fotocopy rekondisi dengan harga yang bersaing dengan kualitas yang terbaik.",
					"creator": {
						"@type": "Organization",
						"areaServed": "Indonesia",
						"email": "van@vanectro.com",
						"logo": "<?php echo $c_cdn_img; ?>/logo.png",
						"telephone": "+62-21-8273-4557",
						"sameAs": "<?php echo $c_url;?>/tentang-kami",
						"founder": {
							"@type": "Person",
							"givenName": "Ivan",
							"familyName": "Riansyah",
							"email": "van@vanectro.com",
							"jobTitle": "C.E.O"
						}
					},					
					"contributor": {
						"@type": "Organization",
						"areaServed": "Indonesia",
						"email": "jauharimalikupil@gmail.com",
						"logo": "<?php echo $c_cdn_img; ?>/logo.png",
						"telephone": "+62-83869850522",
						"sameAs": "<?php echo $c_url;?>/tim-kami",
						"founder": {
							"@type": "Person",
							"givenName": "Jauhari",
							"familyName": "Malik",
							"email": "jauharimalikupil@gmail.com",
							"jobTitle": "Full Stack Developper"
						}
					},
					"audience": {
                    	"@type": "Audience",
						"audienceType": "Pelanggan",
                        "description": "Pelanggan <?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>."
					}
				}
			]
	</script>					
<?php       break;					
			case "daftar-harga": break;	
			case "harga": break;	
			case "fujixerox": break;	
			case "canon": break;	
			case "rekondisi": break;	
			case "baru": break;
			case 'sparepart': break;	
			case 'usaha-fotocopy': break;		
			case "gallery": break;
			case "gallerydetail": break;
			case "pelanggan": break;
			case "pelanggandetail": break;
			case "ulasan": break;	
			case "ulasan-harga": break;	
			case "ulasan-paket": break;			
			case "produk": break;
			case "warna": break;
			default : break;
		}
	} else {
?>
<script type="application/ld+json">		
		[		
				{
					"@context": "https://schema.org",
					"@type": "WebSite",
					"name": "Mesin Fotocopy",
					"alternateName": "<?php echo $page_title." - ".$site_name; ?>",
					"url": "<?php echo $app->CURRENT_URL(); ?>",	
					<?php  if($app->CURRENT_URL() == $c_url."/"){ ?>
					"potentialAction": [{
						"@type": "SearchAction",
						"target": "<?php echo $c_url;?>/search/{search_term_string}",
						"query-input": "required name=search_term_string"
					}],	
					<?php } ?>					
					"description": "<?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>",
					"genre": "Jual Mesin Fotocopy",
					"keywords": "Mesin Fotocopy, <?php echo $page_title; ?> <?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>",
					"version": "1.0.0",
					"copyrightYear": "<?php echo date('Y');?>",
					"contentLocation": "Bekasi, Jawa Barat",
					"commentCount": "<?php echo $total_reviewnya; ?>",
					"aggregateRating": {
						"@type": "AggregateRating",
						"ratingValue": "5",
						"reviewCount": "<?php echo $total_reviewnya; ?>"
					},
					"awards": "Dealer Resmi Mesin Fotocopy Terbaik se Indonesia Tahun 2016, 2017. Best Sales Copier Industry",
					"about": "Pusat Penjualan Mesin Fotocopy Online di Indonesia, yang menjual beberapa jenis mesin fotocopy, spare part, accecories, dan juga mesin fotocopy rekondisi dengan harga yang bersaing dengan kualitas yang terbaik.",
					"creator": {
						"@type": "Organization",
						"areaServed": "Indonesia",
						"email": "van@vanectro.com",
						"logo": "<?php echo $c_cdn_img; ?>/logo.png",
						"telephone": "+62-21-8273-4557",
						"sameAs": "<?php echo $c_url;?>/tentang-kami",
						"founder": {
							"@type": "Person",
							"givenName": "Ivan",
							"familyName": "Riansyah",
							"email": "van@vanectro.com",
							"jobTitle": "C.E.O"
						}
					},					
					"contributor": {
						"@type": "Organization",
						"areaServed": "Indonesia",
						"email": "jauharimalikupil@gmail.com",
						"logo": "<?php echo $c_cdn_img; ?>/logo.png",
						"telephone": "+62-83869850522",
						"sameAs": "<?php echo $c_url;?>/tim-kami",
						"founder": {
							"@type": "Person",
							"givenName": "Jauhari",
							"familyName": "Malik",
							"email": "jauharimalikupil@gmail.com",
							"jobTitle": "Full Stack Developper"
						}
					},
					"audience": {
                    	"@type": "Audience",
						"audienceType": "Pelanggan",
                        "description": "Pelanggan <?php if(isset($_GET['pg'])){ $pg=$_GET['pg']; echo "$site_description - $site_name Halaman $pg"; } else { echo"$site_description - $site_name";}?>."
					},
					"sameAs" : [
						"<?php echo $d_facebook; ?>",
						"https:\/\/www.twitter.com\/<?php echo $d_twitter_acc; ?>",
						"https:\/\/plus.google.com\/<?php echo $d_googleplus; ?>",
						"https:\/\/www.youtube.com\/<?php echo $d_youtube; ?>"			
					],
					"author" : [
					{
						"@context": "https://schema.org",
						"@type" : "Organization",
						"name" : "Jual Mesin Fotocopy <?php echo $page_title; ?>",
						"legalName" : "PT. VANECTRO ANDALAN NUSANTARA",
						"url" : "<?php echo  $c_url; ?>",
						"logo" : "<?php echo $c_cdn; ?>/new/images/vanectro-logo.png",
						"contactPoint" : [{
							"@type" : "ContactPoint",
							"telephone" : "+62-21-8273-4557",
							"contactType" : "customer service"
						}],
						"address": "<?php echo $d_alamat1;?>"
					}
				  ]					
				}
			]
</script>			
<?php } ?>	
	<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@type": "Organization",
	  "url": "<?php echo $c_url;?>",
	  "logo": "<?php echo $c_cdn_img;?>/logo.png",
 "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+6221-8273-4558",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "ID"
  },{
    "@type": "ContactPoint",
    "telephone": "+6221-8273-4557",
    "contactType": "customer service"
  },{
    "@type": "ContactPoint",
    "telephone": "+62812-8033-6345",
    "contactType": "customer service",
    "contactOption": [
      "HearingImpairedSupported",
      "TollFree"
    ],
    "areaServed": "ID"
  }]
	}
	</script>	
	<script type="application/ld+json">
	[
				{
				  "@context": "https://schema.org",
				  "@graph": [
					{
					  "@type": "Place",
					  "address": {
						"@type": "PostalAddress",
						"addressLocality": "Indonesia",
						"addressRegion": "Jawa Barat",
						"postalCode": "<?php echo $d_pos; ?>",
						"streetAddress": "<?php echo "$d_alamat3";?>. <?php echo "$d_alamat2";?> "
					  },
					  "name": "<?php echo $page_title." Mesin Fotocopy Canon, Mesin Fotocopy Fuji Xerox Baru, Mesin Fotocopy Rekondisi Harga Murah"; ?>"
					}
				  ]
				}
	]			
	</script>	

	
	<meta name="Author" content="<?php echo $site_name;?>">
	<link rel="Publisher" href="<?php echo $d_googleplus;?>">

	<link rel="apple-touch-icon" href="<?php echo "$c_cdn_img/"; ?>favi.png" />
	<link rel="shortcut icon" href="<?php echo "$c_cdn_img/"; ?>favi.png" type="image/x-icon" />
	
<?php $total_review = $db->num_rows("select * from ulasan where  status ='y' ORDER BY tanggal DESC"); 