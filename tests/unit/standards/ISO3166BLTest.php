<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BLTest extends TestCase
{
    public function testBL(): void
    {
        $country = ISO3166::BL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Saint BarthÃ©lemy", $country->getName());
        $this->assertEquals("BL", $country->getAlpha2());
        $this->assertEquals("BLM", $country->getAlpha3());
        $this->assertEquals("652", $country->getNumericCode());
    }
}
