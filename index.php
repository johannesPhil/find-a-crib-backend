<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    require('config/db_connect.php');
    $conn = new mysqli($server, $username, $password, $db);
    
    if($conn){
        echo "HelioHost MYSQL!!!!!";
    }
    else{
        echo "Nope";
    }
    
    $q = "INSERT INTO agents (name, phone, mail, password) VALUES ('John', '1234567', 'mail.com', 'password')";
    $q_query = mysqli_query($conn, $q);
    if($q_query){
        echo "INSERTED!";
    }
    echo var_dump($q);
    mysqli_errno;
?>