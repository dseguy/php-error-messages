# must be one of the PATHINFO_* constants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-the-pathinfo_*-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-the-pathinfo_*-constants.html","name":"must be one of the PATHINFO_* constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"``pathinfo()`` takes an optional ``$flags`` argument built from the ``PATHINFO_DIRNAME``, ``PATHINFO_BASENAME``, ``PATHINFO_EXTENSION``, ``PATHINFO_FILENAME``, and ``PATHINFO_ALL`` constants, describing which parts of the path to return","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-the-pathinfo_*-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`pathinfo()` takes an optional `$flags` argument built from the `PATHINFO_DIRNAME`, `PATHINFO_BASENAME`, `PATHINFO_EXTENSION`, `PATHINFO_FILENAME`, and `PATHINFO_ALL` constants, describing which parts of the path to return.

Previously, passing a value outside this set was silently accepted and produced an empty (or nonsensical) result. As of PHP 8.6, `pathinfo()` validates that `$flags` is actually built from these constants and throws a `ValueError` otherwise, instead of silently returning incomplete information.

## Example

```php
<?php

pathinfo('/tmp/example.txt', 9999);

?>
```

## Literal Examples
+ pathinfo(): Argument #2 ($flags) must be one of the PATHINFO_* constants

## Alternatives
+ Only pass a combination of ``PATHINFO_DIRNAME``, ``PATHINFO_BASENAME``, ``PATHINFO_EXTENSION``, ``PATHINFO_FILENAME``, or ``PATHINFO_ALL`` as the ``$flags`` argument.

## Related error messages
+ [must-be-only-one-of-the-pathinfo_*-constants](must-be-only-one-of-the-pathinfo\_\*-constants.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, an invalid ``$flags`` value was silently accepted and returned incomplete or empty results instead of throwing.](Previously, an invalid ``$flags`` value was silently accepted and returned incomplete or empty results instead of throwing.)