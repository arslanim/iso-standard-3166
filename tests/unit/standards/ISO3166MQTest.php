<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166MQTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166MQTest extends TestCase
{
    public function testMQ(): void
    {
        $country = ISO3166::MQ();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Martinique", $country->getName());
        $this->assertEquals("MQ", $country->getAlpha2());
        $this->assertEquals("MTQ", $country->getAlpha3());
        $this->assertEquals("474", $country->getNumericCode());
    }
}
