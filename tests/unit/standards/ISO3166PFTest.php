<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PFTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PFTest extends TestCase
{
    public function testPF(): void
    {
        $country = ISO3166::PF();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("French Polynesia", $country->getName());
        $this->assertEquals("PF", $country->getAlpha2());
        $this->assertEquals("PYF", $country->getAlpha3());
        $this->assertEquals("258", $country->getNumericCode());
    }
}
