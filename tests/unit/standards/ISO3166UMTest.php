<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166UMTest extends TestCase
{
    public function testUM(): void
    {
        $country = ISO3166::UM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("United States Minor Outlying Islands[e]", $country->getName());
        $this->assertEquals("UM", $country->getAlpha2());
        $this->assertEquals("UMI", $country->getAlpha3());
        $this->assertEquals("581", $country->getNumericCode());
    }
}
