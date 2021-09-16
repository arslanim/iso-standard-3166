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
            AttributeCodes::ATTRIBUTE_NAME => 'Austria',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'AT',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'AUT',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '040',
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Germany',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'DE',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'DEU',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '276',
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Netherlands',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'NL',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'NLD',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '528',
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Poland',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'PL',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'POL',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '616',
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => 'Russian Federation',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'RU',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'RUS',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '643',
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => 'United Kingdom of Great Britain and Northern Ireland',
            AttributeCodes::ATTRIBUTE_ALPHA2 => 'GB',
            AttributeCodes::ATTRIBUTE_ALPHA3 => 'GBR',
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => '826',
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
