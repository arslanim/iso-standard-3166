<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LITest extends TestCase
{
    public function testLI(): void
    {
        $country = ISO3166::LI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Liechtenstein", $country->getName());
        $this->assertEquals("LI", $country->getAlpha2());
        $this->assertEquals("LIE", $country->getAlpha3());
        $this->assertEquals("438", $country->getNumericCode());
    }
}
