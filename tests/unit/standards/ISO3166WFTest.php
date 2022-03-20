<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166WFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166WFTest extends TestCase
{
    public function testWF(): void
    {
        $country = ISO3166::WF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Wallis and Futuna", $country->getName());
        $this->assertEquals("WF", $country->getAlpha2());
        $this->assertEquals("WLF", $country->getAlpha3());
        $this->assertEquals("876", $country->getNumericCode());
    }
}
