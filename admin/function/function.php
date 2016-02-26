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


function UploadCompress($new_name,$file,$dir,$quality){
  //direktori gambar
  $vdir_upload = $dir;
  $vfile_upload = $vdir_upload . $_FILES[''.$file.'']["name"];
 
  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES[''.$file.'']["tmp_name"], $dir.$_FILES[''.$file.'']["name"]);
  $source_url=$dir.$_FILES[''.$file.'']["name"];
  $info = getimagesize($source_url);
 
    if ($info['mime'] == 'image/jpeg'){ 
        $image = imagecreatefromjpeg($source_url); 
        $ext='.jpg';
    }
    elseif($info['mime'] == 'image/gif'){ 
        $image = imagecreatefromgif($source_url); 
        $ext='.gif';
    }elseif($info['mime'] == 'image/png'){ 
        $image = imagecreatefrompng($source_url); 
        $ext='.png';
    }
   
    if(imagejpeg($image, $dir.$new_name, $quality)){
        unlink($source_url);
        return true;
    }else{
        unlink($source_url);
        return false;
    }
   
}


?>