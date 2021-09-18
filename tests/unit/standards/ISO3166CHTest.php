<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CHTest extends TestCase
{
    public function testCH(): void
    {
        $country = ISO3166::CH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Switzerland", $country->getName());
        $this->assertEquals("CH", $country->getAlpha2());
        $this->assertEquals("CHE", $country->getAlpha3());
        $this->assertEquals("756", $country->getNumericCode());
    }
}
