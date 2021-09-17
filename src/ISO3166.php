<?php

namespace arslanimamutdinov\ISOStandard3166;

use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use arslanimamutdinov\ISOStandardUtilities\StandardSearchUtility;

/**
 * Class ISO3166
 * @package arslanimamutdinov\ISOStandard3166
 * @method static Country AF()
 * @method static Country AX()
 * @method static Country RU()
 */
abstract class ISO3166
{
    private const COUNTRIES = [
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Afghanistan',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'AF',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'AFG',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '004',
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Aland Islands',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'AX',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'ALA',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '248',
        ],
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

    public static function getRawStandardsData(): array
    {
        return self::COUNTRIES;
    }

    public static function getByAlpha2(string $alpha2): ?Country
    {
        $standardData = StandardSearchUtility::getByAlpha2(self::COUNTRIES, $alpha2);

        return !empty($standardData) ? self::createCountry($standardData) : null;
    }

    public static function getByAlpha3(string $alpha3): ?Country
    {
        $standardData = StandardSearchUtility::getByAlpha3(self::COUNTRIES, $alpha3);

        return !empty($standardData) ? self::createCountry($standardData) : null;
    }

    public static function getByNumericCode(string $numericCode): ?Country
    {
        $standardData = StandardSearchUtility::getByNumericCode(self::COUNTRIES, $numericCode);

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
