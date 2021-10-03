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
ISO3166::getAll(): array;
```
```php
/**
 * @return Country[]
 */
ISO3166Utility::getAll(): array;
```

## Contributing
Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

## Code coverage information
Coverage information locates on top of README file.

## Source(s)

* [ISO 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1) by [Wikipedia](http://www.wikipedia.org) licensed under [CC BY-SA 3.0 Unported License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License)
* [www.iso.org](http://www.iso.org)