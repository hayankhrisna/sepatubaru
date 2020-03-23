<link rel="stylesheet" type='text/css' media='all' href="rungrond.css">
<?php
include "koneksi.php";
 
if(isset($_POST['simpan'])){
$username     = $_POST['username'];
$password    = $_POST['password'];

$data = mysqli_query($mysqli,"INSERT INTO log SET username='$username',password='$password',kategori='user'") 
or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h1>Berhasil Input Data";
echo "<br><a href='index.php'>Kembali</a>";
} else {
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h1>Gagal Input Data!!!";
echo "<br><a href='register.php'>Kembali</a>";
}
}
?>