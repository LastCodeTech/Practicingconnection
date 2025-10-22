<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);

 require_once('server.php');
 
    $query = 'INSERT INTO users(name,email,password) VALUES(?,?,?);';
    $prep = $pdo->prepare($query);
    $insert = $prep->execute([$name,$email,$password]);
    if($insert){
        echo'registered successfully';
    }
    else{
        echo'an error occured';
    }
 }

else{
   header('location:../index.php');
   exit();
}


