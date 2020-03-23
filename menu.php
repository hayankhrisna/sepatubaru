<?php
@session_start();

if(!isset($_SESSION['username']))
{
    header("location:./index.php");
}

include "koneksi.php";

if($_SESSION['kategori'] == "admin")
{
    //echo "Anda Login Sebagai ";
    //echo $_SESSION['username'];
    include "home.php";
}

else if($_SESSION['kategori'] == "user")
{
    //echo "Anda Login Sebagai ";
    //echo $_SESSION['username'];
    include "homeuser.php";
}
?>