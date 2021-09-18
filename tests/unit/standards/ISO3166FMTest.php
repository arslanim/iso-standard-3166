<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166FMTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166FMTest extends TestCase
{
    public function testFM(): void
    {
        $country = ISO3166::FM();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Micronesia (Federated States of)", $country->getName());
        $this->assertEquals("FM", $country->getAlpha2());
        $this->assertEquals("FSM", $country->getAlpha3());
        $this->assertEquals("583", $country->getNumericCode());
    }
}
