<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\utilities;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

/**
 * Class ISO3166UtilityTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit\utilities
 * @group standard-3166-utilities
 */
class ISO3166UtilityTest extends TestCase
{
    /**
     * @var ISO3166Utility
     */
    private $ISO3166Utility;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ISO3166Utility = new ISO3166Utility();
    }

    public function testAllStandardsImplementedAlpha2Function(): void
    {
        $countries = ISO3166::getAll();

        $standardUtilityClassFunctionNames = $this->getStandardUtilityClassFunctionNames();
        $countriesStandardsAlpha2 = $this->getCountriesStadardsAlpha2($countries);

        foreach ($countriesStandardsAlpha2 as $countryStandardAlpha2) {
            $this->assertTrue(
                in_array($countryStandardAlpha2, $standardUtilityClassFunctionNames),
                sprintf('Standard function for %s country not implemented', $countryStandardAlpha2)
            );
        }
    }

    /**
     * @param Country[] $countries
     * @return string[]
     */
    private function getCountriesStadardsAlpha2(array $countries): array
    {
        return array_map(
            function (Country $country): string {
                return $country->getAlpha2();
            },
            $countries
        );
    }

    private function getStandardUtilityClassFunctionNames(): array
    {
        return array_map(
            function (ReflectionMethod $method): string {
                return $method->getName();
            },
            $this->getStandardUtilityClassFunctions()
        );
    }

    /**
     * @return ReflectionMethod[]
     */
    private function getStandardUtilityClassFunctions(): array
    {
        return (new ReflectionClass(ISO3166Utility::class))->getMethods();
    }
}
