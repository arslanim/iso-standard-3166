<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AWTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AWTest extends TestCase
{
    public function testAW(): void
    {
        $country = ISO3166::AW();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Aruba", $country->getName());
        $this->assertEquals("AW", $country->getAlpha2());
        $this->assertEquals("ABW", $country->getAlpha3());
        $this->assertEquals("533", $country->getNumericCode());
    }
}
