<?php
    require('config/db_connect.php');
    
    if($conn){
        echo "Remote MYSQL!!!!!";
    }
    else{
        echo "Nope";
    }
?>