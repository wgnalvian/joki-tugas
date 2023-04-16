<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];

    $query2 = "INSERT INTO users (name,password) VALUES ('$nip','$nip')";
    if(mysqli_query($connect,$query2) == true){
        $lastId = $connect->insert_id;
        $qery = "INSERT INTO dosen (nama,nip,alamat,user_id) VALUES ('$nama','$nip','$alamat',$lastId)";
        if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
        }
    }

}