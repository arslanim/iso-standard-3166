<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166LRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166LRTest extends TestCase
{
    public function testLR(): void
    {
        $country = ISO3166::LR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Liberia", $country->getName());
        $this->assertEquals("LR", $country->getAlpha2());
        $this->assertEquals("LBR", $country->getAlpha3());
        $this->assertEquals("430", $country->getNumericCode());
    }
}
