<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);
 require_once('server.php');
 if(!empty($name) && !empty($email) && !empty($password) && !empty($confirm_password)){
    //to check if email have been used by a user already or not
    $check ='SELECT email FROM users WHERE email = ?;';
    $prep = $pdo->prepare($check);
     $prep ->execute([$email]);
    $result = $prep->fetchAll(PDO::FETCH_ASSOC);
    if(empty($result)){
   if($password == $confirm_password){ 
$securedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = 'INSERT INTO users(name,email,password) VALUES(?,?,?);';
    $prep = $pdo->prepare($query);
    $insert = $prep->execute([$name,$email,$securedPassword]);
    if($insert){
        echo'registered successfully';
    }
    else{
        echo'an error occured';
    }
}
else{
    echo 'password and confirm password mismatch';
}
 }
 else{
    echo'the email have already been used ';
}
}

 else{
    echo'pls input all fields to proceed';
 }
 }

else{
   header('location:../index.php');
   exit();
}


