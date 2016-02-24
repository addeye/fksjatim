<!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Galeri</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
<!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
            <?php
             $que = mysql_query("SELECT * FROM tabel_galeri");
             while($d = mysql_fetch_array($que)){ 
             ?>
                <a href="admin/images/<?=$d['foto']?>" title="<?=$d['judul_foto']?>">
                  <img class="gallery_img" src="admin/images/<?=$d['foto']?>" alt="img" />
                <span class="view_btn">View</span>
                </a>
                <?php } ?>                
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->