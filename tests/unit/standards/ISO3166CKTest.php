<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CKTest extends TestCase
{
    public function testCK(): void
    {
        $country = ISO3166::CK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cook Islands", $country->getName());
        $this->assertEquals("CK", $country->getAlpha2());
        $this->assertEquals("COK", $country->getAlpha3());
        $this->assertEquals("184", $country->getNumericCode());
    }
}
