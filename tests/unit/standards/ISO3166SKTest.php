<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166SKTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166SKTest extends TestCase
{
    public function testSK(): void
    {
        $country = ISO3166::SK();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Slovakia", $country->getName());
        $this->assertEquals("SK", $country->getAlpha2());
        $this->assertEquals("SVK", $country->getAlpha3());
        $this->assertEquals("703", $country->getNumericCode());
    }
}
