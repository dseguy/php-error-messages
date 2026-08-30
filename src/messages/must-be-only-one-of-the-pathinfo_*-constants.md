# must be only one of the PATHINFO_* constants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-only-one-of-the-pathinfo_*-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-only-one-of-the-pathinfo_*-constants.html","name":"must be only one of the PATHINFO_* constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"Unlike most bitmask arguments, ``pathinfo()``'s ``$flags`` argument (aside from the catch-all ``PATHINFO_ALL``) is meant to select exactly one part of the path at a time: ``PATHINFO_DIRNAME``, ``PATHINFO_BASENAME``, ``PATHINFO_EXTENSION``, or ``PATHINFO_FILENAME``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-only-one-of-the-pathinfo_*-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Unlike most bitmask arguments, `pathinfo()`'s `$flags` argument (aside from the catch-all `PATHINFO_ALL`) is meant to select exactly one part of the path at a time: `PATHINFO_DIRNAME`, `PATHINFO_BASENAME`, `PATHINFO_EXTENSION`, or `PATHINFO_FILENAME`. Combining two of them with `|` does not make sense, since the function then wouldn't know which single value to return.

As of PHP 8.6, combining more than one of these single-part constants (without using `PATHINFO_ALL`) throws a `ValueError`, instead of silently returning just one of the requested parts.

## Example

```php
<?php

pathinfo('/tmp/example.txt', PATHINFO_DIRNAME | PATHINFO_EXTENSION);

?>
```

## Literal Examples
+ pathinfo(): Argument #2 ($flags) must be only one of the PATHINFO_* constants

## Alternatives
+ Pass exactly one of ``PATHINFO_DIRNAME``, ``PATHINFO_BASENAME``, ``PATHINFO_EXTENSION``, or ``PATHINFO_FILENAME``, or use ``PATHINFO_ALL`` to get all of them as an array.

## Related error messages
+ [must-be-one-of-the-pathinfo_*-constants](must-be-one-of-the-pathinfo\_\*-constants.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, combining multiple single-part PATHINFO_* constants silently returned only one of the requested parts instead of throwing.](Previously, combining multiple single-part PATHINFO_* constants silently returned only one of the requested parts instead of throwing.)