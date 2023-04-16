<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];

    $qery = "UPDATE dosen SET nama='$nama',alamat='$alamat',nip='$nip' WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}