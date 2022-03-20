<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166FITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166FITest extends TestCase
{
    public function testFI(): void
    {
        $country = ISO3166::FI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Finland", $country->getName());
        $this->assertEquals("FI", $country->getAlpha2());
        $this->assertEquals("FIN", $country->getAlpha3());
        $this->assertEquals("246", $country->getNumericCode());
    }
}
