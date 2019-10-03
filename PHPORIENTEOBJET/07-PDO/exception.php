<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exceptions</title>
</head>
<body>
    <?php
    // traitement warning
        function error2exception($code,$message,$fichier,$ligne){

        throw new ErrorException($message);
    }
     set_error_handler('error2exception');

    // création de mon exception
    class MonException extends Exception {
        public function __construct($message){
            parent::__construct($message);
        }
        public function __toString(){
            return " message de mon exception :" . $this->message;
        }
    }

    try{ 
        throw new MonException("test de mon exception");
     $x=5;
     // si $y est égal à 1 exception "-- pour rien va s'exécuter
     // si $y est inferieur à 0 envoi du message Attention nombre négatif
     $y=0;

    if($y==0){
        //throw new Exception("Attention division par zéro"); 
        throw new ArithmeticError("Attention division par zéro");
    }
    if($y<0){
        throw new ArithmeticError("Attention nombre négatif");
    }
    throw new Exception(" -- pour rien -- $y");
    $z=$x/$y;
    }
     catch(ErrorException $e){
        echo "exception attrapée pour error2exception"; 
        echo $e->getMessage();
    }
     catch(MonException $e){
         echo "<br> mon exception attrapée lalala". $e-> getMessage();
        
     }
     catch(Exception $e){
         echo "Exception attrapée ! ";

         // envoi du message attention division par zéro avec la méthode getMessage
         echo "<br>";
         echo $e->getMessage();
     }
     
     
     catch(ArithmeticError $e){
        echo "Erreur attrapée ! " . $e->getMessage();

        // envoi du message attention division par zéro avec la méthode getMessage
        echo "<br>";
        echo $e->getMessage();
    }
     finally{
         echo "<br> Tout va bien !";
     }
    ?>
</body>
</html>