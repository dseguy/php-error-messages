# Type mixed cannot be marked as nullable since mixed already includes null

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html","name":"Type mixed cannot be marked as nullable since mixed already includes null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-20T12:20:02+02:00","dateModified":"2025-09-14T18:09:14+02:00","description":"``mixed`` is a special type, that represents all the available types, include null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mixed` is a special type, that represents all the available types, include null.

## Example

```php
<?php

function foo(?mixed $i = null) {}

?>
```

## Alternatives
+ Remove the ``?`` type with mixed.
+ Keep the ``?`` type, and replace ``mixed``, with some other type.

## Related error messages
+ [type-mixed-can-only-be-used-as-a-standalone-type](type-mixed-can-only-be-used-as-a-standalone-type.html)
