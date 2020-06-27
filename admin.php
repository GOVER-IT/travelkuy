<?php
    session_start();
    if($_SESSION['nama']=='')
    {
        header("location:login.html");
    }
?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>mode admin</title>
     <style type="text/css">
         img {
            width: 100px;
            height: 100px;
         }
         textarea{
            width: 300px;
            height: 100px;
         }
     </style>
 </head>
 <body>
    <p>Selamat Datang <?php echo $_SESSION['nama']?></p>
    <center><font face="arial" color="black" size="2"><a href="logout.php">Logout</a></font></center>
    <center><font face="arial" color="black" size="2"><a href="index.php">Kembali ke Index</a></font></center>
    <div class="konten">
        <div class="isi">
            <fieldset>
            <legend>Tambah Tempat Wisata</legend>
            <h2>Lengkapi Data Dengan Benar</h2>
            <form name="Input_tempat" method="POST" action="simpan.php" enctype='multipart/form-data'>
                <table>
                    <tr>
                        <td>Nama Tempat</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td><input type="text" name="lokasi" required></td>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><textarea style='' name="deskripsi" required=""></textarea></td>
                    </tr>
                     <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><input type="file" name="gambar" required=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="proses" value="Simpan"> <input type="reset" name="ulang" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
            </fieldset>
        </div>
        <table border = "1" style="padding: 10px;">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Deskripsi</th>
            </tr>
            <?php
                //menambahkan koneksi ke database
                include "koneksi.php";

                //membuat query select data pada tabel destinasi
                $qry = "select * from destinasi";

                //mengeksekusi query select
                $exec = mysqli_query($con,$qry);

                //menghandle hasil select data; menyimpan object dalam bentuk array pada sembuah variable
                //kemudian disajikan pada kolom dalam tabel melalui sejumlah baris pada data dengan teknik looping(while)

                $no = 1;

                while($data = mysqli_fetch_array($exec)){
                

                ?>

            <tr>
                <td><?php echo $no; $no++ ?></td>
                <td><?php $gambar = $data['gambar']; echo "<img src='./img/$gambar'" ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['lokasi'] ?></td>
                <td><?php echo $data['deskripsi'] ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $data['id'] ?>"><button>Edit</button></a> 
                  <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin Hapus?')"><button>delete</button></a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </div>
 </body>
 </html>