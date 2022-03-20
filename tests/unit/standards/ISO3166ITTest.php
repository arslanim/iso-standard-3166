<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ITTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ITTest extends TestCase
{
    public function testIT(): void
    {
        $country = ISO3166::IT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Italy", $country->getName());
        $this->assertEquals("IT", $country->getAlpha2());
        $this->assertEquals("ITA", $country->getAlpha3());
        $this->assertEquals("380", $country->getNumericCode());
    }
}
