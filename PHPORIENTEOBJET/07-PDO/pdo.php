<?php

//$pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO</title>
</head>
<body>

<?php
$ok = true;

try {
    $pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    $ok = false;
    echo "!! Connextion error ". $e->getMessage();
}

  if($ok){

 $sql="SELECT * FROM utilisateur where login=:login";
 $stmt = $pdo->prepare($sql);

 $login ='toto';
 $stmt->bindParam(':login', $login, PDO::PARAM_STR);
 $stmt->execute();
// $stmt
 $row = $stmt->fetch();

 echo $row['email']. " - " . $row['nom']. " - ". $row['id']. " - " .$row['login'];

 error_log('Connection DB');
 $login ='toto3';
 $stmt->execute();
// $stmt fetch sans rappeler bindParam
 $row = $stmt->fetch();
 echo "<br>";
 echo $row['email']. " - " . $row['nom']. " - ". $row['id']. " - " .$row['login'];

  }

?>

    
</body>
</html>