<?php 
	include 'konek.php';
	$user = $_POST['user'];
	$judul = $_POST['judul'];
	$tulis = $_POST['tulis'];
	
		$input = mysqli_query($dbcon, "UPDATE kesenianmusik set user='$user', judul='$judul', tulis='$isi' where id='$id'") 
		if ($input){
		header("Location: http://localhost/EAD/tabel.php");
			}
		else {
			}
		
	?>
