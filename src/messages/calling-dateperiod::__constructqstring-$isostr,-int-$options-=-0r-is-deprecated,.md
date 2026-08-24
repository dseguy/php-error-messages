# Calling DatePeriod::__construct(string $isostr, int $options = 0) is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-dateperiod::__constructqstring-$isostr,-int-$options-=-0r-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-dateperiod::__constructqstring-$isostr,-int-$options-=-0r-is-deprecated,.html","name":"Calling DatePeriod::__construct(string $isostr, int $options = 0) is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-21T07:46:11+00:00","dateModified":"2026-08-21T07:46:11+00:00","description":"``DatePeriod::__construct()`` has always accepted several unrelated sets of arguments: a start ``DateTimeInterface``, an interval and either an end date or a number of recurrences, or, as a third overload, a single ISO 8601 recurring interval string (such as ``R4\/2026-01-01T00:00:00Z\/P1D``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-dateperiod::__constructqstring-$isostr,-int-$options-=-0r-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`DatePeriod::__construct()` has always accepted several unrelated sets of arguments: a start `DateTimeInterface`, an interval and either an end date or a number of recurrences, or, as a third overload, a single ISO 8601 recurring interval string (such as `R4/2026-01-01T00:00:00Z/P1D`).

Overloaded constructors that change meaning based on the number and type of arguments are error-prone and hard to document accurately. The ISO 8601 string overload is being split out into its own named constructor, and calling the constructor directly with a string is deprecated.

## Example

```php
<?php

$period = new DatePeriod('R4/2026-01-01T00:00:00Z/P1D');

foreach ($period as $date) {
    echo $date->format('Y-m-d'), PHP_EOL;
}

?>
```

## Alternatives
+ Use ``DatePeriod::createFromISO8601String()`` instead of passing the ISO 8601 recurring interval string to the constructor.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()