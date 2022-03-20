<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MTTest extends TestCase
{
    public function testMT(): void
    {
        $country = ISO3166::MT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Malta", $country->getName());
        $this->assertEquals("MT", $country->getAlpha2());
        $this->assertEquals("MLT", $country->getAlpha3());
        $this->assertEquals("470", $country->getNumericCode());
    }
}
