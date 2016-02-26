<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_galeri where id_galeri = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_galeri=$d['id_galeri'];
$album = $d['album'];
$judul_foto = $d['judul_foto'];
$foto = $d['foto'];
$deskripsi = $d['deskripsi'];
$act = "update";
} else {
$id_galeri= "";
$album = "";
$judul_foto = "";
$foto = "";
$deskripsi = "";
$act = "insert";
}   

  ?>
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">TAMBAH GALERI</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="page/galeri_act.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_galeri" value="<?=$id_galeri?>">
          <div class="box-body">
          <div class="form-group">      
            <select name="album" class="form-control">
            <option>Pilih Album</option>              
              <?php $que_album = mysql_query("select * from tabel_album");
                while($a = mysql_fetch_array($que_album)){
               ?>
              <option value="<?=$a['id_album']?>"<?php if($album == $a['id_album']) {echo "selected";} ?>><?=$a['nama_album']?></option>
              <?php } ?>
            </select>
          </div>
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$judul_foto?>" name="judul_foto" placeholder="Judul Foto" data-toggle="tooltip" data-placement="bottom" title="Judul Foto" required>
          </div>                
          <div class="form-group">
            
            <img width="200" src="images/<?=$foto?>" class="img-responsive img-thumbnail">
            <input type="file" name="foto" id="exampleInputFile">
            <p class="help-block">*kosongkan jika tidak perlu/diganti</p>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="deskripsi" rows="10" placeholder="Deskripsi Foto" cols="80"><?=$deskripsi?></textarea>     
          </div>    
        </div><!-- /.box-body -->

        <div class="modal-footer">
          <button type="button" onClick="location.href='?page=galeri_tabel'" class="btn btn-default">BATAL</button>
          <button type="submit" name="update" class="btn btn-primary">TAMBAH</button>
        </div>
      </form>
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>
</section>
<!-- CK Editor -->
<script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

 <script type="text/javascript">
 
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                // $(".textarea").wysihtml5();
            
        </script>
