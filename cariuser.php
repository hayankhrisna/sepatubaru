
<html>
  <head>
    <title>Kuis</title>
    <link rel="stylesheet" type='text/css' media='all' href="runing.css">
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
  
<body background = "sepatu.jpg">

        <div id="wrap">
                <img src = "sepatukulogo.jpg" width = "200" height="200" alt = "logo"/>
                <div class = "logo">SHOES CORNER<br></div>
            
                
              <br><br>
              <div id="header">
                  <ul id ='menu-utama'>
                        <li>
                            <a href="homeuser.php">Home</a>
                        </li>
                        <li>
                            <a href="tampiluser.php">Daftar Sepatu</a>
                        </li>
                        <!-- <li>
                            <a href="tambah.php">Tambah Furniture</a>
                        </Li> -->
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
                        <FONT COLOR = "black" FACE = "Baskerville Old Face" size = "5">
                            <h5><center><marquee>SELAMAT DATANG DI SHOES CORNER || KEPUASAN ANDA PRIORITAS KAMI || HARGA MURAH KUALITAS MEWAH</marquee></center></h5>
                        </FONT>
        <div id = "cari">
        <form action = "cariuser.php" method = "post">
        <input type = "text" name = "input_cari" placeholder = "Cari Berdasarkan Nama" class = "css-input" style = "width : 250px;"/>
        <input type = "submit" name = "cari" value = "Cari" class = "btn" style = "padding:3px;" margin="6px;" width = "50px;"/>
        </form>
        </thead></div>
    
    <?php
    include "koneksi.php";
	
	$cari= $_POST['input_cari'];
	$q = "SELECT * FROM jual WHERE barang like '%$cari%' ";
	$result = mysqli_query($mysqli, $q);
		echo "<center>";
		echo "<h2> Hasil Pencarian </h2>";
		echo "<h2> DAFTAR SEPATU</h2><br>";
		echo "<table border='10' cellpadding='10' cellspacing='3'>";
			echo "
				<tr bgcolor=''>
                    <td width = '70' height = '50'><center>Id Barang</td>
					<td><center>Nama Barang</td>
					<td><center>Stok</td>
					<td><center>Harga</td>
                    <td><center>Gambar</td>
                    <td colspan = '1'><center> Aksi </br>
					</tr>";
			while ($data = mysqli_fetch_array($result)) {
                ?>
			
				<tr>
					<td><center><?php echo $data['id'];?></td>
                    <td><center><?php echo $data['barang'];?></td>
                    <td><center><?php echo $data['stok'];?></td>
                    <td><center><?php echo $data['harga'];?></td>
                    <td><center><img src = "<?php echo $data['gambar'];?>" width = "200" heaight = "200"></td>
                    <td><center><a href = "beli.php?id=<?php echo $data['id'];?>">Beli</td>


				</tr>
			<?php } ?>
			
        </table>



<div id="footer">
<p>Copyright&copy; 2018 Powered by Shoes Corner</p>
</div>
</div>
</div>
</body>
</html>