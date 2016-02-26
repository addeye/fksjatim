<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_berita where id_berita = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_berita=$d['id_berita'];
$judul = $d['judul'];
$berita = $d['berita'];
$kategori = $d['kategori'];
$gambar = $d['gambar'];
$act = "update";
} else {
$id_berita="";
$judul = "";
$berita = "";
$kategori = "";
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
          <h3 class="box-title">TAMBAH BERITA SEKOLAH</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="page/berita_act.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_berita" value="<?=$id_berita?>">
          <div class="box-body">
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$judul?>" name="judul" placeholder="Judul Berita" data-toggle="tooltip" data-placement="bottom" title="Judul" required>
          </div>
          <div class="form-group">      
            <select name="kategori" class="form-control" required>
            <option value="">Pilih Kategori</option>
              <?php $que_kategori = mysql_query("select * from tabel_kategori");
                while($k = mysql_fetch_array($que_kategori)){
               ?>
              <option value="<?=$k['id_kategori']?>"<?php if($kategori == $k['id_kategori']) {echo "selected";} ?>><?=$k['nama_kategori']?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <textarea required id="editor1" name="berita" rows="10" cols="80"><?=$berita?>                          
            </textarea>     
          </div>
          
          <div class="form-group">
            
            <img width="200" src="gambar-berita/<?=$gambar?>" class="img-responsive img-thumbnail">
            <input type="file" name="gambar" id="exampleInputFile">
            <p class="help-block">*kosongkan jika tidak perlu/diganti (max 500KB)</p>
          </div>
        </div><!-- /.box-body -->

        <div class="modal-footer">
          <button type="button" onClick="location.href='?page=berita_tabel'" class="btn btn-default">BATAL</button>
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
                // CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                // $(".textarea").wysihtml5();
                CKEDITOR.replace( 'editor1', {
              filebrowserBrowseUrl: 'serverupload.php',
              filebrowserUploadUrl: '/uploader/upload.php'
});            
        </script>
