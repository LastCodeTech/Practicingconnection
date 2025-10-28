<?php
include_once('server.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $loginUname = htmlspecialchars($_POST['loginUsername']);
    $loginPassword = htmlspecialchars($_POST['loginPassword']);
  

    if(!empty($loginUname) && !empty($loginPassword)){
        $query = 'SELECT * FROM accounts where username = ?';
        $prep = $pdo->prepare($query);
        $prep ->execute([$loginUname]);
        $result = $prep->fetchAll(PDO::FETCH_ASSOC);
        if(empty($result)){
           echo 'we could not find any account related to the inputed credentials please sign up';
        }
        else{
             echo 'ure are now logged in';
        }

    }
    else{
        echo'pls input all fields';
    }
    
  






}
else{
    header('location:signup.php');
    exit();
}