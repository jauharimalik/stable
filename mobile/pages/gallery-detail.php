<!doctype html>
<html AMP lang="id">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
		
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400" rel="stylesheet">
    <style amp-custom>
      amp-story {
        font-family: 'Oswald',sans-serif;
        color: #fff;
      }
      amp-story-page {
        background-color: #000;
      }
      h1 {
        font-weight: bold;
        font-size: 2.875em;
        font-weight: normal;
        line-height: 1.174;
      }
      p {
        font-weight: normal;
        font-size: 1.3em;
        line-height: 1.5em;
        color: #fff;
      }
      q {
        font-weight: 300;
        font-size: 1.1em;
      }
      amp-story-grid-layer.bottom {
        align-content:end;
      }
      amp-story-grid-layer.noedge {
        padding: 0px;
      }
      amp-story-grid-layer.center-text {
        align-content: center;
      }
      .wrapper {
        display: grid;
        grid-template-columns: 50% 50%;
        grid-template-rows: 50% 50%;
      }
      .banner-text {
        text-align: center;
        background-color: #000;
        line-height: 2em;
      }
    </style>
  </head>
  <body>
    <!-- Cover page -->
    <amp-story standalone
        title="<?php echo $a_nama; ?>"
        publisher="<?php echo $site_name; ?>"
        publisher-logo-src="<?php echo $c_cdn;?>/new/images/footer-logo.png"
        poster-portrait-src="<?php echo $c_cdn_img."/".$pecahan_foto1[0]; ?>">
		
      <amp-story-page id="cover">
        <amp-story-grid-layer template="fill">
          <?php echo cekformatamp($c_cdn_img."/".$pecahan_foto1[0], $a_nama); ?>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical"></amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="bottom">
          <q><?php echo $a_nama; ?></q>
        </amp-story-grid-layer>
      </amp-story-page>
	  
	<?php $nomorurut=0; foreach($pecahan_foto1 as $foto_tb1){ $nomorurut++; ?>					
      <amp-story-page id="page<?php echo $nomorurut;?>">
        <amp-story-grid-layer template="fill">
          <?php echo cekformatamp($c_cdn_img."/".$pecahan_foto1[0], $a_nama); ?>
        </amp-story-grid-layer>
          <amp-story-grid-layer template="thirds">
            <q><?php echo hari(date('D', strtotime($a_tanggal))); ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($a_tanggal))); ?>, <?php echo $a_lokasi; ?></q>
        </amp-story-grid-layer>
      </amp-story-page>	  
	  <?php } $jumlah_video = count($pecahan_foto1); foreach($pecahan_video as $video_tb){ $jumlah_video++;?>			
      <amp-story-page id="page<?php echo $jumlah_video;?>">
        <amp-story-grid-layer template="fill">
          <?php echo cekformatamp($c_cdn_img."/".$video_tb, $c_cdn_img."/".$pecahan_foto1[0]); ?>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical">
          <h1><?php echo $a_nama; ?></h1>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="bottom">
          <p><?php echo $a_mini_content;?>.</p>
        </amp-story-grid-layer>
      </amp-story-page>									
	 <?php } ?>		
	 
      <amp-story-page id="page2">
        <amp-story-grid-layer template="fill">
          <?php echo cekformatamp($c_cdn_img."/".$pecahan_foto1[0], $a_nama); ?>
        </amp-story-grid-layer>
          <amp-story-grid-layer template="thirds">
            <h1><?php echo $a_nama; ?></h1>	
            <p grid-area="lower-third"><?php echo $a_lokasi; ?></p>
        </amp-story-grid-layer>
      </amp-story-page>


      <!-- Bookend -->
      <amp-story-bookend src="<?php echo $c_url;?>/ajaxp-storytest" layout="nodisplay"></amp-story-bookend>
    </amp-story>
  </body>
</html>
