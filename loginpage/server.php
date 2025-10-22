<?php
$dbhandle='mysql:host=localhost;dbname=practicedb';
$dbusername='root';
$dbpassword='';
try{
    $pdo = new PDO($dbhandle,$dbusername,$dbpassword);
    $pdo->setAtrribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo'error occured'.$e->getMessage();
}