<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166EGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166EGTest extends TestCase
{
    public function testEG(): void
    {
        $country = ISO3166::EG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Egypt", $country->getName());
        $this->assertEquals("EG", $country->getAlpha2());
        $this->assertEquals("EGY", $country->getAlpha3());
        $this->assertEquals("818", $country->getNumericCode());
    }
}
