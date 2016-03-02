<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="imgBanner">
  <h2>Registrasi</h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->
<!--=========== BEGIN CONTACT SECTION ================-->
<section id="contact">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12"> 
      <div class="title_area">
        <h2 class="title_two">Data Keragaan Anggota FKS Jawa Timur</h2>
        <span></span> 
        <p>Halaman ini untuk mendata anggota FKS Jawa Timur.</p>
      </div>
    </div>
  </div>
  <div class="row">
   <div class="col-md-2"></div>
   <div class="col-lg-8 col-md-8 col-sm-8">
     <div class="contact_form wow fadeInLeft">
      <form class="submitphoto_form" method="post" action="page/submit_data.php" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-3">          
          <label>Nama Koperasi</label></div>
          <div class="col-md-9">
          <input type="text" name="nama_koperasi" required placeholder="Nama Koperasi" class="wp-form-control form-control wpcf5">
        </div>
        <div class="form-group">
          <div class="col-md-3"><label>No /Tgl Badan Hukum</label></div>
          <div class="col-md-9"><input type="text" name="badan_hukum" required class="wp-form-control form-control wpcf3"></div>
        </div>
        <div class="form-group">
          <div class="col-md-12"><label>Alamat</label></div>          
        </div>        
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Kab/Kota</div>
          <div class="col-md-9"><select required id="kab" onchange="kecById(this.value)" name="kabupaten" class="wp-form-control form-control wpcf3 wpcf7-text">
          <option value="">Kabupaten/Kota</option>
            <?php 
            $quekab = mysql_query("SELECT * FROM kabupaten 
WHERE id_prov=35");
            while ($kab = mysql_fetch_array($quekab)) {
            ?>
            <option value="<?=$kab['id_kab']?>"><?=$kab['nama_kab']?></option>
            <?php } ?>
          </select></div>          
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Kec</div>
          <div class="col-md-9"><select required id="kec" name="kecamatan" onchange="kelById(this.value)" class="wp-form-control form-control wpcf3 wpcf7-text">
          <option value="">Kecamatan</option>            
          </select></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Kel/Desa</div>
          <div class="col-md-9"><select required id="kel" name="kelurahan" class="wp-form-control form-control wpcf3 wpcf7-text">
          <option value="">Kelurahan</option>            
          </select></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Jalan</div>
          <div class="col-md-9">
          <textarea required class="wp-form-control form-control wpcf4" name="jalan"></textarea>          
        </div>
        <div class="form-group">
          <div class="col-md-3"><label>No Telepon</label></div>
          <div class="col-md-9"><input required type="text" name="no_telp" class="wp-form-control form-control wpcf3"></div>
        </div> 
        <div class="form-group">
          <div class="col-md-3"><label>Email</label></div>
          <div class="col-md-9"><input required type="email" name="email" class="wp-form-control form-control wpcf4"></div>
        </div> 
        <div class="form-group">
          <div class="col-md-3"><label>Website</label></div>
          <div class="col-md-9"><input required type="text" name="alamat_website" class="wp-form-control form-control wpcf3"></div>
        </div>
        <div class="form-group">
          <div class="col-md-12"><label>Pengurus</label></div>          
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Ketua</div>
          <div class="col-md-9"><input required type="text" name="ket_pengurus" class="wp-form-control form-control wpcf5"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Bendahara</div>
          <div class="col-md-9"><input required type="text" name="bend_pengurus" class="wp-form-control form-control wpcf5"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Sekretaris</div>
          <div class="col-md-9"><input required type="text" name="sek_pengurus" class="wp-form-control form-control wpcf5"></div>
        </div>
        <div class="form-group">
          <div class="col-md-12"><label>Pengawas</label></div>          
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Ketua</div>
          <div class="col-md-9"><input required type="text" name="ket_pengawas" class="wp-form-control form-control wpcf5"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Anggota 1</div>
          <div class="col-md-9"><input required type="text" name="angg1_pengawas" class="wp-form-control form-control wpcf5"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Anggota 2</div>
          <div class="col-md-9"><input required type="text" name="angg2_pengawas" class="wp-form-control form-control wpcf5"></div>
        </div>
        <div class="form-group">
          <div class="col-md-3"><label>Jumlah Anggota</label></div>
          <div class="col-md-4 jml"> <input required type="text" name="jml_angg_L" class="angka wp-form-control form-control wpcf1 angka"> Laki</div>
          <div class="col-md-4 jml"><input required type="text" name="jml_angg_P" class="angka wp-form-control form-control wpcf1 angka"> Perempuan</div> 
          <div class="col-md-1"></div>         
        </div>
        <div class="form-group">
          <div class="col-md-3"><label>Jumlah Calon Anggota</label></div>
          <div class="col-md-4 jml">Laki <input required type="text" name="jml_cangg_L" class="wp-form-control form-control wpcf1 angka"></div>
          <div class="col-md-4 jml">Perempuan <input required type="text" name="jml_cangg_P" class="wp-form-control form-control wpcf1 angka"></div>
          <div class="col-md-1"></div>
        </div>

        <div class="form-group">
          <div class="col-md-3"><label>Manager</label></div>
          <div class="col-md-9"><input required type="text" name="manager" class="wp-form-control form-control wpcf5"></div>                
        </div>

        <div class="form-group">
          <div class="col-md-3"><label>Karyawan</label></div>
          <div class="col-md-9 jml">Orang <input required type="text" name="jml_karyawan" class="wp-form-control form-control wpcf1 angka"></div>                
        </div>
        <div class="form-group">
          <div class="col-md-3"><label>Keuangan</label></div>
          <div class="col-md-9"><select required name="thn_keuangan" class="wp-form-control wpcf3 form-control wpcf7-text">
          <option value="">Tahun Anggaran</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
          </select></div>                
        </div>

        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Simpanan Diterima</div>
          <div class="col-md-9"><input required type="text" name="simpan_diterima" class="wp-form-control wpcf3 form-control rupiah">          
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Modal Pinjaman</div>
          <div class="col-md-9"><input required type="text" name="modal_pinjaman" class="wp-form-control wpcf3 form-control rupiah"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Modal Sendiri</div>
          <div class="col-md-9"><input required type="text" name="modal_sendiri" class="wp-form-control wpcf3 form-control rupiah"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Modal Penyertaan</div>
          <div class="col-md-9"><input required type="text" name="modal_penyertaan" class="wp-form-control wpcf3 form-control rupiah"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Total Asset</div>
          <div class="col-md-9"><input required type="text" name="total_aset" class="wp-form-control wpcf3 form-control rupiah"></div>
        </div>
        <div class="form-group">
          <div class="col-md-1"></div>
          <div class="col-md-2">Pembiayaan Diberikan</div>
          <div class="col-md-9"><input required type="text" name="biaya_diberikan" class="wp-form-control wpcf3 form-control rupiah">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3"><label>Gambar Koperasi</label></div>
          <div class="col-md-9"><input required type="file" name="gambar_koperasi" class="wp-form-control wpcf5 form-control"></div>
        </div>
        <div class="form-gorup">        
        <div class="col-md-3"></div>
        <div class="col-md-9"><input type="submit" name="send" value="Submit" class="btn btn-primary"></div>  
        </div>
        
      </form>
    </div>
  </div>
  <div class="col-md-2"></div>
         <!-- <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Alamat</h3>
             <div class="address_group">
               <p>Jl Bakylan Kode Pos 61833</p>
               <p>Phone: 0321 657445</p>
               <p>Email: - </p>
             </div>
             <div class="address_group">
              <ul class="footer_social">
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
                </ul>
             </div>
           </div>
         </div> -->
       </div>
     </div>
   </section>
   <!--=========== END CONTACT SECTION ================-->

   <!--=========== BEGIN GOOGLE MAP SECTION ================-->
   <!-- <section id="googleMap">
    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=200+Lincoln+Ave,+Salinas,+CA,+USA&amp;aq=&amp;sll=30.977609,-95.712891&amp;sspn=42.157377,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=200+Lincoln+Ave,+Salinas,+California+93901-2639&amp;t=m&amp;z=14&amp;ll=36.674837,-121.657691&amp;output=embed"></iframe>
  </section> -->
    <!--=========== END GOOGLE MAP SECTION ================-->