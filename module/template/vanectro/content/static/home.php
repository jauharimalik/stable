	<div class="slideshow-container">
		<div id="sliderresult" class="slidemain slide0"></div>
		<div class="svgelshape svgelshape-bottom">
			<svg xmlns:dc="https://purl.org/dc/elements/1.1/" xmlns:cc="https://creativecommons.org/ns#" xmlns:rdf="https://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="https://www.w3.org/2000/svg" xmlns="https://www.w3.org/2000/svg" xmlns:sodipodi="https://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="https://www.inkscape.org/namespaces/inkscape" viewBox="0 0 1440.34 165.4" version="1.1" id="svg16" sodipodi:docname="xendit-section-shape.svg" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
			  <metadata id="metadata20">
				<rdf:rdf>
				  <cc:work rdf:about="">
					<dc:format>image/svg+xml</dc:format>
					<dc:type rdf:resource="https://purl.org/dc/dcmitype/StillImage"></dc:type>
				  </cc:work>
				</rdf:rdf>
			  </metadata>
			  <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview18" showgrid="false" inkscape:zoom="0.19925851" inkscape:cx="720.16998" inkscape:cy="82.699997" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="0" inkscape:current-layer="svg16"></sodipodi:namedview>
			  <defs id="defs4">
				<style id="style2">.b{fill:#ebecf0;opacity:.3}</style>
			  </defs>
			  <path style="fill:none" inkscape:connector-curvature="0" d="M 1440,122 1247.74,13.08 A 100,100 0 0 0 1188.28,0.61 L 0,122" id="path6"></path>
			  <path style="opacity:0.3;fill:#ebecf0" inkscape:connector-curvature="0" d="m 1032.5,146.85 a 50,50 0 0 0 48.3,12.95 L 1440.34,63.52 V 0 L 885.7,0 Z" class="b" id="path8"></path>
			  <path style="opacity:0.3;fill:#ebecf0" inkscape:connector-curvature="0" d="m 1107.68,50.44 a 50,50 0 0 0 35.36,35.35 l 297.3,79.61 V 0 l -346.19,0 z" class="b" id="path10"></path>
			  <path style="fill:#ad1e1e" inkscape:connector-curvature="0" d="M 0.34,121.96 0,122" id="path12"></path>
			  <path style="fill:#ffffff" inkscape:connector-curvature="0" d="M 1440.34,0 0.34,0 V 122 L 1188.28,0.61 a 100,100 0 0 1 59.46,12.47 L 1440,122" id="path14"></path>
			</svg>
		</div>
	</div>
	<div class="sparator"></div>
	<div class="container">
		<div class="row">
<?php 	
$data_category = ("select *  from category_list ORDER BY category_id  ASC LIMIT 6"); 
$result_category = $db->query($data_category);
while ($a_cat = $result_category->fetch_array(MYSQLI_BOTH)) {	
	$image_category = $a_cat['category_image'];
	$fotonya2 = webpimage($image_category,332,221);
?>	
			<div class="scard">
				<a href="<?php echo $c_url."/layanan/".$a_cat['category_link'];?>" title="<?php echo $a_cat['category_name'];?>" data-linksnya="<?php echo $a_cat['category_link'];?>" data-link="layanan">
				<img class="gbbgs" src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $fotonya2;?>" title="<?php echo $a_cat['category_name'];?>" alt="<?php echo $a_cat['category_name'];?>">
				<div class="solay"></div>
				<div class="scont">
					<p><?php echo $a_cat['category_short'];?></p> 
				</div>
				</a>
			</div>
<?php } ?>				
			<div class="fclear"></div>
		</div>
	</div>
	<div class="sparator"></div>
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>	
<script async>
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

function getslider(xhttp) {
	var data=JSON.parse(xhttp.responseText);
	data.forEach(function(dslide) {
		document.getElementById("sliderresult").innerHTML += "<div class='slideutama'><a href='"+dslide.slide_link+"'><img src='<?php echo $c_url;?>/compressed/loading2.svg' alt='"+dslide.title+"' title='"+dslide.title+"' data-src='"+dslide.gb_web+"'><div class='greeting center-relative flex'><div class='hgreet'><div class='flex'><h1>"+dslide.title+"</h1></div><p>"+dslide.caption+"</p></div></div></a></div>";
	});
	document.getElementById("sliderresult").innerHTML += "<a class='prevslideswipe' data-index='0' id='prevbanner'>&#10094;</a><a class='nextslideswipe' data-index='0' id='nextbanner'>&#10095;</a>";lazyload();slider();
}
ajaxnew("<?php echo $c_url;?>/ajaxp-getslider?format=json&foldercache=jsondata", 'GET', getslider);
</script>