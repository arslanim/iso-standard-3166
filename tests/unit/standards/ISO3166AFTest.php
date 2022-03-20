<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AFTest extends TestCase
{
    public function testAF(): void
    {
        $country = ISO3166::AF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Afghanistan", $country->getName());
        $this->assertEquals("AF", $country->getAlpha2());
        $this->assertEquals("AFG", $country->getAlpha3());
        $this->assertEquals("004", $country->getNumericCode());
    }
}
