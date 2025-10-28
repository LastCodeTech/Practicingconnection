<?php
include_once('server.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $loginUname = htmlspecialchars($_POST['loginUsername']);
    $loginPassword = htmlspecialchars($_POST['loginPassword']);
    $signupUname = htmlspecialchars($_POST['signupUsername']);
    $signupPassword = htmlspecialchars($_POST['signupPassword']);
    $signupConfirmPassword = htmlspecialchars($_POST['signupConfirmPassword']);

    // if(!empty($loginUname) && !empty($loginPassword) && !empty($signupUname) && !empty( $signupPassword) && !empty($signupConfirmPassword)){
    //     $query = 'SELECT * FROM users where name = ?';
    //     $prep = pdo->prepare($query);
    //     $insert ->execute('');

    // }
    // else{
    //     echo'pls input all fields';
    // }
    echo 'hi';
  






}
else{
    header('location:signup.php');
    exit();
}