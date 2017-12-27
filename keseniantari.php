
<?php 	
	include 'navbar.php';
	include_once 'konek.php';
	$tampil = mysqli_query($dbcon,"SELECT * FROM keseniantari");

?>

<title> Kesenian Tari </title>
<div class="container text-center">
  <p style="text-center;" > <h1>KESENIAN TARI</h1> </p>
  </div>
</br>

<?php while ($data=mysqli_fetch_array($tampil)) { ?>
<form method="POST" action="">
<div class="container text-center">
	<p style="text-align:justify;"> <h2> <?php echo $data['judul'];?></h2> </p>	
  </br>
	<p> <?php echo "<img src='gambar2/".$data['gambar']."' width='500px' height='600px'/>";?></p>
  </div>
  </br>
  <div class="container">
	<p style="text-align:justify;" width="100%"> <?php echo $data['isi'] ?> </p>
  </div>
  </br>
  </br>
  </form>
<?php } ?>
