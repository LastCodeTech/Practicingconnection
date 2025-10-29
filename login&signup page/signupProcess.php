<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = htmlspecialchars($_POST['signupUsername']);
    $Password = htmlspecialchars($_POST['signupPassword']);
    $ConfirmPassword = htmlspecialchars($_POST['signupConfirmPassword']);

    require_once('server.php');
    if(!empty($username) && !empty($Password) && !empty($ConfirmPassword)){
        if($Password == $ConfirmPassword){
            $encrypted_password =password_hash($Password ,PASSWORD_DEFAULT);
           $query = 'SELECT * FROM accounts where username = ?';
        $prep = $pdo->prepare($query);
        $prep ->execute([$username]);
        $result = $prep->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result)){
                $beans = 'INSERT INTO accounts(username,Password) VALUES(?,?);';
                $prepare =$pdo->prepare($beans);
                $insert = $prepare->execute([$username,$encrypted_password]);
                if($insert){
                    echo'registered successfully !!!';
                }
                else{
                    echo'an error occured';
                }
            }
            else{
                echo 'sorry the username has been used by another user';
            }
        }
        else{
            echo 'password and confirm password are not matching';
        }
    }
    else{
        echo 'please input all fields in order to signup';
    }
}
else{
    header('location:signup.php');
    exit();
}