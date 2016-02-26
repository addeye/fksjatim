<?php
include "../koneksi/koneksi.php"; 
include "../function/function.php"; 
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
	$isi = $_POST['isi'];

	$dir_foto = "../foto/";

	$filename = $_FILES['gambar']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima

if($_FILES['gambar']['name']!=NULL){

    //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 1000kb
 	// if( $_FILES['gambar']['size'] < 1024288 ) {

 		$filename    = "profil-" .$judul."-".rand(11111,99999)."." .$ext;

 		if ( UploadCompress($filename,'gambar',$dir_foto,30) ) {
 			// unlink($lokasifile);
 			mysql_query("INSERT INTO `tabel_profil`(`id_profil`, `judul`, `isi`, `gambar`) VALUES (NULL,'$judul','$isi','$filename')");
 			header('Location:../?page=profil_tabel&done');
 		} else {
 			echo "Gagal";
 		}
 	// } else {
 	// 	// echo "logfoto";
 	// 	header('Location:../?page=profil_tabel&logfoto');
 	// }
 } else {
 	// echo 'format';
 	header('Location:../?page=profil_tabel&format');
 } 
}
 else {
mysql_query("INSERT INTO `tabel_profil`(`id_profil`, `judul`, `isi`, `gambar`) VALUES (NULL,'$judul','$isi','')");
 			header('Location:../?page=profil_tabel&done');
  }


}

function update(){
	$id_profil = $_POST['id_profil'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$que = mysql_query("select * from tabel_profil where id_profil='$id_profil'");
	$d=mysql_fetch_array($que);
	$lokasifile = '../foto/'.$d['gambar'];

	$dir_foto = "../foto/";

	echo $filename = $_FILES['gambar']['name'];
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima
if($_FILES['gambar']['name']!=NULL){
     //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 1000kb
 	// if( $_FILES['gambar']['size'] < 5024288 ) {

 		$filename    = "profil-" .$judul."-".rand(11111,99999)."." .$ext;
 		unlink($lokasifile);

 		if ( UploadCompress($filename,'gambar',$dir_foto,30) ) {
 			
 			mysql_query("UPDATE `tabel_profil` SET `judul`='$judul',`isi`='$isi',`gambar`='$filename' WHERE `id_profil`='$id_profil' ");
 			header('Location:../?page=profil_tabel&up');
 		} else {
 			echo "Gagal";
 		}
 	// } else {
 	// 	// echo "logfoto";
 	// 	header('Location:../?page=profil_tabel&logfoto');
 	// }
 } else {
 	// echo 'format';
 	header('Location:../?page=profil_tabel&format');
 }
} else {
	$img_ket = $_POST['img_ket'];
	if($img_ket=='0'){
		$qgambar=",gambar=''";
		unlink($lokasifile);
	} else {
		$qgambar="";
	}
	mysql_query("UPDATE `tabel_profil` SET `judul`='$judul',`isi`='$isi' $qgambar WHERE `id_profil`='$id_profil' ");
 	header('Location:../?page=profil_tabel&ups');
}



}

function del(){
	$id = $_GET['id'];
	$que = mysql_query("select * from tabel_profil WHERE id_profil = '$id' ");
	$d = mysql_fetch_array($que);
	$lokasifile = '../foto/'.$d['gambar'];
	unlink($lokasifile);
	mysql_query("DELETE FROM `tabel_profil` WHERE `id_profil`='$id' ");
	// echo "lihat lah";
	header('Location:../?page=profil_tabel');
}

?>