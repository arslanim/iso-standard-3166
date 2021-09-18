<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166JETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166JETest extends TestCase
{
    public function testJE(): void
    {
        $country = ISO3166::JE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Jersey", $country->getName());
        $this->assertEquals("JE", $country->getAlpha2());
        $this->assertEquals("JEY", $country->getAlpha3());
        $this->assertEquals("832", $country->getNumericCode());
    }
}
