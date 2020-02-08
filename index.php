<?php
    require('config/db_connect.php');
    
    if($conn){
        echo "Remote MYSQL!!!!!";
    }
    else{
        echo "Nope";
    }
    $q = mysqli_query($conn, "INSERT INTO agents (name, phone, mail, password) VALUES ('john', '45677', 'bhum@njtki.com', 'nfn7f8fjv')");
    if($q){
        echo "INSERTED!";
    }
?>