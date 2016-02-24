<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_profil where id_profil = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_profil=$d['id_profil'];
$judul = $d['judul'];
$isi = $d['isi'];
$gambar = $d['gambar'];
$act = "update";
} else {
  $id_profil = "";
  $judul = "";
$isi = "";
$gambar = "";
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
          <h3 class="box-title">TAMBAH FILE DONWLOAD</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="page/profil_act.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_profil" value="<?=$id_profil?>">
          <div class="box-body">
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$judul?>" name="judul" placeholder="Judul Konten" data-toggle="tooltip" data-placement="bottom" title="Judul" required>
          </div>
          <div class="form-group">
            <textarea id="editor1" name="isi" rows="10" cols="80"><?=$isi?>                          
            </textarea>     
          </div>
          <div class="form-group">            
            <img id="img" width="200" src="foto/<?=$gambar?>" class="img-responsive img-thumbnail">
            
            <input type="hidden" id="img_ket" name="img_ket" value="">
            <button type="button" id="delete_img" class="btn btn-success btn-xs">Delete</button>
            <button type="button" id="cancel_img" class="btn btn-warning btn-xs">Cancel</button>
            <input type="file" name="gambar" id="exampleInputFile">
            <p class="help-block">*kosongkan jika tidak perlu/diganti max 500kb</p>
          </div>
        </div><!-- /.box-body -->

        <div class="modal-footer">
          <button type="button" onClick="location.href='?page=profil_tabel'" class="btn btn-default">BATAL</button>
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
