<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166UATest extends TestCase
{
    public function testUA(): void
    {
        $country = ISO3166::UA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Ukraine", $country->getName());
        $this->assertEquals("UA", $country->getAlpha2());
        $this->assertEquals("UKR", $country->getAlpha3());
        $this->assertEquals("804", $country->getNumericCode());
    }
}
