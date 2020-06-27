<?php
    session_start();
    if($_SESSION['nama']=='')
    {
        header("location:login.html");
    }
    //membuka koneksi ke database
    include "koneksi.php";

    if (isset($_GET['id'])) {
        //ambil data id yang dikirim melalui URL dengan method GET
        $id = $_GET['id'];

        //buat query select pada tabel destinasi
        $qry = "select * from destinasi where id = '$id'";
        $exec = mysqli_query($con,$qry);
        
        if(!$exec){
          die ("Query Error: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
        }

        $data = mysqli_fetch_assoc($exec);

        // apabila data tidak ada pada database maka akan dijalankan perintah ini
           if (!count($data)) {
              echo "<script>alert('Data tidak ditemukan pada database');window.location='admin.php';</script>";
           }
    } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data');window.location='admin.php';</script>";
    }  

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style type="text/css">
        .teks{
             width: 100%;
        }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <center><font face="arial" color="black" size="2"><a href="logout.php">Logout</a></font></center>
    <div class="konten">
        <div class="isi">
            <fieldset>
            <legend>Edit Tempat Wisata</legend>
            <h2>Lengkapi Data Dengan Benar</h2>
            <form name="Input_tempat" method="POST" action="update.php" enctype='multipart/form-data'>
                <table>
                   <input name="id" value="<?php echo $data['id']; ?>" hidden/></td>
                    <tr>
                        <td>Nama Tempat</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus required></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td><input type="text" name="lokasi" value="<?php echo $data['lokasi']; ?>" required></td>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><input class="teks" type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" required=""></td>
                    </tr>
                     <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><input type="file" name="gambar"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="proses" value="Simpan Perubahan"> <input type="reset" name="ulang" value="Reset"> <a href="admin.php"><button type="button">kembali</button></a></td>
                        </td>
                    </tr>
                </table>
            </form>
            </fieldset>
        </div>
    </div>
</body>
</html>