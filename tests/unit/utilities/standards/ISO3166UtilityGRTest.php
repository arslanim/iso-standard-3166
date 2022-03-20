<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\utilities\standards;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityGRTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit\utilities\standards
 * @group standard-3166-utilities
 */
class ISO3166UtilityGRTest extends TestCase
{
    public function testGR(): void
    {
        $this->assertEquals(ISO3166::GR(), (new ISO3166Utility())->GR());
    }
}
