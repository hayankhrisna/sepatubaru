<?php
@session_start();

if(!isset($_SESSION['username']))
{
    header("location:/.index.php");
}

include "koneksi.php";
?>

<html>
<head>
<title>Tampil</title>
</head>
<body>
    <center>
    <p> DAFTAR DATA FURNITURE </p>
    <a href ="tambah.php"> Tambah Data Barang</a>
    <a href = "print.php"> Print</a>
    <a href = "logout.php"> Log Out</a>
    <table width = "370" border = "1">
    <thead>
    </center>
    
    <table border = "10" cellpadding = "10" cellspacing = "1">
    
    <tr>
        <td> Id Barang </td>
        <td> Nama Barang</td>
        <td> Stok </td>
        <td> Gambar </td>
        <td> Harga </td>
        <td colspan = "2"> Aksi </th></br>

    </tr>

    <form action = "cari.php" method = "post">
        <input type = "text" name = "input_cari" placeholder = "Cari Berdasarkan Nama" class = "css-input" style = "width : 250px;"/>
        <input type = "submit" name = "cari" value = "Cari" class = "btn" style = "padding:3px;" margin="6px;" width = "50px;"/>
        </form>
        </thead>

<tbody>
    <?php
    $data = mysqli_query($mysqli, "SELECT*FROM jual");

    while($show = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $show['id'];?></td>
            <td><?php echo $show['barang'];?></td>
            <td><?php echo $show['stok'];?></td>
            <td><img src="<?php echo $show['gambar'];?>" width = "200" height = "200"></td>
            <td><?php echo $show['harga'];?></td>
            <td><a href = "update.php?id=<?php echo $show['id'];?>">edit||<a href = "deletesql.php?id=<?php echo $show['id'];?>"onclick="return confirm('Apakah anda ingin Menghapus?')">delete</a></a></td>
    
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>

</body>
</html>