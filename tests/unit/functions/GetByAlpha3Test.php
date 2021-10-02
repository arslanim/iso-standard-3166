<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
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
        $country = ISO3166::getByAlpha3('RUS');

        $this->assertInstanceOf(Country::class, $country);
    }

    public function testFailGetByAlpha3(): void
    {
        $country = ISO3166::getByAlpha3('foo');

        $this->assertNull($country);
    }
}
