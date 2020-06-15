			<div class="kotakisi">
				<div class="labeli">
					<b>Story Terbaru <?php echo $site_name;?> </b>
				</div>
				<div id="storypage" class="sbslide"></div>
			</div>
			
			<img class="gb_toko" src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo gallery_webpimage($data['category_image'],480,320,"category_banner"); ?>" alt="<?php echo ucwords($data['category_name']);?>"/>
			<div class="kotakisi infotoko" >
				<img class="logotoko" src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo gallery_webpimage($data['category_icon'],94,63,"category_icon"); ?>" alt="<?php echo ucwords($data['category_name']);?>">
				<div class="namatoko">
					<b><?php echo ucwords($data['category_name']);?></b><br>
					<small><?php echo ucwords($data['category_desc']);?></small>
				</div>
			</div>
			<div class="hilang2 kotakisi">
				<span class="btn"><b>Informasi Detail : Load More <i class="fa fa-chevron-right"></i></b></span>
			</div>	
			<div class="gantungan">
				<a class="tab-link current" data-tab="tab-1"><i class="mr5 fa fa-home"></i> Produk </a>
				<a class="tab-link" data-tab="tab-3"> Menu Bantuan Pelanggan </a>
				<a class="tab-link" data-tab="tab-4"> Ulasan Pelanggan </a>
			</div>	
			<div id='tab-1' class='tab-content current'>
				<div class="kotakisi">
					<h2>Harga Produk & Layanan <?php echo ucwords($data['category_name']);?> </h2>
					<div  class="produklist" id='produklist'></div>
				</div>
				
			</div>
			<div id='tab-3' class='tab-content'> 
				<div class="kotakisi">
					<h2>Menu Bantuan Pelanggan </h2>
					<div id="konten-tab-3"></div>
				</div>
			</div>
			<div id='tab-4' class='tab-content'> 
				<div class="kotakisi">
					<h2>Ulasan Pelanggan</h2>
					<div id="konten-tab-4"></div>
				</div>
			</div>	
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>			
<script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var data=JSON.parse(xhttp.responseText);
		data.forEach(function(element) {
			lazyload();
			document.getElementById("storypage").innerHTML +="<div class='scard'><img class='gbbgs' src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src='"+element.story_thumbnail+"' alt='"+element.story_title+"'><div class='solay'></div><div class='scont'><p>"+element.story_title+"</p> </div></div>";
		});		
	}
};
xhttp.open("GET", "<?php echo $c_url;?>/ajaxp-storymobile?query=canon", true);
xhttp.send();
</script>