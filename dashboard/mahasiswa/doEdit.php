<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    $qery = "UPDATE mahasiswa SET nama='$nama',alamat='$alamat',nim='$nim' WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}