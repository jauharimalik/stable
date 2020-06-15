<?php 

$q=$_POST['q'];

// query untuk melakukan pencarian
$query=mysql_query("select * from cakupan where kota like '%".$q."%'");
// mendapatkan jumlah baris
$row=mysql_num_rows($query);

if ($row > 0) // jika baris lebih dari 0 / data ditemukan
{
	while ($data=mysql_fetch_array($query)) // perulangna untuk menampilkan data
	{
		// menampilkan data dalam bentuk table
		echo "
		<table>
		<tbody> 
				<tr><td>".$data['id']."</td></tr>
				<tr><td>".$data['kota']."</td></tr>
				<tr><td> Sudah Tersedia </td></tr>
    			<tr><td> Telp : ".$telponya." </td></tr>
		</tbody></table>
			";	
	}
}
else // jika data tidak ditemukan
{
	echo "<strong>Mohon maaf, Wilayahmu masih belum tersedia untuk Service Point Kami</strong>";	
}
?>