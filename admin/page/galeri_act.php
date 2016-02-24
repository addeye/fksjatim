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
	$album = $_POST['album'];
	$judul_foto = $_POST['judul_foto'];
	$deskripsi = $_POST['deskripsi'];

	$dir_foto = "../images/";

	$filename = $_FILES['foto']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima

if($_FILES['foto']['name']!=NULL){

    //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 1000kb
 	if( $_FILES['foto']['size'] < 500000 ) {

 		$filename    = "foto-" .$album."-".time()."." .$ext;

 		if ( move_uploaded_file( $_FILES['foto']['tmp_name'], $dir_foto . $filename ) ) {
 			// unlink($lokasifile);
 			mysql_query("INSERT INTO `tabel_galeri`(`id_galeri`, `album`, `judul_foto`, `foto`, `deskripsi`) VALUES (NULL,'$album','$judul_foto','$filename','$deskripsi')");
 			header('Location:../?page=galeri_tabel&done');
 		} else {
 			echo "Gagal";
 		}
 	} else {
 		// echo "logfoto";
 		header('Location:../?page=galeri_tabel&logfoto');
 	}
 } else {
 	// echo 'format';
 	header('Location:../?page=galeri_tabel&format');
 } 
}
 else {
mysql_query("INSERT INTO `tabel_galeri`(`id_galeri`, `album`, `judul_foto`, `foto`, `deskripsi`) VALUES (NULL,'$album','$judul_foto','','$deskripsi')");
 			header('Location:../?page=profil_tabel&done');
  }


}

function update(){
	echo $id_galeri = $_POST['id_galeri'];
	echo $album = $_POST['album'];
	echo $judul_foto = $_POST['judul_foto'];
	echo $deskripsi = $_POST['deskripsi'];

	$que = mysql_query("select * from tabel_galeri");
	$d=mysql_fetch_array($que);
	$lokasifile = '../images/'.$d['foto'];

	$dir_foto = "../images/";

	$filename = $_FILES['foto']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima
if($_FILES['foto']['name']!=NULL){
     //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 500kb
 	if( $_FILES['foto']['size'] < 500000 ) {

 		$filename    = "foto-" .$album."-".time()."." .$ext;
 		unlink($lokasifile);

 		if ( move_uploaded_file( $_FILES['foto']['tmp_name'], $dir_foto . $filename ) ) {
 			
 			mysql_query("UPDATE `tabel_galeri` SET `album`='$album',`judul_foto`='$judul_foto',`foto`='$filename',`deskripsi`='$deskripsi' WHERE `id_galeri`='$id_galeri' ");
 			header('Location:../?page=galeri_tabel&up');
 		} else {
 			echo "Gagal";
 		}
 	} else {
 		// echo "logfoto";
 		header('Location:../?page=galeri_tabel&logfoto');
 	}
 } else {
 	// echo 'format';
 	header('Location:../?page=galeri_tabel&format');
 }
} else {
mysql_query("UPDATE `tabel_galeri` SET `album`='$album',`judul_foto`='$judul_foto',`deskripsi`='$deskripsi' WHERE `id_galeri`='$id_galeri' ");
 	header('Location:../?page=galeri_tabel&ups');
}



}

function del(){
	$id = $_GET['id'];
	$que = mysql_query("select * from tabel_galeri WHERE id_galeri = '$id' ");
	$d = mysql_fetch_array($que);
	$lokasifile = '../images/'.$d['foto'];
	unlink($lokasifile);
	mysql_query("DELETE FROM `tabel_galeri` WHERE `id_galeri`='$id' ");
	// echo "lihat lah";
	header('Location:../?page=galeri_tabel');
}

?>