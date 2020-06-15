<?php 
$data = $db->layanannya($urlnya);
?>
<style>
.m20{margin:20px 0;}
.m40{margin:40px 2%;}
.slideshow-category {
    margin: 10px auto;
    position: relative;
    z-index: 1;
}
.labelfoto {
    background: #23a2f4;
    padding: 1rem;
    width: 50%;
    font-size: 1em;
    border-top-right-radius: 3em;
    color: #fff;
    margin-top: -54px;
    margin-left: 5px;
    position: absolute;
}
.slick img{height:auto!important;padding:10px;box-shadow: none!important;border: none;}
.aiuoe{
    border: 1px solid #ccc;
    border-radius: 4px;
    overflow: hidden;	
	box-shadow: 0 2px 4px 0 rgba(27,27,27,.2);	
	margin: 10px auto;
    background: #fff;
    margin: 9px 3%;
    width: 94%;
}
.thumbnail-media {
    height: 156px;
    background-color: #fff;
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
    border-bottom: 1px solid #ccc;
    line-height: 160px;
    text-align: center;
    overflow: hidden;
}
.aiuoe img {
	border-radius:0!important;
    width: 100%;
    display: block;
    max-width: 100%;
    height: auto;
    padding: 0;
    margin: 0!important;
}
.gbpos2 .tanggal, .gbpos2 .tanggal a {
    display: block;
    float: left;
    background: #23a2f4;
    color: #fff;
    text-align: center;
    margin-right: 10px;
}
.gbpos2 .tanggal {
    height: 110px;
    width: 30%;
}
.gbpos2 .tg {
    width: 100%;
    font-size: 42px;
}
.gbpos2 .bln {
    width: 100%;
    font-size: 12px;
}
.gambarbintang5 {
    background-position: 0px -236px;
    width: 88px;
    height: 16px;
    background-position: 0px -142px;
    width: 78px;
    height: 14px;
    vertical-align: middle;
    background-image: url(<?php echo $c_url;?>/compressed/user/bintang.webp);
    display: inline-block;
    position: relative;
    top: -0.1rem;
}
.aiuoe .h5{
    font-size: 13px;
    color: #23a2f4;
    margin: 5px 10px;
    height: 38px;
    font-weight: bold;
    line-height: 1.5;
}
.aiuoe .prices {
    height: 40px;
    padding-top: 5px;
}
.aiuoe .prices .current {
    font-size: 11px;
    font-weight: 700;
    vertical-align: bottom;
}
.judultama{
    width: calc(80% - 4%);
    float: left;
    margin: 20px 2%;
    font-size: 20px;
    text-transform: uppercase;
}
.more{
    float: right;
    width: 20%;
    display: block;
    margin: 20px 0 0;		
}
.harga_layanan{margin: 4px 0;height: 43px;}
.harga_baru{color: #f37021;font-weight: 700;}
.harga_lama{font-size: 12px;color: rgba(0,0,0,.38);text-decoration: line-through;}
.diskon{font-size: 12px;color: #ed1c24;}

.accordion-container {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    padding: 16px 15px 16px 18px;
    background-color: #fff;
    box-shadow: 0px 5px 15px rgba(189,189,189,0.5);
    border-radius: 4px;
	margin-bottom:30px;
}

.accordion{
    position: relative;
    border-top: 1px solid #E0E0E0;
    display: block;
    font-weight: 600;
    font-size: 14px;
    padding: 14px 0;
    color: #083d77;
}
.accordion-item__body {
	display:none;
    position: relative;
    margin-left: 0;
    padding: 10px 0;
    border-bottom: 1px solid #E0E0E0;
    overflow: hidden;
    transition: padding 0.3s ease-in-out, height 0.3s ease-out, visibility 0.3s ease-out;
}
.accordion-container .active:after {
    transform: rotate(-90deg);
}
.accordion:after {
    content: "";
    background-image: url(http://192.168.43.16/php/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;
    margin-right: 10px;
    float: right;
}
.accordion-container .active{display:block;}
#hasilgallery {
    border-radius: 5px;
    padding: 10px;
}

._2phds {
    display: flex;
    flex-wrap: wrap;
    padding-bottom: 20px;
}
._2phds {
    background-color: #e6eaed;
    padding-bottom: 20px;
}

._37bsg._2PKKH {
    flex-basis: 24%;
    margin: .5%;
    border-radius: 5px;
    box-shadow: 0 1px 5px 0 rgba(0,0,0,.5);
    height: 230px;
    overflow: hidden;
    cursor: pointer;
}
._2PKKH img {
    height: 230px;
    object-fit: cover;
}
.rekomendasipro .section-subtitle {
	font-size:12px;
	max-height:110px;
	overflow:hidden;
}

.content-list {
    position: relative;
    margin-bottom: 16px;
    padding: 16px;
    border-radius: 8px;
    background-color: #fff;
    border: 1px solid #eee;
    box-shadow: 0 1px 6px 0 rgba(49,53,59,0.12);

}
.seemore{
color: #23a2f4;
    font-size: 16px;
    font-weight: 700;
    padding: 5px 20px;
    border: 2px solid;
    border-radius: 5px;	
}
.flex-wrap {
    flex-wrap: wrap;
}
.content-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.content-list ul {
    margin-top: 0;
    margin-bottom: 0;
    list-style: none;
    padding-left: 0;	
}
.list-item:first-child {
    margin-right: 32px;
    width: 498px;
    float: left;
}
.list-item:first-child .list-item-thumbnail {
    width: 100%;
    margin-bottom: 24px;
	flex:auto;
}
.list-item-thumbnail img {
    width: 100%;
	border-radius: 8px;
}
.list-item-detail {
    flex: 1;
}
.list-item-thumbnail {
    flex: 0 1 230px;
    margin-right: 16px;
}
.list-item {
    margin-bottom: 0;
}
.list-item:first-child .list-item-detail__intro {
    font-size: 14px;
}
.list-item-detail__intro {
    margin-top: 0;
    margin-bottom: 16px;
    font-family: "Open Sans";
    font-size: 12px;
    font-weight: 400;
    color: rgba(49,53,59,0.68);
    line-height: 1.5;
}
.list-item:first-child .list-item-detail__excerpt {
    font-size: 16px;
    line-height: 1.38;
    height: 70px;
}
.list-item-detail__excerpt {
    height: 64px;
    overflow: hidden;
}
.list-item .list-item-content {
    display: flex;
    flex-wrap: wrap;
}
</style>
<link href="<?php echo $c_cdn;?>/plugin/slick/slick.css" rel="prefetch" type="text/css" as="style">
<link href="<?php echo $c_cdn;?>/plugin/slick/slick-theme.css" rel="prefetch" type="text/css" as="style">
<div class="container rekomendasipro">
<style>
#expertise, #istop {
    position: sticky;
    top: 66px;
}
.sidebar {
    border-radius: 5px;
    width: 30%;
    border: 1px solid #eee;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    padding: 12px;
    float: left;
    margin-right: 2%;
    background: #fff;
    z-index: 2;
}
.mt40 {
    margin-top: 10px;
    padding: 0;
}
.rekomendasipro .gantunganbanner {
	position:relative;
    background-size: 105% auto;
    background-repeat: no-repeat;
    border-radius: 4px;
    box-shadow: 0 1px 3px 0 rgba(27,27,27,.2), 0 4px 8px 0 rgba(27,27,27,.1);
    background-color: #fff;
    padding: 0;
    margin-top: 10px;
    width: 100%;
    float: left;
    font-size: 12px;
    background: no-repeat;
    border: 1px solid #eee;
}
.fotoroom{
    width: 25%;
    overflow: hidden;	
}
.fotoroom img{object-fit: cover;height: 240px;width: 100%;}
.inforoom{
    width: 50%;
    padding: 20px;
    font-size: 20px;
}
.namawis{
    font-weight: bold;
    line-height: 1.33;
    color: #434343;
    font-size: 16px;
    margin: 10px 0 0;
}
.slickrate{
    font-size: 14px;
    color: #0770cd;	
}
.bookcol2{
	width: 25%;
    position: relative;
    border-left: 2px solid #eee;
    padding-left: 20px;
}
.inforoom, .bookcol2, .fotoroom{
    float: left;
    height: 240px;	
}
.absroom{
    position: absolute;
    bottom: 0;
    width: 90%;	
}
.absroom ._2_jL8{
	width:90%
}
.hargalama {
    color: #8f8f8f;
    text-decoration: line-through;
}
.r3PsG {
    font-size: 20px;
    line-height: 1.17;
    color: #F96D01;
    font-weight: 700;
}
._2_jL8 {
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 700;
    line-height: 17px;
    padding: 8px 20px;
    margin: 15px auto;
    text-align: center;
}
._2_jL8, a._2_jL8, a._2_jL8:focus, a._2_jL8:hover {
    color: #fff;
}
._9wJf5 {
    background: #0770cd;
}
.TCzhH{
    float: left;
    font-size: 16px;
    color: #0770cd;
    font-weight: 700;
    width: 100%;
    margin: 10px 0;
}
.sebelahsidebar{
    width: calc(100% - 30% - 2%);
    float: left;
}
.labelmerah{
    z-index: 10;
    top: 20px;
    max-width: 145px;
    left: -10px;
    box-shadow: rgba(27, 27, 27, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.5) 0px 2px 4px 0px;
    background-color: #ff5e1f;
    position: absolute;
	padding: 4px 12px;
	color: #fff;
}
.pitaatas{
	right: -10px;
    border-top-width: 0px;
    border-top-style: solid;
    border-top-color: transparent;
    border-left-width: 10px;
    border-left-style: solid;
    border-left-color: #ff5e1f;
    border-bottom-width: 15px;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    top: 0px;
    position: absolute;
}
.pitabawah{
	border-top-width: 15px;
    border-bottom-width: 0px;
    width: 0px;
    right: -10px;
    height: 0px;
    border-top-style: solid;
    border-top-color: transparent;
    border-left-width: 10px;
    border-left-style: solid;
    border-left-color: #ff5e1f;
    border-bottom-style: solid;
    border-bottom-color:transparent;
    position: absolute;
    bottom: 0px;
}

</style>
	<div id="expertise" class="sidebar">
		<div class="TCzhH">Jam Buka :</div>
		<div class="jawabinfo">Buka Setiap Hari. Senin - Minggu<br>Buka pada jam : 08:00 - 17:00</div>
		<div class="TCzhH">Kisaran Harga :</div>
		<div class="jawabinfo">Harga yang ditawarkan mulai dari Rp 150.000 - Rp 2.000.000</div>
		<div class="TCzhH">Alamat :</div>
		<div class="jawabinfo">Harga yang ditawarkan mulai dari Rp 150.000 - Rp 2.000.000</div>
		<div class="TCzhH">Lokasi :</div>
		<img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo webpimage("$c_url/compressed/mapfinder.jpg",500,340);?>" title="<?php echo $aprod['nama_produk'];?>" alt="<?php echo $aprod['nama_produk'];?>"/>
	</div>
	<div class="sebelahsidebar" id="listproduk">
	<div class="TCzhH">Rekomendasi Lainnya :</div>
<?php 	
$sql_produk = ("SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id ORDER BY produk.rekomendasi  ASC LIMIT 6"); 
$result_produk= $db->query($sql_produk);
while ($aprod = $result_produk->fetch_array(MYSQLI_BOTH)) {	
	$image_category = $aprod['foto_mini'];
	$image_category = explode("<br>",$image_category);
	$fotonya2 = $image_category[0];
	
	$prod_review = $db->num_rows("select * from ulasan where pid ='".$aprod['id_produk']."'");	
?>	

		<a href="<?php echo $c_url."/wisata/".$aprod['link'];?>" title="<?php echo $aprod['nama_produk'];?>" data-linksnya="<?php echo $aprod['link'];?>" data-link="wisata" >
		<div class="gantunganbanner mt40">
			<div class="labelmerah"> Special Offers <div class="pitaatas"></div><div class="pitabawah"></div></div>
			<div class="fotoroom"><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo webpimage($fotonya2,500,340);?>" title="<?php echo $aprod['nama_produk'];?>" alt="<?php echo $aprod['nama_produk'];?>"/></div>
			<div class="inforoom">
				<h2 class="namawis"><?php echo $aprod['nama_produk'];?></h2>
				<div class="slickrate"><span class="gambarbintang5"></span> (<?php echo format_rupiah($prod_review);?> Review)</div>
				<?php echo $aprod['informasi'];?>
			</div>
			<div class="bookcol2">
				<div class="absroom">
				<div class="_1I80I _2U4Tz">Harga mulai dari</div>
				<div><span class="hargalama">Rp <?php echo format_rupiah($aprod['harga_lama']);?></span></div>
				<div class="r3PsG">Rp <?php echo format_rupiah($aprod['harga_baru']);?></div>
				<button class="_9wJf5 _2_jL8" type="button">Informasi Detail</button>
				</div>
			</div>	
		</div>
		</a>
<?php } ?>		
</div>
<div class="fclear"></div>
<div class="z10">
<?php 	
$sql_produk = ("SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id where category_link='$urlnya' ORDER BY rekomendasi  ASC LIMIT 4"); 
$result_produk= $db->query($sql_produk);
while ($aprod = $result_produk->fetch_array(MYSQLI_BOTH)) {	
	$image_category = $aprod['foto_mini'];
	$picture = explode("<br>",$image_category);
	$fotonya2 = webpimage($image_category,332,221);
?>	

	<div id="home-premium-intro" class="mt10">
		<div class="grid-container1">
            <div class="grid-unit2 unit2-md-half m40">
				<?php echo $aprod['informasi'];?>
				<a href="<?php echo $c_url."/wisata/".$aprod['link'];?>" title="<?php echo $aprod['nama_produk'];?>" data-linksnya="<?php echo $aprod['link'];?>" data-link="wisata" class="m20 tombolutama btn vlink2"> Baca Lebih Detail</a> 
			</div>
            <div class="grid-unit2 unit2-md-half">
				<div class="slideshow-category">
					<div class="slidemain slide1">
					<?php foreach($picture as $i =>$key) { ?>
					<div class="slideutama" >
						<img src='<?php echo $c_url;?>/compressed/loading2.svg' alt="<?php echo $aprod['nama_produk'];?>" title="<?php echo $aprod['nama_produk'];?>" data-src="<?php echo webpimage($key,500,340);?>" style="width:100%">
						<div class="labelfoto"><?php echo $aprod['nama_produk'];?></div>
					</div>
					<?php } ?>
					<a class="prevslideswipe" data-index="0" id="prevslideswipe">&#10094;</a>
					<a class="nextslideswipe" data-index="0" id="nextslideswipe">&#10095;</a>
					</div>
				</div>			
			</div>			
		</div>
	</div>
<?php } ?>	
			
	<h2 class="judultama">Review User <?php echo $site_name;?></h2>
	<a class="more tombolutama btn" aria-label="Mesin Fotocopy Canon" href="http://192.168.43.16/php/mesin-fotocopy-canon">Lihat Semua <i class="fa fa-chevron-right"></i></a>
	<div class="fclear"></div>
	<div class="slider slick cust">
	<?php 	
	
	$data_produk = ("select *  from aktivitas_pelanggan ORDER BY tanggal DESC, tanggal DESC LIMIT 10"); 
	$result = $db->query($data_produk);
	while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {	
							$a_id = $a_data['id'];
							$a_nama = $a_data['nama'];
							$a_lokasi =substr( $a_data['lokasi'], 0, 25);
							$a_image_tiga = $a_data['photosmall'];
							$a_tanggal = $a_data['tanggal'];
							$tipemesin = substr($a_data['tipemesin'], 0, 25);						
							$rate =$a_data['rating']; 
							$tanggal =$a_data['tanggal']; 
							$namapel=$a_data['nama']; 
							$namapel = str_replace(' ', '.', $namapel); 
							$namapel = str_replace('..', '.', $namapel); 
							$namapel = str_replace('...', '.', $namapel); 
							$emailpel=strtolower($namapel); 
							$fotonya2 = "cdn/images/$a_image_tiga";
							
			if (file_exists($fotonya2)){ 
				$image34 = str_replace('.png', '', $fotonya2);
				$image34 = str_replace('.jpg', '', $fotonya2); 	
				$image34 = str_replace('.jpeg', '', $fotonya2); 									
				$image36 = $c_url."/".$fotonya2.".webp";
				
				
				if (file_exists($image36)){ $image34=$image36;}
				else {
					$result = $ImgCompressor->run($fotonya2, 'jpg', 5);  
					$image35 = $result['gb'];$images = $result['mini'];
					$results2 = $ImgCompressor->mini($images,$image35, 136, 136,'mini_');  
					$image34 = str_replace('.png', '', 'mini_'.$image35);
					$image34 = str_replace('.jpg', '', $image34); 								
					$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
					$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
				}
			}	else { $a_image_tiga_paket=$c_url."/compressed/no-pictures.svg"; }	
			
?>	
							
				<div>
					<div class="aiuoe">
						<div class="thumbnail-media">
							<a href="<?php echo $c_url."/review-pelanggan-".$a_data['link']; ?>">
								<img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $a_image_tiga_paket;?>"/>
							</a>
						</div>
						<div class="gbpos2">
							<span class="tanggal">
								<a class="tg"><?php echo date('d', strtotime($a_tanggal)); ?></a>
								<a class="bln"><?php echo date('M - Y', strtotime($a_tanggal)); ?></a>
							</span>
						</div>
						<a href="<?php echo $c_url."/review-pelanggan-".$a_data['link']; ?>">
							<div class="h5">Review  Pengunjung Oleh <?php echo $a_nama; ?></div>
						</a>
						<span style="padding-top:5px;padding-bottom:5px;" class="rating secondary-color">
							<i class="gambarbintang5"></i>
							<span> ( Skor 5 )</span>
						</span>
						<div class="prices">
							<span class="current font-2"><?php echo $tipemesin; ?></span>
						</div>
					</div>		
				</div>	
				<?php } ?>	
			</div>
			<div id="gallery">
				<h2 class="judultama">Gallery <?php echo $site_name;?></h2>
				<a class="more tombolutama btn" aria-label="Mesin Fotocopy Canon" href="http://192.168.43.16/php/mesin-fotocopy-canon">Lihat Semua <i class="fa fa-chevron-right"></i></a>
				<div class="fclear"></div>	
				<div id="hasilgallery" class="_2phds"></div>	
			</div>			
<style>
.artikel{margin:10px;}
.artikel img{
    width: 100%;
    margin: 20px 0 auto;
    border-radius: 8px;
    object-fit: cover;
    overflow: hidden;
    box-shadow: 0 2px 4px 0 rgba(27,27,27,.2);	
}
.artikel .judul{
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 13px;
    height: 50px;
    margin: 16px 0 0;  
}
.rating_review{margin:5px 0;}
</style>		
			<h2 class="judultama">Event & News <?php echo $site_name;?></h2>
			<a class="more tombolutama btn" aria-label="Mesin Fotocopy Canon" href="http://192.168.43.16/php/mesin-fotocopy-canon">Lihat Semua <i class="fa fa-chevron-right"></i></a>
			<div class="fclear"></div>
			<div class="slider cust">
<?php
$query_tv = ("SELECT * FROM videos order by videos.id desc limit 4");
$jml_tv = $db->num_rows($query_tv);
if ($jml_tv > 0) {
	$hasil_tv = $db->query($query_tv); $total=0;
	while ($data_tv = $hasil_tv->fetch_array(MYSQLI_BOTH)) {	
		$a_id=$data_tv['id'];
		$a_thumbnail=$data_tv['thumbnail'];
		$a_title=$data_tv['title'];
		$link = strtolower($a_title);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('  ', '', $link);
		$link = str_replace('   ', '', $link);
		$link = str_replace('.', '-', $link);	
		$link = replace_character($link);
		$fotonya2 = "tv/upload/videos/$a_thumbnail";
							
			if (file_exists($fotonya2)){ 
				$image34 = str_replace('.png', '', $fotonya2);
				$image34 = str_replace('.jpg', '', $fotonya2); 	
				$image34 = str_replace('.jpeg', '', $fotonya2); 									
				$image36 = $c_url."/".$fotonya2.".webp";
				
				
				if (file_exists($image36)){ $image34=$image36;}
				else {
					$result = $ImgCompressor->run($fotonya2, 'jpg', 5);  
					$image35 = $result['gb'];$images = $result['mini'];
					$results2 = $ImgCompressor->mini($images,$image35, 136, 136,'mini_');  
					$image34 = str_replace('.png', '', 'mini_'.$image35);
					$image34 = str_replace('.jpg', '', $image34); 								
					$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
					$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
				}
			}	else { $a_image_tiga_paket=$c_url."/compressed/no-pictures.svg"; }	
			
?>			
				<div>
					<div class="artikel">
						<a href="<?php echo "$c_url/tv/video/$a_id/";?>">
							<img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo "$a_image_tiga_paket"; ?>" alt="<?php echo $a_title;?>" title="<?php echo $a_title;?>">
							<h5 class="judul"><?php echo $a_title;?></h5>
							<small></small>
						</a>
					</div>		
				</div>	
<?php }} ?>	
				
			</div>
			<div class="fclear"></div>

<div class="content-list has-shadow">
                <header class="content-list-header flex-wrap">
                    <h2 class="h3">Inspirasi Cerita Seller</h2>
                    <div>
                        <a class="seemore" href="https://www.tokopedia.com/seller-story/stories/" target="_blank" rel="noopener">Lihat Semua</a>
                    </div>
                </header>
                <ul class="list seller-story-list seller-story-list--full list--clean">
					<li class="list-item">
						<div class="list-item-content">
							<div class="list-item-thumbnail">
								<a class="is-gtm-trigger" href="https://www.tokopedia.com/seller-story/sellerstory/hobi-ilustrasi-jadi-bisnis-art-craft-ideku-handmade/">
									<img src="https://img.youtube.com/vi/0eBjex_a3vM/mqdefault.jpg" alt="">
								</a>
							</div>
							<div class="list-item-detail">
								<h3 class="list-item-detail__intro"><strong>Martha Puri</strong> berjualan di Ideku Handmade</h3>
								<div class="list-item-detail__excerpt">“Ide hanya ide kalau cuma dipikirin aja dan gak diwujudin menjadi sebuah karya. Kalo semangatnya ada, produknya ada, dan platform jualannya udah ada… Mulai Aja Dulu”</div>
							</div>
						</div>
					</li>
					<li class="list-item">
						<div class="list-item-content">
							<div class="list-item-thumbnail">
								<a class="is-gtm-trigger" href="https://www.tokopedia.com/seller-story/sellerstory/hobi-ilustrasi-jadi-bisnis-art-craft-ideku-handmade/">
									<img src="https://img.youtube.com/vi/0eBjex_a3vM/mqdefault.jpg" alt="">
								</a>
							</div>
							<div class="list-item-detail">
								<h3 class="list-item-detail__intro"><strong>Martha Puri</strong> berjualan di Ideku Handmade</h3>
								<div class="list-item-detail__excerpt">“Ide hanya ide kalau cuma dipikirin aja dan gak diwujudin menjadi sebuah karya. Kalo semangatnya ada, produknya ada, dan platform jualannya udah ada… Mulai Aja Dulu”</div>
							</div>
						</div>
					</li>
					<li class="list-item">
						<div class="list-item-content">
							<div class="list-item-thumbnail">
								<a class="is-gtm-trigger" href="https://www.tokopedia.com/seller-story/sellerstory/hobi-ilustrasi-jadi-bisnis-art-craft-ideku-handmade/">
									<img src="https://img.youtube.com/vi/0eBjex_a3vM/mqdefault.jpg" alt="">
								</a>
							</div>
							<div class="list-item-detail">
								<h3 class="list-item-detail__intro"><strong>Martha Puri</strong> berjualan di Ideku Handmade</h3>
								<div class="list-item-detail__excerpt">“Ide hanya ide kalau cuma dipikirin aja dan gak diwujudin menjadi sebuah karya. Kalo semangatnya ada, produknya ada, dan platform jualannya udah ada… Mulai Aja Dulu”</div>
							</div>
						</div>
					</li>
					<li class="list-item">
						<div class="list-item-content">
							<div class="list-item-thumbnail">
								<a class="is-gtm-trigger" href="https://www.tokopedia.com/seller-story/sellerstory/hobi-ilustrasi-jadi-bisnis-art-craft-ideku-handmade/">
									<img src="https://img.youtube.com/vi/0eBjex_a3vM/mqdefault.jpg" alt="">
								</a>
							</div>
							<div class="list-item-detail">
								<h3 class="list-item-detail__intro"><strong>Martha Puri</strong> berjualan di Ideku Handmade</h3>
								<div class="list-item-detail__excerpt">“Ide hanya ide kalau cuma dipikirin aja dan gak diwujudin menjadi sebuah karya. Kalo semangatnya ada, produknya ada, dan platform jualannya udah ada… Mulai Aja Dulu”</div>
							</div>
						</div>
					</li>					
				 </ul>
            </div>
			
	<div class="accordion-container">
		<div id="caris2">
			<div class="section-head">
				<h1 class="section-title">F.A.Q pengunjung <?php echo $site_name;?></h1>
				<p class="section-subtitle">
					Beberapa pertanyaan yang sering ditanyakan oleh pelanggan. Berikut adalah daftara pertanyaan yang sering ditanyakan pengunjung :
				</p>
			</div>
			<div class="QA" itemscope itemtype="https://schema.org/FAQPage">
	<?php 	
	$sql_qa = ("select *  from qa ORDER BY qa_sort  ASC LIMIT 12"); 
	$qa_result = $db->query($sql_qa);
	while ($faq = $qa_result->fetch_array(MYSQLI_BOTH)) {	
	?>			
				<div class="accordion" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><?php echo $faq['qa_question'];?></div>
				<div class="accordion-item__body" id="answer-<?php echo $faq['idqa'];?>" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> <?php echo $faq['qa_answer'];?> </div>
	<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>
<script>
function slider(){
	var slideId = ["slide1","slide2","slide3"];
	var currentSlide = 0;
	var slideInterval = setInterval(nextSlide(0),200);
	
	document.querySelectorAll('.nextslideswipe').forEach(item => {
		item.addEventListener('click', event => {
			var slideno = item.getAttribute("data-index");
			nextSlide(slideno);
		});
	});	
	
	document.querySelectorAll('.prevslideswipe').forEach(item => {
	  item.addEventListener('click', event => {
		  var slideno = item.getAttribute("data-index");			  
		  prevslide(slideno);
		});
	});		
		
	
	function nextSlide(no){
		var x = document.getElementsByClassName(slideId[no])[0];
		var y = x.getElementsByClassName("slideutama");
		y[0].className = 'slideutama';
		y[currentSlide].className = 'slideutama';
		currentSlide = (currentSlide+1)%y.length;
		if(currentSlide >= y.length){ currentSlide = 0;}
		y[currentSlide].className = 'slideutama showing';
	}


	function prevslide(no){
		var x = document.getElementsByClassName(slideId[no])[0];
		var y = x.getElementsByClassName("slideutama");
		y[currentSlide].className = 'slideutama';
		currentSlide = (currentSlide-1)%y.length;
		if(currentSlide < 0){ currentSlide = (y.length-1);}
		y[currentSlide].className = 'slideutama showing';
	}	
}
function accordion(){	
	var acc = document.getElementsByClassName("accordion");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			panel.classList.toggle("active");
		});
	}	
}
	

slider(); 	accordion();
</script>
<script type="text/javascript" async src="<?php echo $c_cdn;?>/plugin/slick/slick.min.js"></script>
<script type="text/javascript"  async src="<?php echo $c_cdn;?>/plugin/ig/ig.min.js"></script>
<script async>
$("#qahilang").html("");
$("#qahilang").hide();
var vload="<center><img style='width:100%; height:40px;' src='<?php echo $c_url;?>/compressed/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Sedang Loading... Mohon Tunggu Sebentar.</h2></center>";
function klosevjax(a){$(".vjax-layer-"+a).hide(); $("."+a).hide();$(".vjax-layer").hide();}		
$(".vjax").click(function(){
					var urlload = $(this).data('load');
					var urllink = $(this).data('content');	
					$(".vjax-load").show();
					$(".vjax-load").html(vload);
					$(".vjax-layer-"+urlload).show();
					if(!$(".vjax-layer-"+urlload).is(':empty')){					
						$(".vjax-layer").hide();$("."+urlload).show();	
					}
					else{
						$.ajax({ 
							type:"post", 
							url:"<?php echo $c_url;?>/ajaxp-"+urlload,
							data : {urllink : urllink},
							success:function(data){
								$(".vjax-layer-"+urlload).html(data);
								lazyload();
								
								$("#klose-"+urlload).click(function(){klosevjax(urlload);});
							}
						});	
					}
});	

				
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 20000,
});
$('.cust').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 20000,
});				
function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}
$(".ft-arw-up").click(function(){topFunction();});

function ajaxnew(url, type, cFunction) {
	var xhttp;
	xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  
	try {JSON.parse(xhttp.responseText);} 
	catch (e) {return false;}
	
    if (this.readyState == 4 && this.status == 200) {
		cFunction(this);
    }
  };
  xhttp.open(type, url, true);
  xhttp.send();
}

$(document).on('scroll', function() {
	var batas = $('.z10').position().top+($('.sebelahsidebar').height()/2);
    if($(this).scrollTop()>= batas){
		$(".sidebar").removeAttr("id");
    } else {$(".sidebar").attr("id","expertise");}
});
function getgallery(xhttp) {
	var data=JSON.parse(xhttp.responseText);
	data.forEach(function(gallery) {
		document.getElementById("hasilgallery").innerHTML += "<div class='_37bsg _2PKKH'><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src='"+gallery.fotonya2+"' title='"+gallery.caption+"' alt='"+gallery.caption+"'/></div>";
		lazyload();
	});		
}
ajaxnew("<?php echo $c_url;?>/ajaxp-getgalery?page=1&link=<?php echo $data['category_link']; ?>", 'GET', getgallery);

changelink();
</script>	
<link href="<?php echo $c_cdn;?>/plugin/slick/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo $c_cdn;?>/plugin/slick/slick-theme.css" rel="stylesheet" type="text/css">
