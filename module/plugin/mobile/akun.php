	<?php if(isset($_GET['act'])){?>
	<div class="container-fluid sbawah ">
		<?php if($_GET['act']!="dashboard"){?><div class="space-2"></div><center><a href="<?php echo $c_url;?>/dashboard" class="button chat2 primary-bg light-color margin-left-0"><i class="fa fa-arrow-left"></i> KEMBALI KE DASHBOARD </a></center><?php } ?>
	</div>
	<?php } ?>
	<div class="container-fluid container-full pt20">					
		<!-- TITLE STARTS -->
		<div class="container-fluid row">
			<div class="col-xs-12">
				<div class="new-product-title Mesin_Fotocopy_Paling_LARIS">Panel <span class="brush" >PELANGGAN</span> <?php echo $site_name;?> !! </div>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->

		<div class="container-fluid">
			<div class="row">
			<div class="col-xs-12">
				<amp-carousel class="blog-carousel" layout="fixed-height" height=115>	
					<a href="<?php echo $c_url."/riwayat-pesanan";?>" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/invoice.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>History Belanja</small></button>
						</div>
					</a>
					<a href="<?php echo $c_url."/permintaan-barang";?>" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/chat.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Nego Harga</small></button>
						</div>
					</a>					
					<a href="<?php echo $c_url."/mesin-fotocopy-incaran";?>" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/wishlist.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Daftar Keinginan</small></button>
						</div>
					</a>	
				<a href="<?php echo $c_url;?>/order" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/buy.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Cara Pemesanan</small></button>
						</div>
					</a>
					<a href="<?php echo $c_url;?>/pembayaran" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/credit-cards.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Cara Pembayaran</small></button>
						</div>
					</a>					
					<a href="<?php echo $c_url;?>/konfirmasi-pembayaran" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/check-signing.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Konfirmasi Bayar</small></button>
						</div>
					</a>					
					<a href="<?php echo $c_url;?>/panduan-pelanggan" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/csgo.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Panduan Pelanggan</small></button>
						</div>
					</a>
					<a href="<?php echo $c_url;?>/penawaran" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/invil.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Penawaran Harga</small></button>
						</div>
					</a>	
					<a href="<?php echo $c_url;?>/cari-mesin-fotocopy" class="capro2 zoom blog-carousel-item">
						<div class="preview"><amp-img src="
						<?php echo $c_cdn;?>/new/images/amp/laptop.svg" width=50 height=50></amp-img></div>
						<div class="infopro2 bulletpoint blog-carousel-item-caption">
							<button class="border-r5 margin-0 button button-small  primary-bg light-color"><small>Cari Mesin</small></button>
						</div>
					</a>						
				</amp-carousel><!-- BLOG CAROUSEL ENDS -->
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->	
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
	<ul class="u-list-reset more-info__content u-p0 u-m0">
		<li><a class="more-info__link" href="<?php echo $c_url;?>/pengiriman">Cek Ongkos Kirim<i class="inext"></i></a></li>
		<li><a class="more-info__link" href="<?php echo $c_url;?>/ketentuan-garansi">Klaim Garansi<i class="inext"></i></a></li>
		<li><a class="more-info__link" href="<?php echo $c_url;?>/kebijakan-privasi">Kebijakan Privasi<i class="inext"></i></a></li>
		<li><a class="more-info__link" href="<?php echo $c_url;?>/syarat-dan-ketentuan">Syarat & Ketentuan<i class="inext"></i></a></li>
	</ul>