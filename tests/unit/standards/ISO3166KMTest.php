<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KMTest extends TestCase
{
    public function testKM(): void
    {
        $country = ISO3166::KM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Comoros", $country->getName());
        $this->assertEquals("KM", $country->getAlpha2());
        $this->assertEquals("COM", $country->getAlpha3());
        $this->assertEquals("174", $country->getNumericCode());
    }
}
