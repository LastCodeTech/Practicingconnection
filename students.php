<?php
require_once('server.php');
$query = 'SELECT * FROM students;';
$prep = $pdo->prepare($query);
 $prep ->execute();
$result = $prep->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<?php
if(!empty($result)){
    foreach ($result as $row){
        echo $row['name'];
        echo'<br>';
    }
}
else{
    echo'no student found';
}
?>



</body>
</html> 