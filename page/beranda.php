<?php if (!isset ($_GET['tampil'])) $_GET['tampil']=4;
if (!isset ($_GET['hal'])) $_GET['hal']=1;
?>
<!--=========== BEGIN SLIDER SECTION ================-->
<section id="slider">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="slider_area">
        <!-- Start super slider -->
        <div id="slides">
          <ul class="slides-container">
            <?php
            $que = mysql_query("SELECT * FROM tabel_berita WHERE headline = 'Y' ");
            while ($d = mysql_fetch_array($que)) {
             ?>                          
             <li>
              <img src="admin/gambar-berita/<?=$d['gambar']?>" alt="img">
              <div class="slider_caption">
                <h2><?=$d['judul']?></h2>
                <?=substr($d['berita'], 0,250)?></p>
                <a class="slider_btn" href="index.php?page=berita-detail&id=<?=$d['id_berita']?>">Selengkapnya</a>
              </div>
            </li>
            <?php } ?>
          </ul>
          <nav class="slides-navigation">
            <a href="#" class="next"></a>
            <a href="#" class="prev"></a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=========== END SLIDER SECTION ================-->
<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="courseArchive">
  <div class="container">
  
    <div class="row">

      <!-- start course content -->
      <div class="col-lg-8 col-md-8 col-sm-8">
      <h2 class="titile">Berita Terkini</h2>
        <div class="courseArchive_content">
          <!-- start blog archive  -->
          <div class="row">
            <?php
            $sql = "SELECT b.*,p.nama_pengguna,k.nama_kategori FROM tabel_berita b LEFT JOIN tabel_pengguna p on b.penulis=p.id_pengguna LEFT JOIN tabel_kategori k on b.kategori=k.id_kategori WHERE b.headline!='Y' ";
            $jml=mysql_query($sql);
            $jml=mysql_num_rows($jml); // jumlah data
            $jmlhal= ceil($jml/$_GET['tampil']); // jumlah halaman yang di klik
            $mulai=$_GET['tampil'] * ($_GET['hal'] - 1); // mulai data ditampilkan
            $sql.=" limit $mulai,$_GET[tampil]";

            $que_b = mysql_query($sql);
            $jml = mysql_num_rows($que_b);
            
            while ($b = mysql_fetch_array($que_b)) {
              $que_komen = mysql_query("SELECT COUNT(berita) as jumlah_komentar FROM tabel_komentar WHERE berita='$b[id_berita]' and publish='Y'");
              $komen = mysql_fetch_array($que_komen);
              $jumlah_komentar = $komen['jumlah_komentar'];
             ?>
             <!-- start single blog archive -->
             <div class="col-lg-12 col-12 col-sm-12">
              <div class="single_blog_archive wow fadeInUp">
                <div class="col-lg-4 col-4 col-sm-4">
                  <div class="blogimg_container">
                    <a href="#" class="blog_img">
                      <img alt="img" src="admin/gambar-berita/<?=$b['gambar']?>">
                    </a>
                  </div>
                </div>
                <div class="col-lg-8 col-8 col-sm-8">
                  <h2 class="blog_title"><a href="index.php?page=berita-detail&id=<?=$b['id_berita']?>"> <?=$b['judul']?></a></h2>
                  <div class="blog_commentbox">
                    <p><i class="fa fa-user"></i><?=$b['nama_pengguna']?></p>
                    <p><i class="fa fa-calendar"></i><?=$b['tanggalpost']?></p>
                   <p><i class="fa fa-comments"></i><?=$jumlah_komentar?> Comments</p>
                    <p><i class="fa fa-eye"></i><?=$b['lihat']?> View</p>
                  </div>
                  <div class="blog_summary"><?=substr($b['berita'], 0,200)?>....</p></div>
                  <!-- <p class="blog_summary"> -->
                  <a class="blog_readmore" href="index.php?page=berita-detail&id=<?=$b['id_berita']?>">Read More</a>
                </div>
              </div>
            </div>
            <!-- start single blog archive -->
            <?php } ?>

          </div>
          <!-- end blog archive  -->
          <!-- <nav>
            <ul class="pagination wow fadeInLeft">
              <li><a href="#"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
              <?php 
              // for ($m=1; $m<=$jmlhal; $m++) 
              //   if (isset ($_GET['hal']) && isset ($_GET['tampil'])) if($m!=$_GET['hal']) 
              //     echo "<li><a href=\"index.php?page=beranda&hal=$m&tampil=$_GET[tampil]\"> $m
              // </a></li>"; 
              // else echo "<li class=\"active\"><a href=\"#\">$m</a></li>";
              ?>
              <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
            </ul>
          </nav> -->
        </div>
      </div>
      <!-- End course content -->

      <?php include "sidebar.php"; ?>
      <!-- start course archive sidebar -->
    </div>
  </div>
</section>