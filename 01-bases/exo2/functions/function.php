<?php

function AfficheTableau ($array)
{
    foreach ($array as $key => $value) {
        echo '<p>'.$value. '</p>';
    }
}
