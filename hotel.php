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
                <a href="index.php" class="brand item">TravelKuy</a>
                <a href="index.php" class="item">Home</a>
                <a href="hotel.php" class="active item">Hotels</a>
                <a href="about.html" class="item">About</a>
                <a href="contact.html" class="item">Contact</a>
            </div>
        </div>
        <div class="mobile only row">
            <div class="ui fixed inverted navbar menu">
                <a href="index.php" class="brand item">TravelKuy</a>
                <div class="right menu open">
                    <a href="" class="menu item">
                        <i class="reorder icon"></i>
                    </a>
                </div>
            </div>
            <div class="ui vertical navbar menu">
                <a href="index.php" class="item">Home</a>
                <a href="hotel.php" class="active item">Hotels</a>
                <a href="about.html" class="item">About</a>
                <a href="contact.html" class="item">Contact</a>
            </div>
        </div>
    </div>
  <div class="container">
    <div class="ui page grid main">
    <div class="row"> 
    <div class="column padding-reset">
<form class="ui form" method="post" action="konfirmasi.php">
  <h4 class="ui dividing header">Isi Form Reservasi</h4>
  <div class="field">
    <label>Nama</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="nama">
      </div>
    </div>
  </div>
  <div class="field">
    <label>No. HP</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="hp">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Email</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="email">
      </div>
    </div>
  </div>
  <div class="four fields">
    <div class="field">
      <label>Check In</label>
      <input type="date" name="cekin">
    </div>
    <div class="field">
      <label>Check Out</label>
      <input type="date" name="cekout">
    </div>
  </div>
  <div class="five fields">
    <div class="field">
      <label>Tipe Kamar</label>
      <div class="ui selection dropdown">
        <input type="hidden" name="kamar" onchange="changeValue(this.value)">
        <div class="default text">Pilih</div>
        <i class="dropdown icon"></i>
        <div class="menu">
          <?php
            include "koneksi.php";
            $jsArray = "var tipekamar = new Array();\n";
            $sql = mysqli_query($con,"SELECT * FROM tipe_kamar");
            if(mysqli_num_rows($sql) != 0){
              while($row = mysqli_fetch_assoc($sql)){
                 echo "<div class='item'>
                          <option value='".$row['id_tipe']."'>".$row['tipe_kamar']."</option>";
                          $jsArray .= "tipekamar['" . $row['id_tipe'] . "'] = {Harga:'" . addslashes($row['harga']) . "'};\n";
                echo "</div>";
              }
            }
          ?>
        </div>
      </div>
    </div>
      <div class="field">
        <label>Harga</label>
          <input type="text" name="harga" id="harga">
      </div>

  </div>
  <div class="field">
    <label>Tipe Tempat Tidur</label>
    <div class="ui selection dropdown">
      <input type="hidden" name="bed">
      <div class="default text">Pilih</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <?php
          include "koneksi.php";
          $sql = mysqli_query($con,"SELECT * FROM bed");
          if(mysqli_num_rows($sql) != 0){
            while($row = mysqli_fetch_assoc($sql)){
               echo "<div class='item'>
                        <option value='".$row['id_bed']."'>".$row['bed_nama']."</option>
                    </div>";
            }
          }
        ?>
      </div>
    </div>
  </div>
  <div class="four fields">
    <div class="seven wide field">
      <label>Dewasa</label>
      <input type="number" name="dewasa"  placeholder="jumlah">
    </div>
     <div class="field">
      <label>Anak-anak</label>
      <input type="number" name="anakanak" placeholder="jumlah">
    </div>
  </div>
  <div class="six wide field">
    <label>Preference</label>
    <div class="field">
      <div class="ui selection dropdown">
          <input type="hidden" name="preference">
          <div class="default text">pilih</div>
          <i class="dropdown icon"></i>
          <div class="menu">
            <option class="item" value="smoking">Smoking</option>
            <option class="item" value="nonsmoking" selected="selected">Non Smoking</option>
          </div>
      </div>
    </div>
  </div>
  <input class="ui button" type="submit" name="reservasi" value="Submit Order">
</form>
        </div>
 </div>
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
    <script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(hargakamar){ 
    document.getElementById('harga').value = tipekamar[id_tipe].harga; 
    }; 
    </script>
    <!-- endbower -->
    <!-- endbuild -->
    
</body>
</html>