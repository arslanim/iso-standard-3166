<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NETest extends TestCase
{
    public function testNE(): void
    {
        $country = ISO3166::NE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Niger", $country->getName());
        $this->assertEquals("NE", $country->getAlpha2());
        $this->assertEquals("NER", $country->getAlpha3());
        $this->assertEquals("562", $country->getNumericCode());
    }
}
