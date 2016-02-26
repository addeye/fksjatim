<?php 
include "koneksi/koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}
$username = anti_injection($_POST['username']);
$password = anti_injection($_POST['password']);

$que = mysql_query("select * from tabel_pengguna p left join tabel_level l on p.level=l.id_level  where status='1' and username='$username' and password = '$password' ");
$cek = mysql_num_rows($que);
$data = mysql_fetch_array($que);

if ($cek>0) {
	session_start();
	$_SESSION['nama_pengguna'] = $data['nama_pengguna'];
	$_SESSION['level'] = $data['level'];
	$_SESSION['id_pengguna'] = $data['id_pengguna'];
	$_SESSION['nama_level'] = $data['nama_level'];

	header('Location:index.php');
} else {
	echo "<script>alert('Username dan Password Tidak Tersedia'); window.location = 'login.php'</script>";	
}


?>