<?php
include "../admin/koneksi/koneksi.php";
$id = $_GET['id_kab'];

$que = mysql_query("SELECT * FROM kecamatan
WHERE id_kab='$id'");
echo "<option value=''>Kecamatan</option>";
while ($d = mysql_fetch_array($que)) {		
	echo "<option value='".$d['id_kec']."'>".$d['nama_kec']."</option>";
	echo "<br>";
}

 ?>