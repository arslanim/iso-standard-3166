<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetAllByNumericCodeValuesTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetAllByNumericCodeValuesTest extends TestCase
{
    /**
     * @dataProvider getProvidedData
     * @param string[] $values
     * @param string[] $expectedNumericCodeResult
     */
    public function testGetAllByNumericCodeValues(array $values, array $expectedNumericCodeResult): void
    {
        $utilityResult = ISO3166::getAllByNumericCodes($values);
        $serviceResult = (new ISO3166Utility())->getAllByNumericCodes($values);

        $this->assertGetAllByAlpha3Values($utilityResult, $expectedNumericCodeResult);
        $this->assertGetAllByAlpha3Values($serviceResult, $expectedNumericCodeResult);
        $this->assertEquals($utilityResult, $serviceResult);
    }

    public function getProvidedData(): array
    {
        return [
            [
                'values' => ['850', '876', '732',],
                'expectedAlpha2Result' => ['850', '876', '732',],
            ],
            [
                'values' => ['FOO', '876', '732',],
                'expectedAlpha2Result' => ['876', '732',],
            ],
            [
                'values' => ['FOO', '876',],
                'expectedAlpha2Result' => ['876',],
            ],
            [
                'values' => ['850', 'FOO', '732',],
                'expectedAlpha2Result' => ['850', '732',],
            ],
            [
                'values' => ['850',],
                'expectedAlpha2Result' => ['850',],
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
     * @param string[] $expectedNumericCodeResult
     */
    private function assertGetAllByAlpha3Values(array $countries, array $expectedNumericCodeResult): void
    {
        $this->assertEquals(count($expectedNumericCodeResult), count($countries));

        for ($i = 0; $i < count($countries); $i++) {
            $this->assertInstanceOf(Country::class, $countries[$i]);
            $this->assertTrue(in_array($countries[$i]->getNumericCode(), $expectedNumericCodeResult));
        }
    }
}
