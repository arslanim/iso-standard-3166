<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CCTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CCTest extends TestCase
{
    public function testCC(): void
    {
        $country = ISO3166::CC();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cocos (Keeling) Islands", $country->getName());
        $this->assertEquals("CC", $country->getAlpha2());
        $this->assertEquals("CCK", $country->getAlpha3());
        $this->assertEquals("166", $country->getNumericCode());
    }
}
