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

<?php
	session_start();
	include_once('konek.php');
	
	if(isset($_POST['masuk'])){

	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$input = mysqli_query($dbcon, "INSERT INTO login (nama,user,pass) VALUES('$nama','$user','$pass')");
	if($input) {
		echo "<script>alert('Berhasil Membuat Akun');</script>";
		header("Location: http://localhost/EAD/home.php");
			}
		else {
		echo"<script>alert('Username Sudah Ada');</script>";	
			}
	}
?>
<title> Daftar Admin Baru </title>
<body>

<h2>Register Form</h2>

<form method="POST">
  <div class="imgcontainer">
    <img src="https://cdn3.iconfinder.com/data/icons/dev-people/512/user_login-512.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
	
	<label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="nama" required>
  
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit" name="masuk" >Submit</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a <button href="home.php" type="button" class="cancelbtn">Cancel</button> </a>
  </div>
</form>

</body>
