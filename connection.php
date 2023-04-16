<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "asd";

$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?> 