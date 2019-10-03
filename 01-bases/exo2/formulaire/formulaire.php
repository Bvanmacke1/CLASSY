<?php
include_once '../data/data.php';
require_once '../functions/connexion.php';
$connect = connectDB();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<?php
$sql = "SELECT user_name, user_password, user_age FROM users";
 //var_dump($sql);
 $result = mysqli_query($connect, $sql); 
//var_dump($result);
echo "<br>fetch row tableau associatif<br>";
 while($row= mysqli_fetch_assoc($result) ){
   echo 'nom: ' . $row["user_name"] . ', pwd : ' . $row["user_password"].', age : '.$row["user_age"] .'<br>';
}
    //
   

?>
    <form action="" method="post">
            <label for="nom"> Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="votre nom" required> 
            <label for="pwd"> Votre password</label>
            <input type="text" id="pwd" name="pwd" placeholder="votre password" required> 
            <label for="age"> Votre age</label>
            <input type="text" id="age" name="age" placeholder="age"> 
            <label for="poste">table users: </label>
              <select class="poste" id="poste">
                 <?php
                
                 asort($users);
                 

                  foreach ($users as $key => $value) {
                    $value = ucfirst($value);  
                      ?>
                 <?php
                
                   echo "<option value='".$value."'>".$value."</option>"
                ?>
                <?php
                }
                 ?>

             </select>
               
               <input type="button" value='Valider'> <br> 
               
</form>

            </body>