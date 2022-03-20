<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\standards;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166GHTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166
 */
class ISO3166GHTest extends TestCase
{
    public function testGH(): void
    {
        $country = ISO3166::GH();

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals("Ghana", $country->getName());
        $this->assertEquals("GH", $country->getAlpha2());
        $this->assertEquals("GHA", $country->getAlpha3());
        $this->assertEquals("288", $country->getNumericCode());
    }
}
