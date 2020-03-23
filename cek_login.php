<?php
include 'koneksi.php';
@session_start();

$logged_in = false;


if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	echo "<script>window.alert('Anda Harus Login');window.location=('index.php')</script>";
} else {
	$logged_in = true;
}
?>