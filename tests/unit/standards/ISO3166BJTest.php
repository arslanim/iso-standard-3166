<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166BJTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166BJTest extends TestCase
{
    public function testBJ(): void
    {
        $country = ISO3166::BJ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Benin", $country->getName());
        $this->assertEquals("BJ", $country->getAlpha2());
        $this->assertEquals("BEN", $country->getAlpha3());
        $this->assertEquals("204", $country->getNumericCode());
    }
}
