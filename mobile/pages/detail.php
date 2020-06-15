<?PHP
/* 
* Warpsite MVC Framework version 1.0 
*
* Author	    : Jauhari Malik
* Description 	: MVC Framework - Index Page
*/
function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

error_reporting(E_ALL | E_STRICT); 

function int2($s){$s=(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);  return $s;}
function int($s){$pattern = '/([^0-9]+)/';$s = preg_replace($pattern,'',$s); return $s;}
require CONTROL_MODULE.DS."productspec.php";
$detail_paket=new produk_spec; 

if($a_cat=="Mesin Fotocopy Warna"){$cat="Warna";} else {$cat="B/W";}
if($a_hot=="Baru"){$ppn="Sudah"; $kondisi="New";} else {$ppn="Belum"; $kondisi="Used";} 

if(($a_cat=="Mesin Fotocopy Warna")||($a_cat=="Mesin Fotocopy Hitam Putih")){
	$speedmesin=$detail_paket->cekspeed($a_nama_produk,$a_speed_a);
	$hasilprint=$detail_paket->fiturprint($speedmesin,$a_cat);
	$dayalistrik=$detail_paket->cekdaya($speedmesin,$a_cat);
	$sudahdadf=$detail_paket->cekdadf($a_brand,$a_hot2,$a_harga_baru,$a_nama_produk);
	$tray1=$detail_paket->cekkertas($speedmesin);
	$maxkertas=$detail_paket->cekukurankertas($a_hot2,$a_harga_baru);
	$koneksimesin=$detail_paket->cekkoneksi($brand,$a_hot2);
	$kapasitastoner=$detail_paket->cektoner($a_cat,$speedmesin);
	$cat=$detail_paket->jenis($a_cat);
	$stok=$detail_paket->stok($a_nama_produk);	
	
	$kapasitas_awal = substr($speedmesin,0,2);
	$kapasitas = ((($kapasitas_awal+($kapasitas_awal*0.2)) * 10000));	
}
$serimesin=int($a_nama_produk);
$serimesin1=substr($serimesin,0,4);
$serimesin2=substr($serimesin,0,-4);

function clearstyle($a_spec){
	$full_spek = preg_replace('/style=\\"[^\\"]*\\"/', '', $a_spec); 
	$full_spek = str_replace('align="left"', '', $full_spek);
	$full_spek = str_replace('bordercolor="#cccccc"', '', $full_spek);
	$full_spek = str_replace('lign="left"', '', $full_spek);
	$full_spek = str_replace('bordercolorlight="#FFFFFF"', '', $full_spek);
	return $full_spek;
}

$fotohub=$c_cdn."/new/images/hubungi/";
$foto1=$fotohub."mario1.jpg";
$foto2=$fotohub."mas-tri.jpg";
$foto3=$fotohub."hani2.jpg";
$foto4=$fotohub."rusli.jpg";
$foto5=$fotohub."wawan2.jpg";
$foto6=$fotohub."lia.jpg";
$foto7=$fotohub."fauzan.jpg";

if($cek_sewa!=''){
	$hpfooter=$hptelp_tekhnisi; $namafooter="Pak ".$marketing_tekhnisi; $posisi_footer=$posisi_tekhnisi; $telp_ori_footer=$telp_tekhnisi_ori; $gb_footer=$foto5;	
} else if(($a_cat!='Mesin Fotocopy Warna')&&($a_cat!='Mesin Fotocopy Hitam Putih')){ 
	$hpfooter=$hptelp_akunting; $namafooter="Bu ".$marketing_akunting; $posisi_footer=$posisi_akunting; $telp_ori_footer=$telp_akunting_ori; $gb_footer=$foto6;
}
else {
	$hpfooter=$hp; $namafooter="Pak ".$marketing_mesin; $posisi_footer=$posisi_marketing; $telp_ori_footer=$telp_original; $gb_footer=$foto1;
}
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":1,"ratingValue":5,"reviewCount":<?php echo $total_review+1;?>},  
  "description": "<?php echo"$site_description";?>",
  "itemCondition":"<?php if($a_hot=="Baru"){ echo "new ";} else { echo "refurbished ";} ?>",
  "name": "<?php echo $page_title; ?>",
  "image": "<?php echo $site_image ?>",
  "offers": {
    "@type": "Offer",
    "availability": "http://schema.org/InStock",
	"price": "<?php echo $a_harga_baru ?>",
    "priceCurrency": "IDR",
	"seller" : {"@type":"Thing","name":"<?php echo $site_name;?>"}
  },
  "review": [
<?php	
$no=0;				
$ulasan = ("select *  from ulasan where pid ='".$a_id."' and status ='y' ORDER BY tanggal DESC");
$hasilulasan = $db->query($ulasan);
while ($data_u = $hasilulasan->fetch_array(MYSQLI_BOTH)) {	
$rate = $data_u['rating'];
$review = $data_u['review'];
$uid = $data_u['userid'];
$judul = $data_u['judul'];
$unama = $data_u['nama'];
$id = $data_u['id'];
$no=$no+1;
$review =str_replace("<div>","",$review);
$review =str_replace("<div>","",$review);
$review =str_replace("&nbsp;","",$review);
$review =str_replace("<br>","",$review);
$review =str_replace("</br>","",$review);
$review = htmlspecialchars($review);
$nos=ceil($no/10);
?>
    {
      "@type": "Review",
      "author": "<?php echo $unama; ?>",
      "datePublished": "<?php echo date('Y-m-d', strtotime($data_u['tanggal']));?>",
      "description": "<?php echo $review;?>",
      "name": "<?php echo $judul; ?>",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
		}
	},		
 <?php } ?>
	{
      "author": "<?php echo $site_name; ?>",
      "datePublished": "2018-04-15",
      "description": "Belanja di vanectro memang bisa dipercaya keren banget ya",
      "name": "Jauhari Malik - Vanectro Bisa Dipercaya",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
	  }
	}
	]  
}
</script>

				<amp-lightbox id="feature" class="dark-bg light" layout="nodisplay">
					<div class="lightbox " tabindex="0">
						<div class="middle modal-dialog putih">
							<div class="row modal-content">                        
								<div class="modal-body sidebar">
									<span class="title-popup"><strong>Feature  <?php echo ucwords($a_nama_produk);?></strong></span>
									<a on="tap:feature.close" role="button" class="close-modal bli-close"><i class="fa fa-close"></i> </a>
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<?php 
												$a_deskripsi_a = preg_replace('#(<[a-z ]*)(style=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $a_deskripsi_a);
												echo $a_deskripsi_a;?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</amp-lightbox>		
<article class="product container-fluid container-full pt51">
    <section>
            <!-- Slider - start -->
            <div class="col-xs-12">
					<amp-carousel class="preview"
								  layout="responsive"
								  type="slides"
								  autoplay
								  delay="8500"
								  width="500"
								  height="500">
									<?php if(empty($a_image)) {} else {?><a><amp-img src="<?PHP echo $a_image; ?>"  class="fotoslide" layout="responsive" width=500 height=500></amp-img></a><?php } ?>  
									<?php if(empty($a_image1)){} else {?><a><amp-img src="<?PHP echo $a_image1; ?>" class="fotoslide" layout="responsive" width=500 height=500></amp-img></a><?php } ?>  
									<?php if(empty($a_image2)){} else {?><a><amp-img src="<?PHP echo $a_image2; ?>" class="fotoslide" layout="responsive" width=500 height=500></amp-img></a><?php } ?> 
									<?php if(empty($a_image5)){} else {?><a><amp-img src="<?PHP echo $a_image5; ?>" class="fotoslide" layout="responsive" width=500 height=500></amp-img></a><?php } ?>
									<?php if(empty($a_image6)){} else {?><a><amp-img src="<?PHP echo $a_image6; ?>" class="fotoslide" layout="responsive" width=500 height=500></amp-img></a><?php } ?>	
					</amp-carousel><!-- CAROUSEL ENDS -->
            </div>	
		<div class="d-block">		
            <!-- Slider - end -->
			<div class="container-fluid dp__title">
				<h1 class="dp__name Mesin_Fotocopy_Paling_LARIS"><?php echo strtoupper($a_nama_produk);?> <?php if(($a_category =="Mesin Fotocopy Warna")||($a_category =="Mesin Fotocopy Hitam Putih")){?> - <span class="brush" ><?php echo strtoupper($a_hot);?></span><?php } ?></h1> 
				<div class="container-fluid container-full border-top border-btm clearfix">
				  <div class="row">
					<div class="col-xs-4 pt20">
						<?php $total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");?>
						<div class="primary-color">
						<b>
							<?php if($total_review>2){ echo $total_review; } else { echo "5";} 
							$test1 = ("select *  from produk_statistik where produk_id = ".$a_id."");
							$test2 = $db->query($test1);$totaltest=0;
							while ($test3 = $test2->fetch_array(MYSQLI_BOTH)) 
							{$viewer = $test3['hits'];$totaltest += $viewer;}?>
						</b>
						<b><small class="primary-color">Ulasan </small></b>
						</div>
					</div>					  
					<div class="col-xs-4 pt20">
						<b><small class="primary-color">Terjual </small> <?php $terjual=int2(($totaltest/215)+1); $total_order2=$total_ulasan_pelanggan+$total_pembeli2+$total_pemesan2+$terjual; echo $total_order2;?></b>
					</div>
					<div class="col-xs-4 pt20">
						<b><small class="primary-color">Dilihat </small> <?php echo $totaltest;?></b>
					</div>				
				  </div>
				</div>
			</div>
			<div class="dp__header--right">
				<div class="dp__header__body">
					<div class="dp__header__info">
						<div class="dp__price__wrapper">
							<div class="dp__price__col">
								<div class="dp__price__hot">
									<div class="dp__hot">
										<i class="mi mi-12 marr--sm">loyalty</i> 
										<span>Produk Laris!</span>
									</div> 
									<span class="text--default"><b><?php echo $total_order2;?> </b></span> orang telah membeli produk ini
								</div> 
								<div class="dp__price__row">
									<div class="dp__price dp__price--1">Rp <?php echo format_rupiah($a_harga_lama); ?></div>
								</div> 
								<div class="dp__price__row dp__price__row--mid">
									<div class="dp__price dp__price--2">Rp <span><?php echo format_rupiah($a_harga_baru); ?></span></div> 
								</div>
								<div class="dp__price__row dp__price__row--mid">
									<div class="dp__price__disc"><span>Hemat <?php echo format_rupiah($c); ?> %</span></div> <!---->
								</div> 
							</div>
						</div>
						<span class="product__shipping">
							<amp-img layout="fixed" srcset="<?php echo $c_cdn;?>/new/images/amp/free-shipping.svg" width="60" height="60" ></amp-img>
						</span>						
						<div class="dp__shipment__info">
							<div class="dp__shipment__col">Dijual & Dikirim dari <span class="text--default"><b> <?php echo strtoupper($site_name);?></b></span></div> 
							<div class="dp__shipment__additional">
								<div class="dp__shipment__col">Cek Ongkir : <span class="text--default"><b>
									<a href="<?php echo $c_url ?>/pengiriman" title="<?PHP echo $a_nama_produk; ?>" >Klik Disini !</a> </b></span></div> 
								<div class="dp__shipment__col">Keunggulan : <span class="text--default"><b><a on="tap:feature">Klik Disini</a> </b></span></div>
							</div>
						</div> 
<form method="post" class="p2" action-xhr="<?php echo $c_url;?>/ajaxp-maddtocart" target="_top">
	<div class="ampstart-input inline-block relative m0 p0 mb3">
		<input type="hidden" class="hidden" name="produkid" value="<?php echo $a_id;?>" placeholder="produkid..." required>
		<input type="hidden" class="hidden" name="harga" value="<?php echo format_rupiah($a_harga_baru); ?>" placeholder="harga..." required>
		<input type="hidden" class="hidden" name="qty" value="1" placeholder="qty..." required>
		<input type="hidden" class="hidden" name="buy" value="belisekarang" placeholder="buy..." required>
		<input type="hidden" class="hidden" name="kota2" value="" placeholder="kota2..." required>
	</div>
	<div class="dp__action">
		<input type="submit"value="Beli Sekarang" class="button button__group button--cta button--lg full">						
		<div class="wl__add">
			<div class="popover">
				<div class="popover__trigger">
					<button class="button__group">
						<i class="mi mi-16 text--red marr--sm">favorite</i>
						<span class="wl__link">Tambah ke Watchlist</span>
					</button>
				</div> 
			</div>
		</div>
	</div>	 
	<div class="container-fluid">
		<div submit-success>
			<template type="amp-mustache">{{pesan}}</template>
		</div>
		<div submit-error>
			<template type="amp-mustache">{{pesan}}</template>
		</div>
	</div>  
</form>								
					</div> 
		
					<?php //echo "whatsapp://send?phone=6281280336345&text=Nama : ".$n."Nama Kota : ".$n."Pak Mario, saya mau nego tentang mesin fotocopy ".$n." ".$a_nama_produk.$n." Harganya kan Rp ".$a_harga_baru.$n." Boleh turun lagi nggak?? Tolong Segera Di Respond...";?>
							
					<div class="dp__si">
						<div class="dp__si__wrapper">
							<div class="dp__si__header hidden--small">
								<div class="dp__si__title">Informasi Dealer</div>
							</div> 
							<amp-accordion>
								<section expanded="">
									<h6 aria-expanded="true">							
									<div class="dp__si__header hidden--widescreen-only dp__si__header--active">
										<div class="dp__si__title">
											<i class="mi mi-24 marr--md">store</i> Informasi Penjual
										</div> 
										<i class="mi mi-18">keyboard_arrow_down</i>
									</div>
									</h6>
									<div>							
										<div class="dp__si__content">
											<div class="dp__si__row">
												<div class="dp__si__block">
													<div class="dp__si__top">
														<div class="dp__si__pp">
															<a href="" class="profile__picture profile__picture--store profile__picture--3">
																<amp-img src="<?php echo $c_cdn;?>/new/images/logo-mini.png" width="40" height="40" alt="dealer"></amp-img>
															</a>
														</div> 
														<div class="dp__si__desc">
															<div class="dp__si__name">
																<a href="<?php echo $c_url;?>/tentang-kami"><?php echo ucwords($site_name);?></a>
															</div> 
															<a href="<?php echo $c_url;?>/hubungi" class="dp__si__pm">
																<i class="mi mi-12 marr--sm">email</i>
																<span>Lihat Kontak Penjual</span>
															</a>
														</div> <!---->
													</div>
												</div> 
												<div class="dp__si__block flex--center">
													<div class="dp__stat">
														<div class="dp__stat__heading">Data Penjualan selama bulan <?php echo ucwords(date('M')." - ".date('Y'));?></div> 
														<div class="dp__stat__col"><b>100%</b> <span>Transaksi Berhasil</span></div> 
														<div class="dp__stat__col"><b>1 - 7 Hari</b> <span>Kecepatan Pengiriman</span></div>
													</div>
												</div>												
											</div> 
											<div class="dp__si__row">
												<div class="dp__si__block">
													<div class="dp__si__doc">
														<button class="flex--simple">
															<i class="mi mi-18 marr--sm">keyboard_arrow_right</i>
															<span class="link link--normal text--default--80">Gratiss Ongkir Jabodetabek !!</span>
														</button> 
														<button class="flex--simple">
															<i class="mi mi-18 marr--sm">keyboard_arrow_right</i>
															<span class="link link--normal text--default--80">Garansi Resmi Seumur Hidup !!</span>
														</button> 
														<button class="flex--simple">
															<i class="mi mi-18 marr--sm">keyboard_arrow_right</i>
															<span class="link link--normal text--default--80">Garansi 100% Uang Kembali !!</span>
														</button>
													</div>
												</div> 
											</div>
										</div>
									</div>
								</section>
							</amp-accordion>
						</div>
					</div>
				</div>
			</div>			
        </div>

        <!-- Offer - start -->
        <!-- Offer - end -->

        <!-- Share - start -->
		<div class="space-2"></div>
		<div class="pekat2 container-fluid">		
			<div class="row social">
				<div class="space-2"></div>
				<div class="col-xs-12 ">
					<div class="col-xs-3 primary-color pt20 padding-left-0 padding-right-0">
						<b>Bagikan !!</b>
					</div>
					<div class="col-xs-9 margin-bottom-0 padding-left-0 padding-right-0">
						<a href="https://facebook.com/sharer/sharer.php?u=<?php echo $app->CURRENT_URL(); ?>" target="_blank">
							<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/fb.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
						</a>
						<a target="_blank" href="https://twitter.com/share?url=<?php echo $app->CURRENT_URL(); ?>&text=<?php echo $page_title." - ".$c_title ?>&via=<?php echo $c_title ?>">
							<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/twit.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
						</a>
						<a target="_blank" href="https://plus.google.com/share?url=<?php echo $app->CURRENT_URL(); ?>">
							<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/gp.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
						</a>
						<a target="_blank" href="whatsapp://send?text=<?php echo $page_title." - ".$c_title ?>.&#10; %0AKunjungi : <?php echo $app->CURRENT_URL(); ?>">
							<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/wa3.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
						</a>
						<a target="_top" href="http://line.me/R/msg/text/?<?php echo $page_title." - ".$c_title ?>-%20Harga%20Terbaik%20%0D%0A<?php echo $app->CURRENT_URL(); ?>">
							<amp-img class="borderbulat" width="36" height="36" src="<?php echo $c_cdn;?>/new/images/amp/line.svg" layout="responsive" alt="Unit Mesin Fotocopy Baru" ></amp-img>
						</a>
					</div>		
				</div>
			</div>
		</div>
        <!-- Share - end -->
		<div class="space-2"></div>
    </section>
<div class="container-fluid container-full hala">
	<div class="halb hala">		
	<amp-selector role="tablist"
	  layout="container"
	  class="ampTabContainer">
	 <?php if(($a_cat =="Mesin Fotocopy Warna")||($a_cat =="Mesin Fotocopy Hitam Putih")){?> 
	  <div role="tab"
		class="tabButton"
		selected
		option="spoilera"> Deskripsi </div>
	  <div role="tabpanel" class="tabContent">
		<div class="container-fluid container-full">
			<div class="dp__tab__content__row">
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Brand</span> 
					<span class="dp__tab__content__content"><?php echo ucwords($a_brands);?></span>
				</div>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Kondisi</span> 
					<span class="dp__tab__content__content"><?php echo ucwords($a_hot);?></span>
				</div>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Kategori</span> 
					<span class="dp__tab__content__content"><?php echo $a_cat;?></span>
				</div>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Kecepatan</span> 
					<span class="dp__tab__content__content"><?php echo $speedmesin;?> Lembar / Menit</span>
				</div>					
				<?php if($cek_sewa!=''){  ?>				
					<?php if($a_nama_produk=='Sewa Mesin Fotocopy Warna'){  ?>
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Biaya Per Klik BW A4 / A3</span>
							<span class="dp__tab__content__content"> Rp 175,- </span>
						</div>	
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Biaya Per Klik Warna A4 / F4</span>
							<span class="dp__tab__content__content"> Rp 1.250,- </span>
						</div>	
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Biaya Per Klik Warna A3</span>
							<span class="dp__tab__content__content"> Rp 2.000,- </span>
						</div>		
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Free Copy BW A4 / A3</span>
							<span class="dp__tab__content__content"> 1.500 - 2.000 Lembar </span>
						</div>	
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Free Copy Warna A4 / F4</span>
							<span class="dp__tab__content__content"> 200 - 500 Lembar </span>
						</div>	
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Free Copy Warna A3</span>
							<span class="dp__tab__content__content"> 100 - 300 Lembar </span>
						</div>								
					<?php } else { ?>
						<div class="dp__tab__content__col">
							<span class="dp__tab__content__label">Biaya Per Klik</span>
							<span class="dp__tab__content__content"> Rp 85,- </span>
						</div>							
					<?php } ?>
				<?php } else { ?>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Kapasitas</span> 
					<span class="dp__tab__content__content"><?php echo format_rupiah($kapasitas); ?> Lembar / Bulan</span>
				</div>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Garansi</span>
					<span class="dp__tab__content__content"> <?php if(($a_hot!='Rekondisi')&&($a_brands=='canon')){echo "Garansi Seumur Hidup";} else {echo"Garansi Resmi 1 Tahun";} ?> </span>
				</div>				
				<?php } ?>
			</div>
			<div class="pekat2 dp__tab__content__row">
			<hr>
			<table> 			
				<tbody> 						
					<tr><td> Penawaran Harga : <?php if($a_harga_baru<=1000000){ echo "<span class='red'> Hubungi : $d_telp / $telp_marketing </span>";} else { echo "Rp ".format_rupiah($a_harga_baru);}?> </td></tr> 			
					<tr><td> Hasil Ulasan : <?php echo $a_cat; ?> dengan 
							 <?php if($kapasitas>=250000){echo"Kapasitas Cetak Besar";} else {echo "Kapasitas Cetak Standard";} ?>, Jaminan 
							 <?php if($a_hot=='Baru'){echo"Garansi Seumur Hidup";} else {echo "Garansi Resmi 1 Tahun";} ?>.</td></tr> 			
					<tr><td> Saran : Sangat Cocok untuk <?php if($a_hot=='Rekondisi'){echo"Pelaku Usaha Fotocopy";} else {echo "Perkantoran atau Pemerintahan";} ?> yang membutuhkan Mesin <?php echo $a_hot; ?> 
							<?php if($a_cat=='Mesin Fotocopy Warna'){echo"Hasil Cetak Warna";} ?> dengan <?php if($a_brand=='Canon'){echo"Biaya Bulanan Rendah, Tangguh &amp; Murah";} else { echo" Kualitas Tinggi";}?>.</td></tr> 			
				</tbody> 			
			</table>
			</div>
			
			<div class="container-fluid artikelpilihan">
				<div class="row">
						<br>
						<div class="colpaket uinfobox">
							<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Spesifikasi : <?php echo ucwords($a_nama_produk_sewa);?></div>
						</div>				
						<ul>
							<li>Kondisi Unit : <?php if($a_hot=="Rekondisi"){  echo ucwords(strtolower($a_hot))." - Kondisi 98% Normal, Import Bekas Amerika";} else {echo "100% Original - ".ucwords(strtolower($a_hot));}?> </td>
							<li>Maks. Ukuran Kertas : <?php echo $maxkertas; ?></li>
							<li>Kapasitas Rak 1 : <?php echo $tray1; ?></li>
							<li>Daya Listrik Minimal : <?php echo $dayalistrik; ?></li>
							<li>Koneksi ke Mesin Fotocopy : <?php echo $koneksimesin; ?></li>
							<li>Fitur Print : <?php echo $hasilprint; ?></li>
							<li>Kapasitas Rata-Rata Toner / KG : 
							<?php if(($cek_sewa!='')&&($a_nama_produk=='Sewa Mesin Fotocopy Warna')){  ?>
							Hitam Putih : 24.000 / Warna : 15.000 Lembar Per KG
							<?php } else { echo $kapasitastoner;} ?></li>
							<li>Support Bolak Balik : <?php echo $sudahdadf; ?></li>
						</ul>
						<br>
						<div class="colpaket uinfobox">
							<div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> Fitur : <?php echo ucwords($a_nama_produk_sewa);?></div>
						</div>	
						<?php echo clearstyle($a_deskripsi_a); ?>	
				</div>
			</div>
		</div>
	  </div>
	 <?php } else { ?>
	  <div role="tab"
		class="tabButton"
		selected
		option="spoilera"> Deskripsi </div>
	  <div role="tabpanel" class="tabContent">
		<div class="container-fluid container-full">
			<div class="dp__tab__content__row">
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Brand</span> 
					<span class="dp__tab__content__content"><?php echo ucwords($a_brands);?></span>
				</div>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Garansi</span>
					<span class="dp__tab__content__content"> <?php if(($a_brands=='canon')&&($a_hot=='Baru')){echo "Garansi Life Time";} else {echo"Garansi Resmi 1 Tahun";} ?> </span>
				</div>
				<div class="dp__tab__content__col">
					<span class="dp__tab__content__label">Kategori</span> 
					<span class="dp__tab__content__content"><?php echo $a_cat;?></span>
				</div>
			</div>
			<div class="container-fluid artikelpilihan">
				<div class="row">
					<div class="col-xs-12">
						<?php echo clearstyle($a_deskripsi_a); ?>									
					</div>
				</div>
			</div>
		</div>
	  </div>	 
	 <?php } ?>
	  <div role="tab"
		class="tabButton"
		option="spoilerb"> Ulasan</div>
	  <div role="tabpanel" class="tabContent">
		<div class="pekat2 rate rating">
			<section class="rating__aggregate rating__color--5">
				<div class="rating__aggregate__score">5 / 5</div> 
				<article class="rating__stars">
					<?php for($i=0;$i<5;$i++){ ?><i class="mi mi-24">star</i><?php } ?>
				</article> 
				<div class="rating__count"><?php if($total_review>2){ echo $total_review; } else { echo "5";} ?> Ulasan</div>
			</section> 
		</div>	
		<div class="container-fluid">					
			<!-- TITLE STARTS -->
			<div class="row">
				<div class="col-xs-12">		
		<?php   $ulasan = ("select *  from ulasan where pid = ".$a_id." and status ='y' ORDER BY tanggal DESC limit 10");
				$hasilulasan = $db->query($ulasan);
				$total_ulasan = 
				$total=0;
				while ($data_u = $hasilulasan->fetch_array(MYSQLI_BOTH)) {	
					$rate = $data_u['rating'];
					$review = $data_u['review'];
					$uid = $data_u['userid'];
					$unama = $data_u['nama'];
					$u_judul = $data_u['judul'];
					$u_tanggal=$data_u['tanggal']
		?>		
					<div class="inneronecolumn left artikelpilihan">
						<h2><?php echo ucwords(strtolower($u_judul));?></h2>
						<div class="hr"></div>
						<div class="Xc61c primary-bg light-color"><b>5.0</b></div>
						<p><b><span class="small"><?php echo date('d - m - Y', strtotime($u_tanggal));?></span><br><span class="small"> Diulas : <?php echo ucwords(strtolower($unama));?></span></b><br><br><?php echo $review;?></p>
						<br>
					</div>
		<?php } if($total_review>10){ ?>
				<center><a href="<?php echo $c_url."/ulasan/".$a_brands."-".$a_link; ?>" class="button flower-bg light-color"><i class="fa fa-check-square-o"></i> Lihat Semua Ulasan </a></center>
		<?php } ?>		
				</div><!-- COL-XS-12 ENDS -->
			</div><!-- ROW ENDS -->
		</div>	
		<?php  require PLUG.'/mobile/help3.php'; ?>
		</div>
	  <div role="tab"
		class="tabButton"
		option="spoilerc"> Info</div>
	  <div role="tabpanel" class="tabContent">
			<div class="container-fluid container-full">
				<?php 
					$query_sparepart="select * from produk where (nama_produk like '%".$serimesin1."%') and (harga_baru>10000) AND (category not like '%mesin fotocopy%') order by  produk.harga_baru asc";
					$query_seri_mesin="select * from produk where (nama_produk like '%".$serimesin1."%') and (harga_baru>10000) and (sewa='' and paket='') AND (category like '%mesin fotocopy%') order by  produk.category desc,  produk.harga_baru asc, produk.brand asc,  produk.hot desc limit 1 ";
					$jml_part= $db->num_rows($query_sparepart);
					
					$data_seri_mesin = ($query_seri_mesin); 
					$result_data_seri_mesin = $db->query($data_seri_mesin);	
					$a_data_seri_mesin = $result_data_seri_mesin->fetch_array(MYSQLI_BOTH);
					
					if($jml_part>0){
				?>
					<div class="pageHeader pekat2"><div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Sparepart <?php echo $a_data_seri_mesin['nama_produk'];?></span> !! </div></div>				
					<amp-carousel class="blog-carousel" layout="fixed-height" height=294>
						<?php 
							$data_produk_sparepart = ($query_sparepart); $totalrate23=0; $totalpembeli=0;
							$result_sparepart = $db->query($data_produk_sparepart);
							while ($a_data_sparepart = $result_sparepart->fetch_array(MYSQLI_BOTH)) {		
								$urutan++;
								$sparepart_link = $a_data_sparepart['link'];
								$sparepart_id = $a_data_sparepart['id_produk'];
								$sparepart_nama_produk = strtoupper($a_data_sparepart['nama_produk']);
								$sparepart_brand = $a_data_sparepart['brand'];
								$sparepart_image_tiga = $a_data_sparepart['image_3'];
								$sparepart_harga_baru = $a_data_sparepart['harga_baru'];
								$sparepart_rekomendasi = $a_data_sparepart['rekomendasi'];
								$sparepart_brands=$mesin->linkbrand($sparepart_brand);
								$total_review_sparepart = $db->num_rows("select * from ulasan where pid ='".$sparepart_id."'");
							?>				
							<div class="capronego blog-carousel-item" >
								<div class="preview2">
									<amp-img width="150" height="150" src="<?PHP echo $c_url."/".$sparepart_image_tiga; ?>" layout="responsive" alt="<?PHP echo $sparepart_nama_produk; ?>" ></amp-img>																											
								</div>
								<div class="infopro">
								<a href="<?php echo "$c_url/$sparepart_brands-$sparepart_link";?>" class="capronego blog-carousel-item">
									<h5 class="margin-0"><?PHP echo $sparepart_nama_produk; ?></h5>
									<div class="divDetailProductItemPrice">Rp <?php echo format_rupiah($sparepart_harga_baru); ?></div>		
									<?php  if($total_review_sparepart>2){?>
									<div class="pt20 rating">
										<?php for($i=0;$i<5;$i++) { ?><i  class="fa fa-star"></i><?php } ?>
										<span > ( <?php echo $total_review_sparepart; ?> Ulasan ) </span>
									</div>
									<?php } else { ?> 
									<div class="pt20 rating">
										<?php for($i=0;$i<5;$i++) { ?><i  class="fa fa-star-o"></i><?php } ?>
										<span > ( 0 Ulasan ) </span>
									</div>							
									<?php } ?>
								</a>						
								<div class="mt30">
								<a href="sms:<?php echo $telponya; ?>?body=Pak Mario, Saya Mau Nego <?php echo "$a_brands - $a_nama_produk";?>, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" class="button button-small  primary-bg light-color" >Nego Aja</a>	
								<a href="<?php echo "$c_url/$a_brands-$a_link";?>" class="button button-small  primary-bg light-color" >Detail</a>
								</div>
								</div>						
							</div>					
							<?php } ?>
					</amp-carousel><!-- BLOG CAROUSEL ENDS -->
				<?php } ?>
				<div class="space-2"></div>
				<div class="text-center new-product-title Mesin_Fotocopy_Paling_LARIS">Cara Belanja di <span class="brush" ><?php echo $site_name;?></span> !! </div>
					<amp-youtube width="480"
					  height="270"
					  layout="responsive"
					  data-videoid="gygZCrE5kKo"
					  autoplay >
					</amp-youtube>					
					<!-- BONES-PRODUCT-GRID AND BONES-PRODUCT-LIST-ITEM STARTS -->	
					<div class="container-fluid container-full pekat2 pt20">	
						<div class="dp__tab__content__row">
							<div class="dp__tab__content__col">
								<span class="dp__tab__content__content"> <?PHP echo $legal_pt; ?> </span>
							</div>
							<div class="dp__tab__content__col">
								<span class="dp__tab__content__label">Siup</span> 
								<span class="dp__tab__content__content"> <?php echo $legal_siup;?></span>
							</div>
							<div class="dp__tab__content__col">
								<span class="dp__tab__content__label">TDP</span>
								<span class="dp__tab__content__content"> <?php echo $legal_tdp;?> </span>
							</div>
							<div class="dp__tab__content__col">
								<span class="dp__tab__content__label">NPWP</span> 
								<span class="dp__tab__content__content"> <?php echo $legal_npwp;?> </span>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<?php  echo clearstyle($a_deskripsi)."<br>".clearstyle($a_spec); ?>
							</div>
						</div>
					</div>
			
		</div>
		
	 </div>
	</amp-selector>		
	</div>	
	<?php  require PLUG.'/mobile/keunggulan.php'; ?>

</div><!-- SLIDER ENDS -->
					<div class="dp__si">
						<div class="dp__si__wrapper">
							<div class="dp__si__header hidden--small">
								<div class="dp__si__title">Tanyakan Dulu</div>
							</div> 						
										<div class="dp__si__content">
											<div class="dp__si__row">
												<div class="border8">
													<div class="dp__si__top">
														<div class="dp__si__pp">
															<a href="" class="profile__picture profile__picture--store profile__picture--3">
																<amp-img src="<?php echo $gb_footer; ?>" width="60" height="60" alt="dealer"></amp-img>
															</a>
														</div> 
														<div class="dp__si__desc">
															<div class="dp__si__name">
																<?php echo $namafooter;?> - <?php echo $posisi_footer;?>
															</div> 
															<div class="dp__stat__col"><b><?php echo $telp_ori_footer;?> </b></div>
														</div> <!---->
													</div>
												</div> 										
											</div> 
										</div>
						</div>
					</div>
					<br>
<?php
require_once PLUG.DS."con_tv.php";
$identifikasi=$serimesin1;
$sql = "SELECT * FROM videos where title like '%$serimesin1%' or details like '%$serimesin1%' order by videos.id desc";
$result = $mysqli2->query($sql);

if ($result->num_rows > 0) {
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
			<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Video <span class="brush" >TUTORIAL</span> <?php echo $site_name;?> !! </div>
				<amp-carousel class="blog-carousel" layout="fixed-height" height=205>
<?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$a_id=$row['id'];
		$a_thumbnail=$row['thumbnail'];
		$a_title=$row['title'];
		$a_hits=$row['hits'];
		$a_day=$row['day'];
		$a_month=$row['month'];
		$a_year=$row['year'];
		$a_tanggal=$a_day."/".$a_month."/".$a_year;
		$link = strtolower($a_title);
		$link = str_replace(' ', '-', $link);
		$link = str_replace('  ', '', $link);
		$link = str_replace('   ', '', $link);
		$link = str_replace('.', '-', $link);	
		$link = replace_character($link);
 ?>	
										
					<a href="<?php echo "$c_url/tv/video/$a_id/";?>" class="capro2 capro24 tvlayer blog-carousel-item">
						<amp-img width="150" height="190" src="<?php echo "$c_url/tv/upload/videos/$a_thumbnail"; ?>" layout="responsive" alt="<?php echo $a_title;?>" ></amp-img>																																
						<div class="infopro2 blog-carousel-item-caption">
							<h5 class="margin-0"><?php echo $a_title;?> </h5>
							<small><?php echo $a_tanggal;?>  -  Lihat Videonya <i class="fa fa-arrow-right"></i></small>
						</div>
					</a>
<?php } ?>					
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
			</div>
		</div><!-- COL-XS-12 ENDS -->					
	</div>	
	
<?php } ?>	
<?php 
$total_pelanggan = $db->num_rows("SELECT id from aktivitas_pelanggan where tipemesin like'%".$serimesin1."%'"); 
if ($total_pelanggan >1) {
$total_pelanggan= $total_pelanggan+180; 
?>	
	
	<div class="container-fluid sbawah pt20">		
		<div class="row">
			<div class="col-xs-12 ">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS"> <?php echo format_rupiah($total_pelanggan);?>++ <span class="brush">PELANGGAN</span> Terdaftar !! </div>
				<hr>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
	</div>
	<div class="container-fluid">					
		<!-- TITLE STARTS -->
		<div class="row">
			<div class="col-xs-12">
				<amp-carousel class="blog-carousel" type="slides" autoplay delay="5500" layout="fixed-height" height=209>	
						<?php 	$data_produk = ("select *  from aktivitas_pelanggan where (tipemesin like '%".$serimesin1."%')"); ?>
						<?php
						$result = $db->query($data_produk);
						while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {	
						$rate =$a_data['rating']; $tanggal =$a_data['tanggal']; $namapel=$a_data['nama']; $namapel = str_replace(' ', '.', $namapel); $namapel = str_replace('..', '.', $namapel); $namapel = str_replace('...', '.', $namapel); $emailpel=strtolower($namapel); ?>	

					<a href="<?php echo $c_url."/pembeli-".$a_data['link']; ?>" class="capro23 blog-carousel-item">
						<div class="preview"><amp-img src="<?php echo $c_cdn_img."/".$a_data['foto']; ?>" layout="fill" class="contain"></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<small><?php for($i=0;$i<5;$i++) { ?><i  class="fa fa-star rating"  title="<?php echo $rate;?>"></i><?php }?> -  <?php echo date('d/m/Y', strtotime($a_data['tanggal']))." - ".ucwords($namapel);?></small>							
							<br><br><h5 class="margin-0">Pengiriman : <?php echo ucwords($a_data['lokasi']); ?> </h5>
							<small><?php echo ucwords($a_data['tipemesin']); ?></small>
						</div>
					</a>
							
 <?php } ?>					
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
				<center><a href="<?php echo $c_url;?>/pelanggan-setia" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-photo"></i> Lihat Semua Pelanggan <i class="fa fa-caret-right icon-at-right"></i></a></center>	
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->			
		
	</div><!-- CONTAINER-FLUID ENDS -->	
<?php }?>	
</article>			