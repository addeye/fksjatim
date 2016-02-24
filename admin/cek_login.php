<?php 
include "koneksi/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$que = mysql_query("select * from tabel_pengguna where status='1' and username='$username' and password = '$password' ");
$cek = mysql_num_rows($que);
$data = mysql_fetch_array($que);

if ($cek>0) {
	session_start();
	$_SESSION['nama_pengguna'] = $data['nama_pengguna'];
	$_SESSION['level'] = $data['level'];
	$_SESSION['id_pengguna'] = $data['id_pengguna'];

	header('Location:index.php');
} else {
	echo "<script>alert('Username dan Password Tidak Tersedia'); window.location = 'login.php'</script>";	
}


?>