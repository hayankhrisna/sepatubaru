<?php
include "cek_login.php";
?>

<html>
  <head>
    <title>SHOES CORNER</title>
    <link rel="stylesheet" type='text/css' media='all' href="running.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

      <script>
    $(document).ready(function(){
	$('.slider').bxSlider({
	mode: 'fade',
	slideWidth: 1000,
	auto: true,
	pause: 3000,
	});
});

  </script>
  </head>

<body background = "nike.jpg">

        <div id="wrap">
                <img src = "sepatukulogo.jpg" width = "200" height="200" alt = "logo"/>
                <div class = "logo">SHOES CORNER<br></div>
            

                <div class="slider">
                <div><center><img src="diskon.jpg"width="700" height="400" alt="gambar1" ></center></div>
                <div><center><img src="nikefly.jpg"width="700" height="400" alt="gambar2"></center></div>
                <div><center><img src="samba.jpg"width="700" height="400" alt="gambar1" ></center></div>
                <div><center><img src="converse.jpg"width="700" height="400" alt="gambar2"></center></div>
                </div>

              <br><br>
              <div id="header">
                  <ul id ='menu-utama'>
                        <li>
                            <a href="homeuser.php">Home</a>
                        </li>
                        <li>
                            <a href="tampiluser.php">Beli Sepatu</a>
                        </li>
                        <!-- <li>
                            <a href="tambah.php">Tambah Furniture</a>
                        </Li> -->
                        <li>
                        <a href="printuser.php">Print</a>
                        </li>
                        <li>
                        <a href="logout.php">Log Out</a>
                        </li>
                    </ul>
                    
                    <form>
                            <input type = "text" name = "search" placeholder = "Search..."/>
                        </form> </div>
                        <FONT COLOR = "black" FACE = "Baskerville Old Face" size = "5">
                            <h5><center><marquee>SELAMAT DATANG DI SHOES CORNER || KEPUASAN PELANGGAN ADALAH PRIORITAS KAMI || HARGA MURAH KUALITAS WAH</marquee></center></h5>
                        </FONT> 
                        <tbody>
    <div id = "tabel">
    <table border = "10" cellpadding = "10" cellspacing = "1" width="15%;">
    
    <tr>
        <!-- <td width = "70" height = "50"><center> Id Barang </td> -->
        <td width = "70" height = "50"><center> Nama Barang</td>
        <td><center> Stok </td>
        <td width = "80"><center> Gambar </td>
        <td><center> Harga </td>
        <td colspan = "1"><center> Aksi </th></br>

    </tr>
    <div id = "cari">
    <form action = "cariuser.php" method = "post">
        <input type = "text" name = "input_cari" placeholder = "Cari Berdasarkan Nama" class = "css-input" style = "width : 250px;"/>
        <input type = "submit" name = "cari" value = "Cari" class = "btn" style = "padding:3px;" margin="6px;" width = "50px;"/>
        </form>
        </thead></div>

<tbody>
    <?php
    $data = mysqli_query($mysqli, "SELECT*FROM jual");

    while($show = mysqli_fetch_array($data)){
        ?>
        <tr>
           
            <td><center><?php echo $show['barang'];?></td>
            <td><center><?php echo $show['stok'];?></td>
            <td><center><img src="<?php echo $show['gambar'];?>" width = "200" height = "200"></td>
            <td><center><?php echo $show['harga'];?></td>
            <td><center><a href = "beli.php?id=<?php echo $show['id'];?>">Beli
    
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>

<div id="footer">
<p>Copyright&copy; 2018 Powered by Shoes Corner</p>
</div>
</div>
</div>
</body>
</html>