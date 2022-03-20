<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PKTest extends TestCase
{
    public function testPK(): void
    {
        $country = ISO3166::PK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Pakistan", $country->getName());
        $this->assertEquals("PK", $country->getAlpha2());
        $this->assertEquals("PAK", $country->getAlpha3());
        $this->assertEquals("586", $country->getNumericCode());
    }
}
