<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cour PHP</title>
</head>
<body>

<h1>Ma page</h1>

<?php

    echo 'Bonjour';
    $bl1 = 1.55;
    $isPublished = true;

    $content = "<p>Contenu de mon paragraphe : $bl1</p>"; // interprete du code
    $content2 = '<p>Contenu de mon paragraphe : $bl1</p>'; // n'interprete pas

    echo $content;
    echo $content2;

    // Les constantes
    const NB_ARTICLE_PER_PAGE = 6;

    echo NB_ARTICLE_PER_PAGE;

    /*On ne modifie pas une constante
     NB_ARTICLE_PER_PAGE = 12; */

    echo "<br>";
    echo __LINE__;
    echo "<br>";

    $cpt = 0;
    $cpt++;
    echo $cpt;
    echo "<br>";
    echo "compteur avant :" . ++$cpt;
    echo "<br>";

    $nb = 1;
    $result = (1 == $nb);
    echo "Résultat : " . $result . "|";
    var_dump($result);


    $lastName = "Alex";
    $name = $firstName ?? $lastName;
    echo $name;

    $test = true;
    echo !$test;

    $result2 = ($test === true) ? 'oui' : 'non';

    /*if($test === true) {
        $result2 = 'oui';
    } else {
        $result2 = 'non'
    }*/ // Cette condition revient à faire la même chase que la ligne du dessus.

    $day = "vendredi";
    if($day === "samedi" || $day === "dimanche") {
        echo "<p>C'est le week-end !</p>";
    }elseif ($day === "vendredi") {
        echo "<p>C'est bientôt le week-end!</p>";
    }else {
        echo "<p>Ce n'est pas le week-end...</p>";
    }

    //---------------------EXERCICE--------------------------

    $temp = 20;
    if ($temp < 0) {
        echo "<p>Il fait vraiment super froid...</p>";
    }elseif ($temp < 20) {
        echo "<p>Il fait frais sortez les gilets</p>";
    }elseif ($temp < 50){
        echo "<p>Il fait chaud, presque la canicule !</p>";
    }else {
        echo "<p>On brûle!!</p>";
    }

    $day2 = "lundi";

    switch($day2){

        case 'vendredri' :
            echo 'c\'est presque le week-end';
            break;
        case 'samedi' :
            echo 'Nous sommes le wekk-end';
            break;
        case 'dimanche' :
            echo 'Nous sommes le week-end';
            break;
        default :
            echo 'Nous ne sommes pas le week-end';
            break;
    }

?>


</body>
</html>





















