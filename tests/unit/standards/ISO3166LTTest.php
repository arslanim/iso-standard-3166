<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LTTest extends TestCase
{
    public function testLT(): void
    {
        $country = ISO3166::LT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Lithuania", $country->getName());
        $this->assertEquals("LT", $country->getAlpha2());
        $this->assertEquals("LTU", $country->getAlpha3());
        $this->assertEquals("440", $country->getNumericCode());
    }
}
