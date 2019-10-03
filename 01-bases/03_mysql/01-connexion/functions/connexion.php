<?php
// fonction de connexion en local 
function connectDB()
{

     $_host = "localhost";
     $_login = "dawan";
     $_pwd = "dawan";
     $_DBname = "Jeuxvideo2";


    $connect = mysqli_connect($_host, $_login, $_pwd, $_DBname);

    if ($connect) {
        return $connect; 
    } else {
       echo "error";
    }
    
    //var_dump($connect);
    
}

