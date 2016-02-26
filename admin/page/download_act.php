<?php
include "../koneksi/koneksi.php"; 
include "../function/function.php";
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
	$diskripsi = $_POST['diskripsi'];

	$dir_foto = "../files/";

	$filename = $_FILES['dokumen']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('pdf'); // Ektensi yg diterima

if($_FILES['dokumen']['name']!=NULL){

    //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 1000kb
 	// if( $_FILES['foto']['size'] < 500000 ) {

 		$filename    = "dokumen-".rand(11111,99999)."." .$ext;

 		// $status = UploadCompress($filename,'foto',$dir_foto,30);

 		if ( move_uploaded_file($_FILES['dokumen']["tmp_name"], $dir_foto.$filename)) {
 			// unlink($lokasifile);
 			mysql_query("INSERT INTO `tabel_download`(`id_download`, `judul`, `diskripsi`, `file`) 
 				VALUES (NULL,'$judul','$diskripsi','$filename')");
 			header('Location:../?page=download_tabel&done');
 		} else {
 			echo "Gagal";
 		}
 	// } else {
 	// 	// echo "logfoto";
 	// 	header('Location:../?page=galeri_tabel&logfoto');
 	// }
 } else {
 	// echo 'format';
 	header('Location:../?page=download_tabel&format');
 } 
}
 else {
mysql_query("INSERT INTO `tabel_galeri`(`id_galeri`, `album`, `judul_foto`, `foto`, `deskripsi`) VALUES (NULL,'$album','$judul_foto','','$deskripsi')");
 			header('Location:../?page=profil_tabel&done');
  }


}

function update(){
	$id_download = $_POST['id_download'];
	$judul = $_POST['judul'];
	$diskripsi = $_POST['diskripsi'];

	$que = mysql_query("select * from tabel_download where id_download='$id_download'");
	$d=mysql_fetch_array($que);
	$lokasifile = '../files/'.$d['file'];

	$dir_foto = "../files/";

	$filename = $_FILES['dokumen']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('pdf'); // Ektensi yg diterima
if($_FILES['dokumen']['name']!=NULL){
     //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 500kb
 	// if( $_FILES['foto']['size'] < 500000 ) {

 		$filename    = "dokumen-".rand(11111,99999)."." .$ext;
 		unlink($lokasifile);

 		if ( move_uploaded_file( $_FILES['dokumen']['tmp_name'], $dir_foto . $filename ) ) {
 			
 			mysql_query("UPDATE `tabel_download` SET `judul`='$judul',`diskripsi`='$diskripsi',`file`='$filename' WHERE `id_download`='$id_download'");
 			header('Location:../?page=download_tabel&up');
 		} else {
 			echo "Gagal";
 		}
 	// } else {
 	// 	// echo "logfoto";
 	// 	header('Location:../?page=galeri_tabel&logfoto');
 	// }
 } else {
 	// echo 'format';
 	header('Location:../?page=download_tabel&format');
 }
} else {
mysql_query("UPDATE `tabel_download` SET `judul`='$judul',`diskripsi`='$diskripsi' WHERE `id_download`='$id_download'");
 	header('Location:../?page=download_tabel&ups');
}



}

function del(){
	$id = $_GET['id'];
	$que = mysql_query("select * from tabel_download WHERE id_download = '$id' ");
	$d = mysql_fetch_array($que);
	$lokasifile = '../files/'.$d['file'];
	unlink($lokasifile);
	mysql_query("DELETE FROM `tabel_download` WHERE `id_download`='$id' ");
	// echo "lihat lah";
	header('Location:../?page=download_tabel');
}

?>