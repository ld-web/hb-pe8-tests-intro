<?php

require_once __DIR__ . '/verificationPassword.php';

// 1 - Je définis mon jeu de données
// Donc les données sur lesquelles vont s'appliquer les tests
$data = [
    "Test1234" => true,
    "cxnio" => false,
    "Anael456" => true,
    "" => false
];

// 2 - Pour chacune de ces données, j'extraie la donnée et le résultat attendu
// Structure : donnée => résultat attendu
foreach ($data as $password => $expectedResult) {
    // 3 - J'exécute mon code avec la donnée courante
    $result = verificationPassword($password);

    try {
        // 4 - Une fois le code exécuté, j'asserte que le résultat est bien
        // celui auquel je m'attends
        assert($result === $expectedResult);
        echo "✅ $password" . PHP_EOL;
    } catch (AssertionError $e) {
        // 5 - Si "assert" n'a pas pu valider que le résultat était bien celui
        // escompté, alors je gère ça dans un bloc catch
        echo "🚫 $password : " . $e->getMessage() . PHP_EOL;
    }
}
