<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ADTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ADTest extends TestCase
{
    public function testAD(): void
    {
        $country = ISO3166::AD();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Andorra", $country->getName());
        $this->assertEquals("AD", $country->getAlpha2());
        $this->assertEquals("AND", $country->getAlpha3());
        $this->assertEquals("020", $country->getNumericCode());
    }
}
