<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CFTest extends TestCase
{
    public function testCF(): void
    {
        $country = ISO3166::CF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Central African Republic", $country->getName());
        $this->assertEquals("CF", $country->getAlpha2());
        $this->assertEquals("CAF", $country->getAlpha3());
        $this->assertEquals("140", $country->getNumericCode());
    }
}
