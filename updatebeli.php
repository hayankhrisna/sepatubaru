<?php
include "koneksi.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];
    // $beli = $_POST['beli'];
    $tobel = $_POST['tobel'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    
   
    if($tobel>$stok){
        
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Gagal<br>";
        echo "<a href = 'tampiluser.php'> Kembali </a>";
    }
    else{
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Berhasil";
        $harga = $harga * $tobel;
        echo "<br>";
        echo "Total yang harus dibayar Rp $harga<br>";
        $stok = $stok - $tobel;
        echo "<a href = 'tampiluser.php'> Kembali </a>";

    }
    $data = mysqli_query($mysqli, "UPDATE jual SET id = '$id', tobel = '$tobel', stok = '$stok' WHERE id='$id'") or die ("Data Salah ".mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type='text/css' media='all' href="runhome.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type='text/css' media='all' href="rungrond.css">
  
</head>
<body background = "hitam.jpg">
    
</body>
</html>