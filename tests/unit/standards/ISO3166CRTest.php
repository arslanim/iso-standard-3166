<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CRTest extends TestCase
{
    public function testCR(): void
    {
        $country = ISO3166::CR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Costa Rica", $country->getName());
        $this->assertEquals("CR", $country->getAlpha2());
        $this->assertEquals("CRI", $country->getAlpha3());
        $this->assertEquals("188", $country->getNumericCode());
    }
}
