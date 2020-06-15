<?php
// cek url dourl
$dourl=url_asli_pages($app->CURRENT_URL());
$dourl=str_replace(":443","",$dourl);

function cek_url_db($dourl1){
	global $c_url;
	$dourl1 = url_asli_pages($dourl1);	
	$dourl1 = cekurlamp($dourl1);
	return $dourl1;
}

function url_produk($brand, $link){
	$brand=strtolower($brand);
	$brand=str_replace(" ","",$brand);
	$link=strtolower($link);
	$link=str_replace(" ","",$link);
	$url_produk=$brand."-".$link;
	return $url_produk;
}
function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}


function url_asli_pages($url) { 
	$url_pages_key="?gclid";
	$url = preg_replace('/(.*)(?|&)' . $url_pages_key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&'); 
	$url = substr($url, 0, -1); 
	$url=str_replace("?","",$url);	
	$url=str_replace("/?","/",$url);		
	return $url; 
}

function brand_url($brand){
	$brand=strtolower($brand);
	$brand=str_replace(" ","",$brand);
	return $brand;
}

// cek url 
function cekurl($a){
	global $c_url, $url_web; 	
	$url_sekarang=str_replace("https://amp.".$url_web, $c_url,$a);			
	$url_sekarang=str_replace("https://amp.".$url_web, $c_url,$a);		
	$url_sekarang=str_replace("http://amp.".$url_web, $c_url,$url_sekarang);			
	$url_sekarang=str_replace("https://www.".$url_web."/amp",$c_url,$url_sekarang);	
	$url_sekarang=str_replace("http://www.".$url_web."/amp",$c_url,$url_sekarang);			
	$url_sekarang=str_replace("/amp","",$url_sekarang);	
	$url_sekarang=str_replace("amp.","",$url_sekarang);	
	return $url_sekarang;
}

// cek url ampnya
function cekurlamp($a){
	global $c_url, $url_web; 	
	$urlnyaamp = cekurl($a);
	$urlnyaamp=str_replace($c_url,"",$a);
	$urlnyaamp=str_replace("https://".$url_web,"",$urlnyaamp);
	$urlnyaamp=str_replace("http://".$url_web,"",$urlnyaamp);	
	$urlnyaamp=str_replace("https://www.".$url_web,"",$urlnyaamp);
	$urlnyaamp=str_replace("http://www.".$url_web,"",$urlnyaamp);
	return $urlnyaamp;	
}

if(isset($total_artikel)){ 
	if(isset($_GET['pg'])){ $pg=$_GET['pg']; }
	function cekurlnextprev($total_artikel,$paging,$pg){
		$hal=ceil($total_artikel/10);
		$pg=1;
		$dourl=$paging;
		$pg2=$pg+1; 
		$pg3=$pg-1;
		if(($pg>1)&&($pg<$hal)&&($pg>2)){
			$next="<link rel='next' href='".$paging."/".$pg2."'/>";
			$prev="<link rel='prev' href='".$paging."/".$pg3."'/>";
		} elseif (($pg>1)&&($pg<$hal)&&($pg==2)){
			$next="<link rel='next' href='".$paging."/".$pg2."'/>";
			$prev="<link rel='prev' href='".$paging."'/>";
		} elseif (($pg<$hal)&&($total_artikel>10)){	
			$next="<link rel='next' href='".$paging."/".$pg2."'/>";
			$prev="";
		} elseif (($pg==$hal)&&($pg>2)){
			$next="";
			$prev="<link rel='prev' href='".$paging."/".$pg3."'/>";
		} elseif (($pg==$hal)&&($pg==2)){	
			$next="";
			$prev="<link rel='prev' href='".$paging."'/>";	
		}
		return array($next, $prev);
	} 	
	$cekurlnextprev =cekurlnextprev($total_artikel,$paging,$pg);
	$next_url_cek	= $cekurlnextprev[0];
	$prev_url_cek	= $cekurlnextprev[1];	
} else {$prev_url_cek	= ""; $next_url_cek	= "";}

$url_sekarang	=cekurl($dourl);		
$urlnyaamp		=cekurlamp($dourl);	
//v2

$url_sekarang2	=($url_sekarang);		
$urlnyaamp2		=($urlnyaamp);	