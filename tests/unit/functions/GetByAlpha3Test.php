<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetByAlpha3Test
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetByAlpha3Test extends TestCase
{
    public function testSuccessGetByAlpha3(): void
    {
        $this->assertInstanceOf(Country::class, ISO3166::getByAlpha3('RUS'));
        $this->assertInstanceOf(Country::class, (new ISO3166Utility())->getByAlpha3('RUS'));
    }

    public function testFailGetByAlpha3(): void
    {
        $this->assertNull(ISO3166::getByAlpha3('foo'));
        $this->assertNull((new ISO3166Utility())->getByAlpha3('foo'));
    }
}
