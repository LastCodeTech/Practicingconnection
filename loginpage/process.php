<?php
session_start();

require_once("server.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);


    
    if(!empty($email) && !empty($password)){

        $check_user = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $check_user->execute([$email]);
        $result = $check_user->fetchAll(PDO::FETCH_ASSOC);

        $registered_password = "";
        
        foreach($result as $given){
            $registered_password = $given['password'];
            echo $registered_password;

            
            $verified = password_verify($password, $registered_password);

            if($verified){
                
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];

                header("Location: dashboard.php");


            }else{
                echo "<br/>You entered wrong email or password!";
            }

        }

        


    }else{
        echo "You must fill those fields!";
    }
}