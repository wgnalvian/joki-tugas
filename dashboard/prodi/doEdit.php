<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $kaprodi = $_POST['kaprodi'];
    $fakultas = $_POST['fakultas'];

    $qery = "UPDATE prodi SET nama='$nama',fakultas='$fakultas',kaprodi='$kaprodi' WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}