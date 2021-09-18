<?php

namespace arslanimamutdinov\ISOStandard3166;

class ISO3166Utility
{
    /**
     * @return Country[]
     */
    public function getAll(): array
    {
        return ISO3166::getAll();
    }

    public function getRawStandardsData(): array
    {
        return ISO3166::getRawStandardsData();
    }

    public function getByAlpha2(string $alpha2): ?Country
    {
        return ISO3166::getByAlpha2($alpha2);
    }

    public static function getByAlpha3(string $alpha3): ?Country
    {
        return ISO3166::getByAlpha3($alpha3);
    }

    public static function getByNumericCode(string $numericCode): ?Country
    {
        return ISO3166::getByNumericCode($numericCode);
    }
}
