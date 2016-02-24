<?php
include "../koneksi/koneksi.php";
session_start(); 
if(isset($_GET['act'])) {
	$act = $_GET['act'];
} else{
	$act= $_POST['act'];
}

switch ($act) {
	case 'validasi':
	validasi();
	break;
	case 'del':
	del();
	break;
	
	// default:
	// 	# code...
	// 	break;
}


function validasi(){

	$val = $_GET['val'];
	$id = $_GET['id'];
	if($val=='N'){
		$value = 'Y';
	} else {$value='N';}
	mysql_query("UPDATE `tabel_komentar` SET `publish`='$value' WHERE `id_komentar`='$id' ");
	header('Location:../?page=komentar_tabel&up');


}

function del(){
	$id = $_GET['id'];
	mysql_query("DELETE FROM `tabel_komentar` WHERE id_komentar = '$id' ");
	// echo "lihat lah";
	header('Location:../?page=agenda_tabel');
}

?>