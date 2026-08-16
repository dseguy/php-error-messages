# "static::" is not allowed in compile-time constants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/\"static::\"-is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/\"static::\"-is-not-allowed-in-compile-time-constants.html","name":"\"static::\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-14T16:25:15+00:00","dateModified":"2026-08-14T16:25:15+00:00","description":"The ``static`` keyword is a relative class identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/\"static::\"-is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `static` keyword is a relative class identifier. It is resolved at execution time, depending on which class is calling the expression.

In the case of constants, such as class constants or default values in parameters or properties, they must be known at compile time, to be usable as soon as the application start. 

On the other hand, `self` and `parent` are valid relative values, as there can only be one.

## Example

```php
<?php

interface I {
    const C = static::NAME;
}

class X {
	public $c = static::name;
    function foo($c = static::NAME) {}
}

?>
```

## Alternatives
+ Use self::.
+ Set the value dynamically, at execution time.
