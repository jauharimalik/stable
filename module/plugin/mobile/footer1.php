	<div class="footer-shortcut--container">
		<a href="<?php echo $c_url;?>/" class="icon-content  "><div class="icon-content--img">
			<amp-img srcset="<?php echo $c_cdn;?>/new/images/amp/foo/home.svg" width="25" height="25" ></amp-img>		
			<p>Home</p></div>
		</a>
		<a on="tap:teleponkami" role="button" class="icon-content active "><div class="icon-content--img">
			<amp-img srcset="<?php echo $c_cdn;?>/new/images/amp/foo/telp.svg" width="25" height="25" ></amp-img>
			<p>Telepon</p></div>
		</a>
		<a on="tap:smskami" role="button" class="icon-content"><div class="icon-content--img">
			<amp-img srcset="<?php echo $c_cdn;?>/new/images/amp/foo/sms.svg" width="25" height="25" ></amp-img>
			<p>SMS</p></div>
		</a>
		<a on="tap:wakami" role="button"  class="icon-content  "><div class="icon-content--img">
			<amp-img srcset="<?php echo $c_cdn;?>/new/images/amp/foo/wa.svg" width="25" height="25" ></amp-img>
			<p>Whatsapp</p></div>
		</a>
		<a href="<?php echo $c_url;?>/hubungi"  class="icon-content  "><div class="icon-content--img">
			<amp-img srcset="<?php echo $c_cdn;?>/new/images/amp/foo/map.svg" width="25" height="25" ></amp-img>
			<p>Alamat</p></div>
		</a>		
	</div>
<amp-lightbox scrollable  id="teleponkami" layout="nodisplay">
    <header>
        <a class="pull-left" on="tap:teleponkami.close"><i class="fa fa-arrow-left"></i></a>
		<div class="mobile-header-block__search pt51 text-putih f16" id="gdn-search-product">
			Telephone Tim Kami
		</div>		
    </header><!-- TOP NAVBAR ENDS -->	
	<div class="putih pt51" on="tap:teleponkami.close" role="button" tabindex="0">
		<?php  require PLUG.'/mobile/telponkami.php'; ?>	
	</div>
</amp-lightbox>
<amp-lightbox scrollable  id="wakami" layout="nodisplay">
    <header>
        <a class="pull-left" on="tap:wakami.close"><i class="fa fa-arrow-left"></i></a>
		<div class="mobile-header-block__search pt51 text-putih f16" id="gdn-search-product">
			Chat Whatsapp Tim Kami
		</div>		
    </header><!-- TOP NAVBAR ENDS -->	
	<div class="putih pt51" on="tap:wakami.close" role="button" tabindex="0">
		<?php  require PLUG.'/mobile/telponkami3.php'; ?>	
	</div>
</amp-lightbox>
<amp-lightbox scrollable  id="smskami" layout="nodisplay">
    <header>
        <a class="pull-left" on="tap:smskami.close"><i class="fa fa-arrow-left"></i></a>
		<div class="mobile-header-block__search pt51 text-putih f16" id="gdn-search-product">
			SMS Tim Kami
		</div>		
    </header><!-- TOP NAVBAR ENDS -->	
	<div class="putih pt51" on="tap:smskami.close" role="button" tabindex="0">
		<?php  require PLUG.'/mobile/telponkami2.php'; ?>	
	</div>
</amp-lightbox>