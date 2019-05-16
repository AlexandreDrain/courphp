<?php

// Déclaration de la fonction
function hello () {
    echo "<p>Bonjour</p>";
}
// appel de la fonction
Hello();

function helloPeople($nameSend) {
    echo "<p>Bonjour $nameSend</p>";
}

helloPeople("John");
helloPeople("Billy");
$nameSend = "Arthur";
helloPeople($nameSend);


function bonjourPeople ($name = "Inconnu") {
    echo "<p>Bonjour $name</p>";
}

bonjourPeople("Babar");
bonjourPeople();

function meteo ($saison, $temp1, $temp2) {
    $moytemp = ($temp1 + $temp2)/2;
    echo "<p>Nous sommes en $saison et il fait une moyenne de $moytemp C°</p>";
}

meteo("hiver","1","-2");


function minus($a, $b) {
    return $a - $b;
}

$result1 = minus(10, 20);
$result2 = minus(25, 15);
echo '<p>Résultat final : ' . minus($result2, $result1) . '</p>';


$nb1 = 10;
$nb2 = 3;

function mutiplication () {
    $nb1 = 50;
    $nb2 = 6;
    echo "Résultat : " . ($nb1 * $nb2); // ici il faut définir les variables en local, comme on l'a fait au dessus.
    //Où alors utiliser "global" avant d'appeler nos variables si on veut les appeler de l'exterieur
}

var_dump($nb1); // ici le résultat serait 10, puisque les variables définis dans une fucntion sont local et n'existe pas en dehors de lédit function.


/**
 * Division de nombre entiers
 * @param int $a mon premier nombre
 * @param int $b mon deuxieme nombre
 * @return float Résultat de la division
 */
function nombreflottant(int $a, int $b): float {
    return $a / $b;
}

nombreflottant(10,25);
$tab = ['banane', "kiwi"]; //Le calcul est stopé au début de la fonction car un tableau n'est pas un nombre "int" (entier)
// nombreflottant(10, $tab); illégal


//-------------EXERCICE (JEU DE LA LETTRE ALEATOIRE)--------------//

?>









