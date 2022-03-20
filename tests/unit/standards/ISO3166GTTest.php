<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GTTest extends TestCase
{
    public function testGT(): void
    {
        $country = ISO3166::GT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Guatemala", $country->getName());
        $this->assertEquals("GT", $country->getAlpha2());
        $this->assertEquals("GTM", $country->getAlpha3());
        $this->assertEquals("320", $country->getNumericCode());
    }
}
