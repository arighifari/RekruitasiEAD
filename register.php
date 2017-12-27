<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0% 12px 25%;
	width: 50%;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
  </head>
  
  <title> FlashCulture - Register</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<?php
	include_once'navbar.php';
	include_once('konek.php');
	
	if(isset($_POST['masuk'])){

	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$input = mysqli_query($dbcon, "INSERT INTO login (nama,user,pass) VALUES('$nama','$user','$pass')");
	if($input) {
		echo "<script>alert('Berhasil Membuat Akun');</script>";
		
			}
		else {
		echo"<script>alert('Username Sudah Ada');</script>";	
			}
	}
?>

<body>

  <div class="jumbotron">
  <form method="POST">

  <center><br></br><h2>Register Form</h2>

 </center>
  <div class="imgcontainer">
  	<img src = "https://cdn3.iconfinder.com/data/icons/dev-people/512/user_login-512.png" style="width:200px;height:200px;">

  </div>

  <div class="container">
	
	<label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="nama" required>
  
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <br> </br>   
    <button type="submit" name="masuk" >Submit</button>
<br></br>
<center>Copyright &copy; Recruitment EAD 2017

          </center>
 </div></form>
</div>



</body>
