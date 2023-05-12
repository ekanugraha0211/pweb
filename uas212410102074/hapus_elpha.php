<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: pel_elpha.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus_elpha($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'elpha.php';
       </script>";
} else {
  echo "data gagal ditambahkan!";
}
