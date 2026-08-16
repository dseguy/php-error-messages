# DateTimeZone object is unconstructed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/datetimezone-object-is-unconstructed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/datetimezone-object-is-unconstructed.html","name":"DateTimeZone object is unconstructed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-25T18:45:01+02:00","dateModified":"2026-07-25T18:45:01+02:00","description":"``IntlTimeZone::fromDateTimeZone()`` converts a ``DateTimeZone`` object into an ``IntlTimeZone`` one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/datetimezone-object-is-unconstructed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`IntlTimeZone::fromDateTimeZone()` converts a `DateTimeZone` object into an `IntlTimeZone` one. To do so, it reads the internal timezone data that `DateTimeZone::__construct()` normally sets up.

If it is given a `DateTimeZone` instance that was created without going through its constructor -- for example via `ReflectionClass::newInstanceWithoutConstructor()`, or an object left in a broken state after a failed `unserialize()` -- that internal data is missing, and the conversion cannot proceed.

## Example

```php
<?php

$tz = (new ReflectionClass(DateTimeZone::class))->newInstanceWithoutConstructor();

// The object exists, but __construct() was never called
IntlTimeZone::fromDateTimeZone($tz);

?>
```

## Alternatives
+ Always create the ``DateTimeZone`` with ``new DateTimeZone($identifier)`` rather than bypassing its constructor.
+ If the object comes from unserialization, verify it succeeded and produced a valid object before using it.
+ Wrap the call in a ``try``/``catch`` (Error) if the ``DateTimeZone`` instance's origin cannot be controlled.

## Related error messages
+ [the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed](the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed.html)
+ [intllistformatter-object-is-already-constructed](intllistformatter-object-is-already-constructed.html)

## Related error messages
+ [IntlTimeZone::fromDateTimeZone](https://www.php.net/manual/en/intltimezone.fromdatetimezone.php)
+ [DateTimeZone](https://www.php.net/manual/en/class.datetimezone.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()