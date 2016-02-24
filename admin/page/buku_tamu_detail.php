<?php
if(isset($_GET['edit'])){
$que = mysql_query("select * from tabel_buku_tamu where id_buku_tamu = '$_GET[id]' ");
$d = mysql_fetch_array($que);
$id_buku_tamu = $d['id_buku_tamu'];
$nama_pengirim = $d['nama_pengirim'];
$email = $d['email'];
$subjek = $d['subjek'];
$isi_pesan = $d['isi_pesan'];
$tanggal_kirim = $d['tanggal_kirim'];
$act = "update";
}

  ?>
<!-- Main content -->
                <section class="content invoice">                    
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <span class = "glyphicon glyphicon-envelope"></span> <?= strtoupper($nama_pengirim)?>
                                <small class="pull-right">Date: <?=$tanggal_kirim?></small>
                            </h2>                            
                        </div><!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-12 invoice-col">
                            Dari
                            <address>
                                <strong><?=$nama_pengirim?></strong><br>
                                Subjek: <?=$subjek?><br>                                
                                Email: <?=$email?>
                            </address>
                        </div><!-- /.col -->
                                            
                    </div><!-- /.row -->                 

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                           Isi Pesan: <?=$isi_pesan?>
                        </div><!-- /.col -->                        
                    </div><!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                        <button class="btn btn-default" onClick="location.href='?page=buku_tamu_tabel'"><span class="glyphicon glyphicon-chevron-left"></span> Back</button>
                            <!-- <button class="btn btn-default" onclick="window.print();"><span class="glyphicon glyphicon-chevron-left"></span> Back</button> -->
                            <!-- <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>   -->
                            <!-- <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
                        </div>
                    </div>
                </section><!-- /.content -->
<!-- CK Editor -->
<script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

 <script type="text/javascript">
 
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                // $(".textarea").wysihtml5();
            
        </script>
