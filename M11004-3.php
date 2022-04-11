<?php

// Exercice 3
$magnitude = 2;
switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
        // ...
    default:
        echo "Autre";
}
