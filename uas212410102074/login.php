<?php
session_start();
require 'functions.php';

if (isset($_SESSION['login'])) {
     header("Location: index.php");
     exit;
}


// ketika tombol login ditekan
if (isset($_POST['login'])) {
     $login = login($_POST);
}

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

                    <div class="col-md-4 col-sm-5" id="top">
                         <p>Selamat Datang di Elpha.id</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> <a href="https://wa.me/6285334234513/">+62 853-3423-4513</a></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i>Buka 7.00 - 23.00 WIB</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i>
                              <a href="https://mail.google.com/mail/u/2/#inbox?compose=CllgCJlLWWrdsTmDbpkCpdfgbVsdVChqfrrXXbDMCVRxXsmrKmkdpmtngVGkKPGVWdCkVMMHDpg">
                                   elphajember@gmail.com
                              </a>
                         </span> </div>

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
                         Elpha.id</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top">Home</a></li>
                         <li><a href="#tentangkami" class="smoothScroll">Tentang Kami</a></li>
                         <li class="appointment-btn"><a href="registrasi.php">REGISTRASI</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- LOGIN -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->

                         <?php if (isset($login['error'])) : ?>
                              <p style="color: red; font-style:italic;"><?= $login['pesan']; ?></p>
                         <?php endif; ?>

                         <form action="" id="appointment-form" role="form" method="POST">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>LOGIN</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label>
                                             Username
                                        </label>
                                        <input type="text" class="form-control" id="username" name="username" autofocus autocomplete="off" placeholder="Username" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label>
                                             Password
                                        </label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" name="login" class="form-control" id="cf-submit">LOGIN</button>
                                   </div>
                              </div>
                         </form>

                         <br><br><br><br><br><br><br><br><br><br>
                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                              <h3>Belum Punya Akun?</h3>
                         </div>
                         <br>
                         <div class="col-md-12 col-sm-12 wow fadeInUp" style="margin-top: -30px; text-align: center;" data-wow-delay="0.8s">
                              <a href="registrasi.php">
                                   <h3 class="appointment-btn">REGISTRASI</h3>
                              </a>
                              <br><br>

                         </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                         <img src=" images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5" id="tentangkami">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Tentang Kami</h4>
                              <p class="wow fadeInUp" data-wow-delay="0.4s">
                                   Balbalan <br> Merupakan aplikasi khusus pelayanan manajemen sewa lapangan elpha futsal berbasis website. <br><br>
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
                                                  <i class="fa fa-envelope-o"></i> balbalanjember@gmail.com
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