<section class="content">
  <div class="row">
    <div class="col-md-12">
      <button type="button" onClick="location.href='?page=galeri_form'" class="btn btn-primary btn-ls">
        <i class="fa fa-fw fa-plus"></i>Tambah Data
      </button>  
  </div>
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Halaman Galeri</h3>                                    
      </div><!-- /.box-header -->
      <?php
      // echo date('d/m/Y');
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
            <th>NO</th>
            <th>ALBUM</th>
            <th>JUDUL</th>
            <th>FOTO</th>
            <th>DESKRIPSI</th>            
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>          
          <?php
          $n=1;
          $que = mysql_query("SELECT g.*,a.nama_album FROM tabel_galeri g left join tabel_album a on g.album=a.id_album");
          while ($d = mysql_fetch_array($que)) {                    
           ?>
           <tr>
            <td><?=$n?></td>
            <td><?=$d['nama_album']?></td>
            <td><?=$d['judul_foto']?></td>

            <td><img src="images/<?=$d['foto']?>" width="100 100" class="img-responsive img-thumbnail" alt="User Image" /></td> 
            <td><?=$d['deskripsi']?></td>
            <td>              
              <a href="index.php?page=galeri_form&edit&id=<?=$d['id_galeri']?>" class="btn btn-success btn-sm btn-edit" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="page/galeri_act.php?act=del&id=<?=$d['id_galeri']?>" class="btn btn-danger btn-sm cara2" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
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