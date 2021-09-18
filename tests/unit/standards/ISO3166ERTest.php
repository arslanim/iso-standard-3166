<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166ERTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166ERTest extends TestCase
{
    public function testER(): void
    {
        $country = ISO3166::ER();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Eritrea", $country->getName());
        $this->assertEquals("ER", $country->getAlpha2());
        $this->assertEquals("ERI", $country->getAlpha3());
        $this->assertEquals("232", $country->getNumericCode());
    }
}
