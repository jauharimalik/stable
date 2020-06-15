<?php 
require_once(LIB .DS. 'cache.php');
if(isset($_POST['textcari'])){ $q_utama = $_POST['textcari'];}   
if(isset($_SERVER['HTTP_REFERER'])) {
      $url_sebelum = $_SERVER['HTTP_REFERER'];
} ?>
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
    width: 100%;
    color: #eee;
}
.itemproduknya .lazy {
    width: 156px;
    height: 156px;
    float: left;
    background: #083c76;
}
.capronego{
    padding-bottom: 5px;
    font-size: 10px;
	display: block!important;
}
.capronego h5{
    white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: left;
    margin: 0;
    height: 40px;
    width: 100%;
    font-size: 14px;
}
.capronego .harga{
    font-size: 14px;
    color: #f8011e;
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
.searcha .hasilnya .capronego{float:left;}
.hasilnya a{text-overflow: ellipsis;white-space: nowrap;overflow: hidden;}
.hasilnya a:last-child {border-bottom: none;}
.hasilnya .mesh{border-bottom:3px solid!important;}
.reporttv a{padding:0;white-space: normal;}
.reporttv {width:100%;background:#fff;border-radius:4px;margin-bottom:10px;box-shadow: 0 1px 6px rgba(0,0,0,.12);overflow:hidden;height: 110px;}
.reporttv img{width:40%;float:left;margin-top: -20px;}
.reporttv .kotak3{width:50%;padding:10px;;float:left;height: 100px;font-size:11px;overflow:hidden;color:#000;}

.searcha .stok {
    border-radius: 4px;
    border: 1px solid;
    display: inline-flex;
    width: 90%;
}
.searcha .stok .label {
    color: #fff;
    padding: 0 5px;
    display: inline-flex;
    background: #083d77;
}
.searcha .stok .jml {
    padding-left: 20px;
    display: flex;
}
.searcha .category {
    color: #000;
    margin: 10px 0 0;
    font-size: 10px;
}
.searcha .garistengah, .linethrough {
    text-decoration: line-through;
    font-size: 9px;
}
.searcha .kanwil {
    border-top: 1px solid #eee;
    width: 90%;
    font-size: 9px;
}
.searcha .itemproduknya .lazy{background:none;}
.searcha .fotopart img{
    border-radius: 50%;
    padding: 10px;
    zoom: .9;
}
.gantungantab{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    width: 100%;
    background: #fff;
    position: fixed;
    top: 40px;
    margin-left: -10px;
    z-index: 2;
    white-space: nowrap!important;
    overflow-x: auto!important;
    overflow-y: hidden!important;	
}
.gantungantab .tab-link {
    padding: 10px;
    font-size: 12px;
    color: #000;
    display: inline-block!important;
    margin-left: 8px;
}
.gantungantab .current{
    color: #083d77!important;
    font-weight: bold;
    border-bottom: 3px solid #083d77;
    outline: none;
}	
.mt35{margin-top: 35px;}
.tab-content{display:none;}
.tab-content.current{display:block!important;}
</style> 
<div id="silahkanngomong"></div>
<script>
var vload4 ="<center><img style='width:100%; height:40px;' src='<?php echo $c_url;?>/compressed/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Loading, Please Wait..</h2></center>";
var moreaction ="";
var perpage = 1;
var tombolmore = "<a class='mesh'><b>Informasi Detail : Baca Selengkapnya</b></a>";	
var detik = 0;

document.querySelector("#silahkanngomong").innerHTML = vload4;
scrollonsearch("tab-1");	

(function() {
	var gantunganquery = document.getElementById("tablistgantungan");
	var isitabnya = document.getElementById("isitabnya");
	var xmltab = new XMLHttpRequest();
	xmltab.onreadystatechange = function() {
		
		try {JSON.parse(xmltab.responseText);} 
		catch (e) {return false;}
		
		if (this.readyState == 4 && this.status == 200) {
			var datatab=JSON.parse(xmltab.responseText);
			datatab.forEach(function(tablist) {
				tablist+" - ";
				gantunganquery.innerHTML +="<a class='tab-link' data-tab='"+tablist.linknya+"'>"+tablist.nama_tab+"</a>";
				gantunganquery.firstElementChild.classList.add("current");
				isitabnya.innerHTML +="<div id='"+tablist.linknya+"' class='tab-content'><div class='hasilnya'><div class='taglabel'><b>"+tablist.label+"</b></div><div id='"+tablist.linknya+"load1'></div><div class='loadmoreawokawok'><div class='waitinghasil'></div></div></div></div>";
				isitabnya.firstElementChild.classList.add("current");
				tablist.hasil.forEach(function(pdk) { 
				
						var tab2 = tablist.linknya;
						tab2 = tab2.replace("tab-", "");	
						tab2 = parseInt(tab2);					
						var hasiltab_produk = "<div class='itemproduknya'><img class='lazy' width='110' height='110' src='"+pdk.fotonya+"' layout='responsive' alt='"+pdk.judulnya+"' >"+
						"<a href='"+pdk.linknya+"' class='capronego'><h5><b>"+pdk.judulnya+"</b></h5>"+
						"<div class='harga'><b>Rp "+pdk.a_harga_baru+"</b></div><div class='pt5 rating'>"+
						"<?php for($i=0;$i<5;$i++) { ?><i  class='glyphicon ng-scope fa fa-star'></i><?php } ?><span class='tc  primary-col'> ( "+pdk.total_review+" Ulasan ) </span></div><div class='negobtn'><b>Nego Harga</b></div>"+
						"</a></div>";
						
						var hasiltab_panduan = "<a class='exe' target='_blank' aria-label='"+pdk.judulnya+"' href='"+pdk.linknya+"' title='"+pdk.judulnya+"'><b>"+pdk.judulnya+"</b></a>";

						var hasiltab_tv = "<div class='reporttv'><a class='' aria-label='"+pdk.judulnya+"' href='"+pdk.linknya+"'><img src='"+pdk.fotonya+"' alt='"+pdk.judulnya+"' title='"+pdk.judulnya+"' height='150'><div class='kotak3'><b>"+pdk.judulnya+"</b><br><small>"+pdk.viewer+"</small></div></a></div>";

						
						switch(tab2) {
							case 1: var hasiltab = hasiltab_produk; break;
							case 2: var hasiltab = hasiltab_produk; break;
							case 3: var hasiltab = hasiltab_panduan; break;  
							case 4: var hasiltab = hasiltab_tv; break;   
							case 5: var hasiltab = hasiltab_panduan; break;  	
							case 6: var hasiltab = hasiltab_panduan; break;  	
							default: var hasiltab = hasiltab_produk; break;
						}					
					
								
					document.getElementById(tablist.linknya+"load1").innerHTML += hasiltab;
					document.querySelector("#silahkanngomong").innerHTML = '';
				});
	
			$('.gantungantab .tab-link').click(function(){
				var tab_id = $(this).attr('data-tab');
				$('.gantungantab .tab-link').removeClass('current');
				$('.tab-content').removeClass('current');
				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
				scrollonsearch(tab_id);
			});						
			
			
			});		
		}
	};
	
	xmltab.open("GET", "<?php echo $c_url;?>/ajaxp-listsearchjson?textcari=<?php echo $q_utama; ?>&catlist=1&format=json&foldercache=jsondata", true);
	xmltab.send();		
			
	var gantinyabantumi = document.getElementById("klose-searcha");
	gantinyabantumi.addEventListener("click", function (){	
		var gantinyabantumi = document.getElementById("klose-searcha");
		gantinyabantumi.removeAttribute("data-load");
		window.history.pushState("Details", "<?php echo $page_title;?>", "<?php echo $url_sebelum; ?>");
		document.getElementById("searchscroll").style.display='none';
	});
	
})();



function produklist(perpage,parameter,tabnya,catlist){
	var tab = tabnya.replace("tab-", "");	
	tab = parseInt(tab);	
	
	if (moreaction !="inactive" && tab > 0){
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				try {JSON.parse(xhttp2.responseText);} 
				catch (e) {return false; xhttp2.abort(); }
				if (this.readyState == 4 && this.status == 200) {
					var datapdk=JSON.parse(xhttp2.responseText);
					if (datapdk[0].fotonya !=""){
						moreaction = "active";
						datapdk.forEach(function(pdk) {
							
						var hasiltab_produk = "<div class='itemproduknya'><img class='lazy' width='110' height='110' src='"+pdk.fotonya+"' layout='responsive' alt='"+pdk.judulnya+"' >"+
						"<a href='"+pdk.linknya+"' class='capronego'><h5><b>"+pdk.judulnya+"</b></h5>"+
						"<div class='harga'><b>Rp "+pdk.a_harga_baru+"</b></div><div class='pt5 rating'>"+
						"<?php for($i=0;$i<5;$i++) { ?><i  class='glyphicon ng-scope fa fa-star'></i><?php } ?><span class='tc  primary-col'> ( "+pdk.total_review+" Ulasan ) </span></div><div class='negobtn'><b>Nego Harga</b></div>"+
						"</a></div>";
						
						var hasiltab_panduan = "<a class='exe' target='_blank' aria-label='"+pdk.judulnya+"' href='"+pdk.linknya+"' title='"+pdk.judulnya+"'>"+pdk.judulnya+"</a>";

						var hasiltab_tv = "<div class='reporttv'><a aria-label='"+pdk.judulnya+"' href='"+pdk.linknya+"'><img src='"+pdk.fotonya+"' alt='"+pdk.judulnya+"' title='"+pdk.judulnya+"' height='150'><div class='kotak3'><b>"+pdk.judulnya+"</b><br><small>"+pdk.viewer+"</small></div></a></div>";

						
						switch(tab) {
							case 1: var hasiltab = hasiltab_produk; break;
							case 2: var hasiltab = hasiltab_produk; break;
							case 3: var hasiltab = hasiltab_panduan; break;  
							case 4: var hasiltab = hasiltab_tv; break;   
							case 5: var hasiltab = hasiltab_panduan; break;  	
							case 6: var hasiltab = hasiltab_panduan; break;  	
							default: var hasiltab = hasiltab_produk; break;
						}	
										
					
						lazyload();
						document.querySelector("#"+tabnya+" .waitinghasil").innerHTML = '';
						document.querySelector("#"+tabnya+" .loadmoreawokawok").innerHTML +=hasiltab;
						});	
						
					} else { moreaction = "inactive";}
				}
			};
			xhttp2.open("GET", "<?php echo $c_url;?>/ajaxp-listsearchjson?format=json&foldercache=jsondata&"+parameter+"&type="+tab+"&page="+perpage, true);
			xhttp2.send();	
	} 

};

function scrollonsearch(a){
	var elmnt = document.getElementById("searchscroll");
	elmnt.addEventListener("scroll", function (){	
	var y = elmnt.scrollTop;
	var z = parseInt(y);
	var alpha = z%400;
	if (alpha <= 100 || alpha >= 300){document.querySelector("#"+a+" .waitinghasil").innerHTML = vload4;	}
	else {document.querySelector("#"+a+" .waitinghasil").innerHTML = '';	} 
	
	if (moreaction != "inactive" && alpha == 0){
		document.querySelector("#"+a+" .waitinghasil").innerHTML = vload4;
		var parameter = "textcari=<?php echo $q_utama; ?>"; perpage++; 
		produklist(perpage,parameter,a,'');
	}	
		
	});	
};
</script>
<script>
if('speechSynthesis' in window){
	var speech = new SpeechSynthesisUtterance('Berikut Hasil Pencarian : <?php echo $q_utama;?>');
	speech.lang = 'id-ID';
	window.speechSynthesis.speak(speech);
}
</script>
<div id="tablistgantungan" class="gantungantab"></div>
<div class="mt35"></div>
<div id="isitabnya"></div>