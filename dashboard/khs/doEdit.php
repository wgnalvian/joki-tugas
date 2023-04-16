<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    foreach ($_POST as $key => $value) {
            $exp = explode("_",$key);
            $id = (int) $exp[1];
            $nilai = $_POST[$key];
            $query = "UPDATE khs SET nilai='$nilai' WHERE id=$id ";
            if(mysqli_query($connect,$query) == false){
             
            }
       }

       header('Location: index.php');

}