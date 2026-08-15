# Cannot decrement property %s::$%s of type int past its minimal value

## Description
When a property is typed as an int, it cannot have a value lower than `PHP_INT_MIN`. There is a symetric error with the max value of an integer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value.html","name":"Cannot decrement property %s::$%s of type int past its minimal value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When a property is typed as an int, it cannot have a value lower than ``PHP_INT_MIN``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public int $p;
}

$x = new X;

$x->p = PHP_INT_MIN;
--$test->foo;

?>
```

## Literal Examples
+ Cannot decrement property Test::$p of type int past its minimal value

## Alternatives
+ Check the value before decrementing.
+ Drop the type, but see the property get turned into a float.

## Related error messages
+ [cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value](cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html)
