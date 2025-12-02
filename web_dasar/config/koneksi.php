<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="PWD_Nana";


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("koneksi Gagal:". mysqli_connect_error());
}

?>