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

Return: all ISO 3166-1 country standards representing by array of Country instances searched by given alpha2 codes.

## Contributing
Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

## Code coverage information
Coverage information locates on top of README file.

## Source(s)

* [ISO 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1) by [Wikipedia](http://www.wikipedia.org) licensed under [CC BY-SA 3.0 Unported License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License)
* [www.iso.org](http://www.iso.org)