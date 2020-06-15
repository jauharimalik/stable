<?php
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/', // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
    );
    $buffer = preg_replace($search, $replace, $buffer);
	$buffer =  preg_replace('/\s+/', ' ', $buffer);
    return $buffer;
} 
ob_start();
ob_start("sanitize_output");
ob_start("minify_html");

$startTime = microtime(true);
function get_act_url() {
    $act_url  = ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ) ? 'https' : 'http';
    $act_url .= '://' . $_SERVER['SERVER_NAME'];
    $act_url .= in_array( $_SERVER['SERVER_PORT'], array( '80', '443' ) ) ? '' : ":" . $_SERVER['SERVER_PORT'];
    $act_url .= $_SERVER['REQUEST_URI'];
    return $act_url;
}  
function int($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}
$halaman = pathinfo($_SERVER['REQUEST_URI']);
$urlnyaamp=str_replace($c_url,"",get_act_url());
$urlnyaamp=str_replace("/","_",$urlnyaamp);
 
if($urlnyaamp=="_"){$urlnyaamp="index";}

if ($detect->isMobile()){$tempatfile = TEMP.DS."cache/m/".$urlnyaamp.".html";}
else {$tempatfile = TEMP.DS."cache/harga/".$urlnyaamp.".html";}

if (file_exists($tempatfile) && ($timecache > filemtime($tempatfile))){	
	function replace_string_in_file($filename, $string_to_replace, $replace_with){
		$content=file_get_contents($filename);
		$content_chunks=explode($string_to_replace, $content);
		$content=implode($replace_with, $content_chunks);
		file_put_contents($filename, $content);
	}
	$str = file_get_contents($tempatfile);
	file_put_contents($tempatfile, sanitize_output($str));
	file_put_contents($tempatfile, minify_html($str));

	$filename=$tempatfile;
	$string_to_replace="<!DOCTYPE html>";
	$replace_with="";
	replace_string_in_file($filename, $string_to_replace, $replace_with);

	echo "<!DOCTYPE html>";
	include($tempatfile);
	echo "<!--Time:  " . number_format(( microtime(true) - $startTime), 4) . " Seconds -->";	
	echo "<!-- This page has been cached from ".date('M - d - H:i', (time() + $timecache))." - ".date('M - d - H:i', filemtime($tempatfile))." -->";
	exit();
}