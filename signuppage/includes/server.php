<?php

$dbhandle = "mysql:host=localhost; dbname=practicedb"; 
$password = "";
$username = "root";


try {
    $pdo = new PDO($dbhandle, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "An error occurred ".$e->getMessage();
}