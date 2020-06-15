<?php
/* 
* Warpsite MVC Framework version 1.0 
*
* Author	    : Jauhari Malik
* Description 	: MVC Framework - Index Page
*/

error_reporting(E_ALL | E_STRICT); 
if (isset($_GET['link'])){
$link = $_GET['link'];
if($db->num_rows("select id from article where link='$link'") == 0){
	echo "Opps,.. Article Not Found!";
	exit();
}else{
$data_a = $db->detail_artikel($link);
$a_id = $data_a['id'];
$a_title = $data_a['title'];
$a_content= $data_a['content'];
$a_hits = $data_a['hits'];
$a_time = $data_a['time'];
$a_date = $data_a['date'];
$a_link = $data_a['link'];
$a_category = $data_a['category'];
$a_cat = $data_a['category'];
$a_user = $data_a['user'];
$jumlah_category = substr_count($a_category,",");
$a_category = explode(',',$a_category);
$a_image = $data_a['image'];
$sql_update = $db->query("update article set hits=hits+1 where id='$a_id'");
$a_content = str_replace("<img ", "<img style='max-width:100%'", $a_content);
}
} 
?>
<meta property='og:image' content='<?PHP echo "$a_image"; ?>'/>
<link rel='image_src' href='<?PHP echo "$a_image"; ?>'/>
<?php 
$page_title="Daftar Harga Mesin Fotocopy Baru, Rekondisi - ".date('M-Y');
$site_name="Vanectro.Com";
$site_description="Daftar Harga Mesin Fotocopy Baru & Rekondisi ".date('M-Y')."  -  Telp. $d_telp";
?>
<style>
.check{text-align:left;}
.detail-page-lets-get-social, .header-<?php echo $site_name; ?>-com, .frontpage-title-ornament-left-clean, .frontpage-title-ornament-right-clean, .frontpage-title-ornament-left-color, .frontpage-title-ornament-left-black-white, .frontpage-title-ornament-right-black-white, .chat-with-us-sticky-background, .frontpage-title-ornament-right-color, .happiness-guarantee-fast-shipping, .happiness-guarantee-payment, .detail-page-customer-review, .detail-page-editor-review, .detail-page-most-view, .detail-page-product-discussion, .detail-page-product-interest, .detail-page-product-tags, .detail-page-recent-view, .detail-page-related-product, .detail-page-shipping-method, .detail-page-video, .happiness-guarantee-low-price, .footer-email-us, .footer-lets-get-social, .header-find-your-perfect-pc, .header-online-bidding, .happiness-guarantee-lost-package, .detail-page-facebook, .detail-page-google-plus, .detail-page-instagram, .detail-page-pinterest, .detail-page-twitter, .happiness-guarantee-complete, .shipping-method-call-us-active, .shipping-method-call-us, .shipping-method-chat-active, .shipping-method-chat, .shipping-method-desktop-active, .shipping-method-desktop, .shipping-method-mobile-active, .shipping-method-mobile, .shipping-method-store-active, .shipping-method-store, .happiness-guarantee-dont-worry, .happiness-guarantee-genuineness, .happiness-guarantee-defective, .happiness-guarantee-free-shopping, .footer-cbn, .murah-maksimal-big-icon, .happiness-guarantee-secure, .murah-maksimal-small-icon, .detail-page-free-shipping, .product-badge-plus, .list-page-email, .detail-page-print, .product-badge-view-by, .header-shopping-cart, .product-bagde-last-sold, .product-badge-most-viewed, .product-badge-product-launch, .product-badge-average-rating, .footer-career-with-us, .product-badge-listpedia, .product-badge-love-it, .product-badge-most-selling, .product-badge-sold, .detail-page-certified-buyer, .detail-page-english, .detail-page-first-to-review, .detail-page-i-own-this-product, .detail-page-indonesia, .detail-page-arrow-less-active, .detail-page-arrow-less, .detail-page-arrow-more-active, .detail-page-arrow-more, .footer-advertise, .footer-facebook, .footer-google-plus, .footer-instagram, .footer-pinterest, .footer-twitter, .product-badge-i-own-it, .product-badge-total-review, .detail-page-big-star-full, .detail-page-big-star-half, .detail-page-big-star, .addaccelerator, .addsearchprovider, .list-page-grid-view, .list-page-list-view, .detail-page-like, .detail-page-unlike, .detail-page-big-arrow-left, .detail-page-big-arrow-right, .detail-page-contact, .detail-page-email, .detail-page-listpedia, .detail-page-online-bidding, .header-menu-icon, .detail-page-info, .header-search, .login-password, .login-user, .detail-page-small-star-full, .detail-page-small-star-half, .detail-page-small-star, .header-phone, .detail-page-check-list, .list-page-arrow, .product-dropdownlist-arrow, .header-arrow-bottom-all-categories, .header-arrow-bottom-black, .header-arrow-bottom-white, .detail-page-small-arrow-left, .detail-page-small-arrow-right, .detail-page-bullet, .red-arrow-bottom, .red-arrow-top, .header-arrow-left-white, .header-arrow-left, .red-arrow-left, .red-arrow-right, .frontpage-title-ornament-christmas-tree1, .frontpage-title-ornament-christmas-tree2, .frontpage-title-ornament-christmas-snowman, .frontpage-title-ornament-christmas-house, .frontpage-title-ornament-christmas-snow-train {
    display: inline-block;
    zoom: 1;
    background: url(<?php echo $c_cdn_img;?>/microsite/icon-page.png) no-repeat;
    overflow: hidden;
    text-align: left;
}
.happiness-guarantee-genuineness {
    background-position: -1px -837px!important;
    width: 68px;
    height: 90px;
}
.happiness-guarantee-fast-shipping {
    background-position: -291px -249px!important;
    width: 110px;
    height: 90px;
}
.happiness-guarantee-payment {
    background-position: -305px -41px!important;
    width: 99px;
    height: 90px;
}
.happiness-guarantee-description {
    margin: 20px 0 20px 0;
    line-height: 1.7;
    text-align: justify;
}
.divDetailProductItemName {height: 50px;}
.divDetailProductItemWrapper li {overflow: hidden; position: relative;}
.hot-mark4 {
    position: absolute;
    top: 20px;
    left: -25px;
    font-size: 11px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    background: #f89406;
    line-height: 18px;
    width: auto;
    padding-right: 25px;
    padding-left: 25px;
    text-align: center;
    transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
}
.padding {padding : 10px;}
</style>
<div class="divContent">
            <div class="windows">
                <div>
                    <div id="ctl00_contentWrapper" class="mainContent993">
    <div id="divMainPage">
        <div itemscope="itemscope" itemtype="http://schema.org/BlogPosting" id='mypost'>
            <meta itemprop="description" content="<?php echo $site_description; ?>">
 			<a href="">
				<div id="richContentImage" class="richContentPageFold">
				<img src="<?php echo $c_cdn_img.DS.$a_image; ?>" style='width: 100%;' title="<?php echo "$a_title"; ?>" alt="<?php echo "$a_title"; ?>" >
				</div>
			</a>  		
			<div class="pageHeader"><span id="ctl00_cphContent_proListTitle" itemprop="name" class="pageHeaderTitle"><a href='<?php echo $app->CURRENT_URL(); ?>' rel="bookmark" itemprop="url" href><?php echo "$a_title"; ?></a></span></div>			
            <div class="paddingTop10"></div>
            <div>
                <div class="paddingTop20 paddingLeft20px paddingRight20">
                    <h1 id="ctl00_cphContent_productDetailBrandSeri" class="productDetailBrandSeri" style="font-weight: normal;"><?php echo $a_title; ?></h1>
                    <div class="greyText paddingTop5">
                        <div id="divProductDetailPartID" class="inline" style="width: 59%;"> 
						<span class="date" itemprop="datePublished" content='<?PHP echo $a_date; ?>'><?php echo $a_date; ?> : 
						<span class="author" rel="author"> By <?PHP echo $db->_author_this_post($a_id); ?> </span>
						<span class="tag hidden" itemprop="keywords"><?PHP echo $db->_get_category($a_cat); ?></span>
						</div>
                    </div>
                </div>
				<div class="padding">
                    <p class="description text-justify" itemprop="articleBody"><?PHP echo $a_content; ?></p>	
					<?php require_once $app->_komentar(); ?>
                </div>	
				
            </div>
        </div>
		<div align="center">
			<a href="<?php echo $m_url?>/blog" class="btn btnSubmit btnFullWidth txtNotLink">Blog Vanectro</a>
			<a href="<?php echo $m_url?>/harga-mesin-fotocopy" class="btn btnSubmit btnFullWidth txtNotLink">Katalog Mesin Fotocopy</a>
		</div>
        <div id="ctl00_cphContent_divSimilarItemContainer" class="paddingTop20 paddingBottom10">
            <div class="paddingRight20 paddingLeft20px" style="font-size: 1.1em;"> Best Seller Mesin Fotocopy</div>
            <div class="divDetailProductItemContainer">
 				<?php 	$data_produk = ("select *  from produk where hot='Baru' ORDER BY produk.brand ASC, produk.id_produk ASC"); ?>
				<?php  $count=0; $result = $db->query($data_produk); while ($a_data = $result->fetch_array(MYSQLI_BOTH)){$count++;} ?>	
                <div id="ctl00_cphContent_divSimilarItemWrapper" class="divDetailProductItemWrapper" style="width:<?php echo ($count*230);?>px;padding-left:20px;">
                    <ul>
						<?php $data_produk = $db->select("produk", "id_produk, category, brand, nama_produk, link, harga_lama, harga_baru,deskripsi_a, image_satu, image_dua, special,hot,popular, image_3, image_4", "produk.hot='Baru'", " produk.date DESC, produk.time DESC"); ?>								
						<?PHP 
						if (!is_array($data_produk)){echo"<meta http-equiv='refresh' content='0; url=$c_url'>";exit();}
						foreach($data_produk as $a_data){
						$a_link = $a_data['link'];
						$a_nama_produk = $a_data['nama_produk'];
						$a_category = $a_data['category'];
						$a_brand = $a_data['brand'];
						$a_hot = $a_data['hot'];
						$a_image_satu = $a_data['image_satu'];
						$a_image_dua = $a_data['image_dua'];
						$a_image_3 = $a_data['image_3'];
						$a_image_mkecil = $a_data['image_4'];
						$a_id = $a_data['id_produk'];
						$a_deskripsi_a = $a_data['deskripsi_a'];
						$a_harga_lama = $a_data['harga_lama'];
						$a_harga_baru = $a_data['harga_baru'];
						if ($a_harga_lama == 0) {$i = 0;} else {$g=$a_harga_lama;$h=$a_harga_baru;$i=(($g-$h)/($g/100)); }
						?> 
						<li class="itemProductHeader" title="<?php echo $c_url.DS.$a_image_mkecil; ?>" data-track-name="<?php echo $a_nama_produk; ?>" data-track-creative="<?php echo $c_url.DS.$a_image_3; ?>" data-track-version="Mobile-1" data-track-link="<?php echo $c_url.DS."mobile/$a_brands-".$a_link; ?>"><div class="itemProductContent"><a class="itemProductContent" href="<?php echo $c_url.DS."mobile/$a_brands-".$a_link; ?>"><img class="itemProductContent" src="<?php echo $c_url.DS.$a_image_mkecil; ?>"></a></div><div class="itemProductContent"><a class="itemProductContent" href="<?php echo $c_url.DS."mobile/$a_brands-".$a_link; ?>">           <div class="itemProductContent"><div class="divDetailProductItemName itemProductContent"><?php echo $a_nama_produk; ?></div>
							<div style="height: 55px; text-align:center;">
								<a id="productItem_SKU00914248" style="display: inline;" class="productItem clickable" href="<?php echo "$c_url/mobile/$a_brands-$a_link";?>">
									<?php if($a_harga_lama<=0) {?><br><?php } else {?>
									<div id="normalPrice" style="text-align:center;" class="productLineThrough">Rp <?PHP echo format_rupiah($a_harga_lama); ?></div>
									<?php  } if($a_harga_baru<=0) {?><div class="recommendedItemDiscountPercentage" style="margin: 0;font-size:12px;"> Discontinue </div><?php } else {?>
										<div class="recommendedItemDiscountPercentage" style="margin: 0;"> Potongan : - <?php echo format_rupiah($i);?>% </div>
									<?php } ?>
								</a>
							</div><div class="divDetailProductItemPrice itemProductContent">Rp <?PHP echo format_rupiah($a_harga_baru); ?></div>           </div>       </a>   </div>
							</li>
                        <?php } ?>        
                    </ul>
                </div>
            </div>
        </div>
    </div> 
        <div id="meshSection5" class="meshSection">
            <div class="meshTitle">
                <div class="meshTitleBhinneka">Kenapa harus memilih kami <b>Vanectro - Pusat Fotocopy</b></div>
            </div>
            <div class="meshImage">
                <img src="<?php echo $c_cdn_img;?>/mobile/bullseye.jpg">
            </div>
            <div class="divInfoSection5">
                <div class="section5Title">Harga Mesin Fotocopy Murah</div>
                <div class="meshDescription">
                    Rasakan kelebihan manfaat membeli mesin fotocopy di tempat kami.  Pilihan dari Vanectro adalah mesin dengan kualitas tertinggi, original, 
					harga yang jauh lebih murah dari tempat lain, dengan banyaknya bonusan.
                </div>
                <div class="section5Title">Toner & Sparepart Murah</div>
                <div class="meshDescription">Kami Percaya, Kepuasan pelanggan adalah hal utama jangan cemas dengan biaya bulanan yang tinggi, karena kami juga menyediakan sparepart mesin, toner yang sangat murah, original. Kalo bisa lebih murah kenapa harus lebih mahal??
                </div>
                <div class="section5Title">Garansi &amp; Seumur Hidup</div>
                <div class="meshDescription">Untuk menjaga kepuasan pelanggan, kami berani memberikan garansi hingga seumur hidup. Satu satunya tempat yang berani memberikan garansi yang jelas, pada article mesin fotocopy yang kami jual. Kami senantiasa menjaga kepercayaanmu.
                </div>
                <div class="section5Title">Kualitas Terjamin</div>
                <div class="meshDescription">
                    Kenapa harus membeli mesin fotocopy yang abal, kalo bisa dapat mesin yang bagus?? cari mesin fotocopy murah. Kunjungi saja website kami, dimana kamu bisa mendapatkan mesin fotocopy original, kualitas terjamin, dengan harga yang bersaing.
                </div>
                <div class="section5Title">Penjual Terpercaya</div>
                <div class="meshDescription">
                    Vanectro sudah melayani pelanggan selama lebih dari 5Tahun, sudah mengirim ribuan unit mesin fotocopy ke berbagai macam daerah 33 Provinsi dan Beberapa Negara. Pusat Penjualan Mesin Fotocopy berbadan hukum resmi, terdaftar di lembaga kenegaraan. Jaminan 100% Barang Sampai.
                </div>
                <div style="padding-bottom: 15px;"></div>
            </div>
        </div>			  
                    </div>
                </div>
            </div>
        </div>
		

    <script type="text/javascript" src="<?php echo $c_cdn_js; ?>/mobile/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="https://assets.bmdstatic.com/assets/js/swipe.min.js"></script>
    <script type="text/javascript" src="https://assets.bmdstatic.com/assets/js/mobile-pager.min.js?d=201512101700"></script>
    <script type="text/javascript" src="https://assets.bmdstatic.com/assets/js/panzoom.min.js"></script>

