<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166AITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166AITest extends TestCase
{
    public function testAI(): void
    {
        $country = ISO3166::AI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Anguilla", $country->getName());
        $this->assertEquals("AI", $country->getAlpha2());
        $this->assertEquals("AIA", $country->getAlpha3());
        $this->assertEquals("660", $country->getNumericCode());
    }
}
