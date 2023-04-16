<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $id = $_POST['id'];
    $nama_pemasukan = $_POST['nama'];
    $jumlah_pemasukan = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];


    $qery = "UPDATE pemasukan SET nama_pemasukan='$nama_pemasukan',jumlah_pemasukan='$jumlah_pemasukan',tanggal='$tanggal' WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}