<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_pengumuman where id_pengumuman = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_pengumuman = $d['id_pengumuman'];
$judul = $d['judul'];
$tanggal_post = $d['tanggal_post'];
$keterangan = $d['keterangan'];
$act = "update";
} else {
$id_pengumuman = "";
$judul = "";
$tanggal_post = "";
$keterangan = "";
$keterangan = "";
$act = "insert";
}

  ?>
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-xs-12 col-lg-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">TAMBAH PENGUMUMAN SEKOLAH</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="page/pengumuman_act.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_pengumuman" value="<?=$id_pengumuman?>">
          <div class="box-body">
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$judul?>" name="judul" placeholder="Judul Pengumuman" data-toggle="tooltip" data-placement="bottom" title="Judul Pengumuman" required>
          </div>
          <div class="form-group">      
            <input type="text" class="form-control" id="tanggal" value="<?=$tanggal_post?>" name="tanggal_post" placeholder="Tanggal Post" data-toggle="tooltip" data-placement="bottom" title="Tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required> 
          </div>
          <div class="form-group">
            <textarea id="editor1" name="keterangan" class="form-control" rows="10" cols="100" placeholder="Keterangan Pengumuman"><?=$keterangan?></textarea>  
          </div>
          <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> -->
        </div><!-- /.box-body -->

        <div class="modal-footer">
          <button type="button" onClick="location.href='?page=pengumuman_tabel'" class="btn btn-default">BATAL</button>
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
