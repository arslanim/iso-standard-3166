<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166USTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166USTest extends TestCase
{
    public function testUS(): void
    {
        $country = ISO3166::US();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("United States of America", $country->getName());
        $this->assertEquals("US", $country->getAlpha2());
        $this->assertEquals("USA", $country->getAlpha3());
        $this->assertEquals("840", $country->getNumericCode());
    }
}
