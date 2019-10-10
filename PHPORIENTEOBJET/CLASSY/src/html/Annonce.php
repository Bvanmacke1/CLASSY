<?php

namespace App\html;


class Annonce
{
    public function build(\App\Annonce $annonce): string
    {
        // buffer
        ob_start();
        include APP_DIR . '/templates/annonce.phtml';
        return ob_get_clean();
    }
        public function buildAll(array $annonces)
    {
        // buffer
        ob_start();
        include APP_DIR.'/templates/index.phtml';
        return ob_get_clean();
    }

}