<?php
$id = $_GET['id'];
$quepage = mysql_query("select * from tabel_profil where id_profil = '$id' ");
$d = mysql_fetch_array($quepage);
 ?>
<!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Tentang Kami</h2>
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
                        <?= file_gambar($d['gambar'],'foto')?>
                      </a>
                    </div>
                    <h2 class="blog_title"><?=$d['judul']?></h2>
<!--                     <div class="blog_commentbox">
                      <p><i class="fa fa-user"></i>Richard Remus</p>
                      <p><i class="fa fa-calendar"></i>15 March 2015</p>
                      <a href="#"><i class="fa fa-comments"></i>20 Comments</a>
                    </div> -->
                    <?=$d['isi']?>                 
                  </div>                 
                </div>
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
                <h2>Halaman Lain <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                <?php
                $que_profil = mysql_query("SELECT * FROM tabel_profil where id_profil != '$id' ");
                while($profil = mysql_fetch_array($que_profil)) {
                 ?>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="index.php?page=profil&id=<?=$profil['id_profil']?>" class="news_img">
                          <?=file_gambarside($profil['gambar'],'foto')?>
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="index.php?page=profil&id=<?=$profil['id_profil']?>"><?=$profil['judul']?></a>
                       <?=substr($profil['isi'], 0,100)?></p>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
              <!-- End single sidebar -->
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