<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
   

    $query2 = "INSERT INTO ruang (ruang) VALUES ('$nama')";
    if(mysqli_query($connect,$query2) == true){
      
        header('Location: index.php');
        
    }

}