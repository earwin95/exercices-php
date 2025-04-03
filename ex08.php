<?php

// Exercice 8 : Inverser une chaîne de caractères.
// Pseudo-code :
// pour i de longueur-1 à 0 faire
//   concaténer caractère à une nouvelle chaîne
// afficher la nouvelle chaîne



$chaine = "Bonjour bloubiboulga";
$newchaine ='';
    for ($i = strlen ($chaine) - 1; $i >= 0; $i--) {
        $newchaine .= $chaine[$i];
    }
echo ($newchaine);
?>

