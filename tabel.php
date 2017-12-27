<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<script language='JavaScript'>
var txt=" FlashCulture - Your Posts ";
var speed=600;var fress=null;function move() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
fress=setTimeout("move()",speed);}move();
</script>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
	<?php 
		include 'navbar.php';
		include 'konek.php';
	?>

<body>
	
	
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
 <div class="carousel-item active">
<div class="jumbotron text-center">
<h2>Your Posts</h2> </br>
	<img src = "http://goadventurelombok.com/wp-content/uploads/2016/09/NTB_Gendang-Beleq_zps7d14be2b.png" style="width:300px;height:200px;">
	 </br></br><h3>Kesenian <b>Musik</b></h3></div>
	<div class="container text-center">

	 	<table class="table" border="3">
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
</div>
	 
	 
	 <div class="col-lg-12"><center>
			  Copyright &copy; Recruitment EAD 2017
			  </br>           </center> 
		   </div>


</div>
<div class="carousel-item">
<div class="jumbotron text-center">
<h2>Your Posts</h2> </br>
	<img src = "http://jogjabelajar.jogjaprov.go.id/jbbudaya/upload/media/Tari%20Tradisional.png.png" style="width:200px;height:200px;">
	 </br>
	 </br><h3>Kesenian <b>Tari</b></h3></div>
<div class="container text-center">

<table class="table" border="3">
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
	</div>
<div class="col-lg-12"><center>
			  Copyright &copy; Recruitment EAD 2017
			  </br></center> 
		   </div>
	</div>

	<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
	</div>

	</div>
		
</body>
</html>