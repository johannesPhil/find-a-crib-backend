<?php
    require('config/db_connect.php');
    echo "Yeah we here brah!!!!!!!!";
    if($conn){
        echo "Yes";
    }
    else{
        echo "Nope";
}
echo $password;
?>