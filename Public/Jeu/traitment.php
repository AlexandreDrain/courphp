<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!array_key_exists('lettre', $_POST)) {
        var_dump("La lettre n'existe pas!");
    } elseif ($_POST['lettre'] === '') { //// La non-nullité
        var_dump("Il faut saisir une lettre");
    } elseif (strlen($_POST['lettre']) > 1) { //// Valeur maxi (1)
        var_dump("Le nom est trop long (max 1 caractères)");
    }
}