<?php

require_once '../src/classResponse.php';
require_once '../src/UrlReader.php';


// regarder dans l'url : le reader nous recupere l'id

$reader = new urlReader();
// TODO mettre la construction de la réponse dans une classe
try{
    $id = $reader->parse();
    //echo $id;
}
catch(Exception $e){

    $response = new Response();
    $response->send('cette page n\'existe pas', 404);
    // tout est terminé j'arrete : die
    die;
}
 
// création de l'objet $response 

$response = new Response();
$response->send('coucou ca marche');
