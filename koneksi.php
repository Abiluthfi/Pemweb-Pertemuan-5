<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "tugaspemweb5";
$connection = mysqli_connect($host, $user, $password, $dbName);
if(!$connection){
die("Koneksi gagal : ".mysqli_connect_error());
}
?>