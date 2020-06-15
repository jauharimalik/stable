<?php
date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

$tgl_sekarang = date("Ymd");
$tgl_skrg     = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");


$nama_bln = array(
                '01' => ucwords(strtolower('JANUARI')),
                '02' => ucwords(strtolower('FEBRUARI')),
                '03' => ucwords(strtolower('MARET')),
                '04' => ucwords(strtolower('APRIL')),
                '05' => ucwords(strtolower('MEI')),
                '06' => ucwords(strtolower('JUNI')),
                '07' => ucwords(strtolower('JULI')),
                '08' => ucwords(strtolower('AGUSTUS')),
                '09' => ucwords(strtolower('SEPTEMBER')),
                '10' => ucwords(strtolower('OKTOBER')),
                '11' => ucwords(strtolower('NOVEMBER')),
                '12' => ucwords(strtolower('DESEMBER')),
        );
		
function get_file_extension($file_name) {
    return substr(strrchr($file_name,'.'),1);
}