<?php
// var_dump($_GET);
// var_dump($_POST);

// On vérifie que le formulaire a bien été soumis
// $_POST : les variables du formulaires (attribut HTML name)
// empty() : permet de tester "est-ce que c'est vide ?"
// empty($_POST) : si $_POST est vide
require 'form-function.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //// Test du nom
    $errorMessageName = checkPostText('name', 255);
    var_dump("$errorMessageName");
    //// Test du Firstnom
    $errorMessageFirstName = checkPostText('firstname', 255);
    var_dump("$errorMessageFirstName");
    //// Test de la descritpion
    $errorMessageDsc = checkPostText('description', 65535);
    var_dump("$errorMessageDsc");

    //// Test du prix
    //// Existence
    $errorMessagePrice = checkPostNbr("prix", 0.1, 9999999.99, true);
    var_dump("$errorMessagePrice");

    checkPostradio("publie");

    // Date :
    $errorMessageDate = checkPostDate("date");
    var_dump("$errorMessageDate");

    $errorMessagePrice = checkPostNbr("view", 0, 19E19, false);
    var_dump("$errorMessagePrice");


    /*$tab = ["banane", "pamplemousse", "kiwi"];
    $str = implode(", ", $tab); // banane, pamplemousse, kiwi.
    $tab = explode(", ", $str);
     exemple */

}