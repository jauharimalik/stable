<?php
$url_bukutamu1= cek_url_db($c_url.$urlnyaamp2);
$today = date('Y')."-".date('m')."-".date('d');
$sekarang= date('H:i:s');
$foto_bukutamu=str_replace($c_url."/","/",$site_image);

if (isset($max_page)){
	if(($page>1)&&($page<=$max_page)){$db->insert_pages($url_bukutamu1,$page_title,$site_description,$today,$sekarang,$foto_bukutamu);}
	else if(($page>1)&&($page>$max_page)){$db->insert_404($url_bukutamu1,$page_title,$site_description,$today,$sekarang,$foto_bukutamu);}
} else{
	$db->insert_pages($url_bukutamu1,$page_title,$site_description,$today,$sekarang,$foto_bukutamu);
}


$db->query("update pages set link = REPLACE (link, '_pjax%23main', '') where link like '%_pjax%23main%'");

if(isset($produk_ids)){$set_ideo = $db->query("update pages set ideo='$produk_ids' where link='$url_bukutamu1'");}
if(isset($a_fc_id)){$set_ideo = $db->query("update pages set ideo='$a_fc_id' where link='$url_bukutamu1'");}
if(isset($a_f_id)){$set_ideo = $db->query("update pages set ideo='$a_f_id' where link='$url_bukutamu1'");}