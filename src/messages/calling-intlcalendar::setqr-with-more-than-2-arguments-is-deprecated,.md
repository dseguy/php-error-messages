# Calling IntlCalendar::set() with more than 2 arguments is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-intlcalendar::setqr-with-more-than-2-arguments-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-intlcalendar::setqr-with-more-than-2-arguments-is-deprecated,.html","name":"Calling IntlCalendar::set() with more than 2 arguments is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-21T07:46:34+00:00","dateModified":"2026-08-21T07:46:34+00:00","description":"``IntlCalendar::set()`` (and the procedural ``intlcal_set()``) used to accept between 2 and 6 arguments: a single field\/value pair, or up to a year, month, day, hour, minute and second all at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-intlcalendar::setqr-with-more-than-2-arguments-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`IntlCalendar::set()` (and the procedural `intlcal_set()`) used to accept between 2 and 6 arguments: a single field/value pair, or up to a year, month, day, hour, minute and second all at once. Squeezing several different call shapes into one method made the signature hard to read and to type correctly.

Calling it with more than 2 arguments — i.e. using it to set several date or time components at once — is now deprecated in favor of two dedicated methods.

## Example

```php
<?php

$calendar = IntlCalendar::createInstance('UTC');

$calendar->set(2026, 0, 1, 12, 30, 0);

?>
```

## Alternatives
+ Use ``IntlCalendar::setDate()`` to set the year, month and day, or ``IntlCalendar::setDateTime()`` to also set the hour, minute and second.

## Related error messages
+ [calling-intlgregoriancalendar::__construct()-with-more-than-2-arguments-is-deprecated,](calling-intlgregoriancalendar::\_\_construct\(\)-with-more-than-2-arguments-is-deprecated,.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()