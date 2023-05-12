<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query pesanan berdasarkan id
$m = query("SELECT * from pel_elpha WHERE id = $id");
$n = $m['user_id'];
$o = query("SELECT username from user WHERE id = $n");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <!-- HEADER -->
  <header>
    <div class="container" width="50">
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
          <li><a href="index.php" class="smoothScroll">Home</a></li>
          <li><a href="elpha.php" class="smoothScroll">Lapangan Futsal</a></li>
          <li><a href="#tentangkami" class="smoothScroll">Tentang Kami</a></li>
          <li class="appointment-btn"><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>

    </div>
  </section>


  <section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
          <img src="images/appointment-image.jpg" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 col-sm-6">


          <a class="btn btn-primary" href="elpha.php">Kembali</a>

          <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
            <br>
            <h2>Detail Pesanan</h2>
          </div>

          <div class="wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-6 col-sm-6">
              <img src="img/<?= $m['gambar']; ?>" width="250">
            </div>
            <div class="col-md-6 col-sm-6">
              <p class="form-control">
                Kode Pesanan : <?= $m['id']; ?>
              </p>
            </div>
            <div class="col-md-6 col-sm-6">
              <p class="form-control">
                Nama : <?= $m['nama']; ?>
              </p>
            </div>
            <div class="col-md-6 col-sm-6">
              <p class="form-control">
                No Telpon : <?= $m['telp']; ?>
              </p>
            </div>
            <div class="col-md-6 col-sm-6">
              <p class="form-control">
                Lama Sewa : <?= $m['lama_bermain']; ?>
              </p>
            </div>
            <div class="col-md-6 col-sm-6">
              <p class="form-control">
                Nama Pelayan : <?= $o['username']; ?>
              </p>
            </div>
            <br>
            <br><br>
            <div class="col-md-6 col-sm-6"></div>
            <div class="col-md-6 col-sm-6">
              <a class="btn btn-primary" href="ubah_elpha.php?id=<?= $m['id']; ?>">Ubah</a>
              &nbsp;
              <a class="btn btn-primary" href="hapus_elpha.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>