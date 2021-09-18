<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MATest extends TestCase
{
    public function testMA(): void
    {
        $country = ISO3166::MA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Morocco", $country->getName());
        $this->assertEquals("MA", $country->getAlpha2());
        $this->assertEquals("MAR", $country->getAlpha3());
        $this->assertEquals("504", $country->getNumericCode());
    }
}
