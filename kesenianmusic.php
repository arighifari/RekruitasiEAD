<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script language='JavaScript'>
var txt=" FlashCulture - Kesenian Musik ";

var speed=600;var fress=null;function move() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
fress=setTimeout("move()",speed);}move();
</script>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>
<?php 
	include_once 'konek.php'; 
	include_once 'navbar.php';

	$tampil = mysqli_query($dbcon,"SELECT * FROM kesenianmusik");

?>


  
<div class="jumbotron text-center">

	<img src = "http://goadventurelombok.com/wp-content/uploads/2016/09/NTB_Gendang-Beleq_zps7d14be2b.png" style="width:300px;height:200px;">
	 </br></br><h3>Kesenian <b>Musik</b></h3></div>

<body>
	<?php while ($data=mysqli_fetch_array($tampil)) { ?>
<form method="POST" action="">
<div class="container text-center">
	<p style="text-align:justify;"> <h2> <?php echo $data['judul'];?></h2> </p>	
  </br>
	<p> <?php echo "<img src='gambar/".$data['gambar']."' width='500px' height='600px'/>";?></p>
  </div>
  </br>
  <div class="container">
	<p style="text-align:justify;" width="100%"> <?php echo $data['isi'] ?> </p>
  </div>
  <center>
	<img src = "line.png" style="height:100px;width:700px">
</center>
  </form>
<?php } ?>
</body>
