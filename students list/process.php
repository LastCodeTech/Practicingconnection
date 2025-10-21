<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $department=htmlspecialchars($_POST['department']);
    $score = htmlspecialchars($_POST['score']);
    $email = htmlspecialchars($_POST['email']);

    require_once('server.php');
    $query='insert into students(name,age,department,score,email) values(?,?,?,?,?);';
    $prep = $pdo->prepare($query);
    $insert = $prep->execute([$name,$age,$department,$score,$email]) ;
    if($insert){
        echo'your data has been successfully recorded !!!';
    }
    else{
        echo'error occured ';
    }
}