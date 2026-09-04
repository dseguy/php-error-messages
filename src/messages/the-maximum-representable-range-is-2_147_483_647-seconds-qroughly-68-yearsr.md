# The maximum representable range is 2_147_483_647 seconds (roughly 68 years)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-maximum-representable-range-is-2_147_483_647-seconds-qroughly-68-yearsr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-maximum-representable-range-is-2_147_483_647-seconds-qroughly-68-yearsr.html","name":"The maximum representable range is 2_147_483_647 seconds (roughly 68 years)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:36:03+00:00","dateModified":"2026-09-04T14:36:03+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-maximum-representable-range-is-2_147_483_647-seconds-qroughly-68-yearsr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces `Time\Duration`, a value object representing a span of time as whole seconds plus nanoseconds. Internally, the number of seconds is validated so that the whole duration, expressed in nanoseconds, still fits in a single platform integer (`zend_long`).

On a 32-bit build of PHP, where `zend_long` is only 32 bits wide, that ties the maximum number of seconds to `PHP_INT_MAX` on that platform: `2_147_483_647` seconds, or roughly 68 years. Passing a larger value throws a `Time\TimeException`. On 64-bit builds, the equivalent, larger limit is described separately (see `the-maximum-representable-range-is-9_223_372_035-seconds-(roughly-292-years)`).

## Example

```php
<?php

use Time\Duration;

// on a 32-bit build of PHP
$duration = Duration::fromSeconds(3_000_000_000);

?>
```

## Literal Examples
+ The maximum representable range is 2_147_483_647 seconds (roughly 68 years)

## Alternatives
+ Keep durations built from Duration::fromSeconds() (or the constructor) within PHP_INT_MAX seconds for the target platform.
+ On 32-bit systems, split very long spans of time into smaller Duration values, or use DateInterval instead.

## Related error messages
+ [the-maximum-representable-range-is-9_223_372_035-seconds-(roughly-292-years)](the-maximum-representable-range-is-9\_223\_372\_035-seconds-\(roughly-292-years\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()