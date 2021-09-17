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
    private const STANDARD_FUNCTION_PHPDOC_METHOD = '@method';
    private const STANDARD_FUNCTION_PHPDOC_MODIFIER = 'static';
    private const STANDARD_FUNCTION_PHPDOC_RETURN_TYPE = 'Country';

    private const STANDARD_FUNCTION_PHPDOC_METHOD_INDEX = 0;
    private const STANDARD_FUNCTION_PHPDOC_MODIFIER_INDEX = 1;
    private const STANDARD_FUNCTION_PHPDOC_RETURN_TYPE_INDEX = 2;
    private const STANDARD_FUNCTION_PHPDOC_FUNCTION_NAME_INDEX = 3;

    public function testAllCountryStandardsImplementedAsFunctionAlpha2(): void
    {
        $standardFunctionsPhpDoc = $this->getStandardFunctionsPhpDoc();
        $countries = ISO3166::getAll();

        $this->assertAllCountryStandardsImplementedAsFunctionAlpha2($standardFunctionsPhpDoc, $countries);
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

    public function testSuccessGetByAlpha2(): void
    {
        $country = ISO3166::getByAlpha2('RU');

        $this->assertInstanceOf(Country::class, $country);
    }

    public function testFailGetByAlpha2(): void
    {
        $country = ISO3166::getByAlpha2('foo');

        $this->assertNull($country);
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

    /**
     * @param array $standardFunctionsPhpDoc
     * @param Country[] $countries
     */
    private function assertAllCountryStandardsImplementedAsFunctionAlpha2(
        array $standardFunctionsPhpDoc,
        array $countries
    ): void {
        $standardFunctionsPhpDocParts = $this->getStandardFunctionsPhpDocParts($standardFunctionsPhpDoc);

        $this->assertEquals(
            count($standardFunctionsPhpDocParts),
            count($countries),
            'Countries php doc functions count not equal to countries standard list count'
        );
        $this->assertStandardFunctionsPhpDocParts($standardFunctionsPhpDocParts);
        $this->assertFunctionPhpDocForCountriesStandardDeclared($countries, $standardFunctionsPhpDocParts);
    }

    private function isExistCountryStandardAlpha2ByFunctionName(
        Country $country,
        array $standardFunctionsPhpDocParts
    ): bool {
        foreach ($standardFunctionsPhpDocParts as $standardFunctionsPhpDocPart) {
            $countryAlpha2FunctionName = $standardFunctionsPhpDocPart[self::STANDARD_FUNCTION_PHPDOC_FUNCTION_NAME_INDEX];

            if (sprintf('%s()', $country->getAlpha2()) === $countryAlpha2FunctionName) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param Country[] $countries
     * @param array $standardFunctionsPhpDocParts
     */
    private function assertFunctionPhpDocForCountriesStandardDeclared(
        array $countries,
        array $standardFunctionsPhpDocParts
    ): void {
        foreach ($countries as $country) {
            $this->assertTrue(
                $this->isExistCountryStandardAlpha2ByFunctionName($country, $standardFunctionsPhpDocParts),
                sprintf('Function php doc for country alpha2 code %s not declared', $country->getAlpha2())
            );
        }
    }

    private function assertStandardFunctionsPhpDocParts(array $standardFunctionsPhpDocParts): void
    {
        foreach ($standardFunctionsPhpDocParts as $standardFunctionsPhpDocPart) {
            $this->assertEquals(
                $standardFunctionsPhpDocPart[self::STANDARD_FUNCTION_PHPDOC_METHOD_INDEX],
                self::STANDARD_FUNCTION_PHPDOC_METHOD,
                sprintf('Country php doc function missing declaration %s', self::STANDARD_FUNCTION_PHPDOC_METHOD)
            );
            $this->assertEquals(
                $standardFunctionsPhpDocPart[self::STANDARD_FUNCTION_PHPDOC_MODIFIER_INDEX],
                self::STANDARD_FUNCTION_PHPDOC_MODIFIER,
                sprintf('Country php doc function missing declaration %s', self::STANDARD_FUNCTION_PHPDOC_MODIFIER)
            );
            $this->assertEquals(
                $standardFunctionsPhpDocPart[self::STANDARD_FUNCTION_PHPDOC_RETURN_TYPE_INDEX],
                self::STANDARD_FUNCTION_PHPDOC_RETURN_TYPE,
                sprintf('Country php doc function missing declaration %s', self::STANDARD_FUNCTION_PHPDOC_RETURN_TYPE)
            );
            $this->assertNotEmpty(
                $standardFunctionsPhpDocPart[self::STANDARD_FUNCTION_PHPDOC_FUNCTION_NAME_INDEX] ?? null,
                'Country php doc function missing declaration of country function name'

            );
        }
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
