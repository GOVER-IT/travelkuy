<?php

include "koneksi.php";

//menangkap hasil submit pada element form melalui method POST
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

//rename nama gambar dengan menambahkan tgl dan jam upload
$gambarbaru = date('dmYHis').$gambar;

$path = "img/".$gambarbaru;
//menambahkan koneksi database dengan fungsi include script pada halaman koneksi.php


if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak	
	//membuat query insert pada tabel destinasi
	$query = "INSERT INTO `destinasi` (`nama`, `lokasi`, `deskripsi`,`gambar`) values ('$nama','$lokasi','$deskripsi','$gambarbaru')";

	//mengeksekusi query insert
	$exec = mysqli_query($con,$query);

	//membuat kondisi jika data berhasil di simpan makan muncul alert dan redirect ke halaman mode admin
	if($exec){
	    echo "<script>alert('data berhasil disimpan'); window.location='admin.php'</script>";
	}else{
	    echo "<script>alert('data gagal disimpan'); window.location='admin.php'</script>";
	    echo "Query yang dijalankan: $query";
		echo "<br />";
		echo "Kode error: ".mysqli_errno($con);
		echo "<br />";
		echo "Pesan error: ".mysqli_error($con);
	}
}
?>