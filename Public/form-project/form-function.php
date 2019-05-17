<?php

/**
 * @param string $key La clef dans $_POST
 * @param int $max Valeur max de caractères accépté
 * @return string Valeur de sortie
 */
function checkPostText(string $key, int $max): string
{
    if (!array_key_exists($key, $_POST) || empty($_POST[$key])) { // on met "empty" et non pas  " == '' " pour que ça marche dans ce cas .
        $message = "Le $key n'existe pas!";
    } elseif (strlen($_POST[$key]) > $max) { //// Valeur maxi (65535)
        $message = "Le $key est trop long (max $max caractères)";
    }
    // On retourne l'éventuel message ou une chaîne de caractères vide
    return $message ?? '';
}

/**
 * @param string $key La clef dans $_POST
 * @param float $min Valeur min accépté
 * @param float $max Valeur max accépté
 * @param bool $isFloat
 * @return string Valeur de sortie
 */
function checkPostNbr(string $key, float $min, float $max, bool $isFloat): string
{
    if (!array_key_exists("$key", $_POST) || ($_POST["$key"]) === '' || is_null($_POST[$key])) {
        $message = "Le $key n'existe pas !";
    } elseif (!is_numeric($_POST["$key"])) {
        $message = "Veuillez saisir un nombre !";
    } else {
        if ($isFloat) {
            $_POST["$key"] = floatval($_POST["$key"]);
        } else {
            $_POST["$key"] = intval($_POST["$key"]);
        }

        //// Valeur mini (0)
        if ($_POST["$key"] < $min) {
            $message = "Le $key doit être positif !";
        }
        //// Valeur maxi
        if ($_POST["$key"] > $max) {
            $message = "Le $key doit être inférieur à $max !";
        }
    }
    return $message ?? '';
}

/**
 * @param string $key La clef dans $_POST
 */
function checkPostradio(string $key): void
{
    if (!array_key_exists("$key", $_POST)) {
        $_POST["$key"] = false;
    } else {
        $_POST["$key"] = true;
    }
}

/**
 * @param string $key La clef dans $_POST
 * @return string Valeur en entré
 */
function checkPostDate(string $key)
{
    if (!array_key_exists("$key", $_POST) || empty($_POST["$key"])) {
        $message = "La date de création de la $key n'existe pas!";
    } else {
        //On décompose la date de création en trois parties
        $tabdate = explode("-", $_POST["$key"]);
        // On vérifie qu'on est bien les 3 composantes de la date
        if (
            sizeof($tabdate) === 3 ||
            !checkdate($tabdate[1], $tabdate[2], $tabdate[0])
        ) {
            $message = "Il faut saisir une $key valide";
        }
    }
    return $message ?? '';
}