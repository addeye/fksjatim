<?php
include "../koneksi/koneksi.php";
session_start(); 
if(isset($_GET['act'])) {
	$act = $_GET['act'];
} else{
	$act= $_POST['act'];
}

switch ($act) {
	case 'insert':
	insert();
	break;
	case 'update':
	update();
	break;
	case 'del':
	del();
	break;
	
	// default:
	// 	# code...
	// 	break;
}

// function insert()
// {	
// 	$judul_agenda = $_POST['judul_agenda'];
// 	$tanggal = $_POST['tanggal'];
// 	$tempat = $_POST['tempat'];
// 	$penulis = $_SESSION['id_pengguna'];
// 	$keterangan = $_POST['keterangan'];

// 	mysql_query("INSERT INTO `tabel_agenda`(`id_agenda`, `judul_agenda`, `tanggal`, `tempat`, `penulis`, `keterangan`) VALUES (NULL,'$judul_agenda','$tanggal','$tempat','$penulis','$keterangan')");
// 	header('Location:../?page=agenda_tabel&done'); 	


// }

// function update(){

// 	$id_agenda = $_POST['id_agenda'];
// 	$judul_agenda = $_POST['judul_agenda'];
// 	$tanggal = $_POST['tanggal'];
// 	$tempat = $_POST['tempat'];
// 	$penulis = $_SESSION['id_pengguna'];
// 	$keterangan = $_POST['keterangan'];

// 	mysql_query("UPDATE `tabel_agenda` SET `judul_agenda`='$judul_agenda',`tanggal`='$tanggal',`tempat`='$tempat', `keterangan`='$keterangan' WHERE `id_agenda`='$id_agenda' ");
// 	header('Location:../?page=agenda_tabel&up');


// }

function del(){
	$id = $_GET['id'];
	mysql_query("DELETE FROM `tabel_buku_tamu` WHERE id_buku_tamu = '$id' ");
	// echo "lihat lah";
	header('Location:../?page=buku_tamu_tabel');
}

?>