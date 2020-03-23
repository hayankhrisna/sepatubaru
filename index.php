<?php
@session_start();
session_destroy();

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link rel="stylesheet" type='text/css' media='all' href="login.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <style> /* css untuk mengatur tampilan login supaya berada di tengah */
		#index{
   			margin-top: 100px;
			margin-left: 380px;
		}
	</style> 
</head>

<body background = "nike.jpg">
    <nav class = "navbar navbar-default">
        <div class = "container">
            <div class="card col-sm-6"  style="background-color: #dc3545;"> <!-- membuat tabel latar -->
            <div class="card-body"> <!-- membuat tabel latar -->
			
        <center>        
        <div class = "logo">
        <img src = "sepatukulogo.jpg" width = "100" height="100" alt = "logo"/>
        </div> 
</center>

    <center>
    <br><br>
    <div class = "log">Log In<br></div>
    <div class = "kolom">
    <FONT COLOR = "black" FACE = "Baskerville Old Face">
    <form method = "post" action = "ceklogin.php">
    <table border = "0" align = "center" cellpadding = "5" cellsapcing = "8">
    
    <tr bgcolor = "">
    Username<br>
    <input name = "username" type = "text" placeholder = "Masukkan Username" required><br>
    </tr>
    Password<br>
    <input name="password" type="password" placeholder = "Masukkan Password" required><br>
    </tr></div>

    <input name = "submit" type="submit" value = "login">

    <div class = "regis">
        <br>
        Belum punya akun?
    <a href = "register.php"> REGISTRASI </a>
    </div>
    </FONT>
    </table>
    </form>
    </center>
</body>
</html>