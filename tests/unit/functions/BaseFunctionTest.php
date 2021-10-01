<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use PHPUnit\Framework\TestCase;

abstract class BaseFunctionTest extends TestCase
{
    /**
     * @param Country[] $countries
     * @param string[] $expectedAlpha2Result
     */
    protected function assertGetAllByAlpha2Values(array $countries, array $expectedAlpha2Result): void
    {
        $this->assertEquals(count($expectedAlpha2Result), count($expectedAlpha2Result));

        for ($i = 0; $i < count($countries); $i++) {
            $this->assertInstanceOf(Country::class, $countries[$i]);
            $this->assertTrue(in_array($countries[$i]->getAlpha2(), $expectedAlpha2Result));
        }
    }
}
