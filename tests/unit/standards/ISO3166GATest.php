<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GATest extends TestCase
{
    public function testGA(): void
    {
        $country = ISO3166::GA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Gabon", $country->getName());
        $this->assertEquals("GA", $country->getAlpha2());
        $this->assertEquals("GAB", $country->getAlpha3());
        $this->assertEquals("266", $country->getNumericCode());
    }
}
