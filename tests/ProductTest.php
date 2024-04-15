<?php

namespace App\Tests;

// FQCN (Fully Qualified Class Name)
// => Nom de classe pleinement qualifié
// => en gros, le "chemin absolu" vers la classe
// Donc avec tous ses espaces de noms
use App\Product;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

// La classe doit finir par Test pour être reconnue par PHPUnit
class ProductTest extends TestCase
{
    // Les méthodes de tests doivent commencer par "test" pour être
    // reconnues par PHPUnit
    public function testProductCreation()
    {
        $product = new Product("produit", 50);
        $this->assertInstanceOf(Product::class, $product);
        $this->assertFalse($product->getDiscount());
    }

    public function testEmptyNameOnConstructShouldThrowError()
    {
        $this->expectException(InvalidArgumentException::class);
        new Product("", priceVatFree: 50);
    }
}
