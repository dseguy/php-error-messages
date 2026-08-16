# Type mixed can only be used as a standalone type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-mixed-can-only-be-used-as-a-standalone-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-mixed-can-only-be-used-as-a-standalone-type.html","name":"Type mixed can only be used as a standalone type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"``mixed`` is a special type, that represents all the available types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-mixed-can-only-be-used-as-a-standalone-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mixed` is a special type, that represents all the available types. There is no need to combine this type in an union, as all the types are already compiled in `mixed`; Nor it can be combined in an intersectional type.

## Example

```php
<?php

function foo(A|mixed $i = null) {}

?>
```

## Alternatives
+ Remove the mixed type and use other types.
+ Remove the mixed type entirely.

## Related error messages
+ [type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null](type-mixed-cannot-be-marked-as-nullable-since-mixed-already-includes-null.html)
+ [never-can-only-be-used-as-a-standalone-type](never-can-only-be-used-as-a-standalone-type.html)
+ [void-can-only-be-used-as-a-standalone-type](void-can-only-be-used-as-a-standalone-type.html)
