<!DOCTYPE html>
<html>
<head>
	<title>SISTEM DM (User)</title>
	<link rel="stylesheet" href="style/styleusermenu.css">

</head>
<body style="background-image: url('image/firewatch.jpg')" style="font-family:('FontAwesome')">
<center>
<?php
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}
include('cek_pengguna.php');
?>

<!-- SENARAI MENU ADMIN -->
<br>
<br>
<div class="container">
<span class="text1">SELAMAT DATANG KE</span>
<span class="text2"><b>SISTEM DEWAN MAKAN USER</b></span>
</div>
<form class="box">
<img src="image/KS.png" height="90px" width="130px">

<a href="userview1.php"><input type="submit" name="submit" value="JADUAL DM"></a>

<a href="report.php"><input type="submit" name="submit" value="REPORT"></a>

<a id="c3" href="logout.php"><input type="submit" name="submit" value="LOGOUT"></a>
</form>
</center>
</body>
</html>