# %s::__toString() must return a string

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::__tostring()-must-return-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::__tostring()-must-return-a-string.html","name":"%s::__toString() must return a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-05-06T07:21:26+02:00","dateModified":"2026-03-31T11:06:56+02:00","description":"The magic method ``__toString`` converts the current object into a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::__tostring()-must-return-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The magic method `__toString` converts the current object into a string. Hence, and even if the return type of that method is not explicitly set, it MUST return a string.

With strict types, it may only be a string. Without them, integers and booleans are auto cast silently.

Adding the return type or not does not change this behavior. It is actually set, and could not be any other type anyway.

## Example

```php
<?php

class X {
    function __toString() {
        return 1;
    }
}

(string) (new X);

?>
```

## Literal Examples
+ X::__toString() must return a string

## Alternatives
+ Return a string.
+ Cast the value to a string before returning.
