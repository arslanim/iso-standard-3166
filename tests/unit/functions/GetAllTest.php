<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class GetAllTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetAllTest extends TestCase
{
    public function testGetAll(): void
    {
        $this->assertEquals((new ISO3166Utility())->getAll(), ISO3166::getAll());
    }
}
