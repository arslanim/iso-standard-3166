<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\utilities;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use PHPUnit\Framework\TestCase;

/**
 * Class ISO3166UtilityTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit\utilities
 * @group standard-3166-utilities
 */
class ISO3166UtilityTest extends TestCase
{
    /**
     * @var ISO3166Utility
     */
    private $ISO3166Utility;

    protected function setUp(): void
    {
        parent::setUp();

        $this->ISO3166Utility = new ISO3166Utility();
    }

    public function testGetAll(): void
    {
        $this->assertEquals($this->ISO3166Utility->getAll(), ISO3166::getAll());
    }

    public function testGetRawStandardsData(): void
    {
        $this->assertEquals($this->ISO3166Utility->getRawStandardsData(), ISO3166::getRawStandardsData());
    }

    public function testGetByAlpha2(): void
    {
        $this->assertInstanceOf(Country::class, $this->ISO3166Utility->getByAlpha2('RU'));
    }

    public function testFailGetByAlpha2(): void
    {
        $this->assertNull($this->ISO3166Utility->getByAlpha2('foo'));
    }
}
