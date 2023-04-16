<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];

    $nama = $_POST['nama'];
 
    $sks = $_POST['sks'];
    $sks = (int) $sks;


    $qery = "UPDATE matkul SET nama_matkul='$nama',sks=$sks WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}