<?php

function url_kota($query_city,$c_url){
	$url_kota=$c_url."/jual-mesin-fotocopy-kota-".strtolower($query_city);
	return $url_kota;
}

function seo_title($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#','--','---',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    $s = clean($s);
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    $s = strtolower(str_replace('---', '-', $s));
	$s = strtolower(str_replace('--', '-', $s));
	return $s;
}
function links($s) {
    $c = array (' ');
    $d = array ('/','\\',',','.','#','--','---',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}


function rubah_nominal_pencarian($a){
	$a = strtolower($a);
	$b = str_replace("jutaan", "000000",$a);
	$b = str_replace("juta", "000000",$b);
	$b = str_replace("jt", "000000",$b);
	$b = str_replace("jut", "000000",$b);
	$b = str_replace("jta", "000000",$b);
	$b = str_replace("ribuan", "000",$b);
	$b = str_replace("ribu", "000",$b);
	$b = str_replace("ratusan", "00",$b);
	$b = str_replace("ratus", "00",$b);
	$b = str_replace("puluhan", "0",$b);
	$b = str_replace("puluh", "0",$b);
	$b = str_replace("rupiah", "",$b);

	$b = str_replace("sembilan belas", "19",$b);
	$b = str_replace("delapan belas", "18",$b);
	$b = str_replace("tujuh belas", "17",$b);
	$b = str_replace("enam belas", "16",$b);
	$b = str_replace("lima belas", "15",$b);
	$b = str_replace("empat belas", "14",$b);
	$b = str_replace("tiga belas", "13",$b);
	$b = str_replace("dua belas", "12",$b);
	$b = str_replace("se belas", "11",$b);
	$b = str_replace("sebelas", "11",$b);
	$b = str_replace("sepuluh", "10",$b);
	$b = str_replace("sembilan", "9",$b);
	$b = str_replace("delapan", "8",$b);
	$b = str_replace("wolu", "8",$b);
	$b = str_replace("wolong", "8",$b);
	$b = str_replace("tujuh", "7",$b);
	$b = str_replace("tuju ", "7",$b);
	$b = str_replace("enam", "6",$b);
	$b = str_replace("nem", "6",$b);
	$b = str_replace("lima", "5",$b);
	$b = str_replace("limo", "5",$b);
	$b = str_replace("empat", "4",$b);
	$b = str_replace("papat", "4",$b);
	$b = str_replace("patang", "4",$b);
	$b = str_replace("tiga", "3",$b);
	$b = str_replace("tigo", "3",$b);
	$b = str_replace("telu", "3",$b);
	$b = str_replace("dua", "2",$b);
	$b = str_replace("loro", "2",$b);
	$b = str_replace("satu", "1",$b);
	return $b;
}	

function filterkeywordsearch($carrinya){
	$carrinya = str_replace("dari"," ",($carrinya));
	$carrinya = str_replace("yang"," ",($carrinya));	
	$carrinya = str_replace("dan"," ",($carrinya));		
	$carrinya = str_replace("atau"," ",($carrinya));	
	$carrinya = str_replace("nge"," ",($carrinya));
	$carrinya = str_replace("nya"," ",($carrinya));
	$carrinya = str_replace("bisa"," ",($carrinya));
	$carrinya = str_replace("di"," ",($carrinya));
	$carrinya = str_replace("dana","uang",($carrinya));
	$carrinya = str_replace("ekspedisi","jasa pengiriman",($carrinya));
	$carrinya = str_replace("logistik","jasa pengiriman",($carrinya));
	$carrinya = str_replace("kurir","jasa pengiriman",($carrinya));
	$carrinya = str_replace("mmkl","jasa pengiriman",($carrinya));
	$carrinya = str_replace("tiki","jasa pengiriman",($carrinya));
	$carrinya = str_replace("jne","jasa pengiriman",($carrinya));
	$carrinya = str_replace("online"," ",($carrinya));
	$carrinya = str_replace("apa"," ",($carrinya));	
	$carrinya = str_replace("siapa"," ",($carrinya));
	$carrinya = str_replace("dimana"," ",($carrinya));
	$carrinya = str_replace("kapan"," ",($carrinya));
	$carrinya = str_replace("mengapa"," ",($carrinya));
	$carrinya = str_replace("bagaimana"," ",($carrinya));
	$carrinya = str_replace("kamu"," ",($carrinya));	
	$carrinya = str_replace("anda"," ",($carrinya));		
	$carrinya = str_replace("saya"," ",($carrinya));	
	$carrinya = str_replace("aku"," ",($carrinya));		
	$carrinya = str_replace("gue"," ",($carrinya));		
	$carrinya = str_replace("elu"," ",($carrinya));		
	$carrinya = str_replace("murah"," ",($carrinya));	
	$carrinya = str_replace("jual"," ",($carrinya));
	$carrinya = str_replace("beli"," ",($carrinya));
	$carrinya = str_replace("atk"," ",($carrinya));	
	$carrinya = str_replace(" an"," ",($carrinya));
	$carrinya = str_replace("-an"," ",($carrinya));	
	$carrinya = str_replace("gratiss"," ",($carrinya));	
	$carrinya = str_replace("gratis"," ",($carrinya));	
	$carrinya = str_replace("vanectro"," ",($carrinya));	
	$carrinya = str_replace("kota","",$carrinya);
	$carrinya = str_replace("di","",$carrinya);
	$carrinya = str_replace("kabupaten","",$carrinya);
	$carrinya = str_replace("daerah","",$carrinya);
	$carrinya = str_replace("provinsi","",$carrinya);
	$carrinya = str_replace("pulau","",$carrinya);
	$carrinya = str_replace("kecamatan","",$carrinya);
	$carrinya = str_replace("kelurahan","",$carrinya);
	$carrinya = str_replace("kecamatan","",$carrinya);
	$carrinya = str_replace("desa","",$carrinya);
	$carrinya = str_replace("utara","",$carrinya);
	$carrinya = str_replace("selatan","",$carrinya);
	$carrinya = str_replace("timur","",$carrinya);
	$carrinya = str_replace("barat","",$carrinya);
	$carrinya = str_replace("tengah","",$carrinya);
	$carrinya = str_replace("cabang","",$carrinya);
	$carrinya = str_replace("kantor","",$carrinya);
	$carrinya = str_replace("   "," ",$carrinya);
	$carrinya = str_replace("  "," ",$carrinya);	
	$carrinya = str_replace("  "," ",($carrinya));	
	$carrinya = rubah_nominal_pencarian($carrinya);
	$carrinya = ltrim($carrinya);
	$carrinya = rtrim($carrinya);
	return $carrinya; 
}

function filterkeywordtv($carrinya){
	$kata = str_replace("-"," ",seo_title($carrinya));	
	$katatv = str_replace("canon","",$kata);
	$katatv = str_replace("cara","",$kata);
	$katatv = str_replace("pembayaran","",$kata);
	$katatv = str_replace("pemesanan","",$kata);
	$katatv = str_replace("vanectro","",$kata);
	$katatv = str_replace($site_name,"",$kata);
	$katatv = str_replace("xerox","",$katatv);
	$katatv = str_replace("fuji","",$katatv);
	$katatv = str_replace("fuji xerox","",$katatv);
	$katatv = str_replace("ira","",$katatv);
	$katatv = str_replace("advance","",$katatv);
	$katatv = str_replace("ir","",$katatv);
	$katatv = str_replace("   "," ",$katatv);
	$katatv = str_replace("  "," ",$katatv);
	$katatv = ltrim($katatv);
	$katatv = rtrim($katatv);
	$katatv = trim($katatv);
	return $carrinya;		
}	

function filterkeywordhelp($a){
	$a = filterkeywordtv($a);
	$a = filterkeywordsearch($a);	
	return $a;
}
function linkdaerah($a){
	$a = strtolower($a);
	$a = str_replace (" ","-",$a);
	$a = str_replace ("--","-",$a);
	$a = str_replace ("---","-",$a);
	return $a;
}