<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NUTest extends TestCase
{
    public function testNU(): void
    {
        $country = ISO3166::NU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Niue", $country->getName());
        $this->assertEquals("NU", $country->getAlpha2());
        $this->assertEquals("NIU", $country->getAlpha3());
        $this->assertEquals("570", $country->getNumericCode());
    }
}
