<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class GetAllByAlpha2ValuesTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetAllByAlpha2ValuesTest extends TestCase
{
    /**
     * @dataProvider getProvidedData
     * @param string[] $values
     * @param string[] $expectedAlpha2Result
     */
    public function testGetAllByAlpha2Values(array $values, array $expectedAlpha2Result): void
    {
        $utilityResult = ISO3166::getAllByAlpha2Codes($values);

        $this->assertGetAllByAlpha2Values($utilityResult, $expectedAlpha2Result);
    }

    public function getProvidedData(): array
    {
        return [
            [
                'values' => ['RU', 'BA', 'BW',],
                'expectedAlpha2Result' => ['RU', 'BA', 'BW',],
            ],
            [
                'values' => ['FOO', 'BA', 'BW',],
                'expectedAlpha2Result' => ['BA', 'BW',],
            ],
            [
                'values' => ['FOO', 'BA',],
                'expectedAlpha2Result' => ['BA',],
            ],
            [
                'values' => ['RU', 'FOO', 'BW',],
                'expectedAlpha2Result' => ['RU', 'BW',],
            ],
            [
                'values' => ['RU',],
                'expectedAlpha2Result' => ['RU',],
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
     * @param string[] $expectedAlpha2Result
     */
    private function assertGetAllByAlpha2Values(array $countries, array $expectedAlpha2Result): void
    {
        $this->assertEquals(count($expectedAlpha2Result), count($expectedAlpha2Result));

        for ($i = 0; $i < count($countries); $i++) {
            $this->assertInstanceOf(Country::class, $countries[$i]);
            $this->assertEquals($countries[$i]->getAlpha2(), $expectedAlpha2Result[$i]);
        }
    }
}
