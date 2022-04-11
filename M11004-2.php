<?php

$eleve = [
    "prenom" => "Maxime",
    "genre" => "M",
    "taille" => 157,
    "age" => 13,
    "notes" => [
        "Français" => [12, 14, 7, 11], // (14 + 12 + 7 + 11) / 4 = Moyenne
        "Anglais" => [14, 11, 9, 18],
        "Maths" => [7, 9, 11, 12]
    ]
];

// Vérifions maintenant quelques conditions :
//     Maxime est-il un garçon de moins de 17 ans ?
// if ($eleve["genre"] === "M" && $eleve["age"] < 17) :
//     echo "C'est un garçon de moins de 17 ans";
// else :
//     echo "Les conditions ne sont pas réunies";
// endif;


//     Mesure t-il plus de 1,57m ?
// $taille = 157;
// if ($eleve["taille"] > $taille) :
//     echo "{$eleve['prenom']} fait plus de $taille cm";
// else :
//     echo "{$eleve['prenom']} fait moins de $taille cm";
// endif;


//     Maxime possède t-il une moyenne en Français supérieure à 11 ?
$moyenneFrançais = array_sum($eleve["notes"]["Français"]) / count($eleve["notes"]["Français"]);
if ($moyenneFrançais > 11) {
    //...
} else {
    //...
}
//     Sa moyenne générale est-elle inférieur ou supérieure à 12 ?
$moyenneAnglais = array_sum($eleve["notes"]["Anglais"]) / count($eleve["notes"]["Anglais"]);
$moyenneMaths = array_sum($eleve["notes"]["Maths"]) / count($eleve["notes"]["Maths"]);
$moyenneGenerale = ($moyenneAnglais + $moyenneFrançais + $moyenneMaths) / count($eleve["notes"]);
// var_dump($moyenneGenerale);
//     Maxime est-il un garçon de plus de 12 ans mesurant plus de 1,52m ?
// if ($eleve["age"] > 12 and $eleve["taille"] > 152) {
//     //...
// } else {
//     //...
// }


//     Pour les plus courageux : (Facultatif)

//     Si Maxime est un garçon qui fait plus de 1,50m et a 13 ans ou plus, il faut alors afficher la moyenne des matières Français et Anglais uniquement, et l'afficher avec une note moyenne sur un barème de 100 pts.
if (($eleve["genre"] === "M") && ($eleve["taille"] > 150) && ($eleve["age"] >= 13)) {
    $moyenneAnglaisFrançais = (($moyenneFrançais + $moyenneAnglais) / 2) * 5;
    echo "La moyenne Franglais est de $moyenneAnglaisFrançais /100";
}
