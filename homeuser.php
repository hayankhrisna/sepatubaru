<?php
include "cek_login.php";
?>

<html>
  <head>
    <title>SHOES CORNER</title>
    <link rel="stylesheet" type='text/css' media='all' href="runhome.css">
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

    <br><div class="slider">
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
       
      <div id = "daftar artikel">NEWS HARI INI
            <div class = "artikel"> <br/>
                <img src = "pum.jpg"  width = "250" height="250"alt = "Logo Kampus"/>
                <h1>Puma Run BTS</h1>
                <b>18 Juni 2018</b><b>Views : 3.487.497</b>
                <p>PUMA x BTS<br>
                    Sepatu yang masuk dalam lini PUMA x BTS Court Star ini hanya hadir dalam satu model berwarna putih dengan aksen hitam. Meski memiliki desain yang clean dan simple, namun para member BTS secara pribadi membuat desain yang bermakna.
                </p>
                
            </div>
        

            <div class = "artikel"><br/>
                <img src = "yeezy.jpg" width = "250" height="250" alt = "Logo Kampus"/>
                <h1>ADIDAS x KANYE</h1>
                <b>18 Juni 2018</b><b>Views : 3.487.497</b>
                <p>Adidas Yeezy 2018<br>
                   The Yeezy Mafia just reported seven drops for the upcoming September, October, and November months, and this release slate is heavy on the restocks as the Cream Yeezy Boost 350 v2, the Yeezy Boost 700, and the Semi-Frozen Yellow and Zebra v2s
                </p>
            </div>

            <div class = "artikel"><br/>
                <img src = "travis.jpg"  width = "250" height="250" alt = "Logo Kampus"/>
                <h1>NIKE x TRAVIS</h1>
                <b>18 Juni 2018</b><b>Views : 3.487.497</b>
                <p>Nike Air Force 1<br>
                    Introduced in 1982, the Air Force 1 redefined basketball footwear from the hardwood to the blacktop.
                </p>
               
            </div>
        </div>
        <br><br>
        <div id="sidebar">
            <img src = "sepatukulogo.jpg" width = "50" height="50"alt = "Shoes"/>
            
            <font FACE = "">
            <ul>     Shoes Corner adalah Online Shop yang menjual sepatu original dengan harga yang relatif lebih murah. Toko kami telah berdiri sejak tahun 2011. Motto kami "Harga Murah Kualitas Wah. Pelanggan adalah Kawan"
            </ul></font>
    </div>


  <div id="footer">
    <p>Copyright&copy; 2018 Powered by Shoes Corner</p>
</div>
</div>
</body>
</html>