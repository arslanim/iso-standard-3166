<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GPTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GPTest extends TestCase
{
    public function testGP(): void
    {
        $country = ISO3166::GP();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Guadeloupe", $country->getName());
        $this->assertEquals("GP", $country->getAlpha2());
        $this->assertEquals("GLP", $country->getAlpha3());
        $this->assertEquals("312", $country->getNumericCode());
    }
}
