<?php
session_start();

if (!isset($_SESSION['login'])) {
     header("Location: login.php");
     exit;
}

require 'functions.php';
$pesanan = query("SELECT * FROM pel_elpha");
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <title>Elpha.id</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link href="css/styles.css" rel="stylesheet">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <!-- <div class="spinner"> -->
          <div id="preloader">
               <img class="preloader" src="images/loaders/heart-loading2.gif">
          </div>
          <!-- <span class="spinner-rotate"></span> -->
          <!-- </div> -->
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Selamat Datang di Elpha.id</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> <a href="https://wa.me/6285334234513/">+62 853-3423-4513</a></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> Buka 7.00 - 23.00 WIB</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i>
                              <a href="https://mail.google.com/mail/u/2/#inbox?compose=CllgCJlLWWrdsTmDbpkCpdfgbVsdVChqfrrXXbDMCVRxXsmrKmkdpmtngVGkKPGVWdCkVMMHDpg">
                                   ElphaJember@gmail.com
                              </a>
                         </span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php">
                         <img class="logo" src="images/logo.jpeg">
                         Elpha.id
                    </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#team" class="smoothScroll">Lapangan Futsal</a></li>
                         <li><a href="#google-map" class="smoothScroll">Tentang Kami</a></li>
                         <li class="appointment-btn"><a href="logout.php">LOGOUT</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                                   Selamat Datang <br> Di Elpha.id
                              </h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Saat ini, Anda Sedang Menggunakan Aplikasi Khusus Pelayanan Manajemen Sewa Lapangan Elpha Futsal.</p>
                                   <p>Mudah, Praktis, Responsive, Dan Teringerasi!</p>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Lapangan Futsal</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>ELPHA</h3>
                                   <p>Jl. Mastrip No.51, Lingkungan Panji, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68124</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> (031) 5501239</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfrLTbLwBDxlQHXqwsTzjTFCnmRPCcpwmvKQkzxjMvDvRPkmgnHHHvdgBDfQwmSctcPvjB">
                                                  ElphaJember@gmail.com
                                             </a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://wa.me/081933036219/" class="fa fa-phone"></a></li>
                                        <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfrLTbLwBDxlQHXqwsTzjTFCnmRPCcpwmvKQkzxjMvDvRPkmgnHHHvdgBDfQwmSctcPvjB" class="fa fa-envelope-o"></a></li>
                                        <li><a href="elpha.php" class="fa fa-flickr"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- GOOGLE MAP -->
     <section id="google-map">
          <div class="col">
               <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s" style="padding-bottom: 30px;">Alamat Kami</h2>
               </div>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.364508123889!2d113.71468551401702!3d-8.165982284087226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695cb5d303ccf%3A0xdf823b7ced291a6e!2sJl.%20Kalimantan%20No.37%2C%20Krajan%20Timur%2C%20Sumbersari%2C%20Kec.%20Sumbersari%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068121!5e0!3m2!1sid!2sid!4v1670224108451!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" id="tentangkami">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Tentang Kami</h4>
                              <p class="wow fadeInUp" data-wow-delay="0.4s">
                                   Elpha.id <br> Merupakan aplikasi khusus pelayanan manajemen sewa lapangan Elpha Futsal. <br><br>
                                   <img class="logo" src="images/logo.jpeg">
                                   Elpha.id
                              </p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Developer</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#">
                                             <img src="images/bayyinn.jpg" class="img-responsive wow fadeInUp" data-wow-delay="0.6s" alt="">
                                        </a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5 class="wow fadeInUp" data-wow-delay="0.6s">Bayyintaro</h5>
                                        </a>
                                        <span class="wow fadeInUp" data-wow-delay="0.6s">212410102023</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#">
                                             <img src="images/ekaa.jpg" class="img-responsive wow fadeInUp" data-wow-delay="0.6s" alt="">
                                        </a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5 class="wow fadeInUp" data-wow-delay="0.6s">Eka Prasetya Nugraha </h5>
                                        </a>
                                        <span class="wow fadeInUp" data-wow-delay="0.6s">212410102074</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#">
                                             <img src="images/vitoo.jpg" class="img-responsive wow fadeInUp" data-wow-delay="0.6s" alt="">
                                        </a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5 class="wow fadeInUp" data-wow-delay="0.6s">Alvito Dwinova Permana </h5>
                                        </a>
                                        <span class="wow fadeInUp" data-wow-delay="0.6s">212410102098</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4" id="kontakkami">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Kontak Kami</h4>
                                   <div class="contact-info">
                                        <p>
                                             <a href="https://wa.me/6285334234513/" class="wow fadeInUp" data-wow-delay="0.6s">
                                                  <i class="fa fa-phone"></i> +62 853-3423-4513
                                             </a>
                                        </p>
                                        <p>
                                             <a href="https://mail.google.com/mail/u/2/#inbox?compose=CllgCJlLWWrdsTmDbpkCpdfgbVsdVChqfrrXXbDMCVRxXsmrKmkdpmtngVGkKPGVWdCkVMMHDpg" class="wow fadeInUp" data-wow-delay="0.6s">
                                                  <i class="fa fa-envelope-o"></i> Elphajember@gmail.com
                                             </a>
                                        </p>
                                   </div>
                                   <br>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square wow fadeInUp" data-wow-delay="0.6s" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.6s"></a></li>
                                   <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.6s"></a></li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>