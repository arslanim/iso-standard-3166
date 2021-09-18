<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166PETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166PETest extends TestCase
{
    public function testPE(): void
    {
        $country = ISO3166::PE();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Peru", $country->getName());
        $this->assertEquals("PE", $country->getAlpha2());
        $this->assertEquals("PER", $country->getAlpha3());
        $this->assertEquals("604", $country->getNumericCode());
    }
}
