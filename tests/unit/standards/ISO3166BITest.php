<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BITest extends TestCase
{
    public function testBI(): void
    {
        $country = ISO3166::BI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Burundi", $country->getName());
        $this->assertEquals("BI", $country->getAlpha2());
        $this->assertEquals("BDI", $country->getAlpha3());
        $this->assertEquals("108", $country->getNumericCode());
    }
}
