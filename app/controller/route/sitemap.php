<?php
defined("SYS") or exit("Access Denied!");
error_reporting(E_ALL);

$page_title2="Sitemap Mesin Fotocopy - ".$nama_bln[date('m')]." - ".date('Y');
$site_description2=" XML ".$page_title2;
$site_image="$c_cdn/new/images/banner-slide/harga-mesin-fotocopy.jpg";	

$page_title=$page_title2;
$site_description=$site_description2;

require_once($app->_sitemap()); 