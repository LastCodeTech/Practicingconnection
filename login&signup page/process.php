<?php
include_once('server.php')
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $loginUname = htmlspecialchars($_POST['loginUsername']);
    $loginPassword = htmlspecialchars($_POST['loginPassword']);
    $signupUname = htmlspecialchars($_POST['signupUsername']);
    $signupPassword = htmlspecialchars($_POST['signupPassword']);
    $signupConfirmPassword = htmlspecialchars($_POST['signupConfirmPassword']);

  
}
else{
    header('location:signup.php')
}