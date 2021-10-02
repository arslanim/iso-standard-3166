<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetByAlpha2Test
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetByAlpha2Test extends TestCase
{
    public function testGetByAlpha2(): void
    {
        $this->assertInstanceOf(Country::class, ISO3166::getByAlpha2('RU'));
        $this->assertInstanceOf(Country::class, (new ISO3166Utility())->getByAlpha2('RU'));
        $this->assertEquals(ISO3166::getByAlpha2('RU'), (new ISO3166Utility())->getByAlpha2('RU'));
    }

    public function testFailGetByAlpha2(): void
    {
        $this->assertNull(ISO3166::getByAlpha2('foo'));
        $this->assertNull((new ISO3166Utility())->getByAlpha2('foo'));
    }
}
