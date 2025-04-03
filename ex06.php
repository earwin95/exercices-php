<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c


$nombre1 = 1347697467;
$nombre2 = 1346595458;
$nombre3 = 1256489665;

if ($nombre1 >= $nombre2 && $nombre1 >= $nombre3) {
    echo "le plus grand nombre est : $nombre1";
} else if ($nombre2 >= $nombre1 && $nombre2 >= $nombre3) {
    echo "Le plus grand nombre est : $nombre2";
} else {
    echo "le plus grand nombre est : $nombre3";
}
?>