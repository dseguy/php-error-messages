# must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-the-scandir_sort_ascending,-scandir_sort_descending,-or-scandir_sort_none-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-the-scandir_sort_ascending,-scandir_sort_descending,-or-scandir_sort_none-constants.html","name":"must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"``scandir()`` takes an optional ``$sorting_order`` argument controlling how the returned directory listing is sorted: ``SCANDIR_SORT_ASCENDING`` (the default), ``SCANDIR_SORT_DESCENDING``, or ``SCANDIR_SORT_NONE``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-the-scandir_sort_ascending,-scandir_sort_descending,-or-scandir_sort_none-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`scandir()` takes an optional `$sorting_order` argument controlling how the returned directory listing is sorted: `SCANDIR_SORT_ASCENDING` (the default), `SCANDIR_SORT_DESCENDING`, or `SCANDIR_SORT_NONE`.

Before PHP 8.6, passing any other integer silently fell through to one of these behaviors without warning. As of PHP 8.6, an unrecognized sorting order now throws a `ValueError` naming the offending argument.

## Example

```php
<?php

scandir('/tmp', 42);

?>
```

## Literal Examples
+ scandir(): Argument #2 ($sorting_order) must be one of the SCANDIR_SORT_ASCENDING, SCANDIR_SORT_DESCENDING, or SCANDIR_SORT_NONE constants

## Alternatives
+ Pass one of ``SCANDIR_SORT_ASCENDING``, ``SCANDIR_SORT_DESCENDING``, or ``SCANDIR_SORT_NONE`` as the ``$sorting_order`` argument to ``scandir()``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, an unrecognized ``$sorting_order`` value was silently accepted instead of throwing.](Previously, an unrecognized ``$sorting_order`` value was silently accepted instead of throwing.)