<style>
header {
    height: 45px;
    padding: 0 5px;
    width: 100%;
    position: fixed;
    display: block;
    z-index: 100;
    top: 0;
	background:#083c76;
	box-shadow: 0 1px 6px rgba(0,0,0,.12);
}
header a{float:left;line-height: 30px;background: none;font-size: 14px;margin: 8px;width:24px;}

.sidebar-mask, .sidebar {
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100%;
    background-color: #fff;
    outline: none;
    z-index: 2147483647;
    overflow-x: hidden!important;
    overflow-y: auto!important;	
}
.searcha{width:100%!important;}
.searcha header a{color:#fff;}
.formcari{
    overflow: hidden;
    margin: 8px 0;
    height: 32px;
    width: calc( 100% - 48px - 32px);	float:left;
	background:#fff;border-radius:4px;
}
.search {
    position: absolute;
    top: 14px;
    font-size: 16px;
}
.pencarianfi{width:100%;
    border: none;
    outline: none;
    padding-top: 5px;
    padding-left: 28px;
    display: inline-block;
    font-size: 14px;	
}
.searchbg{
	padding: 10px 0;
    padding-top: 60px;
    background: #eee;	
}
.hasilnya{
    padding: 10px;
    background: #fff; 
	margin: 0;
	margin-bottom: 10px;
    font-size: 14px;
    color: #000;
}
.hasilnya a{padding:10px; display:flex;border-bottom: 1px solid #eee;}
.exe:before{
	content: "\f002";
	font-family: "Font Awesome 5 Free";
	font-weight:900;
    margin-right: 10px;
}
</style>		
		<div id="searchscroll" class="sidebar searcha">
			<header>
				<a class="fleft vjax"  data-load="hide-searcha" id="klose-searcha" ><i class="fa fa-arrow-left"></i></a>
				<div id="home-search" class="formcari">
					<button type="submit" class="search fa fa-search"></button>
					<input type="text" id="textcari" class="pencarianfi" name="keyword" placeholder="Ada yang bisa dibantu ??" value="" title="Search for:" />
					<input type="hidden" name="amp" value="1" />
				</div>
				<a class="fright vjax" id="voicestart"  onclick="start()"><center><i class="fa fa-microphone"></i></center></a>
			</header>
			<div id="hasilcariitem"  class="searchbg">
				<div id="silahkanngomong"></div>
				<div class="hasilnya">
					<div class="taglabel">SEDANG TRENDING : </div>
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy" title="Daftar Harga Mesin Fotocopy">
						Daftar Harga Mesin Fotocopy
					</a>
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/harga-mesin-fotocopy" title="Harga Mesin Fotocopy">
						Harga Mesin Fotocopy
					</a>
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi" title="Harga Mesin Fotocopy Bekas">
						Harga Mesin Fotocopy Bekas
					</a>	
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/mesin-fotocopy-warna" title="Harga Mesin Fotocopy Warna">
						Harga Mesin Fotocopy Warna A3
					</a>	
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy" title="Paket Usaha Fotocopy">
						Paket Usaha Fotocopy Murah
					</a>		
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/canon-ir-2004-n-dadf" title="Mesin Fotocopy Untuk Usaha Pemula">
						Mesin Fotocopy Untuk Usaha Pemula
					</a>
					<a class="exe" aria-label="Trending Pencarian"  href="<?php echo $c_url;?>/fujixerox-docucentre-iv-c3370" title="Mesin Fotocopy Warna Terbaik 2019">
						Mesin Fotocopy Warna Terbaik 2019
					</a>
				</div>
			</div>	
		</div>
		
<script type="text/javascript">
	var recognition = new webkitSpeechRecognition();
	recognition.continuous = true;
	function start(){
		recognition.onresult = function(event) { 
			var output2 = document.getElementById("textcari");
			output2.value = "";
			for(var i=0; i<event.results.length; i++){
				output2.value = event.results[i][0].transcript;
			}
			var optcarikar="";	
			var textcari=output2;
			var optcarikar=$("#optcarinya").text();	
			var textcari=$("#textcari").val();
			var textcari=$("#textcari").val();
			var urlsearch = textcari.replace('   ','-');
			var urlsearch = urlsearch.replace('--','-');
			var urlsearch = urlsearch.replace('%20','-');
			$(".hasilnya").hide();
			$.ajax({ 
				type:"post", 
				url:"<?php echo $c_url;?>/ajaxp-msearch",
				data :  {textcari : textcari, optcarikar:optcarikar},
				success:function(data){
					$("#hasilcariitem").html(data);
					window.history.pushState("Details", "Pencarian Mesin Fotocopy di <?php echo $site_name;?> : "+textcari, "<?php echo $c_url; ?>/search/"+urlsearch);
				}
			});				
		};
		recognition.start();
	}	
	$("#voicestart").click(function(){
		var vload3="<center><img style='width:100%; height:40px;' src='<?php echo $c_url;?>/compressed/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Silahkan Bicara Untuk Pencarian.</h2></center>";
		$("#silahkanngomong").html(vload3);
		$(".hasilnya").hide();
	});	
</script>		