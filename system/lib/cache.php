<?php
if(isset($format)){
	$format=".".$format;
} else{$format=".html";}

if(isset($foldercache)){
	$foldercache=$foldercache."/";
}

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
$urlnyaamp=str_replace($protocol.$url_web,"",get_act_url());
$urlnyaamp=str_replace("/","_",$urlnyaamp);
$urlnyaamp=str_replace("?","_",$urlnyaamp);
$urlnyaamp=str_replace("=","_",$urlnyaamp);
$urlnyaamp=str_replace("&","_",$urlnyaamp);
 
if($urlnyaamp=="_"){$urlnyaamp="index";}

if(isset($foldercache)){
	$tempatfile = TEMP.DS."cache/".$foldercache.$urlnyaamp.$format;
}
else{	
	if ($detect->isMobile()){$tempatfile = TEMP.DS."cache/m/".$urlnyaamp.$format;}
	else {$tempatfile = TEMP.DS."cache/web/".$foldercache.$urlnyaamp.$format;}
}

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
	if($format==".html"){
		echo "<!DOCTYPE html>";
		include($tempatfile);
		echo "<!--Time:  " . number_format(( microtime(true) - $startTime), 4) . " Seconds -->";	
		echo "<!-- This page has been cached from ".date('M - d - H:i', (time() + $timecache))." - ".date('M - d - H:i', filemtime($tempatfile))." -->";
		exit();
	} else{
		include($tempatfile); exit();
	}
}

function webpimage($fotonya2,$panjang,$lebar){
	$folder = "";
	$a_image_tiga_paket = create_webpimage($fotonya2,$panjang,$lebar,$folder);
	return $a_image_tiga_paket;
}	

function gallery_webpimage($fotonya2,$panjang,$lebar,$folder){
	$folder= $folder."/";
	$a_image_tiga_paket = create_webpimage($fotonya2,$panjang,$lebar,$folder);
	return $a_image_tiga_paket;
}

function create_webpimage($fotonya2,$panjang,$lebar,$folder){
	global $c_url;
	$asli = $fotonya2;
 	$fotonya2 = ROOT.DS.$fotonya2;
	
	if (file_exists($fotonya2)){
		if (strpos($fotonya2, 'webp') !== false) {
			$a_image_tiga_paket = $c_url."/".$asli;
		} else {
			$image34 = str_replace('.png', '', $fotonya2);
			$image34 = str_replace('.jpg', '', $fotonya2); 	
			$image34 = str_replace('.jpeg', '', $fotonya2); 	
			$image34 = str_replace('.webp', '', $fotonya2); 	
			$image36 = $c_url."/".$fotonya2.".webp";
			
			if (file_exists($image36)){ $image34=$image36; $a_image_tiga_paket = $image34;}
			else {
				require_once (LIB.'/ImgCompressor.class.php');
				$setting = array('directory' => ROOT.'/compressed/'.$folder, 'directory' => ROOT.'/compressed/'.$folder,'directory' => ROOT.'/compressed/'.$folder, 'file_type' => array('image/jpeg','image/png','image/gif'));
				$ImgCompressor = new ImgCompressor($setting);
	
				$result = $ImgCompressor->run($fotonya2, 'jpg', 7);  
				$image35 = $result['gb'];$images = $result['mini'];
				$results2 = $ImgCompressor->mini($images,$image35, $panjang, $lebar,'mini_');  
				$image34 = str_replace('.png', '', 'mini_'.$image35);
				$image34 = str_replace('.jpg', '', $image34); 								
				$im_name23=imagewebp(imagecreatefromjpeg(ROOT."/compressed/".$folder.$image34.".jpg"), ROOT."/compressed/".$folder.$image34.".webp");
				$a_image_tiga_paket=$c_url."/compressed/".$folder.$image34.".webp";
			}
		}
	}	else { $a_image_tiga_paket= $c_url."/compressed/no-pictures.svg";}	
	return $a_image_tiga_paket;
}