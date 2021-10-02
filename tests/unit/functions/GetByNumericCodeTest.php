<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetByNumericCodeTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetByNumericCodeTest extends TestCase
{
    public function testSuccessGetByNumericCode(): void
    {
        $this->assertInstanceOf(Country::class, ISO3166::getByNumericCode('643'));
        $this->assertInstanceOf(Country::class, (new ISO3166Utility())->getByNumericCode('643'));
        $this->assertEquals(ISO3166::getByNumericCode('643'), (new ISO3166Utility())->getByNumericCode('643'));
    }

    public function testFailGetByNumericCode(): void
    {
        $this->assertNull(ISO3166::getByNumericCode('foo'));
        $this->assertNull((new ISO3166Utility())->getByNumericCode('foo'));
    }
}
