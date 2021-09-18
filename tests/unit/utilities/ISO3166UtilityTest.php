<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit\utilities;

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
}
