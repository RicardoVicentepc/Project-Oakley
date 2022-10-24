<?php
    $server = "localhost";
    $database = "dblaravel";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$server;dbname=$database;", $user, $password);
?>