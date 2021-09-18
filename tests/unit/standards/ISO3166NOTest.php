<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166NOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166NOTest extends TestCase
{
    public function testNO(): void
    {
        $country = ISO3166::NO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Norway", $country->getName());
        $this->assertEquals("NO", $country->getAlpha2());
        $this->assertEquals("NOR", $country->getAlpha3());
        $this->assertEquals("578", $country->getNumericCode());
    }
}
