<?php 
	
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$cekin = $_POST['cekin'];
$cekout = $_POST['cekout'];
$kamar = $_POST['kamar'];
$kasur = $_POST['bed'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anakanak'];
$preference = $_POST['preference'];

include 'koneksi.php';

$query = "INSERT INTO `reservasi` (`id_reservasi`, `nama`, `check_in`, `check_out`, `id_tipe`, `id_bed`, `dewasa`, `anakanak`, `preferance`) VALUES (NULL, '$nama', '$cekin', '$cekout', '$kamar', '$kasur', '$dewasa', '$anak', '$preferance')";
$result =mysqli_query($con,$query);
	 	echo "Query yang dijalankan: $query";
		echo "<br />";
		echo "Kode error: ".mysqli_errno($con);
		echo "<br />";
		echo "Pesan error: ".mysqli_error($con);
if (mysqli_affected_rows()>0) {
	echo "<h2>Reservasi Berhasil</h2>";
	echo "<br/>";
	echo "Terimakasih atas pemesanan anda,<b>$nama<b/><br/>";
	echo "Check in date <b>$check_in</b> <br />";
	echo "Chek out date <b>$check_out</b> <br />";
	echo "Room preference <b>$preference</b> <br />";
	echo "Number of Adult <b>$adult</b> <br />";
	echo "Number of Child <b>$children</b> <br />";
}else{
	echo "Error!!! Reservasi Gagal :";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>