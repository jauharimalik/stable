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
	float:left;
	width:100%;
    position: relative;
    margin: 16px 0;
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

.mt40 {
    margin-top: 10px;
    padding: 0;
}
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
.inforoom p{
    font-size: 12px;
    height: 70px;
    overflow: hidden;
	margin: 10px 0 0;	
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
.slickrate {
    font-size: 12px;
    font-weight: bold;
    color: #1ba0e2;
}
.slickrate .gambarbintang5 {
    zoom: .8;
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
._1I80I._2U4Tz {
    font-size: 12px;
    line-height: 1px;
}
.hargalama {
    color: #8f8f8f;
    font-size: 12px;
    line-height: 1.2;
    text-decoration: line-through;
}
.r3PsG {
    margin-top: 4px;
    font-size: 16px;
    line-height: 1.17;
    color: #F96D01;
    font-weight: 700;
}
.absroom ._2_jL8 {
    width: 100%;
}
._2_jL8 {
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 700;
    line-height: 17px;
    padding: 8px 40px;
    margin: 8px auto;
    width: 250px;
    text-align: center;
}
._2_jL8, a._2_jL8, a._2_jL8:focus, a._2_jL8:hover {
    color: #fff;
}
._9wJf5 {
    background: #0770cd;
}


.bagul{
    width: 25%;
    float: left;
    margin-right: 5%;	
}
.bagul h2{
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: .375em;	
}
.bagul p {
    margin-bottom: 3.75em;
    font-size: 1.7rem;
}
.ibtn{
    width: 1.375em;
    height: 1.375em;
    background-color: #23a2f4;
    overflow: hidden;
    padding: .563em;
    font-size: medium;
    box-sizing: initial;
	fill: #fff;
    display: flex;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.25);
}
.rm{
    font-size: 1.6rem;
    font-weight: 700;
    padding-left: 10px;
    line-height: 40px;
}
.nw{
    overflow-x: scroll;
    display: flex;	
}
.nx{flex: 1 0 20em;padding: 0 0 0 2em;margin: 2.125em 0 4.125em;}
.nx:last-child {padding-right: 2em;}
.nk{display: flex;flex-direction: column;box-shadow: 0 15px 30px 0 rgba(0,0,0,.15);}
.-n_ {
    font-size: 1.3rem;
    font-weight: 700;
    text-transform: uppercase;
    padding: .625em 24px;
}
.nj {background-color: #23a2f4;}
.nq {padding: 0 24px;font-size: 1.4rem;height: 70px;overflow: hidden;}
.nz {padding: 0 24px;margin-bottom: 1em;}
.ibtn {
    width: 1.375em;
    height: 1.375em;
    background-color: #23a2f4;
    overflow: hidden;
    padding: .563em;
    font-size: medium;
    box-sizing: initial;
    fill: #fff;
    display: flex;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.25);
}
</style>
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <defs> 
<symbol id="external" viewBox="0 0 64 64"> <path d="M28.879 11.24c-0.841-0.841-2.206-0.841-3.048 0s-0.841 2.207 0 3.048l15.543 15.543h-39.241c-1.219 0-2.133 0.987-2.133 2.133 0 1.219 0.914 2.207 2.133 2.207h39.241l-15.616 15.543c-0.841 0.841-0.841 2.206 0 3.048 0.835 0.841 2.206 0.841 3.048 0l19.273-19.279c0.841-0.841 0.841-2.206 0-3.048l-19.2-19.194zM59.429 27.392c2.511 0 4.571 2.060 4.571 4.571s-2.060 4.571-4.571 4.571-4.571-2.060-4.571-4.571 2.060-4.571 4.571-4.571z"/></symbol>
</defs></svg>
<?php 
$sql_produk = ("SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id where category_link='$urlnya'  ORDER BY produk.rekomendasi  ASC LIMIT 6"); 
$result_produk= $db->query($sql_produk);
$jml_prod= $db->num_rows($sql_produk);
if($jml_prod >= 1){
?>
<div class="fclear"></div>
<div class="qoNbQ _2phds">
    <div class="container">
		<div class="TCzhH">Rekomendasi Lainnya :</div>
<?php 	
while ($aprod = $result_produk->fetch_array(MYSQLI_BOTH)) {	
	$image_category = $aprod['foto_mini'];
	$image_category = explode("<br>",$image_category);
	$fotonya2 = $image_category[0];
	$info = $aprod['informasi'];
	$info = explode("</h2>",$info);
	$vid_sub = str_replace('<p class="section-subtitle">',"",$info[1]);
	$vid_sub = str_replace("</p>","",$vid_sub);		
	$prod_review = $db->num_rows("select * from ulasan where pid ='".$aprod['id_produk']."'");	
?>	

		<a href="<?php echo $c_url."/wisata/".$aprod['link'];?>" title="<?php echo $aprod['nama_produk'];?>" data-linksnya="<?php echo $aprod['link'];?>" data-link="wisata">
		<div class="gantunganbanner mt40">
			<div class="fotoroom"><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo webpimage($fotonya2,500,340);?>" title="<?php echo $aprod['nama_produk'];?>" alt="<?php echo $aprod['nama_produk'];?>"/></div>
			<div class="inforoom">
				<h2 class="namawis"><?php echo $aprod['nama_produk'];?></h2>
				<div class="slickrate"><span class="gambarbintang5"></span> (<?php echo format_rupiah($prod_review);?> Review)</div>
				<p><?php echo $vid_sub;?></p>
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
<?php } ?>
<div class="fclear"></div>
<div class="sparator"></div>	
<div class="container">
	<div id="ulasancat"></div>
	<div class="sparator"></div>
</div>
<div class="container rekomendasipro">
<div class="z10">
			<div id="gallery">
				<h2 class="judultama">Gallery <?php echo $site_name;?></h2>
				<a class="more tombolutama btn" aria-label="Mesin Fotocopy Canon" href="http://192.168.43.16/php/mesin-fotocopy-canon">Lihat Semua <i class="fa fa-chevron-right"></i></a>
				<div class="fclear"></div>	
				<div id="hasilgallery" class="_2phds"></div>	
			</div>			
			<div class="fclear"></div>
			<div class="content-list">
                <header class="content-list-header">
                    <h2 class="h3">Inspirasi Cerita Seller</h2>
                    <div>
                        <a class="seemore" href="https://www.tokopedia.com/seller-story/stories/" target="_blank" rel="noopener">Lihat Semua</a>
                    </div>
                </header>
                <ul>
					<li class="list-item">
						<div class="list-item-content">
							<div class="list-item-thumbnail">
								<a class="" href="https://www.tokopedia.com/seller-story/sellerstory/hobi-ilustrasi-jadi-bisnis-art-craft-ideku-handmade/">
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
			<div class="fclear"></div>
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
accordion();
</script>
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

		;
		
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

function getgallery(xhttp) {
	var data=JSON.parse(xhttp.responseText);
	data.forEach(function(gallery) {
		document.getElementById("hasilgallery").innerHTML += "<div class='_37bsg _2PKKH'><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src='"+gallery.fotonya2+"' title='"+gallery.caption+"' alt='"+gallery.caption+"'/></div>";
		lazyload();
	});		
}
ajaxnew("<?php echo $c_url;?>/ajaxp-getgalery?page=1&link=<?php echo $data['category_link']; ?>", 'GET', getgallery);

var urlnya=$("#urlnya").text();
function getulasancat(xhttp) {
	var data=JSON.parse(xhttp.responseText);
	data.forEach(function(data2) {
		document.getElementById("ulasancat").innerHTML = "<div class='bagul'><h2>Review Kunjungan</h2><p>Kumpulan kesan dan pesan beberapa orang, ketika mengunjungi "+data2.nama_wisata+", yang berhasil kami dokumentasikan.</p> <a class='dflex' href='<?php echo $c_url;?>/review'> <div class='ibtn'><svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#external'></use></svg></div> <span class='rm'>Lihat Semua Review</span> </a> </div><div class='nw' id='hasilulasancat'></div>";
		data2.hasil.forEach(function(gallery) {
			document.getElementById("hasilulasancat").innerHTML +="<a class='nx' href='"+gallery.link+"'><div class='nk'> <div class='-n_'>"+gallery.nama_produk+"</div><div class='nj'><img src='<?php echo $c_url;?>/compressed/loading2.svg'  alt='Review Kunjungan oleh "+gallery.nama+"' title='Review Kunjungan oleh "+gallery.nama+"' data-src='"+gallery.photosmall+"'/></div><h5 class='nq'>Review Kunjungan oleh "+gallery.nama+" dari "+gallery.lokasi+" </h5><div class='nz'><div class='slickrate'><span class='gambarbintang5'></span> ( Sangat Memuaskan )</div>"+gallery.tanggal+"</div></div></a>";
			lazyload();
		});	
	});		
}
ajaxnew("<?php echo $c_url;?>/ajaxp-getulasancat?urlnya="+urlnya+"&format=json&foldercache=jsondata", 'GET', getulasancat);
</script>	