<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166QATest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166QATest extends TestCase
{
    public function testQA(): void
    {
        $country = ISO3166::QA();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Qatar", $country->getName());
        $this->assertEquals("QA", $country->getAlpha2());
        $this->assertEquals("QAT", $country->getAlpha3());
        $this->assertEquals("634", $country->getNumericCode());
    }
}
