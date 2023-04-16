<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $kaprodi = $_POST['kaprodi'];
    $fakultas = $_POST['fakultas'];

    $qery = "INSERT INTO prodi (nama,kaprodi,fakultas) VALUES ('$nama','$kaprodi','$fakultas')";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}