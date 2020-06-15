<?PHP
if (isset($_GET['pg'])){
	$page = abs((int)$_GET['pg']);
	echo "
	<title>$c_title - Page $page</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta name='description' content='$c_title - page $page'>
	<meta name='keywords' content='$c_title - page $page, view article in page $page'>
	<meta name='author' content='Dewa'>
	";
}
else{
	echo "
	<title>$c_title</title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta name='description' content='$c_title'>
	<meta name='keywords' content='$c_title'>
	<meta name='author' content='Dewa'>
	";
	$page = 1;
}
//untuk pelengkap file load_content.php
$paging = "$c_url/$uri_paging_index"; //default url untuk pagingnya 
$calc = $c_perpage * $page;
$start = $calc - $c_perpage;
$data_art = $db->select("article", "link, title, image, shoot, date, category, id, time", null, "article.date DESC, article.time DESC", "$start, $c_perpage");
$total_artikel = $db->num_rows("select id from article");
?>
<link rel='stylesheet' type='text/css' href='<?PHP echo $c_cdn_css; ?>/blog-style/bootstrap-theme/united.css'/>
<style>
.service__box {
    border: 2px solid #ccc;
    display: inline-block;
    vertical-align: top;
    margin: 10px;
	border-radius: 8px;
}
.text-center {text-align: center;}
.service__box__desc {padding: 20px;}
.service__box__title {
    color: #FB4B2A;
    font-weight: bold;
    font-size: 18px;
}
.service__box p{
    font-size: 13px;
    line-height: 1.5;
    font-weight: 100;
    color: #888;
}
.service__detail {
    border-top: 2px solid #ccc;
    margin-top: 20px;
}
.service__box__price {
    font-size: 16px;
    font-weight: bold;
    color: #355482;
}
.button--cta {
    background: #2AC2EC;
    color: white;
    box-shadow: 0 -2px 0 rgba(0,0,0,0.2) inset;
}

a:hover {text-decoration: none;}
a {text-decoration: none; color: inherit;}
.button {
    border: 0;
    outline: 0;
    padding: 8px 22px;
    color: white;
    display: inline-block;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    font-size: 14px;
    font-weight: bold;
}
.service__detail__col {padding: 10px 0;}
.service__box__img img{width:100%;height:auto;border-radius:10px;}
.u-borderRadiusTop4 {
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
}
.u-borderBottomLight {border-bottom: 1px solid rgba(0,0,0,.0785) !important;}
.u-backgroundCover {
    background-position: center !important;
    background-origin: border-box !important;
    background-size: cover !important;
}
.u-backgroundColorGrayLight {background-color: #f0f0f0 !important;}
.u-sizeFull, .u-sizeFullWidth {
    width: 100% !important;
}
.u-height100 {
    height: 100px !important;
}
</style>
		<div class="divContent">
            <div class="windows">
                <div>
					<div id="divBannerWrapper">
						<div id="divBannerFrame">
							<div id="ctl00_cphContent_divBannerContainer" class="divBannerContainer">
								<img src="<?php echo $c_cdn_img; ?>/mobile/banner/Canon-1-min.jpg" class='inline' alt="mesin-fotocopy-murah"  /><img src="<?php echo $c_cdn_img; ?>/mobile/banner/Canon-2-min.jpg" class='inline' alt="fotocopy-canon"  /><img src="<?php echo $c_cdn_img; ?>/mobile/banner/Canon-3-min.jpg" class='inline' alt="Harga Rebutan"  />
							</div>
						</div>
						<div id="divBannerPrev" class="hidden"></div>
						<div id="divBannerNext" class="hidden"></div>
						<div id="divBannerPager" class="hidden">
							<a class='lnkBannerPager inline'></a><a class='lnkBannerPager inline'></a><a class='lnkBannerPager inline'></a>
						</div>
					</div>				
                    <div id="ctl00_contentWrapper" class="mainContent993">  
						<div class="pageHeader">
							<span id="ctl00_cphContent_proListTitle" class="pageHeaderTitle">Tips & Trik - </span>
							<span id="totalItem" class="pageHeaderTitle"> <?php echo $site_name ?> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
				<div id='article' itemscope itemtype="http://schema.org/Article">
					<!-- blog entry -->
					<?PHP
					if (!is_array($data_art)){echo"<meta http-equiv='refresh' content='0; url=$c_url'>";exit();}
					foreach($data_art as $a_data){
					$a_link = $a_data['link'];
					$a_title = $a_data['title'];
					$a_image = $a_data['image'];
					$a_shoot = $a_data['shoot'];
					$a_date = $a_data['date'];
					$a_cat = $a_data['category'];
					$a_id = $a_data['id'];
					$a_time = $a_data['time'];
					?>
				<div class="service__box">
					<div class="u-backgroundCover u-backgroundColorGrayLight u-height100 u-sizeFullWidth u-borderBottomLight u-borderRadiusTop4" style="background-image: url(&quot;<?PHP echo $c_cdn_img.DS.$a_image ?>&quot;); background-position: 50% 50% !important;"></div>
					<img itemprop="image" src="<?PHP echo $c_cdn_img.DS.$a_image ?>" class="img-responsive" width='0px' alt="<?PHP echo $a_title; ?>" title="<?PHP echo $a_title; ?>">
					<div class="service__box__desc">
						<div class="service__box__title"><span  itemprop="name"><?PHP echo $a_title; ?></span></div>
						<div class="service__detail">
							<div class="service__detail__col"> 
							<div class="service__box__price">
								<span class="date" itemprop="datePublished" content='<?PHP echo $a_date; ?>' style="font-size:12px;"><?PHP echo TanggalIndonesiaString($a_date); ?></span> - 
								<span class="author" itemprop="author"  style="font-size:12px;"> By : <?PHP echo $db->_author_this_post($a_id); ?></span>
							</div>
							</div>
							<div class="service__detail__col">
								<a rel="bookmark" href="<?PHP echo $c_url.DS.$app->get_link_mobile($a_link); ?>" class="button button--cta" original-title=""> Selengkapanya ... </a>
							</div>
						</div>
					</div>
				</div>		
					<?PHP } ?>
				</div>
                <!-- Pagination -->
				<div class="bp-docs-example" style='margin-top:0px'>
					<div class="pagination">
						<ul class='pagination'>
							<?PHP
							if(isset($page)){
							$totalPages = ceil($total_artikel / $c_perpage);
							if ($totalPages == 0){
							$totalPages = 1;
							}
							$show_page = 7;
							$i=1;
							if($page <=1 ){
							echo "<li class='active'><a title='NOW IS FIRTS PAGE' class='tipsy-atas'>Firts</a></li>";
							echo "<li class='active'><a title='NOW IS FIRTS PAGE' class='tipsy-atas'>Next</a></li>";
							}
							else{
							$j = $page - 1;
							echo "<li><a title='GOTO FIRTS PAGE' class='tipsy-atas' href='$paging/1'>Firts</a></li>";
							echo "<li><a title='GOTO PREV PAGE' class='tipsy-atas' href='$paging/$j'>Prev</a></li>";
							}
							
							if ($page >= $show_page){
							$total_prev = $page - 3; #4 5 6 7 8 9 10
							$total_next = $page + 3; #10
							if ($total_next >= $totalPages){
							$total_next = $totalPages;
							$total_prev = $total_next - 6;
							}
							$i = $total_prev;
							while ($i <= $total_next){
							if($i<>$page){
							echo "<li><a title='GOTO PAGE $i' class='tipsy-atas' href='$paging/$i'>$i</a></li>";
							}
							else{
							echo "<li class='active'><a title='NOW IS PAGE $i' class='tipsy-atas'>$i</a></li>";
							}
							$i++;
							}
							}else{
							while($i <= $show_page and $i < $totalPages + 1){
							
							if($i<>$page){
							echo "<li><a title='GOTO PAGE $i' class='tipsy-atas' href='$paging/$i'>$i</a></li>";
							}
							else{
							echo "<li class='active'><a title='NOW IS PAGE $i' class='tipsy-atas'>$i</a></li>";
							}
							$i++;
							}
								
							}
							if($page == $totalPages){
							echo "<li class='active'><a title='NOW IS LAST PAGE' class='tipsy-atas'>Next</a></li>";
							echo "<li class='active'><a title='NOW IS LAST PAGE' class='tipsy-atas'>Last</a></li>";
							}
							else{
							$j = $page + 1;
							echo "<li><a title='GOTO NEXT PAGE' class='tipsy-atas' href='$paging/$j'>Next</a></li>";
							echo "<li><a title='GOTO LAST PAGE' class='tipsy-atas' href='$paging/$totalPages'>Last</a></li>";
							}
								
							}
							?>
						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- /.container -->
