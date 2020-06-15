<?php
function faq($a){
	global $c_cdn_img,$c_url,$site_name,$c_cdn;
	global $nama_bca,$nomor_bca, $cabang_bca;
	global $nama_mandiri,$nomor_mandiri, $cabang_mandiri;
	global $nama_bri,$nomor_bri, $cabang_bri;
	global $d_kota,$d_alamat2,$d_alamat3,$d_pos,$d_telp,$d_telp2,$telp_original,$telp_marketing,$telp_original2,$telp_original3,$legal_pt,$legal_siup,$legal_tdp,$legal_npwp, $wacekpengiriman_akunting,$wacekpengiriman_marketing;
	global $d_kota_cabang,$d_alamat_cabang2,$d_alamat_cabang3,$d_pos_cabang,$d_telp_cabang;
	
	$logo_bca_1="<img class='bankimg' src='".$c_cdn_img."/mobile/bca-min.png' alt='bank bca ".$site_name."' title='bank bca ".$site_name."' class='lazy'>";
	$logo_mandiri_1="<img class='bankimg' src='".$c_cdn_img."/mobile/mandiri-min.png' alt='bank bca ".$site_name."' title='bank bca ".$site_name."' class='lazy'>";
	$logo_bri_1="<img class='bankimg' src='".$c_cdn_img."/mobile/bri-min.png' alt='bank bca ".$site_name."' title='bank bca ".$site_name."' class='lazy'>";
	
	$a=str_replace('faq_cdn1', $c_cdn, $a);
	$a=str_replace('faq_kota', $d_kota, $a);
	$a=str_replace('faq_alamat2', $d_alamat2, $a);
	$a=str_replace('faq_alamat3', $d_alamat3, $a);
	
	$a=str_replace('faq_pos', $d_pos, $a);
	$a=str_replace('faq_telp1', $d_telp, $a);
	$a=str_replace('faq_telp2', $d_telp2, $a);
	
	$a=str_replace('faq_telp_marketing_ori', $telp_original, $a);
	$a=str_replace('faq_telp_original', $telp_original, $a);
	$a=str_replace('faq_telp2_original', $telp_original2, $a);
	$a=str_replace('faq_telp3_original', $telp_original3, $a);	
	$a=str_replace('faq_legal_pt', $legal_pt, $a);
	$a=str_replace('faq_legal_siup', $legal_siup, $a);
	$a=str_replace('faq_legal_tdp', $legal_tdp, $a);
	$a=str_replace('faq_legal_npwp', $legal_npwp, $a);	
	$a=str_replace('faq_c_url', $c_url, $a);
	$a=str_replace('faq_site_name', $site_name, $a);
	//logo bank
	$a=str_replace('faq_logo_bca_1', $logo_bca_1, $a);
	$a=str_replace('faq_logo_mandiri_1', $logo_mandiri_1, $a);
	$a=str_replace('faq_logo_bri_1', $logo_bri_1, $a);	
	//pembayaran bca
	$a=str_replace('faq_nama_bca', $nama_bca, $a);
	$a=str_replace('faq_nomor_bca', $nomor_bca, $a);
	$a=str_replace('faq_cabang_bca', $cabang_bca, $a);
	//pembayaran mandiri
	$a=str_replace('faq_nama_mandiri', $nama_mandiri, $a);
	$a=str_replace('faq_nomor_mandiri', $nomor_mandiri, $a);
	$a=str_replace('faq_cabang_mandiri', $cabang_mandiri, $a);	
	//pembayaran mandiri
	$a=str_replace('faq_nama_bri', $nama_bri, $a);
	$a=str_replace('faq_nomor_bri', $nomor_bri, $a);
	$a=str_replace('faq_cabang_bri', $cabang_bri, $a);		
	//alamat kantor cabang
	$a=str_replace('faq_cabang_kota', $d_kota_cabang, $a);
	$a=str_replace('faq_cabang_alamat2', $d_alamat_cabang2, $a);
	$a=str_replace('faq_cabang_alamat3', $d_alamat_cabang3, $a);
	$a=str_replace('faq_cabang_pos', $d_pos, $a);
	$a=str_replace('faq_cabang_telp1', $d_telp_cabang, $a);	
	
	//wacekpengiriman
	$a=str_replace('faq_wacekpengiriman_akunting', $wacekpengiriman_akunting, $a);
	$a=str_replace('faq_wacekpengiriman_marketing', $wacekpengiriman_marketing, $a);
	$a=str_replace('faq_bulan_indonesia', bulanIndonesia(date('m'))." - ".date('Y'), $a);
	
	//returngb
	$a=str_replace('cekg_gb_refund1',"<img src='".$c_cdn."/new/images/return/ketentuan-pengembalian1.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang'>", $a);
	$a=str_replace('cekg_gb_refund2',"<img src='".$c_cdn."/new/images/return/ketentuan-pengembalian2.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang'>", $a);
	$a=str_replace('cekg_gb_refund3',"<img src='".$c_cdn."/new/images/return/ketentuan-pengembalian5.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang'>", $a);
	$a=str_replace('cekg_gb_refund4',"<img src='".$c_cdn."/new/images/return/ketentuan-pengembalian4.png' alt='syarat dan ketentuan pengembalian barang' title='syarat dan ketentuan pengembalian barang'>", $a);
	//return faq lib
	return ($a);
}

function judul_faq($a){
	$a=faq($a);
	//return faq lib
	return ($a);
}

function urutan_faq($a){
	if($a==1){$status="is-active";$status2="style='display: block;'";}
	else{$status="";$status2="";}
	return array($status, $status2);
}