<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "dashboard_admin";

$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?> 