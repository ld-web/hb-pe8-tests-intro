<?php

function verificationPassword(string $input): bool
{
    $lowercase = preg_match('/[a-z]+/', $input); // au moins une minuscule
    $uppercase = preg_match('/[A-Z]+/', $input); // au moins une majuscule
    $number    = preg_match('/[0-9]+/', $input); // au moins un chiffre
    $length    = strlen($input); // longueur minimum à vérifier ensuite

    return (
        $lowercase === 1 &&
        $uppercase === 1 &&
        $number    === 1 &&
        $length    >=  8
    );
}
