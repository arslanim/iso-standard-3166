<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class ISO3166Test
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166Test extends TestCase
{
    public function testUniqueCountries(): void
    {
        $reflectionClass = new ReflectionClass(ISO3166::class);
        $constants = $reflectionClass->getConstants();
        $countries = $constants['COUNTRIES'] ?? null;

        $this->assertIsArray($countries);
        $this->assertEquals($countries, array_unique($countries, SORT_REGULAR));
    }
}
