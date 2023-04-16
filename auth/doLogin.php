<?php
ini_set('display_errors', 1);
include('../connection.php');
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];

    $password = $_POST['password'];
    
    $role = $_POST['role'];
    

   
        $query = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
        $result = mysqli_query($connect, $query);
                echo mysqli_num_rows($result);
   
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $user;
            $_SESSION['role'] = $role;
          
            header('Location: ../index.php');
        }
    

}
