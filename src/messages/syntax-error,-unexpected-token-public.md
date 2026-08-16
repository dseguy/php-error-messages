# syntax error, unexpected token "public"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"public\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"public\".html","name":"syntax error, unexpected token \"public\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"The keyword ``public`` is expected in a PHP method body, but not in the body of a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"public\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The keyword `public` is expected in a PHP method body, but not in the body of a method or a function.

This may apply to the other visibilies, `protected` and `private`, and also to some other method options, such as `abstract`.

## Example

```php
<?php

class A {
    function foo() {
        public $x;
    }
}
?>
```

## Alternatives
+ Close the initial method body, before creating another property or method with a visibility.
+ Remove the ``public`` keyword in the body of the method.
