<section class="content">
  <div class="row">
    <div class="col-md-6">
      <button type="button" onClick="location.href='?page=download_form'" class="btn btn-primary btn-ls">
        <i class="fa fa-fw fa-plus"></i>Tambah File
      </button>  
  </div>
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar File Download</h3>                                    
      </div><!-- /.box-header -->
      <?php
      if (isset($_GET['done'])) {
        echo '<div class="alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Pemberitahuan!</b> Data Berhasil Masuk
      </div>';}
      if (isset($_GET['up'])) {
        echo '<div class="alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Pemberitahuan!</b> Data Berhasil Update
      </div>';
    }
    ?>
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Diskripsi</th>
            <th>File</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
          $n=1;
          $que = mysql_query("select * from tabel_download");
          while ($d = mysql_fetch_array($que)) {                    
           ?>
           <tr>
            <td><?=$n?></td>
            <td><?=$d['judul']?></td>
            <td><?=substr($d['diskripsi'], 0,500)?>...</td>            
            <td><a target="_blank" href="files/<?=$d['file']?>"> <i class="fa fa-file"></i> <?=$d['file']?></a></td>
            <td>              
              <a href="index.php?page=download_form&edit&id=<?=$d['id_download']?>" class="btn btn-success btn-sm btn-edit" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="page/download_act.php?act=del&id=<?=$d['id_download']?>" class="btn btn-danger btn-sm cara2" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
          <?php $n++;} ?>
        </tbody>
     </table>
   </div><!-- /.box-body -->
 </div><!-- /.box -->
</div>
</div>
</section>