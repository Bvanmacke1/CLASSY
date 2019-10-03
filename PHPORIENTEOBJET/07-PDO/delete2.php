<?php
// delete.php

// supprimer un utilisateur dont l'id est 2 : il faut le passer dans l'appel comme dessous ?id=2

//http://localhost ..../delete.php?id=2
// $_GET['id]'
if(isset($id)){
    
    
$msg ="Suppresssion effectuée";
$ok = true;

try {
    $pdo = new PDO ("mysql:host=localhost;dbname=poo", 'dawan', 'dawan', array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    $ok = false;
    $msg = "!! Connection error ";
    }

  if($ok){

 $sql="DELETE FROM utilisateur where id=:id";
 $stmt = $pdo->prepare($sql);

 $id = $_GET['id'];

 $stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
 // $res est un boolean
 $res = $stmt->execute();
 $nb = $stmt->rowCount();
 


  if(!$res){
      $msg ="probleme delete";
  } elseif($nb!=1){
}else { $msg = "pas d'id donné";}
}
}

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>delete</title>
  </head>
  <body>
  <?php
   if(isset($res)){
      if($res){ echo $msg;}
      else {echo "Problème de delete";}
       }

    ?> 
  </body>
  </html>