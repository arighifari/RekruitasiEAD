<!DOCTYPE html>
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
				header("Location: http://localhost/EAD/test.php");
			}
		} else {			
				echo"<script>alert('Username dan Password Salah');</script>";
		}
	} else {	
	}
}
?>
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
  <title> FlashCulture </title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="test.php">Home</a>
  <ul class="navbar-nav">
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Kesenian
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Kesenian Tari</a>
        <a class="dropdown-item" href="#">Kesenian Musik</a>
      </div>
    </li>
  </ul>
  <?php 
  if (!isset($_SESSION['sess_user'])) { ?>
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
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
			<ul class="navbar-nav">
			
			<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Menu
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="posting.php">Posting</a>
        <a class="dropdown-item" href="#">Update Posting</a>
        <a class="dropdown-item" href="#">Delete Posting</a>
		<a class="dropdown-item" href="logout.php">LOGOUT</a> 
      </div>
    </li><div class="navbar-text"> SELAMAT DATANG, <?=$_SESSION['sess_user'];?> </div>
			</ul> 
		<?php } ?>
</nav>
 
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">

 <div class="carousel-item active">
<div class="jumbotron text-center">
<h1><b>Flash</b>Culture</h1>
<br></br>
<img src = "https://globalstudies.umbc.edu/files/2014/11/Main-CGS.png" style="width:200px;height:200px;">

<br></br>

<h3><i>"..we help you not to forget culture"</i></h3>

 </div>  <div class="container">
 <div class="col-lg-12"><center>
 
			  Copyright &copy; Recruitment EAD 2017
        </center> </div>
 </div></div>
 <div class="carousel-item">
<div class="jumbotron text-center">
<h2>Introduction about Culture</h2>
 <iframe width="900" height="450" src="https://www.youtube.com/embed/fL5WzpuvXfY?autoplay=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
 </div>
<div class="container">
<h1>Apa itu Budaya?</h1>
<center>
<img src = "http://www.welcomeurope.com/images/factoftheday/eb5a7cf40c0705f0b12bcf07ba14cc127c6e6b92.jpg" style="width:200px;height:150px;">
</center>
<p style="text-align:justify;">
<h1></h1>
Budaya adalah suatu cara hidup yang berkembang, dan dimiliki bersama oleh sebuah kelompok orang, dan diwariskan dari generasi ke generasi. Budaya terbentuk dari banyak unsur yang rumit, termasuk sistem agama dan politik, adat istiadat, bahasa, perkakas, pakaian, bangunan, dan karya seni. Bahasa, sebagaimana juga budaya, merupakan bagian tak terpisahkan dari diri manusia sehingga banyak orang cenderung menganggapnya diwariskan secara genetis. Ketika seseorang berusaha berkomunikasi dengan orang-orang yang berbeda budaya, dan menyesuaikan perbedaan-perbedaannya, membuktikan bahwa budaya itu dipelajari.
Budaya adalah suatu pola hidup menyeluruh. Budaya bersifat kompleks, abstrak, dan luas. Banyak aspek budaya turut menentukan perilaku komunikatif. Unsur-unsur sosio-budaya ini tersebar, dan meliputi banyak kegiatan sosial manusia.
</p>

<h3>Pentingnya Kebudayaan..</h3>
<center>
<img src = "https://globalstudies.umbc.edu/files/2014/11/Main-CGS.png" style="width:200px;height:200px;">
</center>
<p style="text-align:justify;">
<h1></h1>
Beberapa alasan mengapa orang mengalami kesulitan ketika berkomunikasi dengan orang dari budaya lain terlihat dalam definisi budaya: Budaya adalah suatu perangkat rumit nilai-nilai yang dipolarisasikan oleh suatu citra yang mengandung pandangan atas keistimewaannya sendiri."Citra yang memaksa" itu mengambil bentuk-bentuk berbeda dalam berbagai budaya seperti "individualisme kasar" di Amerika, "keselarasan individu dengan alam" di Jepang dan "kepatuhan kolektif" di Tiongkok.
Citra budaya yang bersifat memaksa tersebut membekali anggota-anggotanya dengan pedoman mengenai perilaku yang layak dan menetapkan dunia makna dan nilai logis yang dapat dipinjam anggota-anggotanya yang paling bersahaja untuk memperoleh rasa bermartabat dan pertalian dengan hidup mereka.
Dengan demikian, budayalah yang menyediakan suatu kerangka yang koheren untuk mengorganisasikan aktivitas seseorang dan memungkinkannya meramalkan perilaku orang lain.
</p>
<div class="col-lg-12"><center>
			  Copyright &copy; Recruitment EAD 2017
          <h1></h1> </center> </div>
		   </div>
 </div>



<div class="carousel-item">
<div class="jumbotron text-center">
<h1>Kebudayaan Jawa Barat</h1>
	<img src = "https://www.tripjalanjalan.com/wp-content/uploads/2017/05/gedung-sate.jpg" style="width:900px;height:450px;">
	</div>
<div class="container">
  <h1>Kota Bandung</h1>
  <p style="text-align:justify;">KATA “Bandung” berasal dari kata bendung atau bendungan karena terbendungnya sungai Citarum oleh lava Gunung Tangkuban Perahu yang kemudian membentuk telaga. Menurut mitos, nama “Bandung” diambil dari sebuah kendaraan air yang terdiri dari dua perahu yang diikat berdampingan yang disebut perahu bandung yang digunakan oleh Bupati Bandung, R.A. Wiranatakusumah II, untuk melayari Ci Tarum (Sunda: Ci = Cai = Air = Sungai) dalam mencari tempat kedudukan kabupaten yang baru untuk menggantikan ibukota yang lama di Dayeuhkolot.Kota Bandung merupakan kota metropolitan terbesar di wilayah Jawa Barat yang menjadi ibu kota Provinsi Jawa Barat. Kota Bandung juga merupakan kota terbesar ketiga di Indonesia setelah Jakarta dan Surabaya. </p> 
  <h3>Julukan Kota Kembang </h3>
  <p style="text-align:justify;">Kota Bandung dijuluki Kota Kembang. Dalam buku Wajah Bandoeng Tempo Doeloe, sejarahwan Haryoto Kunto menulis, kembang yang dimaksud ialah Kembang Dayang yang dalam bahasa Sunda sama dengan WTS (Wanita Tunasusila) atau PSK (Pekerja Seks Komersial). Istilah kota kembang berasal dari peristiwa yang terjadi tahun 1896 saat Bestuur van de Vereninging van Suikerplanters (Pengurus Besar Perkumpulan Pengusaha Perkebunan Gula) yang berkedudukan di Surabaya memilih Bandung sebagai tempat penyelenggaraan kongresnya yang pertama. Sebagai panitia kongres, Tuan Jacobmendapat masukan dari Meneer Schenk agar menyediakan ‘kembang-kembang’ berupa "noni cantik" Indo-Belanda dari wilayah perkebunanPasirmalang untuk menghibur para pengusaha gula tersebut. Setelah kongres, para tamu menyatakan sangat puas. Kongres dikatakan sukses besar. Dari mulut peserta kongres itu kemudian keluar istilah dalam bahasa Belanda De Bloem der Indische Bergsteden atau ‘bunganya’ kota pegunungan di Hindia Belanda. Dari situ muncul julukan kota Bandung sebagai kota kembang.</p>
  <h3>Julukan Parijs van Java</h3>
  <p style="text-align:justify;">Dalam buku Otobiografi Entin Supriatin, Deritapun Dapat Ditaklukan. Mitra Media Pustaka. Bandung (2006) disebutkan, Bandung dikenal dengan sebutan Parijs Van Java atau Paris-nya Pulau Jawa. Mungkin mengira istilah itu muncul dari keindahan kota Bandung sama dengan keindahan kota Paris. Padahal bukan itu. Sebenarnya, istilah Parijs van Java muncul karena pada waktu itu di Jalan Braga terdapat banyak toko yang menjual barang-barang produksi Paris, terutama toko pakaian. Toko yang terkenal diantaranya adalah toko mode dan pakaian, Modemagazinj ‘au bon Marche’ yang menjual gaun wanita mode Paris. Ada juga restoran yang makanan khas Paris Maison Bogerijen yang menjadi tempat santap para pejabat dan pengusaha Hindia Belanda atau Eropa. Dari situlah muncul julukan lain bagi kota Bandung sebagai Parijs van Java.</p>
  <h4>Julukan Kota Belanja</h4>
  <p style="text-align:justify;">Selain itu, kota Bandung juga dikenal sebagai kota belanja, dengan mall dan factory outlet (FO) yang banyak tersebar di kota ini. Tahun 2007, British Council menjadikan kota Bandung sebagai pilot project kota terkreatif se-Asia Timur. Saat ini kota Bandung merupakan salah satu kota tujuan utama pariwisata dan pendidikan.</p>
  <h3>Kilas Sejarah Kota Bandung</h3>
  <p style="text-align:justify;"> </p>Tahun 1896 Bandung belum menjadi kota tetapi hanya “kampung”. Penduduknya yang terdata 29.382 orang, sekitar 1.250 orang berkebangsaan Eropa, mayoritas orang Belanda. Saat itu Bandung hanyalah desa udik yang belepotan lumpur, bahkan Jalan Braga yang kemudian melegenda di Bandung masih berupa jalan tanah becek bertahi sapi dan kuda</p>
  <div class="container">
  <div class="jumbotron">     
    <p>Kota Bandung mulai dijadikan sebagai kawasan pemukiman sejak pemerintahan kolonial Hindia-Belanda, melalui Gubernur Jenderalnya waktu itu Herman Willem Daendels, mengeluarkan surat keputusan tanggal 25 September 1810 tentang pembangunan sarana dan prasarana untuk kawasan ini. Dikemudian hari peristiwa ini diabadikan sebagai hari jadi kota Bandung.</p>
  </div>
</div>
<p style="text-align:justify;">Kota Bandung secara resmi mendapat status gemeente (kota) dari Gubernur Jenderal J.B. van Heutsz pada tanggal 1 April 1906 dengan luas wilayah waktu itu sekitar 900 ha, dan bertambah menjadi 8.000 ha di tahun 1949, sampai terakhir bertambah menjadi luas wilayah saat ini. Pada masa perang kemerdekaan, pada 24 Maret 1946, sebagian kota ini di bakar oleh para pejuang kemerdekaan sebagai bagian dalam strategi perang waktu itu. Peristiwa ini dikenal dengan sebutan Bandung Lautan Api dan diabadikan dalam lagu Halo-Halo Bandung. Selain itu kota ini kemudian ditinggalkan oleh sebagian penduduknya yang mengungsi ke daerah lain. Sebutan Bandung Lautan Api kini digunakan sebagai nama stadion bertaraf internasional di kawasan Gedebage, wilayah timur kota Bandung: Stadion Gelanggang Olahraga Bandung Lautan Api (GBLA).<br> <h6>Sumber : http://www.bandungaktual.com/2015/03/sejarah-kota-bandung-asal-usul-nama.html</h6> </br> </p>
<div class="col-lg-12"><center>
			  Copyright &copy; Recruitment EAD 2017
			  <h1></h1>
           </center> 
		   </div>
</div>

	</div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
	</div>
	
