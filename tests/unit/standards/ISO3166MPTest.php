<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MPTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MPTest extends TestCase
{
    public function testMP(): void
    {
        $country = ISO3166::MP();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Northern Mariana Islands", $country->getName());
        $this->assertEquals("MP", $country->getAlpha2());
        $this->assertEquals("MNP", $country->getAlpha3());
        $this->assertEquals("580", $country->getNumericCode());
    }
}
