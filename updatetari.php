<!DOCTYPE html>
<html lang="en">
<head>
  <title> Update Kesenian Tari </title>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
  
  <?php
	include_once('konek.php');
	include_once('navbar.php');
	
	if(isset($_POST['masuk'])){
		if(isset($_POST['pilih1'])){	
	$user = $_POST['user'];
	$judul = $_POST['judul'];
	$tulis = $_POST['tulis'];
	$fileName = $_FILES['gambar']['name'];	
	
	$input = mysqli_query($dbcon, "INSERT INTO kesenianmusik (user,judul,gambar,isi) VALUES('$user','$judul','$fileName','$tulis')");
	if($input) {
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
		header("Location: http://localhost/EAD/posting.php");
			}
		else {
			}
		}
		else if(isset($_POST['pilih2'])){	
	$user = $_POST['user'];
	$judul = $_POST['judul'];
	$tulis = $_POST['tulis'];
	$fileName = $_FILES['gambar']['name'];	
	
	$input = mysqli_query($dbcon, "INSERT INTO keseniantari (user,judul,gambar,isi) VALUES('$user','$judul','$fileName','$tulis')");
	if($input) {
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar2/".$_FILES['gambar']['name']);
		header("Location: http://localhost/EAD/posting.php");
			}
		else {
			}
		}
		
	}
?>
<title> Posting </title>
  <body>
<div class="container">
	<h2>Tulis Artikel</h2>	
	</br>
  <form method="POST" enctype="multipart/form-data">
	<div> 
		<h4>Pilih Kategori</h4>
		<label class="radio-inline">
			<input type="radio" name="pilih1">Kesenian Musik
		</label>
		<label class="radio-inline">
			<input type="radio" name="pilih2">Kesenian Tari
		</label>
	</div>
    <div class="form-group">
		<label for="user">Username:</label>
		<input class="form-control" id="user" placeholder="Masukkan Username" name="user">
    </div>
	<div class="form-group">
		<label for="judul">Judul Artikel:</label>
		<input class="form-control" id="judul" placeholder="Masukkan Judul" name="judul">
    </div>
	<div>
		<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gambar" required />
	</div>
	</br>
	<div class="form-group">
		<label for="text">Isi Artikel:</label>
		<textarea class="form-control" rows="10" id="text" name="tulis" ></textarea>
    </div>
		<button type="submit" class="btn btn-primary" name="masuk">Submit</button>
  </form>
</div>

</body>
</html>
