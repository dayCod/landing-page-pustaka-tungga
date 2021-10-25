<?php
include 'C:/xampp/htdocs/landing_page/env.php';
require 'C:/xampp/htdocs/landing_page/vendor/autoload.php';

use Carbon\Carbon;
$created_at = Carbon::now();

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$sumber = $_FILES['gambar']['tmp_name'];
$target = '../images/';
$nama_gambar = $_FILES['gambar']['name'];

$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
if($pindah){
    $query = "INSERT into info_perpus values('','$judul', '$deskripsi', '$nama_gambar','$created_at','$created_at')";
    $hasil = mysqli_query($conn, $query);
}

if($hasil){
    header('location:../home.php');
}else{
    echo'Penyimpanan Gagal';
}

?>