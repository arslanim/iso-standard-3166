<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166HTTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166HTTest extends TestCase
{
    public function testHT(): void
    {
        $country = ISO3166::HT();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Haiti", $country->getName());
        $this->assertEquals("HT", $country->getAlpha2());
        $this->assertEquals("HTI", $country->getAlpha3());
        $this->assertEquals("332", $country->getNumericCode());
    }
}
