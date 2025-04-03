<?php

// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'


$mot = "poiuytreza";
$motInverse = strrev($mot);
if ($mot == $motInverse){
    echo $mot . " est un palindrome.";
} else {
    echo $mot . " n'est pas un palindrome.";
}
