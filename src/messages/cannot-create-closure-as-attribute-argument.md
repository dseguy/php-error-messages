# Cannot create Closure as attribute argument

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-as-attribute-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-as-attribute-argument.html","name":"Cannot create Closure as attribute argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-13T11:03:18+02:00","dateModified":"2026-07-13T11:03:18+02:00","description":"It is possible to use ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-as-attribute-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to use `...` in a function call, but not as an attribute, as it leads to create a PHP closure, which does not carry the Attribute attribute (sic). It also makes little sense, though the PHP parser accepts it, but not the linter.

## Example

```php
<?php

#[Foo(...)]
function goo() {}

?>
```

## Alternatives
+ Remove the three dots from the attribute.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()