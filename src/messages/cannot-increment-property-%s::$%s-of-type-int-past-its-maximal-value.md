# Cannot increment property %s::$%s of type int past its maximal value

## Description
When a property is typed as an int, it cannot have a value higher than `PHP_INT_MIN`: beyond it, it would be turned into a float. There is a symetric error with the min value of an integer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html","name":"Cannot increment property %s::$%s of type int past its maximal value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When a property is typed as an int, it cannot have a value higher than ``PHP_INT_MIN``: beyond it, it would be turned into a float","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-increment-property-%s::$%s-of-type-int-past-its-maximal-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public int $p;
}

$x = new X;

$x->p = PHP_INT_MAX;
++$test->foo;

?>
```

## Literal Examples
+ Cannot increment property X::$p of type int past its maximal value

## Alternatives
+ Check the value before incrementing.
+ Drop the type, but see the property get turned into a float.

## Related error messages
+ [cannot-decrement-property-%s::$%s-of-type-int-past-its-minimal-value](asdf)
