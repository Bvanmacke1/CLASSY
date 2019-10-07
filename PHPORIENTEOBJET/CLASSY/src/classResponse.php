<?php

class Response
{

    public function send(string $body, int $status=200){
        // definir le status
        http_response_code($status);
        // ecrire les entetes
        header('Content-type: text/plain');

        echo $body;
    }
}