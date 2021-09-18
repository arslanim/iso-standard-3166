<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166CMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166CMTest extends TestCase
{
    public function testCM(): void
    {
        $country = ISO3166::CM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Cameroon", $country->getName());
        $this->assertEquals("CM", $country->getAlpha2());
        $this->assertEquals("CMR", $country->getAlpha3());
        $this->assertEquals("120", $country->getNumericCode());
    }
}
