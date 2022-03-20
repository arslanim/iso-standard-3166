<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MNTest extends TestCase
{
    public function testMN(): void
    {
        $country = ISO3166::MN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mongolia", $country->getName());
        $this->assertEquals("MN", $country->getAlpha2());
        $this->assertEquals("MNG", $country->getAlpha3());
        $this->assertEquals("496", $country->getNumericCode());
    }
}
