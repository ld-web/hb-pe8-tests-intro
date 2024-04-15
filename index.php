<?php

// Importe l'autoloader généré par Composer
// avec 'composer dump-autoload'
require_once __DIR__ . '/vendor/autoload.php';

// Le require_once ci-dessus nous permet d'utiliser
// le mot-clé "use" : Composer ira chercher tout seul
// la classe correspondante
use App\Product;

$product = new Product("Table", 54);

var_dump($product);
