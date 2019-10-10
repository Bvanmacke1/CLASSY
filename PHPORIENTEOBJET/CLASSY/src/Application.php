<?php

namespace App;

use App\Exception\NotFoundException;
use App\database\DataBaseConnexion;



class Application{

    public function run()
    {
         // decoder du json 
        $config = json_decode(file_get_contents(__DIR__.'/../config/database.json'));
        // creation de l'objet de connexion
        $connection = new DataBaseConnexion(
             $config->dsn,
             $config->username, 
             $config->password
            );

     // regarder dans l'url
         $reader = new UrlReader();
    
       try{

           $config = $reader->parse();
           $controller = new Controller($connection);

           $response = call_user_func_array([$controller, $config->getMethod()],
           $config->getArgs()
           );

          }
         catch(NotFoundException $e)
         {
          $response = new Response ($e->getMessage(), 404);
          // tout est terminé j'arrete : die
          //die;
          }
        return $response;
    }
}
