<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SJTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SJTest extends TestCase
{
    public function testSJ(): void
    {
        $country = ISO3166::SJ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Svalbard and Jan Mayen[c]", $country->getName());
        $this->assertEquals("SJ", $country->getAlpha2());
        $this->assertEquals("SJM", $country->getAlpha3());
        $this->assertEquals("744", $country->getNumericCode());
    }
}
