<?php
// DataBaseConnexion.php
namespace App;

class DatabaseConnexion 
{

    
    private $dsn;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dsn, string $username, string $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password= $password;
    }


    public function connect()
    {
         $this->pdo = new \PDO ($this->dsn, $this->username, $this->password, array(\PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION));
    }
    public function getPdo()
    {
        return $this->pdo;
    }
   
}