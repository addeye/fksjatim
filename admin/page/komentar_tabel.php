<section class="content">
  <div class="row"> 
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Komentar Pengunjung</h3>                                    
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
            <th>NO</th>
            <th>BERITA</th>
            <th>KOMENTAR</th>
            <th>TANGGAL</th>
            <th>NAMA</th>
            <th>PUBLISH</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
          $n=1;
          $que = mysql_query("select k.*,b.judul from tabel_komentar k left join tabel_berita b on k.berita=b.id_berita order by id_komentar DESC");
          while ($d = mysql_fetch_array($que)) {                    
           ?>
           <tr>
            <td><?=$n?></td>
            <td><?=$d['judul']?></td>
            <td><?=$d['komentar']?></td>
            <td><?=$d['tanggal']?></td>
            <td><?=$d['nama']?></td>
            <td><a href="page/komentar_act.php?act=validasi&id=<?=$d['id_komentar']?>&val=<?=$d['publish']?>"><?=$d['publish']?></a></td>
            <td>              
              <a href="index.php?page=komentar_detail&edit&id=<?=$d['id_komentar']?>" class="btn btn-success btn-sm btn-edit" data-toggle="tooltip" data-placement="top" title="Lihat"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a href="page/komentar_act.php?act=del&id=<?=$d['id_komentar']?>" class="btn btn-danger btn-sm cara2" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
          <?php $n++;} ?>
        </tbody>
        <tfoot>
          <tr>
            <th>NO</th>
            <th>BERITA</th>
            <th>KOMENTAR</th>
            <th>TANGGAL</th>
            <th>NAMA</th>
            <th>PUBLISH</th>
            <th>ACTION</th>
         </tr>
       </tfoot>
     </table>
   </div><!-- /.box-body -->
 </div><!-- /.box -->
</div>
</div>
</section>