<?php
include "koneksi.php";
?>
<html>
<head>
<title>Tampil</title>
</head>
<body>
<p>DAFTAR DATA BAJU</p>
<a href="print.php">Print||</a>
<a href="logout.php">LogOut</a>
<table width="370" border="1">
<thead>
<tr>
<td width="50">id baju</td>
<td width="133">Nama</td>

</tr>
</thead>
<tbody>
<?php 
$data = mysqli_query($mysqli,"SELECT * FROM jual");

while ($show = mysqli_fetch_array($data)) {
?>
<tr>
<td><?php echo $show['id'];?></td> 
<td><?php echo $show['baju'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</body>
</html>