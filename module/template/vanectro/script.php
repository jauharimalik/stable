<script>
function lazyload(){
		[].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
		img.setAttribute('img-src', img.getAttribute('src'));
		img.setAttribute('src', img.getAttribute('data-src'));
		img.onload = function() {
			img.removeAttribute('data-src');
		};
		});
}
function changelink(){
		[].forEach.call(document.querySelectorAll('a[data-link]'), function(a) {
		a.setAttribute('data-load', a.getAttribute('data-link'));			
		a.setAttribute('data-link', a.getAttribute('href'));
		a.setAttribute('data-title', a.getAttribute('title'));
		a.removeAttribute('href');
		a.removeAttribute('title');
		a.classList.add("vlink");
		});
}
lazyload(); changelink(); 

	var async = async || [];
	(function () {
		var done = false;
		var script = document.createElement("script"),
		head = document.getElementsByTagName("body")[0] || document.documentElement;
		script.src = '<?php echo $c_cdn;?>/plugin/jq3.5.js';
		script.type = 'text/javascript'; 
		script.async = true;
		script.onload = script.onreadystatechange = function() {
			
		if (!done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
			done = true;
			while(async.length) { 
				var obj = async.shift();
					if (obj[0] =="ready") {$(obj[1]);}
					else if (obj[0] =="load"){$(window).load(obj[1]);}
				}
				async = {
					push: function(param){
						if (param[0] =="ready") {$(param[1]);}
						else if (param[0] =="load"){$(window).load(param[1]);}
					}
				};
				
				script.onload = script.onreadystatechange = null;
				var vload="<center><img style='width:100%; height:40px;' src='<?php echo $c_url;?>/compressed/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Sedang Loading... Mohon Tunggu Sebentar.</h2></center>";
				var elementTarget =  document.getElementById("loadmore");
				var n = 0;				
				vlink();
				$(window).scroll(function(){
					
					var hT = $('#main2').offset().top;
					var	hH = $('#loadmore').outerHeight();
					var wH = $(window).height();
					var wS = $(this).scrollTop();
					if (wS > (hT+hH-wH)){ n++; if(n==1){loadmore(); }}
				});
				function klosevjax(a){$("."+a).hide();$(".vjax-layer").hide();$("."+a).removeClass("layer");}
				function vclick(){
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
				}
				function vlink(){
					
				$(".vlink").click(function(){
					var urlload = $(this).data('load');	
					var urlnya = $(this).data('linksnya');		
					var urllink = $(this).data('link');
					var titles = $(this).data('title');
					$("#main2").html(vload);
					$.ajax({ 
						type:"post", 
						url:"<?php echo $c_url;?>/ajaxp-loadlink",
						data : {urlnya:urlnya, urlload : urlload},
						success:function(data){
							$("#main2").html(data);
							document.title = titles;
							window.history.pushState({"html":data,"pageTitle":titles},"", urllink);
							lazyload(); loadmore(); 
						}
					});	
				});		
				}
				
				function loadmore(){
					var urlload=$("#urlpage").text();
					var urlnya=$("#urlnya").text();
					$("#vload").html(vload);	
					$.ajax({ 
						type:"post", 
						url:"<?php echo $c_url;?>/ajaxp-loadmoreweb",
						data : {urlload : urlload,urlnya:urlnya},
						success:function(data){
							$(".vload").hide();
							$("#loadmore").html(data);
							lazyload(); vlink(); vclick();		
						}
					});
				}
				if (head && script.parentNode) {head.removeChild(script);}
			}
		};
		head.insertBefore(script, head.firstChild);
	})();
</script>	
