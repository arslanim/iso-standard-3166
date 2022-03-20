<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166WSTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166WSTest extends TestCase
{
    public function testWS(): void
    {
        $country = ISO3166::WS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Samoa", $country->getName());
        $this->assertEquals("WS", $country->getAlpha2());
        $this->assertEquals("WSM", $country->getAlpha3());
        $this->assertEquals("882", $country->getNumericCode());
    }
}
