<link rel="stylesheet" type='text/css' media='all' href="rungrond.css">
<?php
include "koneksi.php";

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama_barang = $_POST['barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    $data = mysqli_query($mysqli, "UPDATE jual SET id = '$id', barang = '$nama_barang', stok = '$stok', harga = '$harga', gambar = '$gambar' WHERE id='$id'") or die ("Data Salah ".mysqli_error($mysqli));

    if($data){
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Berhasil Update Data<br>";
        echo "<a href = 'tampilin.php'>Kembali</a>";
    }
    else{
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Gagal Input Data !<br>";
        echo "a href = 'tampilin.php'>Kembali</a>";
    }
}
?>