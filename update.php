<?php
include "koneksi.php";
$data = mysqli_query($mysqli, "SELECT * FROM jual WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data);
?>

<html>
<head>
<link rel="stylesheet" type='text/css' media='all' href="apdet.css">
<title>Update</title>

</head>
<body background = "sepatu.jpg">
    <form action = "updatesql.php" method = "post">

    <center><br>
    <br><br><br><br><br><br><br><br><br>
    <p><h1> UPDATE DATA BARANG</h1></p>
    <p><br><br>
        <table>
            <tr><td>Id Barang </td><td><input type="text" name="id" value="<?php echo $_GET['id'];?>"></td></tr>
            <tr><td>Nama Barang</td><td> <input type="text" name="barang" value="<?php echo $datashow['barang']; ?>"></td></tr>
            <tr><td>Stok</td><td> <input type="text" name="stok" value="<?php echo $datashow['stok']; ?>"></td></tr>
            <tr><td>Harga</td><td> <input type="text" name="harga" value="<?php echo $datashow['harga']; ?>"></td></tr>
            <tr><td>Gambar</td>
            <td><input type = "file" name = "gambar" value="<?php echo $datashow['gambar'];?>"></td></tr>
            <tr><td><input type="submit" name="update" value="EDIT"></td></tr>
			</table>
        </form>
        <a href = "tampilin.php">Back</a>
</center>
    </body>
</html>