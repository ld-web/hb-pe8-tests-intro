<?php

namespace App;

use InvalidArgumentException;

class Product
{
    // CONSTANTES
    private const TVA_RATE = 0.2;

    // PROPRIÉTÉS
    public function __construct(
        private string $name,
        private float $priceVatFree,
        private bool $discount = false
    ) {
        if (empty($name)) {
            throw new InvalidArgumentException();
        }
    }

    // MÉTHODES
    public function getTotalPrice(): float
    {
        return $this->priceVatFree * (1 + self::TVA_RATE);
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPriceVatFree(): float
    {
        return $this->priceVatFree;
    }
    public function setPriceVatFree($priceVatFree): self
    {
        $this->priceVatFree = $priceVatFree;
        return $this;
    }

    public function getDiscount(): bool
    {
        return $this->discount;
    }
    public function setDiscount(bool $discount): self
    {
        $this->discount = $discount;
        return $this;
    }
}
