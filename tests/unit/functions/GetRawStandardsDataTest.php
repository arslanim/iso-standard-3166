<?php

namespace arslanimamutdinov\ISOStandard3166\tests\unit;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use arslanimamutdinov\ISOStandard3166\ISO3166Utility;
use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use PHPUnit\Framework\TestCase;

/**
 * Class GetRawStandardsDataTest
 * @package arslanimamutdinov\ISOStandard3166\tests\unit
 * @group standard-3166-functions
 */
class GetRawStandardsDataTest extends TestCase
{
    public function testGetRawStandardsData(): void
    {
        $utilityRawStandardsData = ISO3166::getRawStandardsData();
        $serviceRawStandardsData = (new ISO3166Utility())->getRawStandardsData();

        $this->assertEquals($utilityRawStandardsData, $serviceRawStandardsData);
        $this->assertRawStandardsDataCorrect($utilityRawStandardsData);
        $this->assertRawStandardsDataCorrect($serviceRawStandardsData);
    }

    private function assertRawStandardsDataCorrect(array $rawStandardsData): void
    {
        $this->assertNotEmpty($rawStandardsData);

        foreach ($rawStandardsData as $rawStandardData) {
            $this->assertNotEmpty($rawStandardData[AttributeCodes::ATTRIBUTE_NAME]);
            $this->assertNotEmpty($rawStandardData[AttributeCodes::ATTRIBUTE_ALPHA2]);
            $this->assertNotEmpty($rawStandardData[AttributeCodes::ATTRIBUTE_ALPHA3]);
            $this->assertNotEmpty($rawStandardData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE]);
        }
    }
}
