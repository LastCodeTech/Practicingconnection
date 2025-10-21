<?php
$dbhandle = 'mysql:host=localhost;dbname=practicedb';
$uname ='root';
$password ='';

try{
    $pdo = new PDO($dbhandle,$uname,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
echo'an error occured while recording ur data'.$e->getMessage();
}