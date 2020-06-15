<?php

if(isset($loadcss)) {require_once STYLE_DIR.DS.$location;}

$ulasan_produk = "select * from ulasan where pid = ".$data['id_produk']." and status ='y' ORDER BY tanggal DESC";
$total_ulasan_produk = $db->num_rows($ulasan_produk);
$mini_deskripsi = explode("</h2>",$data['informasi']);

		$iconfolder=$c_cdn."/new/images/amp/";
		$icon1=$iconfolder."free-shipping.svg";
		$icon2=$iconfolder."trainingbaru.svg";
		$icon3=$iconfolder."sertifikat.svg";
		$icon4=$iconfolder."jaminanservis.svg";
		$icon5=$iconfolder."usbotg1.svg";
		$icon6=$iconfolder."aplikasikeuangan.svg";

		$bonus1="Gratiss Ongkir Sampai Lokasi";
		$bonus2="Training Penggunaan";
		$bonus3="Sertifikat Vanectro";
		$bonus4="Garansi Seumur Hidup";
		$bonus5="USB OTG + Konten";
		$bonus6="Aplikasi Stock + Penjualan";
		
		$bonus = array(
			$bonus1 => array($bonus1,$icon1),
			$bonus2 => array($bonus2,$icon2),
			$bonus3 => array($bonus3,$icon3),
			$bonus4 => array($bonus4,$icon4),
			$bonus5 => array($bonus5,$icon5),
			$bonus6 => array($bonus6,$icon6)
		);

?>
<div id="hilang" class="qoNbQ _2phds">
    <div class="container">
		<div class="breadcrums">
			<ol class="_20qbZ _2rsFp" itemscope itemtype="https://schema.org/BreadcrumbList" >
				<li class="_3k3mh" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<meta itemprop="position" content="1">
					<a itemprop="item"  href="<?php echo $c_url;?>" title="<?php echo $site_name;?>">
						<span itemprop="name"><?php echo $site_name;?></span>
					</a>
				</li>
				<li class="_3k3mh" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<meta itemprop="position" content="2">
					<meta itemprop="name" content="<?php echo $data['category_name'];?>">				
					<a itemprop="item"  href="<?php echo $c_url."/layanan/".$data['category_link'];?>" title="<?php echo $data['category_name'];?>" data-linksnya="<?php echo $data['category_link'];?>" data-link="layanan">
						<span itemprop="name"><?php echo $data['category_name'];?></span>
					</a>
				</li>
				<li class="_3k3mh" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<meta itemprop="position" content="3">				
					<a itemprop="item"  href="<?php echo $c_url."/wisata/".$data['link'];?>"  title="<?php echo $data['nama_produk'];?>" data-linksnya="<?php echo $data['nama_produk'];?>" data-link="layanan">
						<span itemprop="name"><?php echo $data['nama_produk'];?></span>
					</a>			
				</li>
			</ol>
		</div>
		<div class="gantunganbanner">
			<div class="infojudul">
				<h1 class="m0"><?php echo $data['nama_produk'];?></h1>
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
				<div class="_27Ld6 vjax" data-content="<?php echo $data['link']; ?>" data-load="gallerydetail">Lihat Semua Gambar</div>
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
				<button id="hubungipenyedia3" class="_9wJf5 _2_jL8" type="button">Hubungi Penyedia</button>
			</div>
			<div class="col-md-12 styles-guaranteeContainer-2lhOV"></div>	
		</div>
	</div>
<div id="faq" >
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
					<div class="accordion" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
						<span  itemprop="name"><?php echo $faq['qa_question'];?></span>
						<div class="hidden" id="answer-<?php echo $faq['idqa'];?>" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><div itemprop="text"> <?php echo $faq['qa_answer'];?> bla bla bla bla </div></div>
					</div>
					<div class="accordion-item__body"> <?php echo $faq['qa_answer'];?> bla bla bla bla </div>
		<?php } ?>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>	
	
</div>
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
	console.log("oke");
	window.open(alinkchat);
}
document.getElementById("hubungipenyedia3").addEventListener("click", callwa_detail);
</script>
<script type="application/ld+json">
{
   "@context" : "http://schema.org",
   "@type" : "Hotel",
   "url" : "<?php echo $c_url.$urlnyaamp2; ?>",
   "hasMap" : "<?php echo $$urlgmap;?>",
   "image" : "<?php echo $fotonya2; ?>",
   "aggregateRating" : {
      "@type" : "AggregateRating",
      "reviewCount" : <?php echo $total_ulasan_produk;?>,
      "ratingValue" : 5,
      "bestRating" : 5
   },
	"name" : "<?php echo $data['nama_produk'];?>",	 
   "description" : "<?php echo $mini_deskripsi;?>",
   "priceRange" : "Harga untuk tanggal mendatang dimulai dari Rp <?php echo format_rupiah($data['harga_baru']);?> per malam (Kami Samakan Harganya)",
   "name" : "<?php echo format_rupiah($data['nama_produk']);?>",
   "address" : {
      "@type" : "PostalAddress",
      "addressLocality" : "<?php echo $d_alamat1;?>",
      "addressCountry" : "Indonesia",
      "streetAddress" : "<?php echo $d_alamat1;?>",
      "postalCode" : "<?php echo $d_pos;?>",
	  "telephone" : "<?php echo $d_telp;?>",
	  "name" : "<?php echo $site_name;?>",	  
      "addressRegion" : "<?php echo $d_kota;?>"
   }
}
</script>
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>
