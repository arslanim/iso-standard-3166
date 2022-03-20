<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166RSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166RSTest extends TestCase
{
    public function testRS(): void
    {
        $country = ISO3166::RS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Serbia", $country->getName());
        $this->assertEquals("RS", $country->getAlpha2());
        $this->assertEquals("SRB", $country->getAlpha3());
        $this->assertEquals("688", $country->getNumericCode());
    }
}
