<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NPTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NPTest extends TestCase
{
    public function testNP(): void
    {
        $country = ISO3166::NP();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Nepal", $country->getName());
        $this->assertEquals("NP", $country->getAlpha2());
        $this->assertEquals("NPL", $country->getAlpha3());
        $this->assertEquals("524", $country->getNumericCode());
    }
}
