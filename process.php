<?php
// if($_SERVER['REQUEST_MODE'])=='POST';
// {
//     $username = htmlspecialchars($_POST['username']);
//     $password = htmlspecialchars($_POST['password']);

// }

    // require_once('server.php');
    // $query = 'insert into students(name,age,department,score,email) values(?,?,?,?,?);';
    // $prep = $pdo->prepare($query);
    // $insert = $prep->execute(['sulaimon',29,'fishry',90,'fishery@gmail.com']);
    // if($insert){
    //     echo'published';
    // }


    require_once('server.php');
    $query = 'insert into students(name,age,department,score,email)values(?,?,?,?,?);';
    $prep = $pdo->prepare($query);
    $insert = $prep->execute(['yusuf',13,'pharmacy',99,'yusuf@gmail.com']);
    if($insert){
        echo'succesful';
    }