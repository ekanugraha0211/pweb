<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: elpha.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM pel_elpha WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah_elpha($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'elpha.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Pesanan</title>
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
          <p>Selamat Datang di BJ (Balbalan Jember)</p>
        </div>

        <div class="col-md-8 col-sm-7 text-align-right">
          <span class="phone-icon"><i class="fa fa-phone"></i> <a href="https://wa.me/6285334234513/">+62 853-3423-4513</a></span>
          <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> Buka 7.00 - 23.00 WIB</span>
          <span class="email-icon"><i class="fa fa-envelope-o"></i>
            <a href="https://mail.google.com/mail/u/2/#inbox?compose=CllgCJlLWWrdsTmDbpkCpdfgbVsdVChqfrrXXbDMCVRxXsmrKmkdpmtngVGkKPGVWdCkVMMHDpg">
              BalbalanJember@gmail.com
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
          Balbalan Jember
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
            <h2>Form Ubah Data Pesanan</h2>
            <br>
          </div>


          <form action="" method="POST" enctype="multipart/form-data">
            <div class="wow fadeInUp" data-wow-delay="0.8s">
              <input type="hidden" name="id" value="<?= $id; ?>">

              <div class="col-md-6 col-sm-6">
                <label>
                  Nama :
                  <input type="text" class="form-control" name="nama" autofocus required value="<?= $m['nama']; ?>">
                </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <label>
                  Lama Sewa :
                  <input type="text" class="form-control" name="lama_bermain" required value="<?= $m['lama_bermain']; ?>">
                </label>
              </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <label>
                  No Telpon:
                  <input type="text" class="form-control" name="telp" placeholder="Nomer Telpon" required>
                </label>
              </div>
              <div class="col-md-6 col-sm-6">
                <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
                <label>
                  Logo team :
                  <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                </label>
                <img src="img/<?= $m['gambar']; ?>" width="120" style="display: block;" class="img-preview">
              </div>
              <div class="col-md-6 col-sm-6">
                <h4><button type="submit" class="btn btn-primary" name="ubah">Ubah Data!</button></h4>
              </div>

            </div>
          </form>

          <script src="js/script.js"></script>
</body>

</html>