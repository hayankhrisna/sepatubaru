<?php
include "cek_login.php";
?>
<html>
  <head>
    <title>Kuis</title>
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
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="tampilin.php">Daftar Sepatu</a>
                        </li>
                        <li>
                            <a href="tambah.php">Tambah Sepatu</a>
                        </Li>
                        <li>
                        <a href="print.php">Print</a>
                        </li>
                        <li>
                            <a href="logout.php">Log Out</a>
                            </li>
                    </ul>

                    <form>
                            <input type = "text" name = "search" placeholder = "Search..."/>
                        </form> </div>
                            
                        <tbody>

<form action = "tambahsql.php" method = "POST">
<table width = "444" border = "1" align = "center" style="margin-left:28%;">

    <center>
    <h2>Data Barang</h2></center>
    
    <form action = "" method = "post" enctype = "multipart/form-data">
    <tr>
    <th colspan = "2" scope = "row"> Tambah Data Barang</th>
    </tr>
    
    <tr>
    <th width = "109"scope = "row">Id Barang</th>
    <td width = "300">
    <input type = "text" name = "id" id="textfield" required></td>
    </tr>
    <tr>
    <th scope = "row">Nama Barang</th>
    <td><input type = "text" name = "barang"required></td>
    </tr>
    <tr>
    <th scope = "row">Stok</th>
    <td><input type = "text" name = "stok"required></td>
    </tr>
    <tr>
    <th scope = "row">Harga</th>
    <td><input type = "text" name = "harga" required></td>
    </tr>
    <tr>
    <th scope = "row">Gambar</th>
    <td><input type = "file" name = "gambar"required></td>
    </tr>
    <tr>
    <th colspan = "2" scope = "row">
    <input type = "submit" name = "simpan" id = "simpan" value = "Simpan"/>
    <input type = "reset" name = "reset" id = "reset" value = "Batal"/></th>
    </tr>
</div>
    </table>
    </from>

<div id="footer">
<p>Copyright&copy; 2018 Powered by Shoes Corner</p>
</div>
</div>
</div>
</body>
</html>