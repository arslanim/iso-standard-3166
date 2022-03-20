<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SRTest extends TestCase
{
    public function testSR(): void
    {
        $country = ISO3166::SR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Suriname", $country->getName());
        $this->assertEquals("SR", $country->getAlpha2());
        $this->assertEquals("SUR", $country->getAlpha3());
        $this->assertEquals("740", $country->getNumericCode());
    }
}
