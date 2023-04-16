<?php

ini_set('display_errors', 1);
include('../../connection.php');
if (!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['user']['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_asset = $_POST['nama'];
    $harga_asset = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    
       
        $qery = "INSERT INTO asset (nama_asset,harga_asset,tanggal_dibeli,admin_id) VALUES ('$nama_asset','$harga_asset','$tanggal',$id)";
        if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
        }


}