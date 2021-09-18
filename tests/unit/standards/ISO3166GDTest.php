<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GDTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GDTest extends TestCase
{
    public function testGD(): void
    {
        $country = ISO3166::GD();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Grenada", $country->getName());
        $this->assertEquals("GD", $country->getAlpha2());
        $this->assertEquals("GRD", $country->getAlpha3());
        $this->assertEquals("308", $country->getNumericCode());
    }
}
