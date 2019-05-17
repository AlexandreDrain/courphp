<?php
require "functionJeu.php"; // récuperation des fonctions.
session_start();


if (!array_key_exists("letter", $_SESSION)) {
    $_SESSION["letter"] = generateAlea();
    $_SESSION["compteur"] = 0;
}
// var_dump($_SESSION["letter"]);

// création du message de renvoi a l'utilisateur
$resultMsg = "";
$resultCpt = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    if (!array_key_exists('lettre', $_POST) || $_POST['lettre'] === '') {
        var_dump("La lettre n'existe pas!");
    } elseif ($_POST["lettre"] === $_SESSION["letter"]) {
        var_dump("Congrats you succeeded");
        $_SESSION["compteur"] = 0;
        unset($_SESSION['letter']);
    } elseif ($_SESSION["compteur"] >= 10) {
        var_dump("bru u loose, Tap \"Enter\" to retry");
        var_dump("La lettre était : " . $_SESSION["letter"]);
        unset($_SESSION['letter']);
    } else {
        $resultMsg = "Vous avez essayé avec la lettre " . $_POST["lettre"] . " : retry.";
        $_SESSION["compteur"] += 1; // forme raccourcie de : $_SESSION["compteur"] = $_SESSION["compteur"] + 1;
    }

    $resultCpt = $_SESSION["compteur"];

}
