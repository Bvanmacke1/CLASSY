<?php

const DB_URL = "localhost"; # URL de la BDD
const USER_NAME = "dawan"; # nom d'utlisateur
const USER_PASSWORD = "dawan"; # mot de passe
const DB_BASE = "Jeuxvideo2";  #BDD

function connectDB(){
    $bdd = mysqli_connect(
    DB_URL,
    USER_NAME ,
    USER_PASSWORD,
    DB_BASE
    );


    // verif connection
    if(mysqli_connect_errno()){
     // echo 'error connection';
     // return musqli_connect_error();
    return mysqli_connect_error();

    }else{
        // echo 'connection ok';
        // gestion de l UTF-8
        mysqli_set_charset($bdd,"utf8");
      return $bdd;
    }
}