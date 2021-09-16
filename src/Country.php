<?php

namespace arslanimamutdinov\ISOStandard3166;

class Country
{
    private $name;
    private $alpha2;
    private $alpha3;
    private $numericCode;

    public function __construct(string $name, string $alpha2, string $alpha3, string $numericCode)
    {
        $this->name = $name;
        $this->alpha2 = $alpha2;
        $this->alpha3 = $alpha3;
        $this->numericCode = $numericCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAlpha2(): string
    {
        return $this->alpha2;
    }

    public function getAlpha3(): string
    {
        return $this->alpha3;
    }

    public function getNumericCode(): string
    {
        return $this->numericCode;
    }
}
