<?php

function getAllGames($bdd){
        // Préparation de la requete SQL :
        $resultQuery = mysqli_query($bdd, "SELECT * FROM jeux_video ORDER BY id DESC; ");

        // Récupération du résultat de la requête :
        $videoGames = mysqli_fetch_all($resultQuery, MYSQLI_ASSOC);

        // Affichage du résultat au format json :
        header('Content-Type: application/json');
        echo json_encode($videoGames);
    }

    function getGamesbyConsole($bdd, $console){
        // Préparation de la requete SQL :
        $resultQuery = mysqli_query($bdd, "SELECT * FROM jeux_video WHERE console = '$console' ORDER BY id ASC; ");

        // Récupération du résultat de la requête :
        $videoGames = mysqli_fetch_all($resultQuery, MYSQLI_ASSOC);

        // Affichage du résultat au format json :
        header('Content-Type: application/json');
        echo json_encode($videoGames);
    }

    function getConsoles($bdd){
        /* V1 */
        // Préparation de la requete SQL :        
        $resultQuery = mysqli_query($bdd, "SELECT console FROM jeux_video; ");

        // Récupération du résultat de la requête :
        $videoGames = mysqli_fetch_all($resultQuery, MYSQLI_ASSOC);
        
        // suppression des doublons :
        // > récupération des noms
        $tempArray = [];
        foreach ($videoGames as $videoGame) {
            $tempArray[]=$videoGame['console'];
        }
        // > suppresion des doublons : array_unique
        // > réindexation du tableau sans les doublons : array_values
        $tempArray2 = array_values(array_unique($tempArray));

        // > range dans l'ordre alphabétique le tableau retourné
        sort($tempArray2);
        $cleanList = [];
        foreach ($tempArray2 as $value) {
            $cleanList[] = ["console"=>$value];
        }
        // Affichage du résultat au format json :
        header('Content-Type: application/json');
        echo json_encode($cleanList);
        /* */


        /* V2 * /
        // Préparation de la requete SQL :
        $resultQuery = mysqli_query($bdd, "SELECT DISTINCT console FROM jeux_video ORDER BY console ASC ");
        // Récupération du résultat de la requête :
        $videoGames = mysqli_fetch_all($resultQuery, MYSQLI_ASSOC);
        // > range dans l'ordre alphabétique le tableau retourné
        sort($cleanList);
        // Affichage du résultat au format json :
        header('Content-Type: application/json');
        echo json_encode($videoGames);
        /* */
    }