<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KYTest extends TestCase
{
    public function testKY(): void
    {
        $country = ISO3166::KY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cayman Islands", $country->getName());
        $this->assertEquals("KY", $country->getAlpha2());
        $this->assertEquals("CYM", $country->getAlpha3());
        $this->assertEquals("136", $country->getNumericCode());
    }
}
