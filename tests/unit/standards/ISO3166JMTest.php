<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166JMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166JMTest extends TestCase
{
    public function testJM(): void
    {
        $country = ISO3166::JM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Jamaica", $country->getName());
        $this->assertEquals("JM", $country->getAlpha2());
        $this->assertEquals("JAM", $country->getAlpha3());
        $this->assertEquals("388", $country->getNumericCode());
    }
}
