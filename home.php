<!DOCTYPE html>
<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .carousel{
	  width: 100%;
	  height: 80%;
	  margin: auto;
  }
   /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .carousel{
	  width: 100%;
	  height: 80%;
	  margin: auto;
  }
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
  
<?php
	include 'navbar.php';
	?>
  <title> Menu Awal </title>
<body>
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.musikae.com/wp-content/uploads/2017/09/Fakta-Unik-Tentang-Musik-Angklung-1024x470.jpg" alt="Anklung" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Kesenian Musik</h3>
		</a>
      </div>   
    </div>
    <div class="carousel-item">
		<a href = "sejarah.php">
      <img src="https://www.tripjalanjalan.com/wp-content/uploads/2017/05/gedung-sate.jpg" alt="Tentang Bandung" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Tentang Bandung</h3>
		</a>
      </div>   
    </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>