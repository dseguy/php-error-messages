# Cannot declare self-referencing constant

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-self-referencing-constant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-self-referencing-constant.html","name":"Cannot declare self-referencing constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A self-referencing constant is a constant that is defined by itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-self-referencing-constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A self-referencing constant is a constant that is defined by itself.

This error doesn't apply to global constants. The global constants are immediately made available, and, for that, they need to be evaluated: this leads to the error `Undefined constant A`.

Self-referencing constants are not allowed, contraty to self-referencing acronym, that PHP enjoys.

## Example

```php
<?php

class X {
    const A = x::A + 1;

    const B = self::C + 1;
    const C = x::B + 1;
}

?>
```

## Alternatives
+ Create a distinct constant that can help build this one.
+ Fix the name of the constant with a distinct one.
+ Fix the name of the class with a distinct one.

## Related error messages
+ [undefined-constant-"%s](undefined-constant-%s.html)
