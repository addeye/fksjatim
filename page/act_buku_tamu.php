<?php 
include "../admin/koneksi/koneksi.php";

$nama_pengirim = $_POST['nama_pengirim'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$isi_pesan = $_POST['isi_pesan'];
$tanggal_kirim = date('d/m/Y');

$que_insert = mysql_query("INSERT INTO `tabel_buku_tamu`
	(`id_buku_tamu`, `nama_pengirim`, `email`, `subjek`, `isi_pesan`, `tanggal_kirim`, `status`) 
	VALUES 
	(NULL,'$nama_pengirim','$email','$subjek','$isi_pesan','$tanggal_kirim','Y')");
header('Location:../?page=send')

 ?>
