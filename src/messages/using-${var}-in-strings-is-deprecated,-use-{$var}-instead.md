# Using  in strings is deprecated, use {$var} instead

## Description
For variable interpolation, the double quote strings used two variants: `${var}` (`$` is outside the brackets), and `{$var}` (`$` is inside the brackets).

The first one has been deprecated, and it should be removed in PHP 9.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html","name":"Using  in strings is deprecated, use {$var} instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"For variable interpolation, the double quote strings used two variants: ``${var}`` (``$`` is outside the brackets), and ``{$var}`` (``$`` is inside the brackets)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-${var}-in-strings-is-deprecated,-use-{$var}-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
