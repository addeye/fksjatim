<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_agenda where id_agenda = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_agenda = $d['id_agenda'];
$judul_agenda = $d['judul_agenda'];
$tanggal = $d['tanggal'];
$tempat = $d['tempat'];
$keterangan = $d['keterangan'];
$act = "update";
} else {
$id_agenda = "";
$judul_agenda = "";
$tanggal = "";
$tempat = "";
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
          <h3 class="box-title">TAMBAH AGENDA SEKOLAH</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="page/agenda_act.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_agenda" value="<?=$id_agenda?>">
          <div class="box-body">
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$judul_agenda?>" name="judul_agenda" placeholder="Judul Agenda" data-toggle="tooltip" data-placement="bottom" title="Judul Agenda" required>
          </div>
          <div class="form-group">      
            <input type="text" class="form-control" id="tanggal" value="<?=$tanggal?>" name="tanggal" placeholder="Tanggal Agenda" data-toggle="tooltip" data-placement="bottom" title="Tanggal" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required> 
          </div>
          <div class="form-group">      
            <input type="text" class="form-control" value="<?=$tempat?>" name="tempat" placeholder="Tempat" data-toggle="tooltip" data-placement="bottom" title="Judul" required>
          </div>
          <div class="form-group">
            <textarea id="editor1" name="keterangan" class="form-control" rows="10" cols="100" placeholder="Keterangan Agenda"><?=$keterangan?></textarea>  
          </div>
          <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> -->
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
