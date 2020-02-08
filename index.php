<?php
    require('config/db_connect.php');
    echo "Remote MYSQL!!!!!";
    if($conn){
        echo "Yes";
    }
    else{
        echo "Nope";
}
?>