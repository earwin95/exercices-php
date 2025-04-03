<?php

// Exercice 10 : Trouver la somme des chiffres d’un nombre.
// Pseudo-code :
// somme = 0
// tant que n > 0 faire
//   somme += n % 10
//   n = n // 10
// afficher somme

$somme = 0;
$n = 123456;
while($n > 0) {
    $somme += $n % 10;
    $n = intval($n / 10);
}
echo "la somme des chiffres de " . $n . " est " . $somme . "<br>";
?>

