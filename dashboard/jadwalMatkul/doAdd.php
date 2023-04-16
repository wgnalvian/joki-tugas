<?php

ini_set('display_errors', 1);
include('../../connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mat = (int) $_POST['mat'];
    $dos = (int) $_POST['dos'];
    $ru = (int) $_POST['ru'];
    $waktu = $_POST['waktu'];

    $query2 = "INSERT INTO jadwal_matkul (dosen_id,ruang_id,matkul_id,waktu) VALUES ($dos,$ru,$mat,'$waktu')";
    if(mysqli_query($connect,$query2) == true){
       
        header('Location: index.php');
        
    }

}