<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AQTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AQTest extends TestCase
{
    public function testAQ(): void
    {
        $country = ISO3166::AQ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Antarctica", $country->getName());
        $this->assertEquals("AQ", $country->getAlpha2());
        $this->assertEquals("ATA", $country->getAlpha3());
        $this->assertEquals("010", $country->getNumericCode());
    }
}
