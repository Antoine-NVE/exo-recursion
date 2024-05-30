<?php

$composants = [0.8, 2.17, 0.02, 3.5, 4.6, 2.0, 1.99];

function compterComposantsValides(array $composants, int $index = 0): int
{
    // Si on est arrivé au bout de l'array, on arrête
    if (!array_key_exists($index, $composants)) {
        return 0;
    }

    // On vérifie si la valeur est inférieure à 2
    if ($composants[$index] < 2) {
        return compterComposantsValides($composants, $index + 1) + 1;
    } else {
        return compterComposantsValides($composants, $index + 1);
    }
}

$nombreComposantsValides = compterComposantsValides($composants);

echo $nombreComposantsValides;
