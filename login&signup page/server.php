<?php
$dbhandle = 'mysql:host=localhost;dbname=practicedb';
$password ='';
$uname = 'root';

try{
    $pdo =new PDO ($dbhandle,$password,$uname);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo 'an error occured'.$e->getMessage();
};