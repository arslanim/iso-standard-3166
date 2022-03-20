<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NLTest extends TestCase
{
    public function testNL(): void
    {
        $country = ISO3166::NL();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Netherlands", $country->getName());
        $this->assertEquals("NL", $country->getAlpha2());
        $this->assertEquals("NLD", $country->getAlpha3());
        $this->assertEquals("528", $country->getNumericCode());
    }
}
