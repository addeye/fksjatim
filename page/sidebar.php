<!-- start course archive sidebar -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="courseArchive_sidebar">
          <!-- start single sidebar -->
          <div class="single_sidebar">
            <h2>Berita Populer <span class="fa fa-angle-double-right"></span></h2>
            <ul class="news_tab">
            <?php
            $que = mysql_query("SELECT * FROM tabel_berita ORDER BY lihat DESC LIMIT 0,3");
            while($bp = mysql_fetch_array($que)){
             ?>
              <li>
                <div class="media">
                  <div class="media-left">
                    <a href="#" class="news_img">
                      <img alt="img" src="admin/gambar-berita/<?=$bp['gambar']?>" class="media-object">
                    </a>
                  </div>
                  <div class="media-body">
                   <a href="index.php?page=berita-detail&id=<?=$bp['id_berita']?>"><?=$bp['judul']?></a>
                   <span class="feed_date"><?=$bp['tanggalpost']?></span>
                 </div>
               </div>
             </li>
                <?php } ?>
       </ul>
     </div>
     <!-- End single sidebar -->
     <!-- start single sidebar -->
     <div class="single_sidebar">
      <h2>Kategori <span class="fa fa-angle-double-right"></span></h2>
      <ul>
      <?php
      $que_k = mysql_query("SELECT * FROM tabel_kategori");
      while($k=mysql_fetch_array($que_k)){
       ?>
        <li><a href="index.php?page=berita&kategori=<?=$k['id_kategori']?>"><?=strtoupper($k['nama_kategori'])?></a></li>
        <?php } ?>
      </ul>
    </div>
    <?php
    $que_pengumuman = mysql_query("select p.*,g.nama_pengguna from tabel_pengumuman p LEFT JOIN tabel_pengguna g on p.penulis=g.id_pengguna ORDER BY p.id_pengumuman DESC LIMIT 0,1 ");
     $row_p = mysql_fetch_array($que_pengumuman);
     ?>
    <div class="single_sidebar">
      <h2>Pengumuman <span class="fa fa-angle-double-right"></span></h2>
      <p><b><?=strtoupper($row_p['judul'])?></b></p>
      <?=$row_p['keterangan']?>
      <p>Diterbitkan pada: <?=$row_p['tanggal_post']?></p>
      <p>Oleh: <?=$row_p['nama_pengguna']?></p>
      <a class="blog_readmore" href="index.php?page=pengumuman"> More</a>
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