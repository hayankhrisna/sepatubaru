<link rel="stylesheet" type='text/css' media='all' href="rungrond.css">
<?php
include "koneksi.php";

if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center> Data yang dihapus tidak ada</b>";
    }
    else{
        $delete = mysqli_query($mysqli, "DELETE FROM jual WHERE id = '$_GET[id]'") or die ("Mysql Error ".mysqli_error($mysqli));
        if($delete){
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Berhasil Hapus Data<br>";
            echo "<a href = 'tampilin.php'> Kembali</a>";
        }
    }
}
?>