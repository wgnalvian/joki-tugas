<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $id = $_POST['id'];
    $matkul_id = (int) $_POST['matkul'];
    $prodi_id = (int)$_POST['prodi'];
    $mhs_id =(int) $_POST['mhs'];


    $qery = "UPDATE krs SET prodi_id=$prodi_id,matkul_id=$matkul_id,mhs_id=$mhs_id WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}