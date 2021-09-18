<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166KRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166KRTest extends TestCase
{
    public function testKR(): void
    {
        $country = ISO3166::KR();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Korea, Republic of", $country->getName());
        $this->assertEquals("KR", $country->getAlpha2());
        $this->assertEquals("KOR", $country->getAlpha3());
        $this->assertEquals("410", $country->getNumericCode());
    }
}
