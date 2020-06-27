<?php
//phpinfo();

include "koneksi.php";

$result = $con->query("SELECT * FROM destinasi ORDER BY id ASC");

?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>TravelKuy</title>
    <meta name="description" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.13.0/css/semantic.min.css">
    <!-- endbower -->
    <!-- endbuild -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<!-- jQuery 1.8 or later, 33 KB -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Fotorama from CDNJS, 19 KB -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="main.css">
    <!-- endbuild -->
</head>
<body id="root">

    <div class="ui grid">
        <div class="computer tablet only row">
            <div class="ui inverted fixed menu navbar page grid">
                <a href="" class="brand item">TravelKuy</a>
                <a href="" class="active item">Home</a>
                <a href="hotel.php" class="item">Hotels</a>
                <a href="about.html" class="item">About</a>
                <a href="contact.html" class="item">Contact</a>
            </div>
        </div>
        <div class="mobile only row">
            <div class="ui fixed inverted navbar menu">
                <a href="" class="brand item">TravelKuy</a>
                <div class="right menu open">
                    <a href="" class="menu item">
                        <i class="reorder icon"></i>
                    </a>
                </div>
            </div>
            <div class="ui vertical navbar menu">
                <a href="" class="active item">Home</a>
                <a href="hotel.php" class="item">Hotels</a>
                <a href="about.html" class="item">About</a>
                <a href="contact.html" class="item">Contact</a>
            </div>
        </div>
    </div>
	<div class="container">
    <div class="ui page grid main">
    <div class="row"> 
		<div class="column padding-reset">
            <div class="ui large message">
                <h1 class="ui huge header">TravelKuy</h1>
                <p>Selamat datang</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="hotel.php" class="ui blue button">Book Now &raquo;</a>
            </div>
        </div>
 </div>
	<!-- SLIDE -->
	<div class="row">
		<div class="fotorama">
			<img  src="./img/slide-1.jpg">
            <img src="./img/Tegalalang-Swing-Ubud-Bali.jpg">
            <img  src="./img/balizoo.jpg">
			<img src="./img/tanahlotslide.jpg">
            <img src="./img/slide-4.jpg">
		</div>
	</div>
	<!-- END SLIDE -->
	<!-- CONTENT BLOG -->
	<div class="row">
	<div class="column">
	<div class="column panel">
		<div class="ui secondary inverted top attached segment">List Tempat Pariwisata Bali</div>
		<div class="ui bottom attached segment">
            <?php
            
             while ($row = mysqli_fetch_array($result)) {
                $gambar = $row['gambar'];
                $judul = $row['nama'];
                $lokasi = $row['lokasi'];
                $deskripsi = $row['deskripsi'];
                echo "<div class='ui segment'>
                <div>
                    <img class='ui medium left floated image' src='./img/$gambar'>
                </div>
    				<div class='description'>
    				    <h3 class='ui header'>$judul</h3>
                        <h6>$lokasi</h6>
                        <p>$deskripsi</p>
                    </div>
                </div>";
            }
            ?>
		</div>
    </div>
	</div>
	</div>
	<!-- END CONTENT -->
	<div class="row">
		<div class="ui bottom attached label">Copryright <a href="login.html">Satria Wiguna</a></div>	
    </div>
	</div>
	</div>
    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.13.0/javascript/semantic.min.js"></script>
    <script src="main.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
    
</body>
</html>