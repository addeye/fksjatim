<?php 
include "koneksi/koneksi.php";
$que = mysql_query("select * from tabel_informasi_instansi");
$d = mysql_fetch_array($que);
?>
      <!-- Main content -->
      <section class="content">
        <div class="row">
        <?php
                if (isset($_GET['done'])) {
        echo '<div class="alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Pemberitahuan!</b> Data Berhasil Masuk
      </div>';}
                 ?>
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">

                    <div class="box-header">
                        <h3 class="box-title">Informasi Sekolah</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="page/informasi_act.php">
                        <div class="box-body">
                            <div class="form-group">
                            <input name="nama_sekolah" value="<?=$d['nama_instansi']?>" type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Nama Instansi" placeholder="Nama Instansi">
                            </div>
                            <div class="form-group">                                
                                <input name="tahun_berdiri" value="<?=$d['tahun_berdiri']?>" type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Tahun Berdiri" placeholder="Tahun Berdiri">
                            </div>                                                        
                            <div class="form-group">
                                <textarea name="alamat" data-toggle="tooltip" data-placement="bottom" title="Alamat Sekolah" class="form-control" placeholder="Alamat Sekolah"><?=$d['alamat']?></textarea>
                            </div>
                            <div class="form-group">
                                <input name="telepon" value="<?=$d['telepon']?>" data-toggle="tooltip" data-placement="bottom" title="Telepon Sekolah" type="text" class="form-control" placeholder="Telepon">
                            </div>                            
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section> 