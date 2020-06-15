<?php

if(isset($_REQUEST['p'])){
switch ($_GET['p']) {
	case 'harga-mesin-fotocopy':
		$page_title="Daftar Harga Mesin Fotocopy Baru, Rekondisi - ".date('M-Y');
		$site_description="Daftar Harga Mesin Fotocopy Baru & Rekondisi ".date('Y')." - Telp. $d_telp";
		$site_image="mobile/banner/ibuki.jpg";
		break;

	case 'detail':
		if (isset($_GET['link'])){
		$link = $_GET['link'];

		if($db->num_rows("select id_produk from produk where link='$link'") == 0){
			echo "Opps,.. produk Not Found!";
			exit();
		}else{
		$data_a = $db->detail_produk($link);
		$a_id = $data_a['id_produk'];
		$a_nama_produk = $data_a['nama_produk'];
		$a_hits = $data_a['hits'];
		$a_time = $data_a['time'];
		$a_date = $data_a['date'];
		$a_link = $data_a['link'];
		$a_category = $data_a['category'];
		$a_cat = $data_a['category'];
		$a_brand = $data_a['brand'];
		$a_hot = $data_a['hot'];
		$a_harga_lama = $data_a['harga_lama'];
		$a_harga_baru = $data_a['harga_baru'];
		$a_sku = $data_a['sku'];
		$a_deskripsi_a = $data_a['deskripsi_a'];
		$a_deskripsi_b = $data_a['deskripsi_b'];
		$a_garansi = $data_a['garansi'];
		$a_panjang = $data_a['panjang'];
		$a_lebar = $data_a['lebar'];
		$a_tinggi = $data_a['tinggi'];
		$a_spec = $data_a['spec'];
		$a_deskripsi = $data_a['deskripsi'];
		$a_ketentuan = $data_a['ketentuan'];
		$a_review = $data_a['review'];
		$a_diskon = $data_a['diskon'];
		$a_user = $data_a['user'];
		$jumlah_category = substr_count($a_category,",");
		$a_category = explode(',',$a_category);
		$a_image = $data_a['image_satu'];
		$a_image1 = $data_a['image_dua'];
		$a_image2 = $data_a['image_3'];
		if($a_brand=='Canon'){$a_brands='canon';} else {$a_brands='fujixerox';}
		$sql_update = $db->query("update produk set hits=hits+1 where id_produk='$a_id'");
		if ($a_harga_lama == 0) {$c = 0;} else {$a=$a_harga_lama;$b=$a_harga_baru;$c=(($a-$b)/($a/100)); }
		}} 	
		$site_image=$image_3;
		$page_title="Mesin Fotocopy $a_brand -  $a_nama_produk - $c_title";
		$site_name="Vanectro.Com";
		$site_description="$a_brand $a_nama_produk, miliki mesin fotocopy $a_brand dengan Rp ".format_rupiah($a_harga_baru-5000000)." sekarang juga!! stok terbatas  - Telp. $d_telp";
		break;
		
	case 'mesin-fotocopy-warna':
		$site_image="mobile/banner/mesin-fotocopy-warna-fujixerox.jpg";
		$page_title="Mesin Fotocopy Warna Harga Mulai 20Jutaan - ".date('M-Y');
		$site_description="Update Daftar Harga Mesin Fotocopy Warna Mesin Cetak Multifungsi, Bergaransi 1 Tahun ".date('M-Y')."  -  Telp. $d_telp";
		break;
		
	case 'mesin-fotocopy-rekondisi':
		$site_image="mobile/banner/nyaman-min.jpg";
		$page_title="Jual Mesin Fotocopy Bekas Harga Murah Garansi 1 Tahun - ".date('M-Y');
		$site_description="Mesin fotocopy bekas untuk kebutuhan usaha fotocopy memang sangat disarankan karena terbukti menguntungkan - Telp. $d_telp ".date('M-Y');
		break;
		
	case 'mesin-fotocopy-canon':
		$site_image="mobile/banner/Canon-1-min.jpg";
		$page_title="Pusat Jual Mesin Fotocopy Canon Garansi 1 Tahun - ".date('M-Y');
		$site_description="Jual Mesin Fotocopy Harga Murah Canon Garansi Resmi 1 Tahun - Telp. $d_telp Promo ".date('M-Y');	
		break;
		
	case 'mesin-fotocopy-fujixerox':
		$site_image="mobile/banner/fujixerox.jpg";	
		$page_title="Promo : Jual Mesin Fotocopy Garansi Seumur Hidup Harga Termurah - ".date('M-Y');
		$site_description="Promo Update :".date('M-Y')."Mau nyari mesin fotocopy murah, gak cepet rusak?? Garansi seumur hidup - Telp. $d_telp";	
		break;

	case 'usaha-fotocopy':
		$site_image="mobile/banner/paket-3.jpg";	
		$page_title="Promo Paket Usaha Fotocopy Termurah, Kondisi Mesin 98% Normal - ".date('M-Y');
		$site_description="Bingung ingin memulai usaha fotocopy ?? mencari tempat membeli mesin ?? Konsultasikan saja dengan kami gratiss kok Telp. $d_telp";		
		break;

	case 'chat':
		$site_image="mobile/banner/hubungi-kami-min2.jpg";	
		include 'pages/test.php';
		break;
		
	case 'order':
		$site_image="mobile/banner/hubungi-kami-min2.jpg";			$site_image="mobile/banner/cara-pemesanan-min.jpg";	
		$page_title="Cara pemesanan atau membeli mesin fotocopy di $site_name";
		$site_description="Cara pemesanan atau metode pembelian mesin fotocopy di $site_name";	
		break;

	case 'pembayaran':
		$site_image="mobile/banner/cara-pembayaran-min.jpg";	
		$page_title="Cara pembayaran atau nomor rekening $site_name";
		$site_description="page_title - atau hubungi kami di $d_telphp2";	
		break;

	case 'hubungi':
		$site_image="mobile/banner/hubungi-kami-min2.jpg";	
		$page_title="Kontak & Alamat - Pusat penjualan mesin fotocopy";
		$site_description="Pusat penjualan mesin fotocopy terpercaya, kontak dan alamat";	
		break;

	case 'tentang-kami':
		$site_image="mobile/banner/tentang-kami-min.jpg";
		$page_title="Pusat penjualan mesin fotocopy terpercaya di Indonesia";
		$site_description="Bingung mencari mesin fotocopy?? mau mesin dengan harga murah garansi resmi seumur hidup?? -  Telp. $d_telp";	
		break;
		
	case 'syarat-dan-ketentuan':
		$site_image="mobile/banner/syarat-ketentuan-min.jpg";
		$page_title="Syarat & Ketentuan di $site_name";
		$site_description="Jual Mesin Fotocopy Baru , Mesin Fotocopy Warna, Mesin Fotocopy Fujixerox, Mesin Fotocopy Canon  & Mesin Fotocopy Rekondisi -  Telp. $d_telp";
		break;
		
	case 'service-mesin-fotocopy':
		$site_image="mobile/banner/jasa servis-min.jpg";
		$page_title="Info jasa servis mesin fotocopy seIndonesia";
		$site_description="Mesin Fotocopy bermasalah, sering ngadat gak jelas, rewel?? Sudah habis masa garansi dan rusak ?? -  Hubungi $d_telp";
		break;
		
	default:
		$site_image="mobile/banner/ibuki.jpg";
		$page_title="Jual Mesin Fotocopy Baru, Jual Mesin Fotocopy Rekondisi";
		$site_name="Vanectro.Com";
		$site_description="Jual Mesin Fotocopy Baru & Rekondisi, Warna, Merk Fujixerox & Canon  -  Telp. $d_telp";
		break;
		
}}
else{
		$site_image="mobile/banner/ibuki.jpg";
		$page_title="Jual Mesin Fotocopy Baru, Rekondisi";
		$site_name="Vanectro.Com";
		$site_description="Jual Mesin Fotocopy Baru & Rekondisi, Warna, Merk Fujixerox & Canon  -  Telp. $d_telp";
}
?>