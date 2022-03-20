<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KGTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KGTest extends TestCase
{
    public function testKG(): void
    {
        $country = ISO3166::KG();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Kyrgyzstan", $country->getName());
        $this->assertEquals("KG", $country->getAlpha2());
        $this->assertEquals("KGZ", $country->getAlpha3());
        $this->assertEquals("417", $country->getNumericCode());
    }
}
