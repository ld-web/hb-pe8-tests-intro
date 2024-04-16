<?php

// Importe l'autoloader généré par Composer
// avec 'composer dump-autoload'
require_once __DIR__ . '/vendor/autoload.php';

// Le require_once ci-dessus nous permet d'utiliser
// le mot-clé "use" : Composer ira chercher tout seul
// la classe correspondante
use App\Product;
use App\Voiture;

$product = new Product("Table", 54);

var_dump($product);

// --- Voitures ---

var_dump(Voiture::getEngines());

$voiture1 = new Voiture("Rouge");
var_dump($voiture1);
$voiture1->setName("Merco");
echo $voiture1->getName() . "<br />";
$voiture1->setName("BMW");
echo $voiture1->getName() . "<br />";
