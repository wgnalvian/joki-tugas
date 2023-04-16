<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $id = $_POST['id'];
    $nama_pengeluaran = $_POST['nama'];
    $jumlah_pengeluaran = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];


    $qery = "UPDATE pengeluaran SET nama_pengeluaran='$nama_pengeluaran',jumlah_pengeluaran='$jumlah_pengeluaran',tanggal='$tanggal' WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}