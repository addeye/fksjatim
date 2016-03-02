<?php
include "admin/koneksi/koneksi.php";
include "admin/function/function.php";

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Forum Koperasi Syariah Jawa Timur : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='css/font-Merriweather.css' rel='stylesheet' type='text/css'>   
    <link href='css/font-Varela.css' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <!-- <a class="navbar-brand" href="index.php">Website Portal <span>Sekolah</span> </a>               -->
              <!-- IMG BASED LOGO  -->
               <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a>             
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tentang Kami<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  <?php
                  $sub = mysql_query("select * from tabel_profil");
                  while($m = mysql_fetch_array($sub)) {
                   ?>
                    <li><a href="index.php?page=profil&id=<?=$m['id_profil']?>"><?=$m['judul']?></a></li>
                    <?php } ?>               
                  </ul>
                </li>
                <li><a href="index.php?page=programkerja">Program Kerja</a></li>
                <li><a href="index.php?page=keanggotaan">Keanggotaan</a></li>
                <li><a href="index.php?page=galeri">Galeri</a></li>
                <li><a href="index.php?page=berita">Berita</a></li>
                <!-- <li><a href="index.php?page=kontak">Contact</a></li> -->
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->     

    <?php
              if (isset ($_GET['page']) and file_exists("page/".$_GET['page'].".php"))
                { include "page/".$_GET['page'].".php";} 
              else {include "page/beranda.php";}
    ?> 
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Alamat </h3>
                <p>Forum Koperasi Syariah Jawa Timur</p>                
                <p>Ruko Graha Indah Kav A7. Gayung Sari 46 Surabaya</p>
                <p>Telp / Fax : 031-8288573.</p>                
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3></h3>
                <ul class="footer_widget_nav">
                  
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3></h3>
                <ul class="footer_widget_nav">
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> &copy; Copyright <a target="_blank" href="http://gowonan.com">Gowonan</a> All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Design & Developed by <a href="#">Deye</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->

    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="js/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <script type="text/javascript">
//     var pgurl = window.location.href.substr(window.location.href
// .lastIndexOf("/")+1);
//     $('#top-menu a[href~="' + pgurl + '"]').parents('li').addClass('active');
//     console.log(pgurl);
    </script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <script type="text/javascript" src="js/jquery.maskMoney.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#angka1').maskMoney();
      $('#angka2').maskMoney({prefix:'US$'});
      $('.rupiah').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
      $('#angka4').maskMoney();
    });
    </script>
    <script type="text/javascript">
    
      function kecById(id){
         $.get('help/kecamatanByIdKab.php',{id_kab : id}, function(response){
          $('#kec').html(response);
        })
      }
      function kelById(id){
         $.get('help/kelurahanByIdKec.php',{id_kec : id}, function(response){
          $('#kel').html(response);
        })
      }

//       function convertToRupiah(angka){
//     var rupiah = '';
//     var angkarev = angka.toString().split('').reverse().join('');
//     for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
//     return rupiah.split('',rupiah.length-1).reverse().join('');
// }

// function rupiah(){
//     var nominal= document.getElementById("nominal").value;
//     var rupiah = convertToRupiah(nominal);
//     document.getElementById("nominal").value = rupiah;
// }
$(function() {
  $('.jml').on('keydown', '.angka', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
})
    </script>

  </body>
</html>