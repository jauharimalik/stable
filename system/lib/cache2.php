<?php

function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

$page_title = limit_words($page_title2, 60);
$site_description = limit_words($site_description2, 150);

if ($detect->isMobile()){}
else {
$halaman = pathinfo($_SERVER['REQUEST_URI']);
$tempatfile = TEMP.DS."cache/".$halaman['filename'].".html";
$waktu = 24 * 14 * 60;
/*Penyesuaian file dan waktu */
if (file_exists($tempatfile) && (time() - $waktu < filemtime($tempatfile))){
include($tempatfile);
echo "<!-- This page has been cached from ".date('H:i', filemtime($tempatfile))." -->"; 
exit; 
}


$halaman = pathinfo($_SERVER['REQUEST_URI']);
$tempatfile = TEMP.DS."cache/".$halaman['filename'].".html";
$waktu = 24 * 14 * 60;
if (file_exists($tempatfile) && (time() - $waktu < filemtime($tempatfile))){
include($tempatfile);
echo "<!-- This page has been cached from ".date('H:i', filemtime($tempatfile))." -->"; 
exit; 
}

function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
} 
ob_start();
ob_start("sanitize_output");
}