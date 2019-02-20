<!DOCTYPE html>
<html>
<head>
	<title>LOG IN to DM</title>
	    <link rel="stylesheet" href="style/style.css">

</head>
<body style="background-image: url('image/firewatch.jpg')" style="font-family:('FontAwesome')">
<style font-family="FontAwesome";></style>
<center>

<?php
session_start();
	if ($_SESSION) {
	if ($_SESSION['level']=="Admin") 
	{
		header("Location: adminmenu.php");
	}
	if ($_SESSION['level']=="User") 
	{
		header("Location: usermenu.php");
	}
	}
	include('login.php');
?>

    <form class="box" action="" method="post">
    <img src="image/KS.png" height="90px" width="130px">

    <h1>Login to dm</h1>
    <input type="email" name="email" placeholder="email" required/>
    <input type="password" name="password" placeholder="password" required/>
    <label id="label1">Users:</label><select name="level">
                   <option value="">Pilih Pengguna</option>
                   <option value="1">Admin</option>
                   <option value="2">Pengguna</option>
            </select>
     <button type="submit" name="submit">Log Masuk!</button>
     <p id="label1">Not register Yet?</p>
     <b id="label1">Belum berdaftar?</b><br><a href="daftar.php">Daftar di sini</a>

<h3><?php
echo $error;
?></h3>
</form>
</center>
</body>
</html>