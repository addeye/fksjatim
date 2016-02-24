<?php 
 function file_gambar($gambar,$path){
 	if($gambar==''){
 		return '';
 	} else {
 		return '<img alt="img" src="admin/'.$path.'/'.$gambar.'">';
 	}
 }

 function file_gambarside($gambar,$path){
 	if($gambar==''){
 		return '<img alt="img" src="admin/img/no_images.jpg" class="media-object">';
 	} else {
 		return '<img alt="img" src="admin/'.$path.'/'.$gambar.'" class="media-object">';
 	}
 }

function fgambar_tabel($gambar,$path){
	if($gambar==''){
		return '<img width="200" src="img/no_images.jpg" class="img-responsive img-thumbnail"/>';
	} else {
		return '<img width="200" src="'.$path.'/'.$gambar.'" class="img-responsive img-thumbnail"/>';
	}
}
?>