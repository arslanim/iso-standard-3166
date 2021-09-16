<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use PHPUnit\Framework\TestCase;

/**
 * Class CountryTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class CountryTest extends TestCase
{
    private const NAME_TEST_VALUE = 'foo';
    private const ALPHA2_TEST_VALUE = 'bar';
    private const ALPHA3_TEST_VALUE = 'foobar';
    private const NUMERIC_CODE_TEST_VALUE = 'foobar';

    public function testSuccessCreate(): void
    {
        $country = new Country(
            self::NAME_TEST_VALUE,
            self::ALPHA2_TEST_VALUE,
            self::ALPHA3_TEST_VALUE,
            self::NUMERIC_CODE_TEST_VALUE
        );

        $this->assertEquals(self::NAME_TEST_VALUE, $country->getName());
        $this->assertEquals(self::ALPHA2_TEST_VALUE, $country->getAlpha2());
        $this->assertEquals(self::ALPHA3_TEST_VALUE, $country->getAlpha3());
        $this->assertEquals(self::NUMERIC_CODE_TEST_VALUE, $country->getNumericCode());
    }
}
