<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "project";

$mysqli = new mysqli ($server, $username, $password, $database);
if(mysqli_connect_errno()){
    echo 'Koneksi Gagal dilakukan dengan alasan '.mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
}


?>