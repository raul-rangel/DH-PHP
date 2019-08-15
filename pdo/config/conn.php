<?php

    $dsn = 'mysql:host=localhost;dbname=aula_pdo;charset=utf8mb4;port=3307';
    $db_user = 'root';
    $db_pass = '';

    try {
        $db = new PDO($dsn, $db_user, $db_pass);
    }
    catch(PDOException $Exception) {
        echo $Exception->getMessage(); 
    }   

?>