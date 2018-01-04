<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<?php
	session_start();
if (isset($_POST['submit'])) {	
	if(!empty($_POST['user']) && !empty($_POST['password'])) {
		$user=$_POST['user'];
		$password=$_POST['password'];
		
		$conn = mysqli_connect('localhost','root','','kebudayaan') or die(mysqli_error($conn));
		$selectdb = mysqli_select_db($conn,'kebudayaan') or die("Tidak Bisa Terhubung ke Database");
		
		$loginquery = mysqli_query($conn,"SELECT * FROM login WHERE user='".$user."' AND pass='".$password."'");
		$numrow = mysqli_num_rows($loginquery);
		
		if($numrow!=0) {
			while($row=mysqli_fetch_assoc($loginquery)) {
				$dbuser = $row['user'];
				$dbpass = $row['pass'];
			}
			if($user==$dbuser && $password==$dbpass) {
				$_SESSION['sess_user']=$user;
				header("Location: http://localhost/EAD/home.php");
			}
		} else {			
				echo"<script>alert('Username dan Password Salah');</script>";
		}
	} else {	
	}
}
?>

  <style>
 #login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
} 
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}#login-dp{
	background-color: white;
	color: #fff;
}
#login-dp .bottom{
	background-color: white;
	border-top:0 none;
}
  </style>
</head>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home.php">Home</a>
 <ul class="navbar-nav"> 
 <a class="nav-link" href="sejarah.php">Sejarah Kota Bandung</a>
 
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Kesenian
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="keseniantari.php">Kesenian Tari</a>
        <a class="dropdown-item" href="kesenianmusic.php">Kesenian Musik</a>
      </div>
    </li>
  
  <?php 
  if (!isset($_SESSION['sess_user'])) { ?>
		 <li class="nav-item dropdown">
		 
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								 <form class="form" role="form" method="post" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputUser">Username</label>
											 <input type="user" class="form-control" id="exampleInputUser" placeholder="Username" name="user" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" required>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block" name = "submit" >Sign in </button>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								<a href="register.php"><b>Daftar</b></a>
							</div>
					 </div>			
					</li>
					</ul>
					</li> 
		<?php }
		else if (isset($_SESSION['sess_user'])) { ?>
		<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Menu
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="posting.php">Posting</a>
        <a class="dropdown-item" href="tabel.php">Update dan Delete Posting</a>
		<a class="dropdown-item" href="logout.php">LOGOUT</a> 
      </div>
    </li>
			<div class="navbar-text"> SELAMAT DATANG, <?=$_SESSION['sess_user'];?> </div>
			<?php } ?>
</ul>	
	</nav>