<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MLTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MLTest extends TestCase
{
    public function testML(): void
    {
        $country = ISO3166::ML();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mali", $country->getName());
        $this->assertEquals("ML", $country->getAlpha2());
        $this->assertEquals("MLI", $country->getAlpha3());
        $this->assertEquals("466", $country->getNumericCode());
    }
}
