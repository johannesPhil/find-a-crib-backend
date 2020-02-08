<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    require('config/db_connect.php');
    
    if($conn){
        echo "HelioHost MYSQL!!!!!";
    }
    else{
        echo "Nope";
    }
    $name = 'john';
    $phone = '22345666';
    $mail = 'fjfnv@vnvnv.com';
    $password = 'fdjjgjfjrj';
    $q = mysqli_query($conn, "INSERT INTO agents (name, phone, mail, password) VALUES ($name, $phone, $mail, $password)");
    if($q){
        echo "INSERTED!";
    }
?>