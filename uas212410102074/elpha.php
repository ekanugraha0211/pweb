<?php
session_start();

if (!isset($_SESSION['login'])) {
     header("Location: login.php");
     exit;
}

require 'functions.php';
$pesanan = query("SELECT * FROM pel_elpha");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
     $pesanan = cari($_POST['keyword']);
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
     <link rel="stylesheet" href="css/bootstrap.min.shadow.css">
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
          <div class="containerShadow">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Selamat Datang di Elpha.id</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> <a href="https://wa.me/6285334234513/">+62 853-3423-4513</a></span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> Buka 7.00 - 23.00 WIB</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i>
                              <a href="https://mail.google.com/mail/u/2/#inbox?compose=CllgCJlLWWrdsTmDbpkCpdfgbVsdVChqfrrXXbDMCVRxXsmrKmkdpmtngVGkKPGVWdCkVMMHDpg">
                                   elphaJember@gmail.com
                              </a>
                         </span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="containerShadow">

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
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#google-map" class="smoothScroll">Alamat Lapangan Futsal</a></li>
                         <li class="appointment-btn"><a href="logout.php">LOGOUT</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="containerShadow">
               <div class="row">

                    <div class="col-md-10 col-sm-10" style="margin-top: -90px;">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">ELPHA FUTSAL</h2>
                         </div>
                    </div>

                    <br><br>

                    <form action="" method="POST">
                         <div style="margin-left: 70px; margin-bottom: 20px" class="table-responsive-xl">
                              <a class="btn btn-primary" href="tambah_elpha.php">Tambah Data Pesanan</a>
                         </div>
                         <input type="text" name="keyword" style="margin-left: 70px;" size="40" placeholder="Cari dengan Nama Pelanggan  " autocomplete="off" autofocus class="keyword" id="search">
                         <button type="submit" name="cari" class="tombol-cari">Cari!</button>
                    </form>
                    <br>
                    <div class="container">
                         <table class="table table-striped table-bordered table-hover table-light" border="1" cellpadding="50" cellspacing="50">
                              <br>
                              <thead class="thead-dark">
                                   <tr>
                                        <!-- Judul Kolom -->
                                        <th scope="col" align="center">No</th>
                                        <th scope="col" align="center">Logo team</th>
                                        <th scope="col" align="center">Nama</th>
                                        <th scope="col" align="center">lama_sewa</th>
                                        <th scope="col" align="center">Kode Pesanan</th>
                                        <th scope="col" align="center">Aksi</th>
                                   </tr>
                              </thead>

                              <tbody id="row-contain">
                                   <?php if (empty($pesanan)) : ?>
                                        <tr>
                                             <td colspan="4">
                                                  <p style="color: red; font-style: italic;">Data pesanan tidak ditemukan!</p>
                                             </td>
                                        </tr>
                                   <?php endif; ?>

                                   <?php $i = 1;
                                   foreach ($pesanan as $m) : ?>
                                        <tr>
                                             <td><?= $i++; ?></td>
                                             <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
                                             <td><?= $m['nama']; ?></td>
                                             <td><?= $m['lama_bermain']; ?></td>
                                             <td><?= $m['id']; ?></td>
                                             <td>
                                                  <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>
                              </tbody>
                         </table>
                    </div>

                    <div>
                         <div><br><br><br><br></div>
                    </div>
               </div>
          </div>
     </section>

     <!-- GOOGLE MAP -->
     <section id="google-map">
          <div class="col-md-6 col-sm-6">
               <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s" style="padding-bottom: 30px;">Alamat ElphaFutsal</h2>
               </div>
          </div>
          <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4293362888898!2d113.71600171401695!3d-8.159425484004693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b50c16bcaf%3A0xf5ab0ae1f688a957!2sElpashindo%20Futsal!5e0!3m2!1sid!2sid!4v1670224360767!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                   Elpha.id <br> Merupakan aplikasi khusus pelayanan manajemen sewa lapangan elpha futsal berbasis website. <br><br>
                                   <img class="logo" src="images/logo.jpeg">
                                   Elpha.id Jember
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
     <!-- <script src="js/jquery.min.js"></script> -->
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/script.js"></script>
</body>

</html>