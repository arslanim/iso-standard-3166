<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166RETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166RETest extends TestCase
{
    public function testRE(): void
    {
        $country = ISO3166::RE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("RÃ©union", $country->getName());
        $this->assertEquals("RE", $country->getAlpha2());
        $this->assertEquals("REU", $country->getAlpha3());
        $this->assertEquals("638", $country->getNumericCode());
    }
}
