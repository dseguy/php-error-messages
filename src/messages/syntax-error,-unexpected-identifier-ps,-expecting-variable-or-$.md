# syntax error, unexpected identifier "%s", expecting variable or "$"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable-or-\"$\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable-or-\"$\".html","name":"syntax error, unexpected identifier \"%s\", expecting variable or \"$\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``new`` works with objects, static properties and normal properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable-or-\"$\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`new` works with objects, static properties and normal properties. It does not work with class constants, even if the constant is an object.

## Example

```php
<?php

class A  {
    const B = C;
}

const C = new A;

var_dump(new A::B);

?>
```

## Literal Examples
+ syntax error, unexpected identifier "B", expecting variable or "$"

## Alternatives
+ Store the constant in a variable, and ``new`` the variable.
+ Get the class name with ``get_class`` or ``::class`` and then, create the new object.
