<?php
    $db = "aula_02";
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dns = "mysql:host=".$host."; dbname=".$db;
    $pdo = new PDO($dns, $user, $pass);

    if(!$pdo){
        echo($pdo->error_log);
    } else{
        echo("");
    }
?>