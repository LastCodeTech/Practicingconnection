<?php
session_start();

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
                $_SESSION['success']  = 'registered successfully !!!';


                // Now Log them in - get their details, especially their id, so that you can use it to fetch their details
                // in the dashboard page

                // $fetchUserDetails = $pdo->prepare("SELECT * FROM accounts WHERE username = ?");
                // $fetchUserDetails->execute([$username]);
                // $userDetails = $fetchUserDetails->fetchAll(PDO::FETCH_ASSOC);

                // $_SESSION['auth_id'] = $userDetails[0]['id'];
                // $_SESSION['auth_username'] = $userDetails[0]['username'];
                // $_SESSION['auth_created_at'] = $userDetails[0]['created_at'];

                header("Location:../loginPage.dashboard.php");
                exit();
                }
                else{
                $_SESSION['error']  = 'An error occurred!';
                header("Location:signup.php");
                exit();
                }
            }
            else{
                $_SESSION['used_username']  = 'sorry the username has been used by another user';
                header("Location:signup.php");
                exit();
            }
        }
        else{
            
              $_SESSION['not_matching']  = 'password and confirm password are not matching';
                header("Location:signup.php");
                exit();
        }
    }
    else{
        
        $_SESSION['empty_fields']  = 'please input all fields in order to signup';
                header("Location:signup.php");
                exit();
    }
}
else{
    header('location:signup.php');
    exit();
}