<?php
    require('config/db_connect.php');
    echo "Remote MYSQL!!!!!";
    if($conn){
        echo "Yes";
        echo $password;
    }
    else{
        echo "Nope";
    }
?>