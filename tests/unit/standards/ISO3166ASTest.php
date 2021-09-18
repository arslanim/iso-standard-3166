<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ASTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ASTest extends TestCase
{
    public function testAS(): void
    {
        $country = ISO3166::AS();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("American Samoa", $country->getName());
        $this->assertEquals("AS", $country->getAlpha2());
        $this->assertEquals("ASM", $country->getAlpha3());
        $this->assertEquals("016", $country->getNumericCode());
    }
}
