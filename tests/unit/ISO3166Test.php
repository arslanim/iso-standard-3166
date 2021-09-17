<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class ISO3166Test
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166Test extends TestCase
{
    public function testAllCountryStandardsImplementedAsFunctionAlpha2(): void
    {
        $standardFunctionsPhpDoc = $this->getStandardFunctionsPhpDoc();

        $this->assertEquals(count($standardFunctionsPhpDoc), count(array_unique($standardFunctionsPhpDoc)));
    }

    public function testUniqueCountries(): void
    {
        $reflectionClass = new ReflectionClass(ISO3166::class);
        $constants = $reflectionClass->getConstants();
        $countries = $constants['COUNTRIES'] ?? null;

        $this->assertIsArray($countries);
        $this->assertEquals($countries, array_unique($countries, SORT_REGULAR));
    }

    public function testCountriesListEqualsToStandardList(): void
    {
        $reflectionClass = new ReflectionClass(ISO3166::class);
        $constants = $reflectionClass->getConstants();
        $countriesData = $constants['COUNTRIES'] ?? [];

        $countries = ISO3166::getAll();

        $this->assertStandardsEqualsToList($countriesData, $countries);
    }

    /**
     * @param array $countriesData
     * @param Country[] $countries
     */
    private function assertStandardsEqualsToList(array $countriesData, array $countries): void
    {
        $this->assertEquals(count($countriesData), count($countries));

        for ($i = 0; $i < count($countriesData); $i++) {
            $this->assertInstanceOf(Country::class, $countries[$i]);
            $this->assertCountryDataEqualCountryAttributes($countries[$i], $countriesData[$i]);
        }
    }

    private function assertCountryDataEqualCountryAttributes(Country $country, array $countryData): void
    {
        $this->assertEquals(
            $countryData[AttributeCodes::ATTRIBUTE_NAME],
            $country->getName()
        );
        $this->assertEquals(
            $countryData[AttributeCodes::ATTRIBUTE_ALPHA2],
            $country->getAlpha2()
        );
        $this->assertEquals(
            $countryData[AttributeCodes::ATTRIBUTE_ALPHA3],
            $country->getAlpha3()
        );
        $this->assertEquals(
            $countryData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE],
            $country->getNumericCode()
        );
    }

    private function getStandardFunctionsPhpDoc(): array
    {
        $pattern = "#(@[a-zA-Z]+\s*[a-zA-Z0-9, ()_].*)#";
        $classPhpDoc = (new ReflectionClass(ISO3166::class))->getDocComment();
        preg_match_all($pattern, $classPhpDoc, $matches, PREG_PATTERN_ORDER);
        array_shift($matches[0]);

        return $matches[0];
    }

    private function getStandardFunctionsPhpDocParts(array $standardFunctionsPhpDoc): array
    {
        return array_map(
            function (string $standardFunctionPhpDoc) {
                return $this->explodeStandardFunctionPhpDoc($standardFunctionPhpDoc);
            },
            $standardFunctionsPhpDoc
        );
    }

    private function explodeStandardFunctionPhpDoc(string $standardFunctionPhpDoc): array
    {
        return explode(' ', $standardFunctionPhpDoc);
    }
}
