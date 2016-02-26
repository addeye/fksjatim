<section class="content">
  <div class="row">
    <div class="col-md-6">
      <button type="button" onClick="location.href='?page=berita_form'" class="btn btn-primary btn-ls">
        <i class="fa fa-fw fa-plus"></i>Tambah Data
      </button>  
  </div>
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Halaman Berita</h3>                                    
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
            <th>JUDUL</th>
            <th>BERITA</th>
            <th>PENULIS</th>
            <th>POST</th>
            <th>KATEGORI</th>
            <th>HEADLINE</th>
            <th>GAMBAR</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>          
          <?php
          $n=1;
          $que = mysql_query("SELECT b.*,p.nama_pengguna,k.nama_kategori FROM tabel_berita b LEFT JOIN tabel_pengguna p on b.penulis=p.id_pengguna LEFT JOIN tabel_kategori k on b.kategori=k.id_kategori order by id_berita DESC");
          while ($d = mysql_fetch_array($que)) {                    
           ?>
           <tr>
            <td><?=$n?></td>
            <td><?=$d['judul']?></td>
            <td><?=substr($d['berita'], 0,150)?>..</td>
            <td><?=$d['nama_pengguna']?></td>
            <td><?=$d['tanggalpost']?></td>  
             <td><?=$d['nama_kategori']?></td>                     
            <td>
            <?php if($d['headline'] == 'Y') { ?>
            <a href="page/berita_act.php?act=yes&id=<?=$d['id_berita']?>" class="btn btn-info btn-sm " data-toggle="tooltip" data-placement="top" title="Yes"><span class="glyphicon glyphicon-star"></span></a>
            <?php } else { ?>
            <a href="page/berita_act.php?act=no&id=<?=$d['id_berita']?>" class="btn btn-warning btn-sm " data-toggle="tooltip" data-placement="top" title="No"><span class="glyphicon glyphicon-star-empty"></span></a>
            <?php } ?>
            </td>
            <td><?=fgambar_tabel($d['gambar'],'gambar-berita')?></td>
            <td>              
              <a href="index.php?page=berita_form&edit&id=<?=$d['id_berita']?>" class="btn btn-success btn-sm btn-edit" data-toggle="tooltip" data-placement="top" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="page/berita_act.php?act=del&id=<?=$d['id_berita']?>" class="btn btn-danger btn-sm cara2" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
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