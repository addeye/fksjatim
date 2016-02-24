<?php
include "../koneksi/koneksi.php"; 
$nama_instansi = $_POST['nama_instansi'];
$tahun_berdiri = $_POST['tahun_berdiri'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

mysql_query("UPDATE `tabel_informasi_instansi` SET `nama_instansi`='$nama_instansi',`tahun_berdiri`='$tahun_berdiri',`telepon`='$telepon',`email`='$email',`alamat`='$alamat' WHERE `id`='1'");
header('Location:../?page=informasi_data&done');
 ?>