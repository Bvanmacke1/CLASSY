<?php

    const DB_URL = "localhost";         # URL de la vbase de donnée
    const USER_NAME = "loic";           # Nom de l'utilisateur
    const USER_PASSWORD = "mot-de-passe";      # PassWord de l'utilisateur
    const DB_NAME = "video-games";             # Nom de la BDD

    function connectDb(){
       
        $bdd = mysqli_connect(
            DB_URL,            # URL de la vbase de donnée
            USER_NAME,         # Nom de l'utilisateur
            USER_PASSWORD,     # PassWord de l'utilisateur
            DB_NAME);          # Nom de la BDD

        // Check connection
        if (mysqli_connect_errno()){
            //echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return mysqli_connect_error();
        }else{
            # GESTION DE L'UTF-8 :
            mysqli_set_charset($bdd,"utf8");
            return $bdd;
        }
    }


?>