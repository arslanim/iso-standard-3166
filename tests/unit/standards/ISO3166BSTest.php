<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BSTest extends TestCase
{
    public function testBS(): void
    {
        $country = ISO3166::BS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Bahamas", $country->getName());
        $this->assertEquals("BS", $country->getAlpha2());
        $this->assertEquals("BHS", $country->getAlpha3());
        $this->assertEquals("044", $country->getNumericCode());
    }
}
