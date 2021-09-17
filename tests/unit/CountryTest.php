<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardAlpha2EmptyException;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardAlpha3EmptyException;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardNameEmptyException;
use arslanimamutdinov\ISOStandard3166\exceptions\CountryStandardNumericCodeEmptyException;
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

    /**
     * @dataProvider getValidationTestData
     * @param array $data
     * @param string $expectedException
     */
    public function testValidation(array $data, string $expectedException): void
    {
        $this->expectException($expectedException);

        (new Country($data['name'], $data['alpha2'], $data['alpha3'], $data['numericCode']));
    }

    public function getValidationTestData(): array
    {
        return [
            [
                'data' => [
                    'name' => '',
                    'alpha2' => '',
                    'alpha3' => '',
                    'numericCode' => '',
                ],
                'expectedException' => CountryStandardNameEmptyException::class,
            ],
            [
                'data' => [
                    'name' => 'foo',
                    'alpha2' => '',
                    'alpha3' => '',
                    'numericCode' => '',
                ],
                'expectedException' => CountryStandardAlpha2EmptyException::class,
            ],
            [
                'data' => [
                    'name' => 'foo',
                    'alpha2' => 'foo',
                    'alpha3' => '',
                    'numericCode' => '',
                ],
                'expectedException' => CountryStandardAlpha3EmptyException::class,
            ],
            [
                'data' => [
                    'name' => 'foo',
                    'alpha2' => 'foo',
                    'alpha3' => 'foo',
                    'numericCode' => '',
                ],
                'expectedException' => CountryStandardNumericCodeEmptyException::class,
            ],
        ];
    }
}
