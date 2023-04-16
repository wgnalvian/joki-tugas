<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = (int) $_POST['id'];
    $mat = (int) $_POST['mat'];
    $dos = (int) $_POST['dos'];
    $ru = (int) $_POST['ru'];
    $waktu = $_POST['waktu'];


    $qery = "UPDATE jadwal_matkul SET matkul_id=$mat,ruang_id=$ru,dosen_id=$dos WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}