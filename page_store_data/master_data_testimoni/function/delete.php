<?php
include 'C:/xampp/htdocs/landing_page/env.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM data_testimoni WHERE id='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../home.php';</script>";
    }
?>