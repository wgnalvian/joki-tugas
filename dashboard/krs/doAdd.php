<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matkul_id = (int) $_POST['matkul'];
    $prodi_id = (int)$_POST['prodi'];
    $mhs_id =(int) $_POST['mhs'];

    $qery = "INSERT INTO krs (matkul_id,prodi_id,mhs_id) VALUES ($matkul_id,$prodi_id,$mhs_id)";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}