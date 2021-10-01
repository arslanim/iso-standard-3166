<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetAllByNameValuesTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetAllByNameValuesTest extends TestCase
{
    /**
     * @dataProvider getProvidedData
     * @param string[] $values
     * @param string[] $expectedNameResult
     */
    public function testGetAllByNameValues(array $values, array $expectedNameResult): void
    {
        $utilityResult = ISO3166::getAllByNames($values);
        $serviceResult = (new ISO3166Utility())->getAllByNames($values);

        $this->assertGetAllByNameValues($utilityResult, $expectedNameResult);
        $this->assertGetAllByNameValues($serviceResult, $expectedNameResult);
        $this->assertEquals($utilityResult, $serviceResult);
    }

    public function getProvidedData(): array
    {
        return [
            [
                'values' => ['Saint Vincent and the Grenadines', 'Samoa', 'San Marino',],
                'expectedAlpha2Result' => ['Saint Vincent and the Grenadines', 'Samoa', 'San Marino',],
            ],
            [
                'values' => ['FOO', 'Samoa', 'San Marino',],
                'expectedAlpha2Result' => ['Samoa', 'San Marino',],
            ],
            [
                'values' => ['FOO', 'Samoa',],
                'expectedAlpha2Result' => ['Samoa',],
            ],
            [
                'values' => ['Saint Vincent and the Grenadines', 'FOO', 'San Marino',],
                'expectedAlpha2Result' => ['Saint Vincent and the Grenadines', 'San Marino',],
            ],
            [
                'values' => ['Saint Vincent and the Grenadines',],
                'expectedAlpha2Result' => ['Saint Vincent and the Grenadines',],
            ],
            [
                'values' => [],
                'expectedAlpha2Result' => [],
            ],
            [
                'values' => ['FOO',],
                'expectedAlpha2Result' => [],
            ],
        ];
    }

    /**
     * @param Country[] $countries
     * @param string[] $expectedNameResult
     */
    private function assertGetAllByNameValues(array $countries, array $expectedNameResult): void
    {
        $this->assertEquals(count($expectedNameResult), count($countries));

        for ($i = 0; $i < count($countries); $i++) {
            $this->assertInstanceOf(Country::class, $countries[$i]);
            $this->assertTrue(in_array($countries[$i]->getName(), $expectedNameResult));
        }
    }
}
