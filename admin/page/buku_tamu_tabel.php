<section class="content">
  <div class="row">   
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Daftar Halaman Buku Tamu</h3>                                    
      </div><!-- /.box-header -->   
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>PENGIRIM</th>
            <th>EMAIL</th>
            <th>SUBJEK</th>
            <th>TANGGAL KIRIM</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          
          <?php
          $n=1;
          $que = mysql_query("select * from tabel_buku_tamu order by id_buku_tamu DESC");
          while ($d = mysql_fetch_array($que)) {                    
           ?>
           <tr>
            <td><?=$n?></td>
            <td><?=$d['nama_pengirim']?></td>
            <td><?=$d['email']?></td>
            <td><?=$d['subjek']?></td>
            <td><?=$d['tanggal_kirim']?></td>
            <td>              
              <a href="index.php?page=buku_tamu_detail&edit&id=<?=$d['id_buku_tamu']?>" class="btn btn-success btn-sm btn-edit" data-toggle="tooltip" data-placement="top" title="Lihat"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a href="page/buku_tamu_act.php?act=del&id=<?=$d['id_buku_tamu']?>" class="btn btn-danger btn-sm cara2" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
          </tr>
          <?php $n++;} ?>
        </tbody>
        <tfoot>
          <tr>
            <th>NO</th>
            <th>PENGIRIM</th>
            <th>EMAIL</th>
            <th>SUBJEK</th>
            <th>TANGGAL KIRIM</th>
            <th>ACTION</th>
         </tr>
       </tfoot>
     </table>
   </div><!-- /.box-body -->
 </div><!-- /.box -->
</div>
</div>
</section>