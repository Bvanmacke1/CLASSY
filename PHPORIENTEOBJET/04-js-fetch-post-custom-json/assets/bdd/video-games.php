<?php

include_once 'getter.php';
include_once 'setter.php';

# J'appel mon fichier qui contient ma fonction de connection à la base de donnée
require_once 'connectDb.php';
$bdd = connectDb();

$json_post = json_decode(file_get_contents('php://input'), true); // Réception de json en POST ...
/*
print_r($json_post);
var_dump($_POST);
var_dump($_GET);
*/

if ((count($_GET) === 0) && (count($json_post) === 0)) {
    getAllGames($bdd);
} else {

    if (count($_GET) > 0) {
        $console = $_GET['console'];
        $consoleList = $_GET['consoleList'];
        if (isset($console)) {
            getGamesbyConsole($bdd, $console);
        } elseif (isset($consoleList) && $consoleList === 'true') {
            getConsoles($bdd);
        } else {
            // Affichage du résultat au format json :
            header('Content-Type: application/json');
            echo json_encode(["error-msg" => "sorry, we don't understand what you are looking for..."]);
        }
    } elseif (count($json_post) > 0) {
        // var_dump($_POST);
        $theGameName = $json_post['game_name'];
        $theOwner = $json_post['game_owner'];
        $theConsole = $json_post['game_console'];
        $theComment = $json_post['game_comment'];
        addNewConsole($bdd, $theGameName, $theOwner, $theConsole, $theComment);
    }
}
