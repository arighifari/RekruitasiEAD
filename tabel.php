<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'navbar.php';
		include 'konek.php';
	?>
	<title>Update dan Delete</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	</br>
	<center> <h1>Postingan Yang Sudah Anda Buat</h1> </center>
	<center> <h4>Kesenian musik</h4> </center>
	</br>
	</br>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Pilih</th>
			</tr>
		</thead>
		<?php $update= mysqli_query($dbcon,"SELECT * FROM kesenianmusik where user='".$_SESSION['sess_user']."'");
		while ($data=mysqli_fetch_array($update)) { ?>
		<tbody>
			<tr>
				<td> <?php echo$data['id'];?> </td>
				<td> <?php echo$data['judul'];?> </td>
				<td> <a href="deletemusik.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="return confirm('Anda Mau Menghapus Data <?php echo $data['judul']; ?> ?');" value="Hapus"></a> | 
					 <a href="updatemusik.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="return confirm('Anda Mau Merubah Data <?php echo $data['judul']; ?> ?');" value="Update"></a> </td>
			</tr>
		</tbody>
		<?php } ?>
	</table>

	</br>
	<center> <h1>Postingan Yang Sudah Anda Buat</h1> </center>
	<center> <h4>Kesenian Tari</h4> </center>
	</br>
	</br>	
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Pilih</th>
			</tr>
		</thead>
		<?php $update= mysqli_query($dbcon,"SELECT * FROM keseniantari where user='".$_SESSION['sess_user']."'");
		while ($data=mysqli_fetch_array($update)) { ?>
		<tbody>
			<tr>
				<td> <?php echo$data['id'];?> </td>
				<td> <?php echo$data['judul'];?> </td>
				<td> <a href="deletetari.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="return confirm('Anda Mau Menghapus Data <?php echo $data['judul']; ?> ?');" value="Hapus"></a> | 
					 <a href="updatetari.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="return confirm('Anda Mau Merubah Data <?php echo $data['judul']; ?> ?');" value="Update"></a> </td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</body>
</html>