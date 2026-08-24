# must be either CASE_LOWER or CASE_UPPER

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-either-case_lower-or-case_upper.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-either-case_lower-or-case_upper.html","name":"must be either CASE_LOWER or CASE_UPPER","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T20:15:56+00:00","dateModified":"2026-08-24T20:15:56+00:00","description":"``array_change_key_case()`` converts every string key of an array to either all-lowercase or all-uppercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-either-case_lower-or-case_upper.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`array_change_key_case()` converts every string key of an array to either all-lowercase or all-uppercase. Its second argument only accepts two values: `CASE_LOWER` (the default) or `CASE_UPPER`.

Previously, passing any other integer was silently treated as `CASE_LOWER`. As of PHP 8.6, the function validates the argument up front and throws a `ValueError` for anything else, instead of quietly falling back to the default.

## Example

```php
<?php

$array = ['FOO' => 1, 'BAR' => 2];

array_change_key_case($array, 2);

?>
```

## Literal Examples
+ array_change_key_case(): Argument #2 ($case) must be either CASE_LOWER or CASE_UPPER

## Alternatives
+ Pass either ``CASE_LOWER`` or ``CASE_UPPER`` as the second argument to ``array_change_key_case()``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, any value other than ``CASE_UPPER`` was silently treated as ``CASE_LOWER``.](Previously, any value other than ``CASE_UPPER`` was silently treated as ``CASE_LOWER``.)