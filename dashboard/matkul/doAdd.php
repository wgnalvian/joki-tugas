<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
 
    $sks = $_POST['sks'];
    $sks = (int) $sks;

    $qery = "INSERT INTO matkul (nama_matkul,sks) VALUES ('$nama',$sks)";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}