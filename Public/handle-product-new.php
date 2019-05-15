<?php
// var_dump($_GET);
// var_dump($_POST);

// On vérifie que le formulaire a bien été soumis
// $_POST : les variables du formulaires (attribut HTML name)
// empty() : permet de tester "est-ce que c'est vide ?"
// empty($_POST) : si $_POST est vide
//
if ($_SERVER["REQUEST_METHOD"] === "POST"){

//// Test du nom,
//// L'existence
if (!array_key_exists('name', $_POST)) {
    var_dump("Le nom n'existe pas!");
} elseif ($_POST['name'] === '') { //// La non-nullité
        var_dump("Il faut saisir un nom");
    }elseif (strlen($_POST['name']) > 255) { //// Valeur maxi (255)
            var_dump("Le nom est trop long (max 255 caractères)");
}

if (!array_key_exists('description', $_POST)) {
    var_dump("La description n'existe pas!");
} elseif ($_POST['description'] === '') { //// La non-nullité
        var_dump("Il faut saisir un texte");
    }elseif (strlen($_POST['description']) > 65535) { //// Valeur maxi (65535)
            var_dump("Le texte est trop long (max 65535 caractères)");
}
//// Le type
// Pas de vérifications pour les chaînes de caractères


/* Test du prix */
//// Existence
if (!array_key_exists('prix', $_POST)) {
    var_dump("Le price n'existe pas !");
} else {
    //// La non-nullité
    if ($_POST['prix'] === '') {
        var_dump("Il faut saisir un prix !");
    } else {
        //// Le type
        if (!is_numeric($_POST['prix'])) {
            var_dump("Veuillez saisir un prix correct !");
        }
        $_POST['prix'] = floatval($_POST['prix']);
        //// Valeur mini (0)
        if ($_POST['prix'] < 0) {
            var_dump("Le prix doit être positif !");
        }
        //// Valeur maxi
        if($_POST['prix'] > 9999999.99) {
            var_dump("Le prix doit être inférieur à 10 millions !");
        }
    }
}

if (!array_key_exists("publie", $_POST)) {
    $_POST["publie"] = false;
}else {
    $_POST["publie"] = true;
    }

    // syntaxe alternative
    // $_POST["publie"] = (array_key_exists("publie"), $_POST);

 // var_dump($_POST);

if (!array_key_exists('date', $_POST)) {
    var_dump("La date de création de la date n'existe pas!");
} elseif ($_POST['date'] === '') { //// La non-nullité
    var_dump("Il faut saisir une date de création");
}else {
    //On décompose la date de création en trois parties
    $tabdate = explode("-", $_POST["date"]);
    // On vérifie qu'on est bien les 3 composantes de la date
    if (sizeof($tabdate) === 3){

        //On check si la date est correcte
    if (!checkdate($tabdate[1], $tabdate[2], $tabdate[0])) {
            var_dump("Il faut saisir une date valide");
    }
    } else {
            var_dump("Il faut saisir une date valide");
        }

}

if (!array_key_exists('view', $_POST)) {
    var_dump("Le nombre de vue n'existe pas !");
} else {
    //// La non-nullité
    if ($_POST['view'] === '') {
        var_dump("Il faut saisir un nombre de vue !");
    } else {
        //// Le type
        if (!is_numeric($_POST['view'])) {
            var_dump("Veuillez saisir un nombre de vue correct !");
        }
        $_POST['view'] = intval($_POST['view']);
        //// Valeur mini (0)
        if ($_POST['view'] < 0) {
            var_dump("Le nombre de vue doit être positif !");
        }
        //// Valeur maxi
        if($_POST['view'] > 19E19) {
            var_dump("Le nombre de vue doit être inférieur a 19e19 vues !");
        }
    }
}


/*$tab = ["banane", "pamplemousse", "kiwi"];
$str = implode(", ", $tab); // banane, pamplemousse, kiwi.
$tab = explode(", ", $str);
 exemple */

}