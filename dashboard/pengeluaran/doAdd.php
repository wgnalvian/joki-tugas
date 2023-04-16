<?php

ini_set('display_errors', 1);
include('../../connection.php');
if (!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['user']['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pengeluaran = $_POST['nama'];
    $jumlah_pengeluaran = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    
       
        $qery = "INSERT INTO pengeluaran (nama_pengeluaran,jumlah_pengeluaran,tanggal,admin_id) VALUES ('$nama_pengeluaran','$jumlah_pengeluaran','$tanggal',$id)";
        if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
        }


}