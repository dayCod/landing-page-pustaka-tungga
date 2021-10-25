<?php

$server = 'XXXXXXXXX';
$username = 'XXXXXXX'; 
$password = '';
$db_name = 'XXXXXXXXX';

try{
    $conn = new mysqli($server, $username, $password, $db_name);
} catch(PDOException $e){
    die("Terjadi Masalah dengan Koneksi" . $e->getMessage());
}

?>
