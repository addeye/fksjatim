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
	case 'yes':
	yes();
	break;
	case 'no':
	no();
	break;
	
	// default:
	// 	# code...
	// 	break;
}

function insert()
{
	$judul = $_POST['judul'];
	$berita = $_POST['berita'];
	$kategori = $_POST['kategori'];
	$penulis = $_SESSION['id_pengguna'];
	$tanggalpost = date('d/m/Y');

	$dir_foto = "../gambar-berita/";

	$filename = $_FILES['gambar']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima

 if($_FILES['gambar']['name']!=NULL){

    //filter ektensi gambar yang diterima
 	if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 1000kb
 		if( $_FILES['gambar']['size'] < 1024288 ) {

 			$filename    = "gambar-" .$judul."-".time()."." .$ext;

 			if ( move_uploaded_file( $_FILES['gambar']['tmp_name'], $dir_foto . $filename ) ) {
 			// unlink($lokasifile);
 				mysql_query("INSERT INTO `tabel_berita`(`id_berita`, `judul`, `berita`, `penulis`, `kategori`, `tanggalpost`, `headline`, `gambar`) VALUES (NULL,'$judul','$berita','$penulis','$kategori','$tanggalpost','N','$filename')");
 				header('Location:../?page=berita_tabel&done');
 			} else {
 				echo "Gagal";
 			}
 		} else {
 		// echo "logfoto";
 			header('Location:../?page=berita_tabel&logfoto');
 		}
 	} else {
 	// echo 'format';
 		header('Location:../?page=berita_tabel&format');
 	} 
 }
 else {
 	mysql_query("INSERT INTO `tabel_profil`(`id_profil`, `judul`, `isi`, `gambar`) VALUES (NULL,'$judul','$isi','')");
 	header('Location:../?page=profil_tabel&done');
 }


}

function update(){
	$id_berita = $_POST['id_berita'];
	$judul = $_POST['judul'];
	$berita = $_POST['berita'];
	$kategori = $_POST['kategori'];

	$que = mysql_query("select * from tabel_berita WHERE id_berita='$id_berita' ");
	$d=mysql_fetch_array($que);
	$lokasifile = '../gambar-berita/'.$d['gambar'];

	$dir_foto = "../gambar-berita/";

	$filename = $_FILES['gambar']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima
 if($_FILES['gambar']['name']!=NULL){
     //filter ektensi gambar yang diterima
 	if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 500kb
 		if( $_FILES['gambar']['size'] < 502428 ) {

 			$filename    = "berita-" .$judul."-".time()."." .$ext;
 			unlink($lokasifile);

 			if ( move_uploaded_file( $_FILES['gambar']['tmp_name'], $dir_foto . $filename ) ) {

 				mysql_query("UPDATE `tabel_berita` SET `judul`='$judul',`berita`='$berita',`kategori`='$kategori',`gambar`='$filename' WHERE `id_berita`='$id_berita' ");
 				header('Location:../?page=berita_tabel&up');
 			} else {
 				echo "Gagal";
 			}
 		} else {
 		// echo "logfoto";
 			header('Location:../?page=berita_tabel&logfoto='.$_FILES['gambar']['size'].'');
 		}
 	} else {
 	// echo 'format';
 		header('Location:../?page=berita_tabel&format');
 	}
 } else {
 	mysql_query("UPDATE `tabel_berita` SET `judul`='$judul',`berita`='$berita',`kategori`='$kategori' WHERE `id_berita`='$id_berita' ");
 	header('Location:../?page=berita_tabel&ups');
 }


}

function del(){
	$id = $_GET['id'];
	$que = mysql_query("select * from tabel_berita WHERE id_berita = '$id' ");
	$d = mysql_fetch_array($que);
	$lokasifile = '../foto/'.$d['gambar'];
	mysql_query("DELETE FROM `tabel_berita` WHERE `id_berita`='$id' ");
	// echo "lihat lah";
	header('Location:../?page=berita_tabel');
}

function yes(){
	$id = $_GET['id'];
	mysql_query("update tabel_berita set headline = 'N' WHERE id_berita='$id' ");
	header('Location:../?page=berita_tabel');
}
function no(){
	$id = $_GET['id'];
	mysql_query("update tabel_berita set headline = 'Y' WHERE id_berita='$id' ");
	header('Location:../?page=berita_tabel');
}

?>