<?php

namespace arslanimamutdinov\ISOStandard3166;

use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use arslanimamutdinov\ISOStandardUtilities\StandardSearchUtility;

/**
 * Class ISO3166
 * @package arslanimamutdinov\ISOStandard3166
 * @method static Country RU()
 */
abstract class ISO3166
{
    private const COUNTRIES = [
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Russian Federation',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'RU',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'RUS',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '643',
        ],
    ];

    public static function __callStatic($name, $arguments)
    {
        $countryData = StandardSearchUtility::getByAlpha2(self::COUNTRIES, $name) ??
            StandardSearchUtility::getByAlpha3(self::COUNTRIES, $name) ??
            null;

        return !empty($countryData) ? self::createCountry($countryData) : null;
    }

    /**
     * @return Country[]
     */
    public static function getAll(): array
    {
        return array_map(
            function (array $countryData): Country {
                return self::createCountry($countryData);
            },
            array_values(self::COUNTRIES)
        );
    }

    public function getByAlpha2(string $alpha2): ?Country
    {
        $standardData = StandardSearchUtility::getByAlpha2(self::COUNTRIES, $alpha2);

        return !empty($standardData) ? self::createCountry($standardData) : null;
    }

    private static function createCountry(array $countryData): Country
    {
        return (
            new Country(
                $countryData[AttributeCodes::ATTRIBUTE_NAME],
                $countryData[AttributeCodes::ATTRIBUTE_ALPHA2],
                $countryData[AttributeCodes::ATTRIBUTE_ALPHA3],
                $countryData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE]
            )
        );
    }
}
