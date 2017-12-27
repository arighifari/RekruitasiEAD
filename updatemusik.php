<!DOCTYPE html>
<html lang="en">
<head>
  <title> Update Kesenian Musik </title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
  
  <?php
	include_once('konek.php');
	include_once('navbar.php');
	$update1= mysqli_query($dbcon,"SELECT * FROM kesenianmusik where id = '".$_GET['id']."'");
	?>	
	<?php	
	while ($data=mysqli_fetch_array($update1)){ ?>
  <body>
<div class="container" >
	<h2>Update Artikel</h2>	
	</br>
  <form method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div> 
		<h4>Pilih Kategori</h4>
		<label class="radio-inline">
			<input type="radio" name="pilih1">Kesenian Musik
		</label>
	</div>
    <div class="form-group">
		<label for="user">Username:</label>
		<input type="text" class="form-control" id="user" placeholder="Masukkan Username" name="user" value="<?php echo $data['user'];?>"/></input>
    </div>
	<div class="form-group"> 
		<label for="judul">Judul Artikel:</label>
		<input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="<?php echo $data['judul'];?>"/></input>
    </div>
	<div>
		<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gambar" required value="<?php echo $data['gambar'];?>"/>  </td>
	</div>
	</br>
	<div class="form-group">
		<label for="text">Isi Artikel:</label>
		<textarea class="form-control" rows="10" id="text" name="tulis"><?php echo $data['isi'];?></textarea>
    </div>
		<button type="submit" class="btn btn-primary" name="submit">Update</button>
  </form>	
</div>
	<?php 
	} ?>

	<?php 
		if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$judul = $_POST['judul'];
	$tulis = $_POST['tulis'];
	$id   = $_GET['id'];
	$fileName = $_FILES['gambar']['name'];
	
		$input= mysqli_query($dbcon, "UPDATE kesenianmusik SET user='$user', judul='$judul', isi='$tulis', gambar='$fileName' WHERE id='$id'");
		if($input){
			move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar2/".$_FILES['gambar']['name']);
			header("Location: http://localhost/EAD/tabel.php");
			}
		else {
			}
		}
	?>

</body>
</html>
