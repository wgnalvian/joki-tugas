<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $id = $_POST['id'];
    $nama_asset = $_POST['nama'];
    $harga_asset = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    $qery = "UPDATE asset SET nama_asset='$nama_asset',harga_asset='$harga_asset',tanggal_dibeli='$tanggal' WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}