<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    $query2 = "INSERT INTO users (name,password) VALUES ('$nim','$nim')";
    if(mysqli_query($connect,$query2) == true){
        $lastId = $connect->insert_id;
        $qery = "INSERT INTO mahasiswa (nama,nim,alamat,user_id) VALUES ('$nama','$nim','$alamat',$lastId)";
        if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
        }
    }

}