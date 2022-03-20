<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ARTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ARTest extends TestCase
{
    public function testAR(): void
    {
        $country = ISO3166::AR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Argentina", $country->getName());
        $this->assertEquals("AR", $country->getAlpha2());
        $this->assertEquals("ARG", $country->getAlpha3());
        $this->assertEquals("032", $country->getNumericCode());
    }
}
