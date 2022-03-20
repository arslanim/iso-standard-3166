<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166TLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166TLTest extends TestCase
{
    public function testTL(): void
    {
        $country = ISO3166::TL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Timor-Leste", $country->getName());
        $this->assertEquals("TL", $country->getAlpha2());
        $this->assertEquals("TLS", $country->getAlpha3());
        $this->assertEquals("626", $country->getNumericCode());
    }
}
