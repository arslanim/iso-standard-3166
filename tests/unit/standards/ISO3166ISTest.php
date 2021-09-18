<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ISTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ISTest extends TestCase
{
    public function testIS(): void
    {
        $country = ISO3166::IS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Iceland", $country->getName());
        $this->assertEquals("IS", $country->getAlpha2());
        $this->assertEquals("ISL", $country->getAlpha3());
        $this->assertEquals("352", $country->getNumericCode());
    }
}
