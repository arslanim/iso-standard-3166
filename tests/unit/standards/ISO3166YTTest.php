<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166YTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166YTTest extends TestCase
{
    public function testYT(): void
    {
        $country = ISO3166::YT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Mayotte", $country->getName());
        $this->assertEquals("YT", $country->getAlpha2());
        $this->assertEquals("MYT", $country->getAlpha3());
        $this->assertEquals("175", $country->getNumericCode());
    }
}
