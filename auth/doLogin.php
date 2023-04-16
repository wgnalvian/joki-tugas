<?php
ini_set('display_errors', 1);
include('../connection.php');
include('../config.php');
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];

    $password = $_POST['password'];
    
    $role = $_POST['role'];
    

   
        $query = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
        $result = mysqli_query($connect, $query);
          
   
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $idUser = $user['id'];

            if($role == 'admin'){
                $query = "SELECT * FROM admin WHERE user_id=$idUser";
                $cek = mysqli_query($connect,$query);
                if(mysqli_num_rows($cek) < 1){
                    echo "user tidak ditemukan <a href='$baseUrl/index.php'>kembali</a>";
                    return;
                }
            }else if($role == 'dosen'){
                $query = "SELECT * FROM dosen WHERE user_id=$idUser";
                $cek = mysqli_query($connect,$query);
                if(mysqli_num_rows($cek) < 1){
                    echo "user tidak ditemukan <a href='$baseUrl/index.php'>kembali</a>";
                    return;
                }
            }else if($role == 'mahasiswa'){
                $query = "SELECT * FROM mahasiswa WHERE user_id=$idUser";
                $cek = mysqli_query($connect,$query);
                if(mysqli_num_rows($cek) < 1){
                    echo "user tidak ditemukan <a href='$baseUrl/index.php'>kembali</a>";
                    return;
                }
            }

            $_SESSION['user'] = $user;
            $_SESSION['role'] = $role;
          
            header('Location: ../index.php');
        }else{
            echo "user tidak ditemukan <a href='$baseUrl/index.php'>kembali</a>";
        }
    

}
