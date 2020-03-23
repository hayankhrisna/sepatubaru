<link rel="stylesheet" type='text/css' media='all' href="rungrond.css">
<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
// var_dump($_POST);
// var_dump($_FILES);
// die();
$id = $_POST['id'];
$nama_barang = $_POST['barang'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];
$harga = $_POST['harga'];

$data = mysqli_query($mysqli,"INSERT INTO jual SET id='$id', barang='$nama_barang', stok='$stok', gambar='$gambar', harga = '$harga'") or die ("Data Salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Data Berhasil Disimpan !";
echo "<br><a href='tampilin.php'>Kembali</a>";
echo "<br><a href='tambah.php'>Tambahkan Data Lagi</a>";
} else {
echo "<br><br><br><br><br><br><br><br><br><br><br><br><h1><center>Data Gagal Disimpan !";
echo "<br><a href='tambah.php'>Kembali</a>";
echo "<br><a href='tambah.php'>Tambahkan Data Lagi</a>";
}
}
function tambah($data){
    global $conn;
    $gambar = upload();
    if(!$gambar){
        return false;
    }
    $query = "INSERT INTO jual
    VALUES
    ('','$id', '$nama','$stok', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function upload(){
    $nama_file =$_FILES['gambar']['name'];
    $ukuran_file=$_FILES['gambar']['size'];
    $error =$_FILES['gambar']['error'];
    $tmpfile =$_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo"
        <script>
        alert('Tidak ada gambar')
        </script>
        ";
        return false;
    }
    $jenis_gambar = ['jpg','jpeg','gif','png'];
    $pecah_gambar = ecplode('.',$nama_file);
    $pecah_gambar = strtolower(end($pecah_gambar));
    if(!in_array($pecah_gambar, $jenis_gambar)){
        echo"
        <script>
        alert('yang anda upload bukan file gambar');
        </script>
        ";
        return false;
    }
    if($ukuran_file > 1000000){
        echo"
        <script>
        alert('ukuran gambar terlalu besar');
        </script>
        ";
        return false;
    }
    move_uploadded_file($tmpfile,'image/'.$nama_file);
    return $nama_file;
}

?>