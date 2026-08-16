# Unknown or bad format (%s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-or-bad-format-(%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-or-bad-format-(%s).html","name":"Unknown or bad format (%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-15T10:08:31+01:00","dateModified":"2025-03-15T10:08:31+01:00","description":"This error is emitted by the Date extension, when creating a DatePeriod class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-or-bad-format-(%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted by the Date extension, when creating a DatePeriod class. That class requires a start date as the first argument, and the provided value could not be parsed.

## Example

```php
<?php

new DatePeriod('L');

?>
```

## Literal Examples
+ Unknown or bad format (L)

## Alternatives
+ Use a valid date.
+ Use a DateTimeInterface object as first argument: DateTimeImmutable, DateTime, etc.
+ Use the DatePeriod::createFromISO8601String() method to handle ISO 8601 formats.
