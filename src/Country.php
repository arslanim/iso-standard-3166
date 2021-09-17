<?php

namespace arslanimamutdinov\ISOStandard3166;

use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardAlpha2EmptyException;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardAlpha3EmptyException;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardNameEmptyException;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardNumericCodeEmptyException;

class Country
{
    private $name;
    private $alpha2;
    private $alpha3;
    private $numericCode;

    public function __construct(string $name, string $alpha2, string $alpha3, string $numericCode)
    {
        $this->validateAttributes($name, $alpha2, $alpha3, $numericCode);

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

    private function validateAttributes(string $name, string $alpha2, string $alpha3, string $numericCode): void
    {
        if (empty($name)) {
            throw new CountryStandardNameEmptyException();
        }

        if (empty($alpha2)) {
            throw new CountryStandardAlpha2EmptyException();
        }

        if (empty($alpha3)) {
            throw new CountryStandardAlpha3EmptyException();
        }

        if (empty($numericCode)) {
            throw new CountryStandardNumericCodeEmptyException();
        }
    }
}
