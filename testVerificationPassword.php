<?php

require_once __DIR__ . '/verificationPassword.php';

$data = [
    "Test1234" => true,
    "cxnio" => false,
    "Anael456" => true,
    "" => false
];

foreach ($data as $password => $expectedResult) {
    $result = verificationPassword($password);

    if ($result !== $expectedResult) {
        echo "🚫 Le test sur $password ne donne pas le résultat attendu" . PHP_EOL;
    } else {
        echo "✅ $password" . PHP_EOL;
    }
}
