<?php 
session_start();
if(!isset($_SESSION['id_admin'])){
	header("location:html");
}
?>
<html>
<title>Anda berhasil login</title>
Selamat, anda berhasil login.
<br>
<a href="logout.php">Logout</a>
</html>