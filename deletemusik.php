<head>
	<title> Delete Kesenian musiik </title>
<?php 
	include "konek.php";

	$delete = mysqli_query($dbcon,"DELETE FROM kesenianmusik WHERE id = '".$_GET['id']."'");

	if ($delete){
	echo "<script>alert('Data Berhasil di Hapus'); window.location = 'tabel.php';</script>";
	} else {
	echo "<script>alert('Gagal di Hapus'); window.location = 'tabel.php';</script>";
	}


?>
</head>