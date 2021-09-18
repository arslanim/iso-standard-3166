<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GITest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GITest extends TestCase
{
    public function testGI(): void
    {
        $country = ISO3166::GI();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Gibraltar", $country->getName());
        $this->assertEquals("GI", $country->getAlpha2());
        $this->assertEquals("GIB", $country->getAlpha3());
        $this->assertEquals("292", $country->getNumericCode());
    }
}
