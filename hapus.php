<?php
$id = $_GET['id'];
//tambakan koneksi
include "koneksi.php";

$img = "SELECT gambar FROM destinasi WHERE id = '$id'";
$result = mysqli_query($con,$img);
$row = mysqli_fetch_assoc($result);

$exec = "DELETE FROM destinasi WHERE id = '$id'";
$eks = mysqli_query($con, $exec);//buat query delete data pada tabel destinasi

if(file_exists("./img/$row[gambar]")){
 	unlink("./img//$row[gambar]");
}
if($eks){
    echo "<script> alert('Data berhasil dihapus'); window.location='admin.php';</script>";
}else{
    echo "<script> alert('Data gagal dihapus'); window.location='admin.php';</script>";   
}

?>
