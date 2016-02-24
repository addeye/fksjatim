<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_pengguna where id_pengguna = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_pengguna = $d['id_pengguna'];
$nama_pengguna = $d['nama_pengguna'];
$email = $d['email'];
$username = $d['username'];
$password = $d['password'];
$level = $d['level'];
$act = "update";
} else {
$id_pengguna = "";
$nama_pengguna = "";
$email = "";
$username = "";
$password = "";
$level = "";
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
          <h3 class="box-title">TAMBAH PENGGUNA</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="page/pengguna_act.php" method="post">
          <input type="hidden" name="act" value="<?=$act?>">
          <input type="hidden" name="id_pengguna" value="<?=$id_pengguna?>">
          <div class="box-body">
           <div class="form-group">      
            <input type="text" class="form-control" value="<?=$nama_pengguna?>" name="nama_pengguna" placeholder="Nama Pengguna" data-toggle="tooltip" data-placement="bottom" title="Nama Pengguna" required>
          </div>
          <div class="form-group">      
            <input type="text" class="form-control" value="<?=$email?>" name="email" placeholder="Email Pengguna" data-toggle="tooltip" data-placement="bottom" title="email Pengguna" required>
          </div>
          <div class="form-group">      
            <input type="text" class="form-control" value="<?=$username?>" name="username" placeholder="Username" data-toggle="tooltip" data-placement="bottom" title="username pengguna" required>
          </div>
          <div class="form-group">      
            <input type="text" class="form-control" value="<?=$password?>" name="password" placeholder="Password" data-toggle="tooltip" data-placement="bottom" title="password pengguna" required>
          </div>
          <div class="form-group">      
            <select name="level" class="form-control">
              <?php $que_level = mysql_query("select * from tabel_level");
              while($l=mysql_fetch_array($que_level)) { ?>
              <option value="<?=$l['id_level']?>" <?php if($level == $l['id_level']) {echo "selected";} ?>><?=$l['nama_level']?></option>
              <?php } ?>
            </select>
          </div>         
          <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> -->
        </div><!-- /.box-body -->

        <div class="modal-footer">
          <button type="button" onClick="location.href='?page=pengguna_tabel'" class="btn btn-default">BATAL</button>
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
