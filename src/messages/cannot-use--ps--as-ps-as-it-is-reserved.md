# Cannot use \"%s\" as %s as it is reserved

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--ps--as-ps-as-it-is-reserved.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--ps--as-ps-as-it-is-reserved.html","name":"Cannot use \\\"%s\\\" as %s as it is reserved","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-05T14:00:09+00:00","dateModified":"2026-08-05T14:00:09+00:00","description":"``array`` and ``callable`` cannot be used with the leading backslash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--ps--as-ps-as-it-is-reserved.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`array` and `callable` cannot be used with the leading backslash. This bug was fixed in PHP 8.5.

## Example

```php
<?php

// Since PHP 8.5
function foo() : \array {} 

?>
```

## Alternatives
+ Use the type without the leading ``\``.
+ Upgrade to PHP 8.5 (when available).

## Related error messages
+ [type-declaration-'%s'-must-be-unqualified](type-declaration-%s-must-be-unqualified.html)
+ [cannot-use--"%s-"-as-%s](cannot-use--%s--as-%s.html)
