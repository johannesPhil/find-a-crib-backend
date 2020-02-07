<?php
// mysql://b20b22c4c6116c:76ec5ad3@us-cdbr-iron-east-04.cleardb.net/heroku_55bc6478a2268bf?reconnect=true
    $clear_db_host = 'us-cdbr-iron-east-04.cleardb.net/';
    $clear_db_name = 'heroku_55bc6478a2268bf';
    $clear_db_username = 'b20b22c4c6116c';
    $clear_db_password = '76ec5ad3';

    $db_conn = mysqli_connect($clear_db_host, $clear_db_username, $clear_db_password, $clear_db_name);
?>