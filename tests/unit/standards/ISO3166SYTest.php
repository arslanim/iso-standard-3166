<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SYTest extends TestCase
{
    public function testSY(): void
    {
        $country = ISO3166::SY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Syrian Arab Republic", $country->getName());
        $this->assertEquals("SY", $country->getAlpha2());
        $this->assertEquals("SYR", $country->getAlpha3());
        $this->assertEquals("760", $country->getNumericCode());
    }
}
