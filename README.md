# ISO 3166-1 standard utilities
This component provides features for ISO 3166-1 standard - get country codes according to standard.

## Terms and designations

- alpha2 - two-letter country code (recommended as the general-purpose code) e.g. RU;
- alpha3 - three-letter country code e.g. RUS;
- numericCodes - numeric country code e.g. 643;
- name - string country name e.g. Russian Federation.

## Component parts description

Country - ISO 3166-1 standard model, contains properties:
- name - country name;
- alpha2 - country alpha2 code;
- alpha3 - country alpha3 code;
- numericCode - country numeric code.

ISO3166 - class provides set of function for working with ISO 3166-1 standard. 

ISO3166Utility - service class wrapper over ISO3166 (need instantiate class object).

### getAll

```php
/**
 * @return Country[]
 */
public static function getAll(): array;
```
```php
/**
 * @return Country[]
 */
public function getAll(): array;
```

Return: all ISO 3166-1 country standards representing by array of Country instances.

#### Examples

```php
$countries = ISO3166::getAll();
$countries = (new ISO3166Utility())->getAll();

{
...
[248]=>
  object(arslanimamutdinov\ISOStandard3166\Country)#251 (4) {
    ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(8) "Zimbabwe"
    ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(2) "ZW"
    ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "ZWE"
    ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "716"
  }
}
```

### getAllByAlpha2Codes

```php
/**
 * @param string[] $alpha2Codes
 * @return Country[]
 */
public static function getAllByAlpha2Codes(array $alpha2Codes): array;
```
```php
/**
 * @param string[] $alpha2Codes
 * @return Country[]
 */
public function getAllByAlpha2Codes(array $alpha2Codes): array;
```

Input:

- $alpha2Codes - country alpha2 codes (strings array);

Return: all ISO 3166-1 country standards representing by array of Country instances searched by given alpha2 codes, empty array if non found.

#### Examples

```php
$countries = ISO3166::getAllByAlpha2Codes(['RU', 'BY']);
$countries = (new ISO3166Utility())->getAllByAlpha2Codes(['RU', 'BY']);

array(2) {
  [0]=>
      object(arslanimamutdinov\ISOStandard3166\Country)#2 (4) {
        ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(7) "Belarus"
        ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(2) "BY"
        ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "BLR"
        ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "112"
      }
  [1]=>
      object(arslanimamutdinov\ISOStandard3166\Country)#4 (4) {
        ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(18) "Russian Federation"
        ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(2) "RU"
        ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "RUS"
        ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "643"
      }
}
```

### getAllByAlpha3Codes

```php
/**
 * @param string[] $alpha3Codes
 * @return Country[]
 */
public static function getAllByAlpha3Codes(array $alpha3Codes): array;
```
```php
/**
 * @param string[] $alpha3Codes
 * @return Country[]
 */
public function getAllByAlpha3Codes(array $alpha3Codes): array;
```

Input:

- $alpha3Codes - country alpha3 codes (strings array);

Return: all ISO 3166-1 country standards representing by array of Country instances searched by given alpha3 codes, empty array if non found.

#### Examples

```php
$countries = ISO3166::getAllByAlpha3Codes(['RUS', 'BLR']);
$countries = (new ISO3166Utility())->getAllByAlpha3Codes(['RUS', 'BLR']);

array(2) {
  [0]=>
      object(arslanimamutdinov\ISOStandard3166\Country)#4 (4) {
        ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(7) "Belarus"
        ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(2) "BY"
        ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "BLR"
        ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "112"
      }
  [1]=>
      object(arslanimamutdinov\ISOStandard3166\Country)#5 (4) {
        ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(18) "Russian Federation"
        ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(2) "RU"
        ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "RUS"
        ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
        string(3) "643"
      }
}
```

### getAllByNumericCodes

```php
/**
 * @param string[] $numericCodes
 * @return Country[]
 */
public static function getAllByNumericCodes(array $numericCodes): array;
```
```php
/**
 * @param string[] $numericCodes
 * @return Country[]
 */
public function getAllByNumericCodes(array $numericCodes): array;
```

Input:

- $numericCodes - country numeric codes (strings array);

Return: all ISO 3166-1 country standards representing by array of Country instances searched by given numeric codes, empty array if non found.

#### Examples

```php
$countries = ISO3166::getAllByNumericCodes(['826', '840']);
$countries = (new ISO3166Utility())->getAllByNumericCodes(['826', '840']);

array(2) {
  [0]=>
  object(arslanimamutdinov\ISOStandard3166\Country)#4 (4) {
    ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(52) "United Kingdom of Great Britain and Northern Ireland"
    ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(2) "GB"
    ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "GBR"
    ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "826"
  }
  [1]=>
  object(arslanimamutdinov\ISOStandard3166\Country)#5 (4) {
    ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(24) "United States of America"
    ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(2) "US"
    ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "USA"
    ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "840"
  }
}
```

### getAllByNames

```php
/**
 * @param string[] $names
 * @return Country[]
 */
public static function getAllByNames(array $names): array;
```
```php
/**
 * @param string[] $names
 * @return Country[]
 */
public function getAllByNames(array $names): array;
```

Input:

- $names - country names (strings array);

Return: all ISO 3166-1 country standards representing by array of Country instances searched by given names, empty array if non found.

#### Examples

```php
$countries = ISO3166::getAllByNames(['Sudan', 'Panama']);
$countries = (new ISO3166Utility())->getAllByNames(['Sudan', 'Panama']);

array(2) {
  [0]=>
  object(arslanimamutdinov\ISOStandard3166\Country)#4 (4) {
    ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(6) "Panama"
    ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(2) "PA"
    ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "PAN"
    ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "591"
  }
  [1]=>
  object(arslanimamutdinov\ISOStandard3166\Country)#5 (4) {
    ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(5) "Sudan"
    ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(2) "SD"
    ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "SDN"
    ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
    string(3) "729"
  }
}
```

### getRawStandardsData

```php
public static function getRawStandardsData(): array;
```
```php
public function getRawStandardsData(): array;
```

Return: all ISO 3166-1 country standards representing by raw array.

#### Examples

```php
$countriesRawData = ISO3166::getRawStandardsData();
$countriesRawData = (new ISO3166Utility())->getRawStandardsData();

{
  ...
  [246]=>
  array(4) {
    ["name"]=>
    string(5) "Yemen"
    ["alpha2"]=>
    string(2) "YE"
    ["alpha3"]=>
    string(3) "YEM"
    ["numericCode"]=>
    string(3) "887"
  }
  [247]=>
  array(4) {
    ["name"]=>
    string(6) "Zambia"
    ["alpha2"]=>
    string(2) "ZM"
    ["alpha3"]=>
    string(3) "ZMB"
    ["numericCode"]=>
    string(3) "894"
  }
  [248]=>
  array(4) {
    ["name"]=>
    string(8) "Zimbabwe"
    ["alpha2"]=>
    string(2) "ZW"
    ["alpha3"]=>
    string(3) "ZWE"
    ["numericCode"]=>
    string(3) "716"
  }
}
```

### getByAlpha2

```php
public static function getByAlpha2(string $alpha2): ?Country;
```
```php
public function getByAlpha2(string $alpha2): ?Country;
```

Input:

- $alpha2 - country alpha2 code (string);

Return: ISO 3166-1 country standards representing by instance of Country searched by given alpha2 code, null if non found.

#### Examples

```php
$country = ISO3166::getByAlpha2('RU');
$country = (new ISO3166Utility())->getByAlpha2('RU');

object(arslanimamutdinov\ISOStandard3166\Country)#2 (4) {
  ["name":"arslanimamutdinov\ISOStandard3166\Country":private]=>
  string(18) "Russian Federation"
  ["alpha2":"arslanimamutdinov\ISOStandard3166\Country":private]=>
  string(2) "RU"
  ["alpha3":"arslanimamutdinov\ISOStandard3166\Country":private]=>
  string(3) "RUS"
  ["numericCode":"arslanimamutdinov\ISOStandard3166\Country":private]=>
  string(3) "643"
}
```

## Contributing
Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

## Code coverage information
Coverage information locates on top of README file.

## Source(s)

* [ISO 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1) by [Wikipedia](http://www.wikipedia.org) licensed under [CC BY-SA 3.0 Unported License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License)
* [www.iso.org](http://www.iso.org)