# must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-array_filter_use_value,-array_filter_use_key,-or-array_filter_use_both.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-array_filter_use_value,-array_filter_use_key,-or-array_filter_use_both.html","name":"must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"``array_filter()`` uses its third argument, ``$mode``, to decide what the callback receives: the value (``ARRAY_FILTER_USE_VALUE``, the default), the key (``ARRAY_FILTER_USE_KEY``), or both (``ARRAY_FILTER_USE_BOTH``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-array_filter_use_value,-array_filter_use_key,-or-array_filter_use_both.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`array_filter()` uses its third argument, `$mode`, to decide what the callback receives: the value (`ARRAY_FILTER_USE_VALUE`, the default), the key (`ARRAY_FILTER_USE_KEY`), or both (`ARRAY_FILTER_USE_BOTH`). No other mode makes sense, since the callback's signature is chosen based on exactly one of these three constants.

Before PHP 8.6, passing any other integer for `$mode` was silently treated as `ARRAY_FILTER_USE_VALUE`. As of PHP 8.6, an unrecognized mode now throws a `ValueError` instead of falling back silently.

## Example

```php
<?php

$array = ['a' => 1, 'b' => 2];

array_filter($array, fn($v) => $v > 0, 42);

?>
```

## Literal Examples
+ array_filter(): Argument #3 ($mode) must be one of ARRAY_FILTER_USE_VALUE, ARRAY_FILTER_USE_KEY, or ARRAY_FILTER_USE_BOTH

## Alternatives
+ Pass one of ``ARRAY_FILTER_USE_VALUE``, ``ARRAY_FILTER_USE_KEY``, or ``ARRAY_FILTER_USE_BOTH`` as the ``$mode`` argument to ``array_filter()``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, any unrecognized ``$mode`` value was silently treated as ``ARRAY_FILTER_USE_VALUE``.](Previously, any unrecognized ``$mode`` value was silently treated as ``ARRAY_FILTER_USE_VALUE``.)