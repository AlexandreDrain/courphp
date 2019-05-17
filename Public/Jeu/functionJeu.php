<?php
/**
 * @return string Lettre aléatoire
 */
function generateAlea(): string
{ // cette fonction créé l'alphabet, on génére un nombre aléatoire entre 0 et 25, puis on retourne une lettre aléatoire

    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    return $alphabet[rand(0, 25)];
}

