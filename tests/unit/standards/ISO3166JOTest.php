<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166JOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166JOTest extends TestCase
{
    public function testJO(): void
    {
        $country = ISO3166::JO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Jordan", $country->getName());
        $this->assertEquals("JO", $country->getAlpha2());
        $this->assertEquals("JOR", $country->getAlpha3());
        $this->assertEquals("400", $country->getNumericCode());
    }
}
