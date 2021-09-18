<?php
                
namespace arslanimamutdinov\ISOStandard3166\tests\unit\utilities\standards;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityDETest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit\utilities\standards
 * @group standard-3166-utilities
 */
class ISO3166UtilityDETest extends TestCase
{
    public function testDE(): void
    {
        $this->assertEquals(ISO3166::DE(), (new ISO3166Utility())->DE());
    }
}
