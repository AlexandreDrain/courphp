<?php

    require("inc/header.php");

?>
<h1 class="text-white bg-dark">Ma page</h1>

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

    define("ALEX", "Salut je m'appelle Alexandre Drain et j'ai 18ans");

    echo ALEX;

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

    // Les boucles
    // Objectif : créer une liste à puces (10 puces)

    echo "<ul>";
    $i = 0;
    while($i<=10) {
        echo "<li>Puce $i</li>";
        $i++;
    }
    echo "</ul>";

    /*echo "<ul>"; // pareil que le while
    for($i = 0; $i < 10; $i++){
        echo "<li>Puce $i</li>";
    }
    echo "</ul>";*/

    // tableau indexé.
    $fruits = ["kiwi", "pamplemousse", "Citron", "Ananas", "orange", "Banane", "Fruit de la passion", "Litchi"];
    echo "<ul>";
    foreach($fruits as $clef => $fruit) { // si on veut supprimer des fruits utiliser un if dans la boucle.
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    // tableau associatif.
    $people = [
            "firsName" => "John",
            "lastName" => "Doe",
            "age" => "34"
    ];


?>

<table>
    <thead>
    <tr>
        <th></th>
        <?php
            foreach ($people as $key => $value) {
                echo "<td>$key</td>";
            }
        ?>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th></th>
        <?php
            foreach ($people as $value) {
                echo "<td>$value</td>";
            }
        ?>
        <th></th>
    </tr>
    </tbody>
</table>

<?php
require("inc/footer.php");
?>




















