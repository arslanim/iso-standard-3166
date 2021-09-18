<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166HNTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166HNTest extends TestCase
{
    public function testHN(): void
    {
        $country = ISO3166::HN();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Honduras", $country->getName());
        $this->assertEquals("HN", $country->getAlpha2());
        $this->assertEquals("HND", $country->getAlpha3());
        $this->assertEquals("340", $country->getNumericCode());
    }
}
