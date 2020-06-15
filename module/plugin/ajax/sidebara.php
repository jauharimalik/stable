<style>
.sidebar-mask, .sidebara {
    position: fixed;
    top: 0;
    height: 100vh;
    width: 248px;
    background-color: #fff;
    outline: none;
    z-index: 2147483647;
    overflow-x: hidden!important;
    overflow-y: auto!important;	
}
.sidebara h5{
    line-height: 1.5;
    margin: 0;
	padding : 10px;
    font-size: 1.2rem;
	background :#083d77;
}
.sidebara h5 a{color:#fff;}
.sidebara .banner{width: 248px;height: 132px;}
.sidebar-mask{
    width: 100vw;
    opacity: 0.2;
    background-image: none!important;
    background-color: #000;
    z-index: 2147483646;
}
.menunya{display: block;}
.menunya a{color:#000;}
.menuli{font-size: 1.3rem;
    display: block;
    padding: 10px;
    margin: 0;
    border-bottom: 1px solid #eee;
}
.menuli i{margin-right:10px;}
.menuli:after {
	content:"";
    background-image: url(<?php echo $c_url; ?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;margin-right: 10px;
    float: right;
}
.menunya .active{background: #eee;color:#083d77;}
.menunya .active:after{-webkit-transform: rotate(-90deg);
transform: rotate(-90deg);}
.panel a{padding: 10px; border-bottom:1px solid #eee;display: block;}
.infonya{font-size: .8em;padding: 10px;color: #000;line-height: 2.1;}
.sosial{padding:10px;}
.fb-bg, .fa-facebook {background-color: #4867AA;}
.twitter-bg, .fa-twitter {background-color: #00ACED;}
.gplus-bg, .fa-google-plus {background-color: #dc4e41;}
.yt-bg, .fa-youtube {background-color: #c90d0e;}
.sidebar .footernya{padding:10px;font-size:12px;font-weight: bold;margin: 0;}
.sosial a{line-height: 30px;text-align: center;border-radius: 50%;margin-right: 5px;display: inline-block;height: 30px;width: 30px;font-size: 1.6rem;color: #fff;}
</style>		
		<div class="sidebar sidebara">
			<h5><a class="vjax"> Selamat Datang, di <?php echo $site_name;?> </a></h5>
			<img class="banner lazy" width="20" height="20" alt="jual mesin fotocopy" title="jual mesin fotocopy" data-src="<?php echo $c_url; ?>/compressed/amp/sibarbg.webp" />
			<div class="menunya">
				<a href="<?php echo $c_url;?>"><h4 class="menuli"><b><i class="fa fa-home"></i> Home</b></h4></a>			
			</div>
			<div class="menunya">
				<h4 class="accordion menuli"><b><i class="fa fa-th"></i> Kategori Produk</b></h4>
				<div class="hide panel">
					<a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Daftar Harga Mesin Fotocopy</a>
					<a href="<?php echo $c_url;?>/jual-mesin-fotocopy">Jual Mesin Fotocopy Jakarta</a>
					<a href="<?php echo $c_url;?>/harga-mesin-fotocopy">Harga Mesin Fotocopy</a>
					<a href="<?php echo $c_url;?>/promo-paket-usaha-fotocopy">Paket Usaha Fotocopy</a>
					<a href="<?php echo $c_url;?>/mesin-fotocopy-warna">Mesin Fotocopy Warna</a>
					<a href="<?php echo $c_url;?>/mesin-fotocopy-canon">Mesin Fotocopy Canon</a>
					<a href="<?php echo $c_url;?>/mesin-fotocopy-rekondisi">Mesin Fotocopy Rekondisi</a>
					<a href="<?php echo $c_url;?>/mesin-fotocopy-fujixerox">Mesin Fotocopy Fuji Xerox</a>
					<a href="<?php echo $c_url;?>/sewa-mesin-fotocopy">Sewa Mesin Fotocopy</a>
					<a href="<?php echo $c_url;?>/sparepart-fotocopy">Sparepart Mesin Fotocopy</a>
				</div>				
			</div>			
			<div class="menunya">
				<h4 class="accordion menuli"><b><i class="fa fa-question-circle"></i> Bantuan Pelanggan</b></h4>
				<div class="hide panel">
					<a href="<?php echo $c_url;?>/daftar-harga-mesin-fotocopy">Download Daftar Harga Fotocopy</a>
					<a href="<?php echo $c_url;?>/penawaran">Nego Harga</a>
					<a href="<?php echo $c_url;?>/pengiriman">Cek Tarif Ongkir</a>
					<a href="<?php echo $c_url;?>/cari-mesin-fotocopy">Rekomendasi Mesin Fotocopy</a>
					<a href="<?php echo $c_url;?>/perbandingan-mesin-fotocopy">Perbandingan Mesin Fotocopy</a>
					<a href="<?php echo $c_url;?>/order">Cara Pemesanan</a>
					<a href="<?php echo $c_url;?>/detail-pesanan">Cek Status Pesanan</a>
					<a href="<?php echo $c_url;?>/pembayaran">Cara Pembayaran</a>
					<a href="<?php echo $c_url;?>/konfirmasi-pembayaran">Konfirmasi Pembayaran</a>
					<a href="<?php echo $c_url;?>/panduan-pelanggan">Bantuan Pelanggan</a>
				</div>				
			</div>		
			<div class="menunya">
				<h4 class="accordion menuli"><b><i class="fa fa-address-card"></i> Tentang Kami</b></h4>
				<div class="hide panel">
					<a href="<?php echo $c_url;?>/tentang-kami">Profile Perusahaan</a>
					<a href="<?php echo $c_url;?>/keunggulan-kami">Keunggulan <?php echo $site_name;?></a>
					<a href="<?php echo $c_url;?>/syarat-dan-ketentuan">Syarat & Ketentuan</a>
					<a href="<?php echo $c_url;?>/kebijakan-privasi">Kebijakan Privasi</a>
				</div>				
			</div>	
			<div class="menunya">
				<a href="<?php echo $c_url;?>/hubungi"><h4 class="menuli"><b><i class="fa fa-map-marker"></i> Kontak & Alamat Kami</b></h4></a>			
			</div>
			<p class="infonya">
				<b><?php echo $d_alamat2;?></b><br>
				<b>Phone :</b> <a href="tel:<?php echo $d_telp;?>"><?php echo $d_telp;?></a><br>
				<b>Whatsapp :</b> <a href="intent://send/62<?php echo $telp_marketing;?>#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><?php echo $telp_original;?> </a><br>
				<b>E-Mail :</b> <a href="mailto:<?php echo $mail_marketing;?>"><?php echo $mail_marketing;?></a>	
			</p>
			<div class="sosial">
				<a href="<?php echo $d_facebook;?>" class="fab fa-facebook"></a>
				<a href="<?php echo $d_twitter;?>" class="fab fa-twitter"></a>
				<a href="<?php echo $d_googleplus;?>" class="fab fa-google-plus"></a>
				<a href="<?php echo $d_youtube;?>" class="fab fa-youtube"></a>
			</div>
			<p class="footernya"><small> Copyright © <?php echo date('Y'); ?> ( <a href="<?php echo $c_url;?>" target="_blank"> <?php echo $site_name; ?></a> ).</small></p>	
		</div>
		
		<div data-load="hide-sidebar" id="klose-sidebara" class="vjax sidebar-mask sidebara"></div>