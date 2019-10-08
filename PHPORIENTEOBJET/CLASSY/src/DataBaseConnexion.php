<?php
// DataBaseConnexion.php

class DatabaseConnexion 
{

    
    private $dsn;
    private $username;
    private $password;

    public function __construct(string $dsn, string $username, string $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password= $password;
    }


    public function connect()
    {
          new PDO ($dsn, $user, $password, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    }
   
}