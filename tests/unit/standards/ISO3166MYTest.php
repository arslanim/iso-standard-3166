<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MYTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MYTest extends TestCase
{
    public function testMY(): void
    {
        $country = ISO3166::MY();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Malaysia", $country->getName());
        $this->assertEquals("MY", $country->getAlpha2());
        $this->assertEquals("MYS", $country->getAlpha3());
        $this->assertEquals("458", $country->getNumericCode());
    }
}
