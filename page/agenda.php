<?php
$quepage = mysql_query("select a.*,p.nama_pengguna from tabel_agenda a LEFT JOIN tabel_pengguna p on a.penulis=p.id_pengguna ORDER BY a.id_agenda DESC");
 ?>
<!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Pengumuman</h2>
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
                <?php
                  while($d = mysql_fetch_array($quepage)) {
                   ?>
                <!-- start single blog archive -->
             <div class="col-lg-12 col-12 col-sm-12">
              <div class="single_blog_archive wow fadeInUp">                             
                  <h2 class="blog_title"><?=$d['judul_agenda']?></h2>
                  <div class="blog_commentbox"><p>Tanggal Agenda : <?=$d['tanggal']?></p></div>
                  <div class="blog_commentbox"><p>Tempat Pelaksana : <?=$d['tempat']?></p></div>                  
                  <div class="blog_commentbox"><?=$d['keterangan']?></div>
                  <div class="blog_commentbox"><p>Ditulis oleh: <?=$d['nama_pengguna']?></p></div>
              </div>
            </div>
            <!-- start single blog archive -->
                <?php } ?>  
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Banner <span class="fa fa-angle-double-right"></span></h2>
                <a class="side_add" href="#"><img src="img/side-add.jpg" alt="img"></a>
              </div>
              <!-- End single sidebar -->
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->