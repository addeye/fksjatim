<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 21/02/2016
 * Time: 17:14
 */
?>
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="img/avatar.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p></p>

            <a href="#"><i class="fa fa-circle text-success"></i> <?=$_SESSION['nama_pengguna']?></a>
        </div>
    </div>
    <!-- search form -->
    <!--  <form action="#" method="get" class="sidebar-form">
         <div class="input-group">
             <input type="text" name="q" class="form-control" placeholder="Search..."/>
             <span class="input-group-btn">
                 <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
             </span>
         </div>
     </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li>
            <a href="index.php">
                <i class="fa fa-home"></i> <span>BERANDA</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>TENTANG KAMI</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="?page=informasi_data"><i class="fa fa-angle-double-right"></i> Informasi</a></li>
                <li><a href="?page=profil_tabel"><i class="fa fa-angle-double-right"></i> Profil</a></li>
                <li><a href="?page=agenda_tabel"><i class="fa fa-angle-double-right"></i> Agenda</a></li>
                <li><a href="?page=pengumuman_tabel"><i class="fa fa-angle-double-right"></i> Pengumuman</a></li>

            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>MODUL</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="?page=berita_tabel"><i class="fa fa-angle-double-right"></i> Berita</a></li>
                <li><a href="?page=buku_tamu_tabel"><i class="fa fa-angle-double-right"></i> Buku Tamu</a></li>
                <li><a href="?page=galeri_tabel"><i class="fa fa-angle-double-right"></i> Galeri</a></li>
                <li><a href="?page=komentar_tabel"><i class="fa fa-angle-double-right"></i> Komentar</a></li>
                <li><a href="?page=download_tabel"><i class="fa fa-angle-double-right"></i> Download</a></li>
                <li><a href="?page=keanggotaan_tabel"><i class="fa fa-angle-double-right"></i> Keanggotaan</a></li>
            </ul>
        </li>
        <?php if($_SESSION['level']==1) { ?>
        <li>
            <a href="?page=pengguna_tabel">
                <i class="fa fa-indent"></i> <span>MANAJEMEN USER</span>
            </a>
        </li>
        <?php } ?>
    </ul>
</section>
