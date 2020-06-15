<?php 
if(isset($_POST['urllink'])){
	$urllink = $_POST['urllink'];
	$data = $db->wisata($urllink);
	require_once(LIB .DS. 'cache.php');
	
	$mini_deskripsi = explode("</h2>",$data['informasi']);
?>

<link href="<?php echo $c_cdn;?>/plugin/slick/slick.css" rel="prefetch" type="text/css" as="style">
<link href="<?php echo $c_cdn;?>/plugin/slick/slick-theme.css" rel="prefetch" type="text/css" as="style">
<style>
.layer{
	width: 100%;
    height: 100vh;
    background-color: #000;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 99;
    color: white;
}
.content{
	margin: 90px auto 15px;
    position: relative;
    width: 850px;
    max-width: 1200px;
    min-height: 482.7px;
    float: left;
    margin-right: 5px;

}
.sidebar{
    width: calc(100% - 855px);
    float: left;
    background: #fff;
    height: 622px;
    margin: 90px auto 15px;	
	color:#000;
}
.layer video {
    width: 90%;
    display: block;
    max-width: 1200px;
    margin: 10px auto;
}
.layer .cls {
    position: absolute;
    right: 23px;
    top: 21px;
    width: 33px;
    cursor: pointer;
}
.layer h2 {
position: absolute;
    font-weight: bold;
    font-size: 30px;
    text-transform: uppercase;
}
.slider h3 {
    background: #fff;
    color: #3498db;
    font-size: 36px;
    line-height: 100px;
    margin: 10px;
    padding: 2%;
    position: relative;
    text-align: center;
}
.gbasli{
    width: 100%;
    float: left;
    height: 500px;
    object-fit: cover;
}
.gbnav{
    width: 98%;
    height: 120px;
    margin: 1%;
    object-fit: cover;	
}
._1wdbh {
    flex: initial;
    padding: 0 16px;
    background: #f7f9fa;
    box-shadow: 0 -4px 8px 0 rgba(27,27,27,.1), 0 1px 3px 0 rgba(27,27,27,.1);
}
.AGG5b {
    display: flex;
    flex-direction: column;
    padding: 16px 0;
}
._1EnnQ {
font-size: 14px;
    line-height: 22px;
}
._2hcMj {
    font-size: 20px;
    line-height: 24px;
    color: rgb(249,109,1);
    font-weight: Bold;
}
._3zKAA {
    font-size: 12px;
    line-height: 16px;
}
.gLbQ- {
	border: none;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    text-align: center;
    border-radius: 3px;
    font-weight: 700;
    padding: 6px;
    margin-top: 10px;
    background: #0770cd;
}
.specdetail{
	height: 495px;
    overflow-y: scroll;
    width: 100%;
}
._3mvGL {
    padding: 16px 16px;
}
.minideskripsi ul{
	padding-left: 16px;
    list-style: square;
}
</style>
<div class="container">
<img data-load="hide-gallerydetail" id="klose-gallerydetail" class="vjax cls clslayer" src="<?php echo $c_cdn;?>/assets/images/close.svg">
<h2><?php echo $data['nama_produk']; ?></h2>
<div class="content">
	<div class="slider slider-for">
	<?php		
		$image = $data['foto_mini'];
		$picture = explode("<br>",$image);
		foreach($picture as $element){
	?>		
		<div><img class="gbasli" src='<?php echo $c_url;?>/compressed/loading2.svg' data-src="<?php echo  $c_url."/".$element;?>" title="<?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/></div>
	<?php } ?>
	<?php		
		$image = $data['foto_mini'];
		$picture = explode("<br>",$image);
		foreach($picture as $element){
	?>		
		<div><img class="gbasli" src='<?php echo $c_url;?>/compressed/loading2.svg' data-src="<?php echo  $c_url."/".$element;?>" title="<?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/></div>
	<?php } ?>	
	</div>
	<div class="slider slider-nav">
		<?php		
			$image = $data['foto_mini'];
			$picture = explode("<br>",$image);
			foreach($picture as $element){
		?>
		<div><img class="gbnav" src='<?php echo $c_url;?>/compressed/loading2.svg' data-src="<?php echo $c_url."/".$element;?> " title="<?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/></div>
		<?php } ?>
		<?php		
			$image = $data['foto_mini'];
			$picture = explode("<br>",$image);
			foreach($picture as $element){
		?>
		<div><img class="gbnav" src='<?php echo $c_url;?>/compressed/loading2.svg' data-src="<?php echo $c_url."/".$element;?> " title="<?php echo $data['nama_produk'];?>" alt="<?php echo $data['nama_produk'];?>"/></div>
		<?php } ?>		
	</div>
</div>
<div class="sidebar">
<div class="specdetail">
	<div class="_3mvGL">
		<div class="minideskripsi">
			<b>Deskrispsi Singkat :</b>
			<?php echo $mini_deskripsi[1];?>
			<hr>
			<b>Fasilitas :</b>
			<ul class="_3l_-m">
				<li><span class="_1KrnW _1EnnQ _2HSse">AC</span></li>
				<li><span class="_1KrnW _1EnnQ _2HSse">Air minum kemasan cuma-cuma</span></li>
				<li><span class="_1KrnW _1EnnQ _2HSse">Pembuat kopi / teh</span></li>
				<li><span class="_1KrnW _1EnnQ _2HSse">Minibar</span></li>
				<li><span class="_1KrnW _1EnnQ _2HSse">Kulkas</span></li>
				<li><span class="_1KrnW _1EnnQ _2HSse">Televisi</span></li>
			</ul>
			<hr>			
		</div>	
	</div>
</div>
<div class="_1wdbh">
	<div class="AGG5b">
		<span class="_1KrnW _1EnnQ _2HSse">mulai dari</span>
		<div>
			<span class="_1KrnW _2hcMj _2HSse _1dKIX _3ddIY" style="color: rgb(249, 109, 1);">Rp <?php echo format_rupiah($data['harga_baru']);?></span>
			<span class="_1KrnW _3zKAA _2HSse">/ kamar / malam</span>
		</div>
		<button id="hubungipenyedia2" class=" _3_ByF gLbQ- _3GtsO" type="button">Hubungi Penyedia</button>
	</div>
</div>
</div>
<link href="<?php echo $c_cdn;?>/plugin/slick/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo $c_cdn;?>/plugin/slick/slick-theme.css" rel="stylesheet" type="text/css">
<script type="text/javascript" async src="<?php echo $c_cdn;?>/plugin/slick/slick.min.js"></script>
<?php
$nomor_chat = $d_telp;
$wa_chat = str_replace(" ","",$d_telp)  ;
if(isset($_SERVER['HTTP_REFERER'])){$link_sumber= $_SERVER['HTTP_REFERER'];}
else{$link_sumber=$app->CURRENT_URL();}
?>
<script>
var alinkchat = "<?php echo callwa ($wa_chat,$link_sumber); ?>";
function callwa_detail(){
	$('<a href="'+alinkchat+'" target="blank"></a>')[0].click(); 
	return false;	
}
$('#hubungipenyedia2').click(callwa_detail);
</script>
<script async>
 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  autoplay: true,
  autoplaySpeed: 2000,  
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 2000,  
  focusOnSelect: true
});

document.getElementsByClassName("clslayer")[0].addEventListener("click", hidepanel);
function hidepanel(){
	x = document.querySelectorAll(".layer");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
		x[i].classList.remove("layer");
	}	
}
</script>
<?php

exit; }