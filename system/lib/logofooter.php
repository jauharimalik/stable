<?php
function removedashfooter($p){
	$p = str_replace(" ","",$p);		
	$p = str_replace("  ","",$p);		
	$p = str_replace("---","-",$p);
	$p = str_replace("--","-",$p);
	$p = str_replace("-","",$p);	
	return $p;
}
function cekurl_home($p){
	if(isset($p)){
		$p = removedashfooter($p);
		if($p ==""){$home = 1;}
		else if($p =="/"){$home = 1;}
		else if($p =="home"){$home = 1;}
		else {$home = 0;}
	} else {$home = 1;}
	return intval($home);
}

function cekurl_help($p){
	$p = removedashfooter($p);
	if($p =="faq"){$help = 1;}
	else {$help = 0;}
	
	return ($help);
}

function cekurl_akun($p){
	$p = removedashfooter($p);
	if($p =="akun"){$help = 1;}
	else {$help = 0;}
	
	return ($help);
} 
function tulisan_search($a){
	$a = intval(cekurl_home($a));
	$c_url = $GLOBALS['c_url'];
	$page_title = $GLOBALS['page_title'];
	$site_name = $GLOBALS['site_name'];


	if($a==0){$kata_search = $page_title;}
	else {$kata_search = "Cari Di ".$site_name;}
	return $kata_search;
	
}

function gb_footer_home($ab){
	$a = intval(cekurl_home($ab));
	$c_url = $GLOBALS['c_url'];
	if($a==0){$gambarnya = $c_url."/compressed/amp/footer/home2.svg";}
	else {$gambarnya = $c_url."/compressed/amp/footer/home1.svg";}
	return $gambarnya;
	
}
function gb_footer_help($ab){
	$a = intval(cekurl_help($ab));
	$c_url = $GLOBALS['c_url'];
	if($a==0){$gambarnya = $c_url."/compressed/amp/footer/help1.svg";}
	else {$gambarnya = $c_url."/compressed/amp/footer/help2.svg";}
	return $gambarnya;
	
} 

function gb_footer_akun($ab){
	$a = intval(cekurl_akun($ab));
	$c_url = $GLOBALS['c_url'];
	if($a==0){$gambarnya = $c_url."/compressed/amp/footer/user1.svg";}
	else {$gambarnya = $c_url."/compressed/amp/footer/user2.svg";}
	return $gambarnya;
	
}