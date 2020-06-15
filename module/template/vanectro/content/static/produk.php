<div class="slideshow-container">
    <div id="sliderresult" class="slidemain slide0">
		<?php 
			 $array = explode('<br>', $data['foto_mini']);
			 foreach ($array as $values){
		?>
        <div class="slideutama">
			<img class="gb_toko" src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo gallery_webpimage($values,278,230,"produk");?>" alt="<?php echo $a_nama_produk;?>"/>
        </div>
		<?php } ?>
        <a class="prevslideswipe" data-index="0" id="prevbanner"><</a><a class="nextslideswipe" data-index="0" id="nextbanner">></a>
    </div>
</div>
			
			
			<div class="kotakisi infotoko" >
				<div class="labelfoto"><?php echo ucwords(strtolower($data['brand']));?></div>
				<div class="namatoko">
					<b><?php echo strtoupper($data['nama_produk']);?></b><br>
					<small><?php echo strtoupper($data['category_name']);?></small>
				</div>
				<div class="hargalama"><span class="garistengah">Rp <?php echo format_rupiah($data['harga_lama']);?></span> <span class="diskon">Save <?php echo $c;?> %</span></div>
				<div class="harga"><b>Rp <?php echo format_rupiah($data['harga_baru']);?></b></div>
			</div>
			<div class="kotakisi">			
					<div class="menunya">
						<h4 class="accordion menuli"><b>Informasi Produk</b></h4>
						<div class="hide panel" style="display:none">
							<?php echo $data['informasi']; ?>
						</div>				
					</div>
					<div class="menunya">
						<h4 class="accordion menuli"><b>Deskripsi</b></h4>
						<div class="hide panel" style="display:none">
							<?php echo $data['deskripsi']; ?>
						</div>				
					</div>		
					<div class="menunya">
						<h4 class="accordion menuli"><b>Tips & Trik</b></h4>
						<div class="hide panel" style="display:none">
							<?php echo $data['ketentuan']; ?>
						</div>				
					</div>
					
<script>
function slider(){
	var slideId = ["slide0","slide1","slide2","slide3"];
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
accordion(); slider(); lazyload();
</script>	
			</div>
			<div class="kotakisi">
				<div class="labeli">
					<b>Rekomendasi Produk</b>
					<a class="more" href="<?php echo $c_url;?>/category/<?php echo $data['category_link'];?>">Lihat Semua <i class="fa fa-chevron-right"></i></a>	
				</div>
				<div class="slidebox">
						<?php 	
							$data_produk_paket = ("select *  from produk where category='".$data['category_id']."' ORDER BY produk.rekomendasi DESC, produk.harga_baru ASC limit 8"); 
							$urutan_paket=0;
							$result_paket = $db->query($data_produk_paket);
							while ($a_data_paket = $result_paket->fetch_array(MYSQLI_BOTH)) {
								$a_link_paket = $a_data_paket['link'];
								$a_id_paket = $a_data_paket['id_produk'];
								$a_id = $a_id_paket;
								
								$a_nama_produk = $a_data_paket['nama_produk'];
								$urutan_paket++;
								
								$a_brand_paket = $a_data_paket['brand'];
								$a_foto_mini = $a_data_paket['foto_mini'];
								$a_link = $a_data_paket['link'];
								$a_harga_lama_paket = $a_data_paket['harga_lama'];
								$a_harga_baru_paket = $a_data_paket['harga_baru'];
								$a_brands = strtolower($a_brand_paket);
								
								if($a_harga_lama_paket == 0){$a_harga_lama_paket=$a_harga_baru_paket*2;}
								if($a_harga_baru_paket !=0){$a=$a_harga_lama_paket;$b=($a_harga_baru_paket);
								$c=(($a-$b)/($a/100));}
								
								$foto_mini = explode("<br>",$a_foto_mini);
								$foto_mini = gallery_webpimage($foto_mini[0],170,150,"produk");	
								
								$total_review = $db->num_rows("select * from ulasan where pid ='".$a_id."'");	
						?>										
							<div id="item<?php echo $a_id;?>" class="item">
								<div class="capronego">
								<img class="lazy" aria-label="<?php echo $a_nama_produk; ?>" href="<?php echo "$c_url/produk/$a_link_paket";?>"  width="150" height="150" data-src="<?php echo $foto_mini; ?>" alt="<?php echo $a_nama_produk;?>"/>
								<div class="khas">
									<a href="<?php echo "$c_url/produk/$a_link_paket";?>" >
										<h5 class="tl pb10 wsnormal w100 fs12 m0 h38"><b><?php echo $a_nama_produk; ?></b></h5>
										<div class="category"> <?php echo $a_category_paket; ?></div>
										<div class="garistengah">Rp <?php echo format_rupiah($a_harga_lama_paket); ?></div>
										<div class="harga"><b>Rp <?php echo format_rupiah($a_harga_baru_paket); ?></b></div>	
										<div class="rating">
											<?php for($i=0;$i<5;$i++) { ?>
											<i  class="fa fa-star"></i><?php } ?>
											<span class="tc  primary-col">  ( <?php echo $total_review; ?> Ulasan ) </span>
										</div>
									</a>				
								</div>
								</div>
							</div>					
						<?php } ?>
				</div>
			</div>
			<div class="footer" style="z-index:4">
				<a onclick="buy('item<?php echo $produk_ids;?>')" id="item1_buy" class="addtocart btn btn- btn-primary fullwidth"><span class="fa fa-shopping-basket fa-fw"></span><span class="btn-text">Beli</span></a>	
			</div>