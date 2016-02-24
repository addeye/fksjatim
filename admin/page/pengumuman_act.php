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

function insert()
{	
	$judul = $_POST['judul'];
	$tanggal_post = $_POST['tanggal_post'];
	$penulis = $_SESSION['id_pengguna'];
	$keterangan = $_POST['keterangan'];

	mysql_query("INSERT INTO `tabel_pengumuman`(`id_pengumuman`, `judul`, `penulis`, `tanggal_post`, `keterangan`) VALUES (NULL,'$judul','$penulis','$tanggal_post','$keterangan')");
	header('Location:../?page=pengumuman_tabel&done'); 	


}

function update(){

	$id_pengumuman = $_POST['id_pengumuman'];
	$judul = $_POST['judul'];
	$tanggal_post = $_POST['tanggal_post'];
	$penulis = $_SESSION['id_pengguna'];
	$keterangan = $_POST['keterangan'];

	mysql_query("UPDATE `tabel_pengumuman` SET `judul`='$judul',`penulis`='$penulis',`tanggal_post`='$tanggal_post',`keterangan`='$keterangan' WHERE `id_pengumuman`= '$id_pengumuman' ");
	header('Location:../?page=pengumuman_tabel&up');


}

function del(){
	$id = $_GET['id'];
	mysql_query("DELETE FROM `tabel_pengumuman` WHERE id_pengumuman = '$id' ");
	// echo "lihat lah";
	header('Location:../?page=pengumuman_tabel');
}

?>