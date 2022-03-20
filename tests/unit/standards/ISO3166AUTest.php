<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AUTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AUTest extends TestCase
{
    public function testAU(): void
    {
        $country = ISO3166::AU();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Australia", $country->getName());
        $this->assertEquals("AU", $country->getAlpha2());
        $this->assertEquals("AUS", $country->getAlpha3());
        $this->assertEquals("036", $country->getNumericCode());
    }
}
