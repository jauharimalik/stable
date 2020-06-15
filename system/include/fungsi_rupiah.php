<?php
function format_rupiah($angka){
	$rupiah=number_format($angka,0,',','.');  
	return $rupiah;
}
function uangmuka($angka){
  $tanggalnya=date("d");
  if($tanggalnya<=3){$naik=$tanggalnya*0;}  
  else if($tanggalnya<=10){$naik=$tanggalnya*50000;}
  else if($tanggalnya<=20){$naik=$tanggalnya*100000;}
  else {$naik=$tanggalnya*150000;}
  $angka=$angka+$naik;
  $dp=($angka/100)*10;
  return $dp;
}

function selisihharga($a_harga_lama,$a_harga_baru){
	$a=$a_harga_lama;
	$b=$a_harga_baru;
	$c=(($a-$b)/($a/100));
	return $c;
}

function uangmuka2($angka){
  $tanggalnya=date("d")-1;
  if($tanggalnya<=3){$naik=$tanggalnya*0;}  
  else if($tanggalnya<=10){$naik=$tanggalnya*50000;}
  else if($tanggalnya<=20){$naik=$tanggalnya*100000;}
  else {$naik=$tanggalnya*150000;}
  $angka=$angka+$naik;
  $dp=($angka/100)*10;	
  $dp=($angka/100)*10;
  return $dp;
}