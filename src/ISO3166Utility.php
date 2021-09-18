<?php

namespace arslanimamutdinov\ISOStandard3166;

class ISO3166Utility
{
    /**
     * @return Country[]
     */
    public function getAll(): array
    {
        return ISO3166::getAll();
    }

    public function getRawStandardsData(): array
    {
        return ISO3166::getRawStandardsData();
    }
}
