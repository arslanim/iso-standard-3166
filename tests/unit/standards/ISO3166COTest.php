<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166COTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166COTest extends TestCase
{
    public function testCO(): void
    {
        $country = ISO3166::CO();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Colombia", $country->getName());
        $this->assertEquals("CO", $country->getAlpha2());
        $this->assertEquals("COL", $country->getAlpha3());
        $this->assertEquals("170", $country->getNumericCode());
    }
}
