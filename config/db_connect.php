<?php
    $url = parse_url(getenv("DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    // $server = 'http://findacrib.heliohost.org/';
    // $username = 'jay3pee';
    // $password = 'peacerock1';
    // $db = 'jay3pee_findacrib';

    $conn = new mysqli($server, $username, $password, $db);
?>