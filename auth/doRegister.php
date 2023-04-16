<?php
ini_set('display_errors', 1);
include('../connection.php');
session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cPassword = $_POST['confirm_password'];
  
    
   

   
        $query = "INSERT INTO users (name,password) VALUES ('$username','$password')";
        $result = mysqli_query($connect,$query);
        if($result){
            $lastId = $connect->insert_id;
            if(mysqli_query($connect,"INSERT INTO admin (nama_admin,user_id) VALUES ('$name',$lastId)") == true){
                header('Location: login.php');
                exit;
            }
        }
    

   
}