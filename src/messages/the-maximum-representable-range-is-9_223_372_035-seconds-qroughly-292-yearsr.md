# The maximum representable range is 9_223_372_035 seconds (roughly 292 years)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-maximum-representable-range-is-9_223_372_035-seconds-qroughly-292-yearsr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-maximum-representable-range-is-9_223_372_035-seconds-qroughly-292-yearsr.html","name":"The maximum representable range is 9_223_372_035 seconds (roughly 292 years)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:36:09+00:00","dateModified":"2026-09-04T14:36:09+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-maximum-representable-range-is-9_223_372_035-seconds-qroughly-292-yearsr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces `Time\Duration`, a value object representing a span of time as whole seconds plus nanoseconds. Even though a 64-bit `zend_long` could count seconds far beyond any realistic duration, `$seconds` is deliberately capped at `9_223_372_035`, so that the whole duration can still be expressed as a single count of nanoseconds without overflowing a 64-bit integer (roughly `PHP_INT_MAX` divided by one billion). That works out to about 292 years.

Passing a larger number of seconds to `Duration::fromSeconds()` (or the constructor) throws a `Time\TimeException`, instead of silently producing a value that could overflow later.

## Example

```php
<?php

use Time\Duration;

$duration = Duration::fromSeconds(9_223_372_036);

?>
```

## Literal Examples
+ The maximum representable range is 9_223_372_035 seconds (roughly 292 years)

## Alternatives
+ Keep durations within 9_223_372_035 seconds (about 292 years).
+ For spans of time longer than that, model them with something other than Duration, such as separate DateTimeImmutable endpoints.

## Related error messages
+ [the-maximum-representable-range-is-2_147_483_647-seconds-(roughly-68-years)](the-maximum-representable-range-is-2\_147\_483\_647-seconds-\(roughly-68-years\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()