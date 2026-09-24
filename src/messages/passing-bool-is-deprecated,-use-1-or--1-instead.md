# Passing bool is deprecated, use 1 or -1 instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-bool-is-deprecated,-use-1-or--1-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-bool-is-deprecated,-use-1-or--1-instead.html","name":"Passing bool is deprecated, use 1 or -1 instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-18T06:57:58+02:00","dateModified":"2025-09-18T06:57:58+02:00","description":"``IntlCalendar::roll()`` (and the procedural ``intlcal_roll()``) add an amount to a calendar field, wrapping around instead of carrying into the next field -- e","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-bool-is-deprecated,-use-1-or--1-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`IntlCalendar::roll()` (and the procedural `intlcal_roll()`) add an amount to a calendar field, wrapping around instead of carrying into the next field -- e.g. rolling the hour field past 23 wraps back to 0 rather than advancing the day. The `$value` argument is meant to be a signed int amount, but PHP has always also special-cased a `bool`: `true` is interpreted as `1` and `false` as `-1` -- not the `0` that PHP's normal bool-to-int coercion would produce, which is itself a common source of confusion, and does not appear to serve any purpose the plain integers `1`/`-1` don't already cover.

As of PHP 8.1, passing a `bool` for this argument emits this deprecation notice; it still works exactly as before for now, but relying on this special-cased, non-standard coercion is expected to stop being supported in a future version.

## Example

```php
<?php

$cal = IntlCalendar::createInstance('UTC');

// true/false used to mean 'roll up'/'roll down', mirroring the
// underlying ICU API, which actually expects a signed amount.
$cal->roll(IntlCalendar::FIELD_HOUR_OF_DAY, true);

?>
```

## Literal Examples
+ IntlCalendar::roll(): Passing bool is deprecated, use 1 or -1 instead

## Alternatives
+ Pass 1 instead of true to roll the field up by one.
+ Pass -1 instead of false to roll the field down by one.
+ Pass any other signed int to roll by more than one step in either direction.

## Related error messages
+ [IntlCalendar::roll manual](https://www.php.net/manual/en/intlcalendar.roll.php)
+ [PHP RFC: Deprecations for PHP 8.1](https://wiki.php.net/rfc/deprecations_php_8_1)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()