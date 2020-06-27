<?php

include "koneksi.php";
//menangkap hasil submit pada element form melalui method POST
$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

if ($gambar != "") { //jika gambar ada
	//hapus gambar di folder img
	$img = "SELECT gambar FROM destinasi WHERE id = '$id'";
	$result = mysqli_query($con,$img);
	$row = mysqli_fetch_assoc($result);
	if(file_exists("./img/$row[gambar]")){
 		unlink("./img//$row[gambar]");
	}

	$tmp = $_FILES['gambar']['tmp_name'];

	//rename nama gambar dengan menambahkan tgl dan jam upload
	$gambarbaru = date('dmYHis').$gambar;

	$path = "./img/".$gambarbaru;
	//menambahkan koneksi database dengan fungsi include script pada halaman koneksi.php


	move_uploaded_file($tmp, $path);
	//membuat query insert pada tabel destinasi
	$query = "UPDATE `destinasi` SET `nama` = '$nama', `lokasi` = '$lokasi', `deskripsi` = '$deskripsi', `gambar` = '$gambarbaru' WHERE `destinasi`.`id` = '$id'";

	//mengeksekusi query insert
	$exec = mysqli_query($con,$query);

	//membuat kondisi jika data berhasil di simpan makan muncul alert dan redirect ke halaman mode admin
	if($exec){
		echo "<script>alert('data berhasil diedit'); window.location='admin.php'</script>";
		echo "dengan gambar";
		echo "Query yang dijalankan: $query";
		echo "<br />";
		echo "Kode error: ".mysqli_errno($con);
		echo "<br />";
		echo "Pesan error: ".mysqli_error($con);
	}else{
		echo "<script>alert('data gagal diedit'); window.location='admin.php'</script>";
		echo "Query yang dijalankan: $query";
		echo "<br />";
		echo "Kode error: ".mysqli_errno($con);
		echo "<br />";
		echo "Pesan error: ".mysqli_error($con);
	}
}else{//jika gambar tidak diedit/diinput
  //membuat query insert pada tabel destinasi
  $query = "UPDATE `destinasi` set nama =  '$nama', lokasi = '$lokasi', deskripsi = '$deskripsi' where id = '$id'";

  //mengeksekusi query insert
  $exec = mysqli_query($con,$query);

  //membuat kondisi jika data berhasil di simpan makan muncul alert dan redirect ke halaman mode admin
  if($exec){
	echo "<script>alert('data berhasil diedit'); window.location='admin.php'</script>";
	echo "tanpa gambar";
	echo "Query yang dijalankan: $query";
		echo "<br />";
		echo "Kode error: ".mysqli_errno($con);
		echo "<br />";
		echo "Pesan error: ".mysqli_error($con);
  }else{
	echo "<script>alert('data gagal diedit'); window.location='admin.php'</script>";
	echo "Query yang dijalankan: $query";
	echo "<br />";
	echo "Kode error: ".mysqli_errno($con);
	echo "<br />";
	echo "Pesan error: ".mysqli_error($con);
  }
}
?>