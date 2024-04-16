<?php

namespace App;

class Voiture
{
    public const ENGINES = ["Essence", "Diesel"];

    private string $name;
    private string $color;

    public function __construct(
        string $color
    ) {
        $this->color = $color;
    }

    public static function getEngines(): array
    {
        return self::ENGINES;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
