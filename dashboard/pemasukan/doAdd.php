<?php

ini_set('display_errors', 1);
include('../../connection.php');
if (!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['user']['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pemasukan = $_POST['nama'];
    $jumlah_pemasukan = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    
       
        $qery = "INSERT INTO pemasukan (nama_pemasukan,jumlah_pemasukan,tanggal,admin_id) VALUES ('$nama_pemasukan','$jumlah_pemasukan','$tanggal',$id)";
        if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
        }


}