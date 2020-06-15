<?php
$data = $db->wisata($urlnya);

$ulasan_produk = "select * from ulasan where pid = ".$data['id_produk']." and status ='y' ORDER BY tanggal DESC";
$total_ulasan_produk = $db->num_rows($ulasan_produk);
$jumlah_page_ulasan = ceil($total_ulasan_produk/10);
if($jumlah_page_ulasan >= 5){ $maxpage = 5;}
else {$maxpage = $jumlah_page_ulasan; }

		$iconfolder=$c_url."/compressed/traveloka/";
		$icon1=$iconfolder."ac.png";
		$icon2=$iconfolder."resto.png";
		$icon3=$iconfolder."pool.png";
		$icon4=$iconfolder."24.png";
		$icon5=$iconfolder."parkir.png";
		$icon6=$iconfolder."wifi.png";

		$bonus1="AC Terbaik";
		$bonus2="Resto & Cafe";
		$bonus3="Kolam Renang";
		$bonus4="Akses 24 Jam";
		$bonus5="Parkir Gratiss";
		$bonus6="Wifi Gratiss";
		
		$bonus = array(
			$bonus1 => array($bonus1,$icon1),
			$bonus2 => array($bonus2,$icon2),
			$bonus3 => array($bonus3,$icon3),
			$bonus4 => array($bonus4,$icon4),
			$bonus5 => array($bonus5,$icon5),
			$bonus6 => array($bonus6,$icon6)
		);
		

?>
<style>
.styles-guaranteeContainer-2lhOV {
    background: #3c3c3c;
    padding: 24px 32px;
    color: #fff;
    width: calc(100% + 40px);
    float: left;
    margin-left: -20px;
    margin-right: -20px;
    margin-bottom: 10px;
}
.styles-guaranteeContainer-2lhOV > div:first-child {
    font-size: 16px;
    line-height: 18px;
    margin-right: 28px;
    font-weight: bold;
    float: left;
    padding: 12px 0;
}
.styles-guaranteeListWrapper-3GLce {display: flex;}
.styles-guaranteedFacilityWrapper-2g9LZ {
    align-items: center;
    display: flex;
    justify-content: left;
    width: 20%;
}
.styles-guaranteedFacilityWrapper-2g9LZ > .styles-icon-1ru7L {
margin-right: 6px;
    border-radius: 50%;
    line-height: 3px;
    padding: 8px;
    background: #fff;
}
.styles-guaranteedFacilityWrapper-2g9LZ span:nth-child(2) {display: block;}
.styles-asterisk-18ZHz {
    color: #139deb;
    margin: 0 2px 0 2px;
}
.styles-icon-1ru7L img{
	height: 35px;
    width: 35px;
    zoom: .8;
}

._23yVt {
    padding: 0;
    width: 100%;
    float: left;
}

._11ApF {
    color: #434343;
    font-size: 18px;
    line-height: 1.33;
    margin-bottom: 16px;
}

._2tyHb {
    display: block;
    float: left;
    width: 160px;
    padding: 0 16px;
}
._1duXc {
    background-color: #fff;
    border-radius: 50%;
    color: #fff;
    height: 128px;
    margin-bottom: 16px;
    overflow: hidden;
    position: relative;
    width: 128px;
    border: 8px solid #235d9f;
    padding: 4px;
}
._3TWbq {
    background-color: #083d77;
    border-radius: 50%;
    width: 104px;
    height: 104px;
    line-height: 104px;
    font-size: 56px;
    font-weight: 500;
    text-align: center;
}
._1j675 {
    color: #083d77;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
}
._2Znxx, ._3hqgY {
    display: block;
    float: left;
}
._3hqgY {
    width: calc(50% - 80px);
    padding: 8px 48px;
}
._1mzIB {
    border-spacing: 0 16px;
    display: table;
    margin-bottom: -16px;
    margin-top: -16px;
    width: 100%;
}
._3X_yr {
    display: table-row;
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
}
.lavOi {
    left: 0;
    min-width: 90px;
}
._3L18e, .lavOi, .Zvn-C {
    display: table-cell;
    vertical-align: middle;
}
.Zvn-C {
    padding-left: 10px;
    padding-right: 10px;
    width: 100%;
}
._3L18e, .lavOi, .Zvn-C {
    display: table-cell;
    vertical-align: middle;
}
._1K79- {
    background-color: #f6f6f6;
    border-radius: 4px;
    height: 8px;
    overflow: hidden;
    position: relative;
    width: 100%;
}
._177yq {
    background-color: #083d77;
}
.LcgOz {
    border-radius: inherit;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition: transform .2s linear;
    transition: transform .2s linear;
    width: 100%;
}
._1pVTL {
    color: #083d77;
}
._3L18e {
    min-width: 20px;
    text-align: right;
}
._2Znxx {
    width:calc(50% - 80px);
    padding: 8px 44px;
}
._2Znxx, ._3hqgY {
    display: block;
    float: left;
}

.CfULx {
    border-spacing: 0 16px;
    display: table;
    margin-bottom: -16px;
    margin-top: -16px;
    width: 100%;
}

._3h5lo {
    display: table-row;
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
}
.RRhJf {
    left: 0;
    min-width: 90px;
    float: left;
    width: 50%;
}
._3wQ3L {
    padding-left: 40px;
    float: right;
}
._1RoiH._1Fq-V {
    height: 16px;
}
._3ZMQl {
    color: #083d77;
}
.TVJP_ {
    min-width: 20px;
    text-align: right;
}
._1RoiH {
    display: inline-block;
    vertical-align: middle;
}
.gambarbintang5 {
    background-position: 0px -142px;
    width: 78px;
    height: 14px;
    vertical-align: middle;
    background-image: url(<?php echo $c_url;?>/compressed/bintang.webp);
    display: inline-block;
    position: relative;
    top: -0.1rem;
}
#expertise, #istop {
    position: -webkit-sticky;
    position: sticky;
    top: 60px;
}
.navsticky {
    width: 100%;
    background: #fff;
    z-index: 4;
    color: #0770cd;
    box-shadow: 0 2px 4px 0 rgba(27,27,27,.2);
}
._3Se0S>._3zHD8 {
    border-bottom: 4px solid #0770cd;
}
._3zHD8 {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 32px;
    padding: 16px 0 12px;
    cursor: pointer;
}
._3uSlF {
    margin-top: 16px;
    padding-left: 32px;
    padding-right: 32px;
    padding-top: 24px;
}
._3uSlF p{
    margin: 0;
} 
._2KqVL ._3y3V7 {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;font-size: 20px;
}
._2KqVL {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 36px;
}
._160VA {
    width: calc(100% - 200px);
}
._3Q9F4 {
    -webkit-line-clamp: 6;
}
._13N_G._1ZMCB {
    min-height: 244px;
}
._13N_G._3Q9F4 {
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
._13N_G {
    font-size: 16px;
    line-height: 1.5;
    min-height: 72px;
}
._2eCs0 {overflow: hidden;}
._2CntG {
    display: inline-block;
    margin-top: 12px;
    vertical-align: top;
    font-size: 16px;
    font-weight: bold;
    line-height: 1.5;
    color: #1BA0E2;
    cursor: pointer;
}
._10B9X {
margin: 20px 0 60px;
    float: left;
    width: 100%;
    position: relative;
    text-align: center;
}
._3y3V7 {
    font-size: 30px;
    font-weight: bold;
    line-height: 1.2;
}
.UMCE4 {
    clear: both;
}

.UMCE4 ul[data-size="3"] {
    width: 33.333%;
    float: left;
}

.UMCE4 ul {
    padding-left: 0;
    list-style: none;
    margin-top: 0;
}

.HvC7U .svg-icons, .HvC7U img, .HvC7U i, .HvC7U svg {
    position: absolute;
    width: 24px;
    height: 24px;
}

.HvC7U ._3Qnmb {
    padding-left: 40px;
    font-size: 18px;
    font-weight: bold;
}
._2ZJOm>li {
    list-style: disc;
    font-size: 12px;
    margin-left: 20px;
    line-height: 2.3;
    padding-left: 6px;
}
.itemproduknya {
	float:left;
    padding: 1% 0;
    width: 100%;
    color: #eee;
}
.itemproduknya .capronego{
    width: calc(100% - 96px);
    float: left;
}
.Xc61c {
    background: #1ba0e2;
    border-radius: 50%;
    color: #fff;
    float: left;
    font-size: 18px;
    font-weight: bold;
    height: 36px;
    left: 16px;
    line-height: 36px;
    text-align: center;
    width: 36px;
    margin: 10px;
    margin-left: 20px;
}
.judululasan {
    font-size: 18px;
    color: #000;
    line-height: 20px;
}
.judululasan, .capronego h5 {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin: 5px 0 0;
}
.namapengulas {
	font-size: 12px;
    color: rgb(104, 113, 118);
    line-height: 24px;
}
.text-ulasan {
    font-size: 12px;
    color: #000;
    float: left;
    width: 100%;
    padding: 5px 20px;
}
.bintangulasan{float:right; text-align:right;}
.text-ulasan p{margin: 8px 0;float: left;width: 100%;font-size: 16px;}
.tanggalulasan {
    float: left;
    width: 60%;
    color: rgb(104, 113, 118);
}
.bintangulasan .rating {
    padding-top: 0;
}
.rating span {
    color: #083d77;
}
.itemproduknya+.itemproduknya {
    border-top: 1px solid;
    border-color: inherit;
}
._1QTT7 {
    background-color: #fff;
    border-radius: 4px;
    border: 1px solid #ddd;
    margin-bottom: 30px;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    float: left;
	width:100%;
}
.jawabanulasan{
    margin: 20px;
    background: #eee;
    width: calc(100% - 40px);
    padding: 20px;
    border-radius: 4px;
    float: left;
    border: 1px solid #ccc;
    color: #000;	
}
.jawabankepada{
    margin: 0 0 10px;
    color: #1ba0e2;
    font-size: 18px;	
}
.jawabanulasan p{margin: 8px 0;float: left;font-size: 14px;}
._10B9X:after {
    content: "";
    height: 3px;
    background: #1ba0e2;
    position: absolute;
    width: 185px;
    bottom: -20px;
    margin-left: -19%;
}
.pagination {
	display: inline-block;
    margin: 0 0 20px;
    float: right;
}
.pagination li {
	display: inline;
    list-style: none;
    background: #eeeeee;
    color: #1ba0e2;
    padding: 10px 20px;
    margin: 2px;
    border-radius: 4px;
    font-weight: bold;
    font-size: 14px;
	cursor:pointer;
}
.pagination .active{
    color: #fff;
    background: #1ba0e2;	
}

.blu-product__price{
	margin:5px 10px; font-size:14px;
}
.harganow{
    color: #f96d01;
    font-size: 18px;
    line-height: 1;
    font-weight: 700;
    margin-bottom: 4px;
}
.slickrate{
	font-size: 12px;
    font-weight: bold;
    color: #1ba0e2;	
}
.slickrate .gambarbintang5{zoom:.8;}
.hargalama{
    color: #8f8f8f;
    font-size: 16px;
    line-height: 1.8;
    text-decoration: line-through;
    margin: 5px 0 0;
}
.discount{
    color: #ed1c24;	
}
.accordion-container {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    padding: 16px 15px 16px 18px;
    background-color: #fff;
    box-shadow: 0px 5px 15px rgba(189,189,189,0.5);
    border-radius: 4px;
    margin-bottom: 30px;
    float: left;
    width: 100%;	
}
.accordion-container .active {
    display: block;
}
.accordion {
    position: relative;
    border-top: 1px solid #E0E0E0;
    display: block;
    font-weight: 600;
    font-size: 14px;
    padding: 14px 0;
    color: #083d77;	
}
.accordion:after {
    content: "";
    background-image: url(<?php echo $c_url;?>/compressed/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;
    margin-right: 10px;
    float: right;
}
.accordion-container .active:after {
    -webkit-transform: rotate(-90deg);
}
.accordion-item__body {
    display: none;
    position: relative;
    margin-left: 0;
    padding: 10px 0;
    border-bottom: 1px solid #E0E0E0;
    overflow: hidden;
}
._1w00i {
    display: flex;
    color: #0194f3;
    align-items: center;
    margin-top: -2px;
}
._3FN6T {
    margin-left: 8px;
    margin-top: 1px;
}
._3uYWW {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.dflex{display:flex;}
.dblock{display:block!important;}
.mt40{margin-top:10px;padding: 0;}
.fotoroom{
    width: 20%;
    overflow: hidden;	
}
.fotoroom img{object-fit: cover;height: 240px;width: 100%;}
.inforoom{
    width: 55%;
    padding: 20px;
    font-size: 20px;
}
.namawis{
font-weight: bold;
    line-height: 1.33;
    color: #434343;
    font-size: 22px;
    margin: 10px 0 0;
}
.bookcol2{
	width: 25%;
    margin: 0;
    position: relative;
    border-left: 2px solid #eee;
    padding-left: 20px;
}
.inforoom, .bookcol2, .fotoroom{
    float: left;
    height: 170px;	
}
.absroom{
    position: absolute;
    bottom: 0;
    width: 90%;	
}
.absroom ._2_jL8{
	width:100%
}
.TCzhH{
    float: left;
    font-size: 20px;
    color: #0770cd;
    font-weight: 700;
    margin: 10px 0;	
}

.fasil {
    background-image: url(<?php echo $c_url;?>/compressed/traveloka/fasilitas/compact.png);
    background-repeat: no-repeat;
    display: block;
}
.fasil-ac {background-position: -5px -5px;}
.fasil-atm { background-position: -39px -5px;}
.fasil-bisnis { background-position: -73px -5px;}

.fasil-breakfast {


    background-position: -5px -39px;
}

.fasil-difabel {


    background-position: -39px -39px;
}

.fasil-facility {


    background-position: -73px -39px;
}

.fasil-food {


    background-position: -5px -73px;
}

.fasil-jemput {


    background-position: -39px -73px;
}

.fasil-lainnya {


    background-position: -73px -73px;
}

.fasil-pool {


    background-position: -107px -5px;
}

.fasil-public {


    background-position: -107px -39px;
}

.fasil-room {


    background-position: -107px -73px;
}

.fasil-taxi {


    background-position: -5px -107px;
}

.fasil-wifi {


    background-position: -39px -107px;
}
._2phds{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;	
	flex-wrap: wrap;
    width: 100%;
    padding-bottom: 20px;
}
#hasilgallery {
    border-radius: 5px;
    padding: 10px;
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
._2PKKH img {height: 230px;object-fit: cover;}
.pad02{    padding:0 20px 20px;}
#review, #gallery, #faq {
    min-height: 40vh;
    float: left;
    width: 100%;
}
</style>
<div id="expertise" class="navsticky">
	<div class="container dflex">
		<div id="topmenu" class="_3uYWW">
			<a href="#info" class="_3Se0S"><div class="_3zHD8">Info Akomodasi</div></a>
			<a href="#deksripsi"><div class="_3zHD8">Deskripsi</div></a>
			<a href="#kebijakan"><div class="_3zHD8">Kebijakan Akomodasi</div></a>
			<a href="#fasilitas"><div class="_3zHD8">Fasilitas</div></a>
			<a href="#gallery"><div class="_3zHD8">Gallery</div></a>
			<a href="#review"><div class="_3zHD8">Reviews</div></a>
			<a href="#faq"><div class="_3zHD8">F.A.Q</div></a>
		</div>
		<div class="_3zHD8 _1w00i toup">
			Kembali ke Atas
			<div class="_3FN6T">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" stroke-width="0" fill="none" stroke="currentColor" stroke-linecap="round" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path stroke="#0770CD" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 17l6-6 6 6M6 7h12"></path></g></svg>
			</div>
		</div>		
	</div>
</div>
<div id="info" class="qoNbQ _2phds">
    <div class="container">
		<div class="breadcrums">
			<ol class="_20qbZ _2rsFp" vocab="http://schema.org/" typeof="BreadcrumbList">
				<li class="_3k3mh" property="itemListElement" typeof="ListItem">
					<a href="<?php echo $c_url;?>" property="item" typeof="WebPage" title="<?php echo $site_name;?>">
						<span property="name"><?php echo $site_name;?></span>
					</a>
					<span property="position" content="1"></span>
				</li>
				<li class="_3k3mh" property="itemListElement" typeof="ListItem">
					<a href="<?php echo $c_url."/layanan/".$data['category_link'];?>" property="item" typeof="WebPage" title="<?php echo $data['category_name'];?>" data-linksnya="<?php echo $data['category_link'];?>" data-link="layanan">
						<span property="name"><?php echo $data['category_name'];?></span>
					</a>
					<span property="position" content="5"></span>
				</li>
				<li class="_3k3mh" property="itemListElement" typeof="ListItem">
					<span property="name"><?php echo $data['nama_produk'];?></span>
					<span property="position" content="6"></span>
				</li>
			</ol>
		</div>
		<div class="gantunganbanner">
			<div class="infojudul">
				<h1 class="m0" itemprop="name"><?php echo $data['nama_produk'];?></h1>
				<span class="labelcat"><?php echo $data['category_name'];?></span>
				<div class="lokasi">
					<img class="markerlokasi" src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $c_url;?>/compressed/traveloka/marker.svg" title="marker <?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/> 
					<?php echo ucwords(strtolower($d_alamat1));?> 
				</div>
			</div>
			<figure class="framefoto">
				<?php		
					$image = $data['foto_mini'];
					$picture = explode("<br>",$image);
					$fotonya2 = webpimage($picture[0],966,488);
				?>			
				<img src='<?php echo $c_url;?>/compressed/loading2.svg' class="vjax" data-content="<?php echo $data['link']; ?>" data-load="gallerydetail" data-src="<?php echo $fotonya2;?> " title="<?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/>
			</figure>
			<div class="somepoto">
				<?php  for($i=1;$i<=3; $i++){ ?>
					<img src='<?php echo $c_url;?>/compressed/loading2.svg' class="vjax"  data-content="<?php echo $data['link']; ?>" data-load="gallerydetail" data-src="<?php echo webpimage($picture[$i],164,116);?>" title="<?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/>
				<?php } ?>			
				<div class="_27Ld6 vjax" data-content="<?php echo $data['link']; ?>" data-load="gallerydetail" >Lihat Semua Gambar</div>
			</div>
			<div class="pengakuan">
				<div class="_1I80I">Ulasan pengunjung <?php echo $site_name;?></div>
				<div class="mengesankan">
					<div class="_3-G5M"><img class="logobintang" src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $c_url;?>/compressed/traveloka/rate.svg" title="rating <?php echo $data['nama_produk'];?>" alt="rating <?php echo $data['nama_produk'];?>"/>  5.0 Sangat Mengesankan</div>
				</div>
				
				<p> Dari <?php echo $total_ulasan_produk; ?> Ulasan Pengunjung</p>
			</div>
			<div class="bookcol">
				<div class="_1I80I _2U4Tz">Harga mulai dari</div>
				<div class="r3PsG">Rp <?php echo format_rupiah($data['harga_baru']);?></div>
				<button id="hubungipenyedia" class="_9wJf5 _2_jL8" type="button">Hubungi Penyedia</button>
			</div>
						<div class="col-md-12 styles-guaranteeContainer-2lhOV">
							<div>Bonuss Tambahan :</div>
							<div class="styles-guaranteeListWrapper-2fVq1">
								<div>
									<div class="styles-guaranteeListWrapper-3GLce">
										<?php $a=0; foreach ($bonus as $obj_key =>$bonusnya) { $a= $a+1; ?>
										<div class="styles-guaranteedFacilityWrapper-2g9LZ">
											<span aria-labelledby="<?php echo $bonusnya[0];?>" class="styles-icon-1ru7L" role="img">
												<img src="<?php echo $bonusnya[1];?>" alt="<?php echo $bonusnya[0];?>" title="<?php echo $bonusnya[0];?>">
											</span>
											<span><?php echo ucwords(strtolower($obj_key));?></span>
										</div>
										<?php } ?>								
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 _23yVt">
							<div class="WK6Jc">
								<div></div>
								<div>
									<p class="_11ApF">Berdasar <strong ><?php echo $total_ulasan_produk;?></strong> Ulasan Pelanggan : <?php echo ucwords(strtolower($a_tipemesin));?></p>
									<div class="IaIhi">
										<div class="_2tyHb">
											<div class="_1duXc">
												<div class="_3TWbq">5.0</div>
											</div>
											<div class="_1j675">Sangat Puas</div>
										</div>
										<div class="_3hqgY">
											<div class="_1mzIB">
												<div class="_3X_yr">
													<div class="lavOi">Sangat Puas</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(1);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e"><?php echo $total_ulasan_produk;?></div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Cukup Puas</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Biasa Saja</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Kurang Puas</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Kecewa</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
											</div>
										</div>
										<div class="_2Znxx">
											<div class="CfULx">
												<div class="_3h5lo">
													<div class="RRhJf">Kebersihan Lokasi</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Kenyamanan Tempat</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>												
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Makanan Yang Disajikan</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>	
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Kualitas Pelayanan</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>	
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Informasi yang Diberikan</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				
		</div>
	</div>
</div>
<div class="fclear"></div>

<div id="deksripsi">
	<div class="container">
	<div class="_3uSlF">
		<div class="_2KqVL">
			<div class="_3y3V7">Deskripsi</div>
				<div class="_160VA">
					<div class="_2eCs0 _13N_G _1ZMCB _3Q9F4"><?php echo $data['deskripsi'];?></div>
					<div class="_2CntG">Selengkapnya</div>
				</div>
		</div>
	</div>
	</div>
</div>

<div id="kebijakan">
	<div class="container">
		<div class="_3uSlF">
        <div class="_2KqVL">
            <div class="_3y3V7">Kebijakan hotel</div>
            <div class="_160VA">
				<div class="_2eCs0 _13N_G _1ZMCB _3Q9F4"><?php echo $data['ketentuan'];?></div>
                <div class="_2CntG">Selengkapnya</div>
            </div>
        </div>
		</div>
	</div>
</div>

<div id="fasilitas">
	<div class="container">
		<div class="_3y3V7 _10B9X">Fasilitas Tersedia</div>
			<div class="_3uSlF" id="hotelFacility"><?php echo $data['fasilitas']; ?></div>
	</div>
</div>

<div id="gallery">
	<div class="container">
		<div class="_3y3V7 _10B9X">Gallery <?php echo $data['nama_produk'];?></div>
		<div id="hasilgallery" class="_2phds"></div>	
	</div>
</div>

<div id="review">
	<div class="container">
		<div class="_3y3V7 _10B9X">Ulasan Pengunjung</div>
		<div class="_1QTT7 pad02">	
						<div class=" _23yVt">
							<div class="WK6Jc">
								<div></div>
								<div>
									<p class="_11ApF">Berdasar <strong ><?php echo $total_ulasan_produk;?></strong> Ulasan Pelanggan : <?php echo ucwords(strtolower($a_tipemesin));?></p>
									<div class="IaIhi">
										<div class="_2tyHb">
											<div class="_1duXc">
												<div class="_3TWbq">5.0</div>
											</div>
											<div class="_1j675">Sangat Puas</div>
										</div>
										<div class="_3hqgY">
											<div class="_1mzIB">
												<div class="_3X_yr">
													<div class="lavOi">Sangat Puas</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(1);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e"><?php echo $total_ulasan_produk;?></div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Cukup Puas</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Biasa Saja</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Kurang Puas</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
												<div class="_3X_yr">
													<div class="lavOi">Kecewa</div>
													<div class="Zvn-C">
														<div class="_1K79-">
															<div class="_177yq LcgOz" style="transform: scaleX(0);"></div>
														</div>
													</div>
													<div class="_1pVTL _3L18e">0</div>
												</div>
											</div>
										</div>
										<div class="_2Znxx">
											<div class="CfULx">
												<div class="_3h5lo">
													<div class="RRhJf">Kebersihan Lokasi</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Kenyamanan Tempat</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>												
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Makanan Yang Disajikan</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>	
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Kualitas Pelayanan</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>	
												</div>
												<div class="_3h5lo">
													<div class="RRhJf">Informasi yang Diberikan</div>
													<div class="_3wQ3L">
														<div class="_1RoiH _3ZMQl TVJP_ _1Fq-V">
															<span class="gambarbintang5"></span>
														</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		</div>	
		<div id="hasilreview" class="_1QTT7"></div>
		<?php if($jumlah_page_ulasan >= 1) { ?>
		<div class="pagination">
			<ul class="pagination-sm">
				<li class="active"><a onclick='topage(&apos;1&apos;)' class="pfirstu tipsy-atas">Firts</a></li>
				<span class="pgnya">
				<li class="active"><a onclick='topage(&apos;1&apos;)'  class="tipsy-atas">1</a></li>
				<?php for ($x = 2; $x <= $maxpage; $x++) { ?>
				<li><a class="tipsy-atas" onclick='topage(&apos;<?php echo $x; ?>&apos;)'><?php echo $x;?></a></li>
				<?php } ?>
				</span>
				<li><a class="tipsy-atas plastu" onclick='topage(&apos;<?php echo $jumlah_page_ulasan; ?>&apos;)'>Last</a></li>
			</ul>
		</div>
		<?php } ?>
	</div>
</div>	

<div id="faq">
	<div class="container">
		<div class="">
		<div class="_3y3V7 _10B9X">F.A.Q Pengunjung</div>
		<div class="_7_yp-"></div>
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
</div>	
	

<div class="fclear"></div>
<div class="qoNbQ _2phds">
    <div class="container">
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

		<a href="<?php echo $c_url."/wisata/".$aprod['link'];?>" title="<?php echo $aprod['nama_produk'];?>" data-linksnya="<?php echo $aprod['link'];?>" data-link="wisata">
		<div class="gantunganbanner mt40">
			<div class="fotoroom"><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo webpimage($fotonya2,500,340);?>" title="<?php echo $aprod['nama_produk'];?>" alt="<?php echo $aprod['nama_produk'];?>"/></div>
			<div class="inforoom">
				<h2 class="namawis"><?php echo $aprod['nama_produk'];?></h2>
				<div class="slickrate"><span class="gambarbintang5"></span> (<?php echo format_rupiah($prod_review);?> Review)</div>
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
</div>
<div class="fclear"></div>

<div class="fclear"></div>
<?php
$nomor_chat = $d_telp;
$wa_chat = str_replace(" ","",$d_telp)  ;
if(isset($_SERVER['HTTP_REFERER'])){$link_sumber= $_SERVER['HTTP_REFERER'];}
else{$link_sumber=$app->CURRENT_URL();}
?>
<script>
var alinkchat = "<?php echo callwa ($wa_chat,$link_sumber); ?>";
function callwa_detail(){
	$('<a href="'+alinkchat+'" target="blank"></a>')[0].click(); 
	return false;	
}
$('#hubungipenyedia').click(callwa_detail);
</script>
<script>
$("#hilang").html("");
$("#hilang").hide();
var vload="<center><img style='width:100%; height:40px;' src='<?php echo $c_url;?>/compressed/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Sedang Loading... Mohon Tunggu Sebentar.</h2></center>";
				function klosevjax(a){$("."+a).hide();$(".vjax-layer").hide();$("."+a).removeClass("layer");}				
				$(".vjax").click(function(){
					var urlload = $(this).data('load');
					var urllink = $(this).data('content');	
					$(".vjax-load").show();
					$(".vjax-load").html(vload);
					$(".vjax-layer-"+urlload).show();
					$(".vjax-layer-"+urlload).addClass("layer");
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
								lazyload(); changelink();
								$("#klose-"+urlload).click(function(){klosevjax(urlload);});
							}
						});	
					}
				});	
							
				
var lastId,
    topMenu = $("#topmenu"),
    topMenuHeight = topMenu.outerHeight()+15,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});
$(window).scroll(function(){
	if ($(this).scrollTop() < 300) {
       $("#expertise").hide();
    } else {
       $("#expertise").show();
    }
   var fromTop = $(this).scrollTop()+topMenuHeight;
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       menuItems.removeClass("_3Se0S").filter("[href='#"+id+"']").addClass("_3Se0S");
   }   
});	

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

function getulasan(xhttp) {
	var dataulasan=JSON.parse(xhttp.responseText);
	dataulasan.forEach(function(review) {
		document.getElementById("hasilreview").innerHTML += "<div class='itemproduknya'><div class='Xc61c'>"+review.initial+"</div><h4 class='judululasan'>"+review.judul+"</h4><div class='namapengulas'>"+review.nama+" - "+review.nama_produk+" </div>	<div class='text-ulasan'><div class='tanggalulasan'>"+review.tanggal+"</div><div class='bintangulasan'><div class='pt5 rating'><span class='gambarbintang5'></span><span class='tc  primary-col'> ( 5 / 5 ) </span></div></div><p>"+review.text_review+" </p></div><div class='jawabanulasan'><h4 class='jawabankepada'><b> Balasan : "+review.judul+"</b></h4><div class='tanggalulasan'>"+review.tanggal_reply+"</div><p>"+review.isi_jawab+"</p></div></div>";		
	});		  
}

function getgallery(xhttp) {
	var data=JSON.parse(xhttp.responseText);
	data.forEach(function(gallery) {
		document.getElementById("hasilgallery").innerHTML += "<div class='_37bsg _2PKKH'><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src='"+gallery.fotonya2+"' title='"+gallery.caption+"' alt='"+gallery.caption+"'/></div>";
		lazyload();
	});		  
}


ajaxnew("<?php echo $c_url;?>/ajaxp-getulasan?page=1&link=<?php echo $data['link']; ?>", 'GET', getulasan);
ajaxnew("<?php echo $c_url;?>/ajaxp-getgalery?page=1&link=<?php echo $data['link']; ?>", 'GET', getgallery);

function topage(a){ 
	
	$("#hasilreview").html(vload);
	var maxpage = <?php echo $maxpage; ?>;
	var lastpage = <?php echo $jumlah_page_ulasan; ?>;
	var gotopage = parseInt(a); 
	if(gotopage >= 1){
		$(".pprevu").parent().removeClass("active");
		$(".pfirstu").parent().removeClass("active");
		if(gotopage >=3){ 
			var startpage = gotopage-2; 
			var endpage = gotopage+2;	
		} else if(gotopage ==2  && maxpage <=3){
			var startpage = gotopage - 1; 
			var endpage = gotopage +1;		
		}
		else { var startpage = 0; var endpage = 5;} 
		
		if(startpage<=1){
			pageprev = 1;
			startpage = 1;
		}
		if(endpage>=lastpage){
			endpage = lastpage;
		}
		
	}
	
	var listpage = "";
	for (x=startpage; x <=endpage; x++){  
		if(x==gotopage){listpage += "<li class='active'><a class='tipsy-atas'>"+x+"</a></li>"; } 
		else{listpage += "<li><a class='tipsy-atas' onclick='topage(&apos;"+x+"&apos;)'>"+x+"</a></li>"; }
	}
	
	$(".plastu").parent().removeClass("active");
	$(".plastu").attr("onclick","topage('"+lastpage+"')");
	$(".pfirstu").attr("onclick","topage('1')");
	
	if(gotopage == lastpage){
		$(".plastu").parent().addClass("active");
		$(".plastu").removeAttr("onclick");
	}
	
	if(gotopage == 1){
		$(".pfirstu").parent().addClass("active");
		$(".pfirstu").removeAttr("onclick");		
	}	
    $('html, body').animate({
        scrollTop: $("#review").offset().top
    }, 200);
	
	$(".pgnya").html(listpage); pagenavclick();$("#hasilreview").html(""); ajaxnew("<?php echo $c_url;?>/ajaxp-getulasan?page="+gotopage+"&link=<?php echo $data['link']; ?>", 'GET', getulasan);
}	
function pagenavclick(){
	$(".pagination-sm li").click(function(){ var tonya =  $(this).children().attr("onclick"); if (typeof attr !== typeof undefined && attr !== false) {tonya = tonya.replace( /[^\d.]/g, '' ); topage(tonya);}});	
}
$("._2CntG").click(function(){
    $(this).prev().toggleClass("dblock");
	var isdblok =  $(this).prev().hasClass("dblock");
	if(isdblok == true){ $(this).text("Sembunyikan");}
	else { $(this).text("Selengkapnya");}
});
accordion();pagenavclick();			
</script>