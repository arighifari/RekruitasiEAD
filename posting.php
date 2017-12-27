<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
<title> FlashCulture - Posting</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
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
		echo "<script>alert('Berhasil Membuat Postingan'); window.location = 'posting.php';</script>";
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
			}
		else {
			}
		}
		else if(isset($_POST['pilih2'])){	
	$user = $_POST['user'];
	$judul = $_POST['judul'];
	$tulis = mysqli_real_escape_string($dbcon,nl2br($_POST['tulis']));
	$fileName = $_FILES['gambar']['name'];	
	
	$input = mysqli_query($dbcon, "INSERT INTO keseniantari (user,judul,gambar,isi) VALUES('$user','$judul','$fileName','$tulis')");
	if($input) {
		echo "<script>alert('Berhasil Membuat Postingan'); window.location = 'posting.php';</script>";
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar2/".$_FILES['gambar']['name']);
			}
		else {
			}
		}
		
	}
?>
<body>

<div class="jumbotron">
<center>	<h1>Tulis Artikel</h1>	
	
	<img src = "https://fifocapital.co.uk/wp-content/uploads/2017/04/Icon_WriteArticles.png" style="width:200px;height:200px;">
<br></br>
  <form method="POST" enctype="multipart/form-data">
	<div>
		<h3>Pilih Kategori</h3>
		
		<label class="radio-inline">
			<input type="radio" name="pilih1"> Kesenian Musik
		</label>
		<label class="radio-inline">
			<input type="radio" name="pilih2"> Kesenian Tari
		</label>
	</div>
	</center>
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
  
<center>Copyright &copy; Recruitment EAD 2017

          </center>
  </form>
</div>
		   
</body>
</html>
