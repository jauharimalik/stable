<?php 
function int3($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
require_once(LIB .DS. 'cache.php');

if(isset($_REQUEST['tab_id'])){$tab_id = $_REQUEST['tab_id'];} 
else { $tab_id = "";}

if(isset($_REQUEST['pmore'])){$pmore = $_REQUEST['pmore'];} 
else { $pmore = "";}

$tab_id = int3(str_replace("tab-","",$tab_id));
if($tab_id != "") {
?>
	<?php
	if($tab_id == 2) {
	?>

<style>
.itemproduknya {
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    overflow: hidden;
    border-radius: 4px;
    border: 1px solid;
    margin-left: 1%;
    margin-bottom: 1%;
    margin-top: 1%;
    display: inline-block;
    width: 47.5%;
    color: #eee;
}
.itemproduknya .gbtoko {
    width: 136px;
    height: 186px;
    object-fit: cover;
    float: left;
    margin-right: 10px;
    background: #083c76;
}.judululasan, .capronego h5{
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin: 5px 0 0;
}
.capronego h5{font-size: 12px;}
.negobtn{
    margin: 10px 0;
    padding: 7px 15px;
    border-radius: 4px;
    background-color: rgb(8, 60, 118);
    text-align: center;
    color: #fff;
}			
.capronego .rating{font-size:9px!important;}
.capronego .negobtn{width:80%;}
</style>	
<?php	
		$data_result2=("SELECT * FROM toko ");
		$result = $db->query($data_result2);
		while($row = $result->fetch_array(MYSQLI_BOTH)){
			$toko_iconmin= $row['toko_iconmin'];
			$toko_title=$row['toko_title'];
			$toko_link=seo_title($row['toko_link']);
			$toko_daerah=$row['toko_daerah'];
			$toko_wa=$row['toko_wa'];
			
			
			if (file_exists($toko_iconmin)){ 
				
				$image34 = str_replace('.png', '', $toko_iconmin);
				$image34 = str_replace('.jpg', '', $toko_iconmin); 	
				$image34 = str_replace('.jpeg', '', $toko_iconmin); 									
				$image36 = $c_url."/".$toko_iconmin.".webp";
				
				
				if (file_exists($image36)){ $image34=$image36;}
				else {
					$result = $ImgCompressor->run($toko_iconmin, 'jpg', 5);  
					$image35 = $result['gb'];$images = $result['mini'];
					$results2 = $ImgCompressor->mini($images,$image35, 136, 136,'mini_');  
					$image34 = str_replace('.png', '', 'mini_'.$image35);
					$image34 = str_replace('.jpg', '', $image34); 								
					$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$image34.".jpg"), ROOT."/compressed/".$image34.".webp");
					$a_image_tiga_paket=$c_url."/compressed/".$image34.".webp";
				}
			}
	?>				
								<div class="itemproduknya" style='width:96%;'>
									<img class="lazy gbtoko" width="110" height="110" src="<?php echo $a_image_tiga_paket;?>" layout="responsive" alt="<?php echo $toko_title; ?>" >																								
									<a href="<?php echo $c_url."/toko/".$toko_link;?>" style='width:calc(100% - 156px); float:left;' class="capronego">
										<h5><b><?php echo $toko_title;?></b></h5>
										<div class="alamat">
											<i class="fa fa-map-marker"></i> <?php echo $toko_daerah; ?> <br>
											<i class="fa fa-bookmark"></i> Mesin Fotocopy
										</div>
										<div class="pt5 rating">
											<?php for($i=0;$i<5;$i++) { ?>
											<i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
											<span class="tc  primary-col"> ( 5.096 Ulasan ) </span>
										</div>
										<div class="negobtn"><b><i class="fa fa-phone-sign"></i> Hubungi Penjual</b></div>
									</a>	
								</div>
	<?php }} ?>
	<?php
	if($tab_id == 3) {
		require_once(LIB.DS."faq.php");
		$n="\r\n %0A"; 
	?>				
<style>
 .menunya{display: block;}
 .menuli{font-size: 1.3rem;
    display: block;
    padding: 10px;
    margin: 0;
    border-bottom: 1px solid #eee;
}
 .menuli i{margin-right:10px;}
 .menuli:after {
	content:"";
    background-image: url(<?php echo $c_url; ?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;margin-right: 10px;
    float: right;
}
 .menunya .active{color:#083d77;}
 .menunya .active:after{-webkit-transform: rotate(-90deg);}
.panel a{
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    font-size: 14px;
	padding: 10px;
	display:block;
	color:#000;
	border-bottom:1px solid #eee;
}
</style>
						<?php
							$data_faq2 = "select * from faq_category order by urutan asc";
							$dua_result_faq = $db->query($data_faq2);
							while ($dua_data_faq = $dua_result_faq->fetch_array(MYSQLI_BOTH)) {		
								$dua_faq_judul = ltrim($dua_data_faq['short_name']);
								$dua_faq_link2 = $dua_data_faq['link'];
								$dua_faq_link=(ltrim($dua_faq_link2));
								$dua_faq_link=strtolower($dua_faq_link);				
						?>						
					<div class="menunya">
						<h4 class="accordion menuli"><b><?php echo $dua_faq_judul;?></b></h4>
						<div class="hide panel">
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
							<a aria-label="<?php echo $dua_faq_judul3;?>" href="<?php echo $dua_faq_link3;?>"><?php echo $dua_faq_judul3;?></a>
							<?php } ?>
						</div>				
					</div>
					<?php } ?>	
<script async type="text/javascript">
	function accordion(){	
		var acc = document.getElementsByClassName("accordion");
		var i;
		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
					panel.style.display = "none";
				} else {
					panel.style.display = "block";
				}
			});
		}	
	}
(function() {lazyload();accordion();})();
</script>	
	<?php } ?>
	<?php
	if($tab_id == 4) {
		$sql_ulasan = "select * from ulasan where status ='y' ORDER BY tanggal DESC";
		$total_ulasan = $db->num_rows($sql_ulasan);
		$total_ulasan_k = int3($total_ulasan / 1000);
		$total_ulasan = format_rupiah($total_ulasan);
		$n="\r\n %0A"; 
	?>				

<style>
.itemproduknya {
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    overflow: hidden;
    border-radius: 4px;
    border: 1px solid;
    margin-left: 1%;
    margin-bottom: 1%;
    margin-top: 1%;
    display: inline-block;
    width: 47.5%;
    color: #eee;
}
.itemproduknya .gbtoko {
    width: 136px;
    height: 160px;
    object-fit: cover;
    float: left;
    margin-right: 10px;
    background: #083c76;
}
.capronego h5{
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin: 5px 0;
    font-size: 12px;
}
.negobtn{
    margin: 10px 0;
    padding: 7px 15px;
    border-radius: 4px;
    background-color: rgb(8, 60, 118);
    text-align: center;
    color: #fff;
}			
.capronego .rating{font-size:9px!important;}
.capronego .negobtn{width:80%;}
.gambarbintang5, .bintangbox .icon-rating {background-image: url(<?php echo $c_url; ?>/compressed/user/bintang.webp);}
.kotakbintangutama{
	display: table-cell;
    vertical-align: middle;
    width: 120px;
    text-align: center;
    padding: 20px 10px;	
}
.kotakbintangutama .baris1{
	color: rgba(0, 0, 0, 0.38);
    margin-bottom: 10px;	
}
.kotakbintangutama .baris1{
	color: rgba(0, 0, 0, 0.38);
    margin-bottom: 10px;	
}
.baris1 .angka{
	color: rgba(0, 0, 0, 0.7);
    font-size: 2.5rem;
    font-weight: 600;	
}
.gambarbintang5{
	background-position: 0px -236px;
    width: 88px;
    height: 16px;
    background-position: 0px -142px;
    width: 78px;
    height: 14px;
    vertical-align: middle;
    background-image: url(<?php echo $c_url; ?>/compressed/user/bintang.webp);
    display: inline-block;
    position: relative;
    top: -0.1rem;	
}
.bintangkiri{
	display: table-cell;
    vertical-align: middle;
    border-left: 1px solid rgb(224, 224, 224);
    padding: 0px 10px;	
}
.barisbintangkiri{
	width: 100%;
    display: table;
    margin-bottom: 6px;	
}
.bintangbox{
    display: table-cell;
    vertical-align: middle;
    width: 68px;	
}
.bintangbox .icon-rating--small.icon-rating--1 {
    background-position: 0px -12px;
}
.bintangbox .icon-rating--small.icon-rating--2 {
    background-position: 0px -24px;
}
.bintangbox .icon-rating--small.icon-rating--3 {
    background-position: 0px -36px;
}
.bintangbox .icon-rating--small.icon-rating--4 {
    background-position: 0px -48px;
}
.bintangbox .icon-rating--small.icon-rating--5 {
    background-position: 0px -60px;
}
.eyt2lfc2 {
    background: #ffc200;
    width: 100%;
    height: inherit;
}
.bintangbox .icon-rating--small {
    width: 68px;
    height: 12px;
}
.capronego .harga{
    font-size: 14px;
    color: #f8011e;
}

.bintangbox .icon-rating {
    width: 78px;
    height: 12px;
    vertical-align: middle;
    display: inline-block;
    position: relative;
    top: -0.1rem;
}
.css-whf5m {
    display: table-cell;
    vertical-align: middle;
    padding: 0px 5px;
	width: 60%;
}
.css-1e0eizb {
    height: 6px;
    background-color: rgb(224, 224, 224);
    border-radius: 6px;
    overflow: hidden;
}
.css-13i56d6{
	width:25px;
}
.ulasanutama{
width: 100%;
    display: table;
    background-color: white;
    table-layout: fixed;
    border-bottom: 1px solid rgb(224, 224, 224);	
}
.text-ulasan {
	white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 12px;
    color: #000;
    height: 80px;
    width: calc(100% - 20px);
    padding: 5px 10px;
    border-top: 2px solid #eee;
}
.Xc61c{
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
}
.judululasan, .capronego h5{
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin: 5px 0 0;
}
.judululasan{font-size:14px; color:#000;line-height:20px;}
.namapengulas{font-size: 10px;color: rgb(104, 113, 118);}
.bintangulasan .rating{padding-top:0;}
.tanggalulasan{float: left;width: 60%;color: rgb(104, 113, 118);}
</style>
<div class="ulasanutama">
	<div class="kotakbintangutama">
		<div class="baris1">
			<span class="angka">5.0</span> / 5
		</div>
		<i class="gambarbintang5"></i> 
		<div class=""><?php echo $total_ulasan;?> ulasan</div>
	</div>
	<div class="bintangkiri">
		<div class="barisbintangkiri">
			<div class="bintangbox"><i class="icon-rating icon-rating--small icon-rating--1"></i></div>
			<div class="css-whf5m eyt2lfc1">
				<div class="css-1e0eizb">
					<div class="css-belb57"></div>
				</div>
			</div>
			<div class="u-fs12 css-13i56d6">0</div>
		</div>
		<div class="barisbintangkiri">
			<div class="bintangbox"><i class="icon-rating icon-rating--small icon-rating--2"></i></div>
			<div class="css-whf5m eyt2lfc1">
				<div class="css-1e0eizb">
					<div class="css-8cld55"></div>
				</div>
			</div>
			<div class="u-fs12 css-13i56d6">0</div>
		</div>
		<div class="barisbintangkiri">
			<div class="bintangbox"><i class="icon-rating icon-rating--small icon-rating--3"></i></div>
			<div class="css-whf5m eyt2lfc1">
				<div class="css-1e0eizb">
					<div class="css-s6057j"></div>
				</div>
			</div>
			<div class="u-fs12 css-13i56d6">0</div>
		</div>
		<div class="barisbintangkiri">
			<div class="bintangbox"><i class="icon-rating icon-rating--small icon-rating--4"></i></div>
			<div class="css-whf5m eyt2lfc1">
				<div class="css-1e0eizb">
					<div class="css-1jl4th1"></div>
				</div>
			</div>
			<div class="u-fs12 css-13i56d6">0</div>
		</div>
		<div class="barisbintangkiri">
			<div class="bintangbox"><i class="icon-rating icon-rating--small icon-rating--5"></i></div>
			<div class="css-whf5m eyt2lfc1">
				<div class="css-1e0eizb">
					<div class="css-1qm9d2g eyt2lfc2"></div>
				</div>
			</div>
			<div class="u-fs12 css-13i56d6 eyt2lfc1"><?php echo $total_ulasan_k;?>.rb</div>
		</div>
	</div>	
</div>
						<?php
							$sql_produk = "SELECT ulasan.review, ulasan.review, ulasan.judul, ulasan.nama, ulasan.tanggal, produk.brand, produk.nama_produk, produk.id_produk, produk.link, produk.harga_baru, produk.image_3 FROM ulasan left join produk on ulasan.pid = produk.id_produk group by produk.nama_produk order by ulasan.tanggal desc limit 20";
							$query_produk = $db->query($sql_produk);
							while ($row = $query_produk->fetch_array(MYSQLI_BOTH)) {	
								$review=substr($row['review'],0,100);
								$a_id =$row['id_produk']; 
								$brand=$row['brand'];
								$judul=$row['judul'];
								$nama_pengulas=$row['nama'];
								$inisial = strtoupper(substr($nama_pengulas,0,2));
								$nama_produk=$row['nama_produk'];
								$nama_produk=substr($nama_produk,0,18);
								$tanggal=tgl_indo($row['tanggal']);
								
								$stok2=int3($judulnya); 
								$stok2 = substr($stok2,3); 
								$stok=int3((22-date("d"))+$stok2); 				
								
								if($stok>=0){ $stok=$stok." Unit"; } 
								else {$stok="1 Unit";}
						
								$fotonya=$row['image_3'];
								$a_harga_baru= $row['harga_baru'];
								$brandsnya=strtolower($brand);
								$brandsnya=str_replace(" ","",$brandsnya);
								
								$linknya=$brandsnya."-".$row['link'];
								$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");			
						?>						
								<div class="itemproduknya" style='width:96%;'>
									<div class="Xc61c"><?php echo $inisial; ?></div>
									<a href="<?php echo $c_url."/".$linknya;?>" style='width:calc(100% - 66px); float:left;' class="capronego">
										<h4 class="judululasan"><b><?php echo $judul;?></b></h4>
										<div class="namapengulas"><?php echo ucwords(strtolower($nama_pengulas)); ?> - <?php echo ucwords($nama_produk);?> </div>	
									</a>
									<div class="text-ulasan">
										<div class="tanggalulasan"><?php echo $tanggal;?></div>
										<div class="bintangulasan">										
											<div class="pt5 rating">
												<?php for($i=0;$i<5;$i++) { ?>
												<i  class="glyphicon ng-scope fa fa-star"></i><?php } ?>
												<span class="tc  primary-col"> ( <?php echo format_rupiah($total_review);?> Review ) </span>
											</div>
										</div>										
										<p><?php echo $review;?></p></div>	
								</div>
					<?php } ?>	
	<?php } ?>	
<?php } ?>