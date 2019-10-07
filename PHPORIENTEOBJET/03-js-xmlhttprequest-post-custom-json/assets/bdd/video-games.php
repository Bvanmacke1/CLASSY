<?php

include_once 'getter.php';
include_once 'setter.php';

# J'appel mon fichier qui contient ma fonction de connection à la base de donnée
require_once 'connectDb.php';
$bdd = connectDb();

/*
var_dump($_POST);
var_dump($_GET);
*/

if ((count($_GET) === 0) && (count($_POST) === 0)) {
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
    } elseif (count($_POST) > 0) {
        // var_dump($_POST);
        $theGameName = $_POST['game_name'];
        $theOwner = $_POST['game_owner'];
        $theConsole = $_POST['game_console'];
        $theComment = $_POST['game_comment'];
        addNewConsole($bdd, $theGameName, $theOwner, $theConsole, $theComment);
    }
}
