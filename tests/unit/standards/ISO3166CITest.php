<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CITest extends TestCase
{
    public function testCI(): void
    {
        $country = ISO3166::CI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("CÃ´te d'Ivoire", $country->getName());
        $this->assertEquals("CI", $country->getAlpha2());
        $this->assertEquals("CIV", $country->getAlpha3());
        $this->assertEquals("384", $country->getNumericCode());
    }
}
