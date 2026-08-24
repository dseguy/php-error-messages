# Calling IntlGregorianCalendar::__construct() with more than 2 arguments is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-intlgregoriancalendar::__constructqr-with-more-than-2-arguments-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-intlgregoriancalendar::__constructqr-with-more-than-2-arguments-is-deprecated,.html","name":"Calling IntlGregorianCalendar::__construct() with more than 2 arguments is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-21T07:46:39+00:00","dateModified":"2026-08-21T07:46:39+00:00","description":"``IntlGregorianCalendar::__construct()`` (and the procedural ``intlgregcal_create_instance()``) used to accept many different combinations of arguments: a timezone, a locale, or up to a year, month, day, hour, minute and second, all disambiguated at runtime from the number and type of arguments given","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-intlgregoriancalendar::__constructqr-with-more-than-2-arguments-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`IntlGregorianCalendar::__construct()` (and the procedural `intlgregcal_create_instance()`) used to accept many different combinations of arguments: a timezone, a locale, or up to a year, month, day, hour, minute and second, all disambiguated at runtime from the number and type of arguments given.

Calling the constructor with more than 2 arguments — i.e. using it to build a date directly from year/month/day(/hour/minute/second) components — is now deprecated in favor of two dedicated, unambiguous factory methods.

## Example

```php
<?php

$calendar = new IntlGregorianCalendar(2026, 0, 1, 12, 30, 0);

?>
```

## Alternatives
+ Use ``IntlGregorianCalendar::createFromDate()`` to build a calendar from a year, month and day, or ``IntlGregorianCalendar::createFromDateTime()`` to also set the hour, minute and second.

## Related error messages
+ [calling-intlcalendar::set()-with-more-than-2-arguments-is-deprecated,](calling-intlcalendar::set\(\)-with-more-than-2-arguments-is-deprecated,.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()