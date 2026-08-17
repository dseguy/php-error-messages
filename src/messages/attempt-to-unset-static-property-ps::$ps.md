# Attempt to unset static property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-unset-static-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-unset-static-property-ps::$ps.html","name":"Attempt to unset static property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-07T19:42:12+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is not possible to unset a static property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/attempt-to-unset-static-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to unset a static property.

This applies to typed and not typed static properties. It also only applies to static properties that are already set, such as in the illustration: PHP complains about uninitialized state first, and later, about removing static properties.

This does not apply to properties, which may be removed.

## Example

```php
<?php

class X {
    public static $y = 1;
    public static int $z;
}

//Attempt to unset static property X::$x
unset(X::$y);

//Attempt to unset static property X::$z
unset(X::$z);
X::$z = 2;
//Attempt to unset static property X::$x
unset(X::$z);


?>
```

## Literal Examples
+ Attempt to unset static property X::$x

## Alternatives
+ Set the property to null.
+ Set the property to a value that represents removal.

## Related error messages
+ [typed-property-%s::$%s-must-not-be-accessed-before-initialization](typed-property-%s::$%s-must-not-be-accessed-before-initialization.html)
+ [typed-static-property-%s::$%s-must-not-be-accessed-before-initialization](typed-static-property-%s::$%s-must-not-be-accessed-before-initialization.html)
