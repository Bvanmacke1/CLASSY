<?php

function addNewConsole($bdd, $theGameName, $theOwner, $theConsole, $theComment)
{

    if ($stmt = mysqli_prepare($bdd, "INSERT INTO jeux_video (nom, possesseur, console, commentaires) VALUES (?,?,?,?)")) {

        # bind parameters for markers 
        mysqli_stmt_bind_param($stmt, "ssss", $theGameName, $theOwner, $theConsole, $theComment);

        # execute query 
        mysqli_stmt_execute($stmt);

        # close statement 
        mysqli_stmt_close($stmt);

        # close connection 
        mysqli_close($bdd);


        header('Content-Type: application/json');
        echo json_encode(["succes" => "Enregistrement OK"]);
    }
}
