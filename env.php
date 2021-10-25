<?php

$server = 'localhost';
$username = 'root'; 
$password = '';
$db_name = 'landing_page_dbase';

try{
    $conn = new mysqli($server, $username, $password, $db_name);
} catch(PDOException $e){
    die("Terjadi Masalah dengan Koneksi" . $e->getMessage());
}

?>