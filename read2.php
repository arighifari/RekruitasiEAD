<?php 
include_once "konek.php"; 

$tampil = mysqli_query($dbcon,"SELECT * FROM kesenianmusik");

?>

<?php while ($data=mysqli_fetch_array($tampil)) { ?>
<div class="container">
  <p style="text-align:justify;"> <h2> <?php echo $data['judul'];?></h2> </p> 
  <p style="text-center:justify;"> <?php echo "<img src='gambar/".$data['gambar']."' width='500px' height='400px'/>";?></p>
  <p style="text-align:justify;"> <?php echo $data['isi'];?> </p>
  </div>
<?php } ?>
