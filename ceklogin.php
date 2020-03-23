
<?php
@session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM log WHERE username = '$username'";
$result = mysqli_query($mysqli, $q);
$data = mysqli_fetch_array($result);

if($password == $data['password'])
{
    $_SESSION['kategori'] = $data['kategori'];
    $_SESSION['username'] = $data['username'];
    include "menu.php";
}

else{
    $warning = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><h1>Username / Password Salah";
    echo $warning;
}

?>