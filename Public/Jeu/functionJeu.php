<?php


session_start();

function generatealea () {
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    return $alphabet[rand(0,25)];
    // echo $lettre;
}

$aleaLetter = generatealea();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST["lettre"] === $aleaLetter) {
        var_dump("Congrats you succeeded");
    }
}


$_SESSION["newSession"] = $aleaLetter;
echo $_SESSION["newSession"];
