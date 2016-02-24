<?php
$que_detail = mysql_query("SELECT b.*,p.nama_pengguna FROM tabel_berita b LEFT JOIN tabel_pengguna p on b.penulis=p.id_pengguna WHERE b.id_berita ='$_GET[id]'");
$d = mysql_fetch_array($que_detail);
$jml = $d['lihat'];
$jml++;
mysql_query("UPDATE `tabel_berita` SET `lihat`='$jml' WHERE `id_berita`='$_GET[id]' ");
$que_jmlkomentar = mysql_query("select count(berita) as jumlah_komentar from tabel_komentar where berita='$_GET[id]' and publish!='N' ");
$j = mysql_fetch_array($que_jmlkomentar);
$jumlah_komentar = $j['jumlah_komentar'];
if (isset($_POST['send'])) {
  $nama = $_POST['nama'];
  $komentar = $_POST['komentar'];
  $tanggal = date('d/m/Y');
  mysql_query("INSERT INTO `tabel_komentar`(`id_komentar`, `berita`, `komentar`, `tanggal`, `nama`, `publish`) VALUES (NULL,'$_GET[id]','$komentar','$tanggal','$nama','N')");
  echo "<script>alert('Terimakasih telah berkomentar, Komentar anda segera dimoderasi oleh Admin');</script>";
}
 ?>
<!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Berita</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <a href="#" class="blog_img">
                        <img alt="img" src="admin/gambar-berita/<?=$d['gambar']?>">
                      </a>
                    </div>
                    <h2 class="blog_title"><?=$d['judul']?></h2>
                    <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i><?=$d['nama_pengguna']?></p>
                    <p><i class="fa fa-calendar"></i><?=$d['tanggalpost']?></p>
                   <p><i class="fa fa-comments"></i><?=$jumlah_komentar?> Comments</p>
                    <p><i class="fa fa-eye"></i><?=$d['lihat']?> View</p>
                    </div>
                  <?=$d['berita']?>      
                  </div>                 
                </div>
                <!-- End single blog -->
                <div class="col-lg-8 col-8 col-sm-8">
                  <div class="contact_form wow fadeInLeft">
                  <h3>Tinggalkan Komentar Baru</h3>
              <form class="submitphoto_form" method="post" action="">
                <input type="text" name="nama" required class="wp-form-control wpcf7-text" placeholder="Nama Anda">             
                <textarea name="komentar" required class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Apa komentar anda ? "></textarea>
                <input type="submit" name="send" value="Submit" class="wpcf7-submit">
              </form>
           </div>
                </div>
                <?php
                $que_komentar = mysql_query("SELECT * FROM tabel_komentar WHERE berita = '$_GET[id]' and publish = 'Y' "); 
                $jml_kom = mysql_num_rows($que_komentar);
                ?>
                <div class="col-lg-12 col-12 col-sm-12">
                  <h3>Ada <?=$jml_kom?> komentar untuk berita ini</h3>
                  <div class="singCourse_content single_course">
                  <?php while($kom = mysql_fetch_array($que_komentar)) { ?>                                     
                    <p class="singCourse_price"><span><?=$kom['nama']?></span><br><?=$kom['tanggal']?>
                    <br><?=$kom['komentar']?></p>
                                        
                    <?php } ?>
                    </div>

                </div>                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->

         <?php include "sidebar.php"; ?>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->