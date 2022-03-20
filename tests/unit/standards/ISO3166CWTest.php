<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CWTest extends TestCase
{
    public function testCW(): void
    {
        $country = ISO3166::CW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("CuraÃ§ao", $country->getName());
        $this->assertEquals("CW", $country->getAlpha2());
        $this->assertEquals("CUW", $country->getAlpha3());
        $this->assertEquals("531", $country->getNumericCode());
    }
}
