<?php
// Livre.php

namespace materiel;

/*require "SupportDeCours.php"; */
class Livre extends SupportDeCours{
    public function imprimer() {
        echo "<br> ** impression de " .$this->titre. "** <br>";
    }
}
