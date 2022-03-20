<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PSTest extends TestCase
{
    public function testPS(): void
    {
        $country = ISO3166::PS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Palestine, State of", $country->getName());
        $this->assertEquals("PS", $country->getAlpha2());
        $this->assertEquals("PSE", $country->getAlpha3());
        $this->assertEquals("275", $country->getNumericCode());
    }
}
