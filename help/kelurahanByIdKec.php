<?php
include "../admin/koneksi/koneksi.php";
$id = $_GET['id_kec'];

$que = mysql_query("SELECT * FROM kelurahan
WHERE id_kec='$id'");
echo "<option value=''>Kelurahan</option>";
while ($d = mysql_fetch_array($que)) {		
	echo "<option value='".$d['id_kel']."'>".$d['nama_kel']."</option>";
	echo "<br>";
}

 ?>