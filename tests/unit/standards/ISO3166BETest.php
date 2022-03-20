<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BETest extends TestCase
{
    public function testBE(): void
    {
        $country = ISO3166::BE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Belgium", $country->getName());
        $this->assertEquals("BE", $country->getAlpha2());
        $this->assertEquals("BEL", $country->getAlpha3());
        $this->assertEquals("056", $country->getNumericCode());
    }
}
