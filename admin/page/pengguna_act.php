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
	case 'status':
	status();
	break;
	
	// default:
	// 	# code...
	// 	break;
}

function insert()
{	
	$id_pengguna = $_POST['id_pengguna'];
	$nama_pengguna = $_POST['nama_pengguna'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$status = '1';

	mysql_query("INSERT INTO `tabel_pengguna`(`id_pengguna`, `nama_pengguna`, `email`, `username`, `password`, `level`, `status`) VALUES 
		(NULL,'$nama_pengguna','$email','$username','$password','$level','$status')");
	header('Location:../?page=pengguna_tabel&done'); 	


}

function update(){

	$id_pengguna = $_POST['id_pengguna'];
	$nama_pengguna = $_POST['nama_pengguna'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	mysql_query("UPDATE `tabel_pengguna` SET `nama_pengguna`='$nama_pengguna',`email`='$email',`username`='$username',`password`='$password',`level`='$level' WHERE `id_pengguna`='$id_pengguna' ");
	header('Location:../?page=pengguna_tabel&up');


}

function del(){
	$id = $_GET['id'];
	mysql_query("DELETE FROM `tabel_pengguna` WHERE id_pengguna = '$id' ");
	// echo "lihat lah";
	header('Location:../?page=pengguna_tabel');
}

function status() {
	$id = $_GET['id'];
	$cek = $_GET['cek'];
	mysql_query("UPDATE tabel_pengguna SET status = '$cek' WHERE id_pengguna = '$id' ");
	header('Location:../?page=pengguna_tabel');
}

?>