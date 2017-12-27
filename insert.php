<?php
	session_start();
	include_once('konek.php');
	
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$password = $_POST['password'];

	$input = mysqli_query($dbcon, "INSERT INTO login (nama, user, pass) VALUES('$nama','$user','$password')");
?>
