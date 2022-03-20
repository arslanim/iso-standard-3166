<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CATest extends TestCase
{
    public function testCA(): void
    {
        $country = ISO3166::CA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Canada", $country->getName());
        $this->assertEquals("CA", $country->getAlpha2());
        $this->assertEquals("CAN", $country->getAlpha3());
        $this->assertEquals("124", $country->getNumericCode());
    }
}
