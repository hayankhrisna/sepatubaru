<?php
include "koneksi.php";
$data = mysqli_query($mysqli, "SELECT * FROM jual WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data);
?>

<html>
<head>
<title>Update</title>
<link rel="stylesheet" type='text/css' media='all' href="rungrond.css">

</head>
<body background = "sepatu.jpg">
    <form action = "updatebeli.php" method = "post">
        
    <center><h1><p><br><br><br><br><br><br>PEMBELIAN BARANG</h1></p>
    <p>
        <table>
            <tr><td>Id Barang</td><td><input type="text" name="id" value="<?php echo $_GET['id'];?>"></td></tr>
            <tr><td>Nama Barang</td><td> <input type="text" name="barang" value="<?php echo $datashow['barang']; ?>"></td></tr>
            <tr><td>Jumlah</td><td> <input type="text" name="stok" value="<?php echo $datashow['stok']; ?>"></td></tr>
            <tr><td>Harga</td><td> <input type="text" name="harga" value="<?php echo $datashow['harga']; ?>"></td></tr>
            <tr><td>Jumlah Pembelian</td><td> <input type="text" name="tobel" value=""></td></tr>
            <tr><td><input type="submit" name="update" value="PROSES"></td></tr>
			</table>
        </form>
        <a href = "tampiluser.php">Back</a>
        </center>
    </body>
</html>