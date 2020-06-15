<?php 
if(isset($p2)){
	if($p2=="ajax"){ $urlpagemore = $p2;}
	else { $urlpagemore = $p2;}
} else { $urlpagemore = $p;}
?>	
<div id="urlpage" class="hidden"><?php echo $urlpagemore;?></div>		
<div id="urlnya" class="hidden"><?php echo $urlnya;?></div>		
<div id="loadmore"></div>
<div class="vload"></div>
<div class="vjax-layer"><div class="vjax-load"></div></div>
<div class="vjax-layer-videoprofile"></div>	
<div class="vjax-layer-gallerydetail"></div>	