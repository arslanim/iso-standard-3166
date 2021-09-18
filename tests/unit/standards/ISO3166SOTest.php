<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SOTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SOTest extends TestCase
{
    public function testSO(): void
    {
        $country = ISO3166::SO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Somalia", $country->getName());
        $this->assertEquals("SO", $country->getAlpha2());
        $this->assertEquals("SOM", $country->getAlpha3());
        $this->assertEquals("706", $country->getNumericCode());
    }
}
