<?php
$koneksi=mysqli_connect("localhost","root","","biodata");
if(mysqli_connect_error()){
    echo "koneksi gagal" . mysqli_connect_error();
}

?>