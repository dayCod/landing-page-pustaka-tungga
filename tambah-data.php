<?php
include 'C:/xampp/htdocs/landing_page/env.php';
require 'C:/xampp/htdocs/landing_page/vendor/autoload.php';

use Carbon\Carbon;
$created_at = Carbon::now();


$nama = $_POST['nama'];
$email = $_POST['email'];
$instansi = $_POST['instansi'];

$query = "INSERT into data_popup values('','$nama', '$email', '$instansi', '$created_at','$created_at')";
$hasil = mysqli_query($conn, $query);

if($hasil){
    header('location:index.php');
}else{
    echo'Penyimpanan Gagal';
}

?>