# Cannot apply attributes to multiple constants at once

## Description
It is not possible to use attributes on global constants, when several constants are defined at the same time. That syntax is possible with class constants, but not with global constants.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-attributes-to-multiple-constants-at-once.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-attributes-to-multiple-constants-at-once.html","name":"Cannot apply attributes to multiple constants at once","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to use attributes on global constants, when several constants are defined at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-apply-attributes-to-multiple-constants-at-once.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[Foo]
const A = 1,
      B = 2;

?>
```

## Alternatives
+ Split the constant definitions, and apply the same attribute to each of them.
+ Convert the global constants to class constants.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()