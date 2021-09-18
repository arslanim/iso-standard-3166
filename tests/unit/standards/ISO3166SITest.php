<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SITest extends TestCase
{
    public function testSI(): void
    {
        $country = ISO3166::SI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Slovenia", $country->getName());
        $this->assertEquals("SI", $country->getAlpha2());
        $this->assertEquals("SVN", $country->getAlpha3());
        $this->assertEquals("705", $country->getNumericCode());
    }
}
