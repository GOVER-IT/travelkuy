
<?php

$con = mysqli_connect("localhost","username","password","namadatabase");

if(mysqli_connect_error()){
    echo "Terjadi Kesalahan : " . mysqli_connect_error();
}

?>
