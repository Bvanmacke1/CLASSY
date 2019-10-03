<?php

namespace Blog {

    class Commentaire{
    public $texte;

    public function __toString(){
        return "Blog : ". $this->texte;

    }
}
}