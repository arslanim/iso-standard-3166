<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;

/**
 * Class GetAllByAlpha3ValuesTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetAllByAlpha3ValuesTest extends BaseFunctionTest
{
    /**
     * @dataProvider getProvidedData
     * @param string[] $values
     * @param string[] $expectedAlpha3Result
     */
    public function testGetAllByAlpha3Values(array $values, array $expectedAlpha3Result): void
    {
        $utilityResult = ISO3166::getAllByAlpha3Codes($values);
        $serviceResult = (new ISO3166Utility())->getAllByAlpha3Codes($values);

        $this->assertGetAllByAlpha3Values($utilityResult, $expectedAlpha3Result);
        $this->assertGetAllByAlpha3Values($serviceResult, $expectedAlpha3Result);
        $this->assertEquals($utilityResult, $serviceResult);
    }

    public function getProvidedData(): array
    {
        return [
            [
                'values' => ['VIR', 'WLF', 'ESH',],
                'expectedAlpha2Result' => ['VIR', 'WLF', 'ESH',],
            ],
            [
                'values' => ['FOO', 'WLF', 'ESH',],
                'expectedAlpha2Result' => ['WLF', 'ESH',],
            ],
            [
                'values' => ['FOO', 'WLF',],
                'expectedAlpha2Result' => ['WLF',],
            ],
            [
                'values' => ['VIR', 'FOO', 'ESH',],
                'expectedAlpha2Result' => ['VIR', 'ESH',],
            ],
            [
                'values' => ['VIR',],
                'expectedAlpha2Result' => ['VIR',],
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
}
