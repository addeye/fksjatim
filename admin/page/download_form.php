<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_download where id_download = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_download=$d['id_download'];
$judul = $d['judul'];
$diskripsi = $d['diskripsi'];
$file = $d['file'];
$act = "update";
} else {
$id_download='';
$judul = '';
$diskripsi = '';
$file = '';
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
        <form role="form" action="page/download_act.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_download" value="<?=$id_download?>">
          <div class="box-body">
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$judul?>" name="judul" placeholder="Judul Dokumen" data-toggle="tooltip" data-placement="bottom" title="Judul" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="diskripsi" placeholder="Diskripsi"><?=$diskripsi?></textarea>  
          </div>
          <div class="form-group">            
            <input type="file" name="dokumen" id="exampleInputFile" required>
            <p class="help-block">*Pilih file yang ingin di upload (.PDF)</p>
          </div>
        </div><!-- /.box-body -->

        <div class="modal-footer">
          <button type="button" onClick="location.href='?page=download_tabel'" class="btn btn-default">BATAL</button>
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
