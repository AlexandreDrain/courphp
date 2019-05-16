<?php
require "functionJeu.php"; // récuperation des fonctions.
session_start();



if (!array_key_exists("letter", $_SESSION)) {
    $_SESSION["letter"] = generateAlea();
    $_SESSION["compteur"] = 0;
}
var_dump($_SESSION["letter"]);



if ($_SERVER["REQUEST_METHOD"] === "POST") {


    if (!array_key_exists('lettre', $_POST)) {
        var_dump("La lettre n'existe pas!");
    } elseif ($_POST['lettre'] === '') { //// La non-nullité
        var_dump("Il faut saisir une lettre");
    }   if (array_key_exists('lettre', $_POST)){

        if ($_POST["lettre"] === $_SESSION["letter"]) {
            var_dump("Congrats you succeeded");
            $_SESSION["compteur"] = 0;
        }else {
            var_dump("retry");
            $_SESSION["compteur"] = $_SESSION["compteur"] + 1;

        }
    }
var_dump( $_SESSION["compteur"]);



}





