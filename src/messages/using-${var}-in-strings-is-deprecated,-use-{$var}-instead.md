# Using  in strings is deprecated, use {$var} instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html","name":"Using  in strings is deprecated, use {$var} instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-07T19:42:12+01:00","dateModified":"2025-04-11T19:46:35+02:00","description":"For variable interpolation, the double quote strings used two variants: ``${var}`` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
For variable interpolation, the double quote strings used two variants: `${var}` (`$` is outside the brackets), and `{$var}` (`$` is inside the brackets).

The first one has been deprecated, and it should be removed in PHP 9.0.

## Example

```php
<?php

$var = 'abc';

echo ;

?>
```

## Alternatives
+ Replace ``${var}`` with ``$var`` inside the string. It should work most of the time.
+ Replace ``${var}`` with ``{$var}`` inside the string. It works every time.
