<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   
    $id = $_GET['id'];
    

    $qery = "DELETE FROM jadwal_matkul WHERE id=$id";
  
    if(mysqli_query($connect,$qery) == true){
        header('Location: index.php');
    }

}