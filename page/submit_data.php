<?php

include "../admin/koneksi/koneksi.php";
include "../admin/function/function.php";

function clearDataRupiah($str)
{
	$str = str_replace('.', '', $str);
    $strfinal = str_replace('Rp ', '', $str);
    return $strfinal;
       
}

$nama_koperasi = $_POST['nama_koperasi'];
$badan_hukum = $_POST['badan_hukum'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];
$jalan = $_POST['jalan'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$alamat_website = $_POST['alamat_website'];
// Pengurus
$ket_pengurus = $_POST['ket_pengurus'];
$bend_pengurus = $_POST['bend_pengurus'];
$sek_pengurus = $_POST['sek_pengurus'];

// Pengawas
$ket_pengawas = $_POST['ket_pengawas'];
$angg1_pengawas = $_POST['angg1_pengawas'];
$angg2_pengawas = $_POST['angg2_pengawas'];

$jml_angg_L = $_POST['jml_angg_L'];
$jml_angg_P = $_POST['jml_angg_P'];

$jml_cangg_L = $_POST['jml_cangg_L'];
$jml_cangg_P = $_POST['jml_cangg_P'];

$manager = $_POST['manager'];
$jml_karyawan = $_POST['jml_karyawan'];

// keuangan
$thn_keuangan = $_POST['thn_keuangan'];
$simpan_diterima = clearDataRupiah($_POST['simpan_diterima']);
$modal_pinjaman = clearDataRupiah($_POST['modal_pinjaman']);
$modal_sendiri = clearDataRupiah($_POST['modal_sendiri']);
$modal_penyertaan = clearDataRupiah($_POST['modal_penyertaan']);
$total_aset = clearDataRupiah($_POST['total_aset']);
$biaya_diberikan = clearDataRupiah($_POST['biaya_diberikan']);
$gambar_koperasi = $_FILES['gambar_koperasi']['name'];
$ext = pathinfo( $gambar_koperasi, PATHINFO_EXTENSION );
$ekstensi = array('jpg','jpeg','png','JPG'); // Ektensi yg diterima
$dir_foto = "../images/";

if($gambar_koperasi!=NULL){

    //filter ektensi gambar yang diterima
 if( in_array( $ext, $ekstensi ) ) {

        //maks ukuran gambar 1000kb
 	// if( $_FILES['foto']['size'] < 500000 ) {

 		$gambar_koperasi   = "koperasi-".rand(11111,99999)."." .$ext;

 		$status = UploadCompress($gambar_koperasi,'gambar_koperasi',$dir_foto,30);

 		if ( $status ) {
 			// unlink($lokasifile);
 			$sts = mysql_query("INSERT INTO `tabel_koperasi`
	(`id_koperasi`, `nama_koperasi`, `badan_hukum`, 
	`kabupaten`, `kecamatan`, `kelurahan`, `jalan`, `no_telp`, `email`, `alamat_website`, 
	`ket_pengurus`, `bend_pengurus`, `sek_pengurus`, 
	`ket_pengawas`, `angg1_pengawas`, `angg2_pengawas`, 
	`jml_angg_L`, `jml_angg_P`, `jml_cangg_L`, `jml_cangg_P`, 
	`manager`, `jml_karyawan`, 
	`thn_keuangan`, `simpan_diterima`, `modal_pinjam`, `modal_sendiri`, `modal_penyertaan`, `total_aset`, `biaya_diberikan`, `gambar_koperasi`) 
	VALUES 
	(NULL,'$nama_koperasi','$badan_hukum',
	'$kabupaten','$kecamatan','$kelurahan','$jalan','$no_telp','$email','$alamat_website',
	'$ket_pengurus','$bend_pengurus','$sek_pengurus',
	'$ket_pengawas','$angg1_pengawas','$angg2_pengawas',
	'$jml_angg_L','$jml_angg_P','$jml_cangg_L','$jml_cangg_P',
	'$manager','$jml_karyawan',
	'$thn_keuangan','$simpan_diterima','$modal_pinjaman','$modal_sendiri','$modal_penyertaan','$total_aset','$biaya_diberikan','$gambar_koperasi')");
 			echo "Berhasil";
 		} else {
 			echo "Gagal";
 		}
 	// } else {
 	// 	// echo "logfoto";
 	// 	header('Location:../?page=galeri_tabel&logfoto');
 	// }
 } else {
 	echo 'format tidak sesuai';
 	// header('Location:../?page=galeri_tabel&format');
 } 
}

header('Location:../?page=send_anggota');

 ?>