# Type of %s::$%s must not be defined (as in class %s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::$%s-must-not-be-defined-(as-in-class-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::$%s-must-not-be-defined-(as-in-class-%s).html","name":"Type of %s::$%s must not be defined (as in class %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Property definitions must be compatible one another, between a parent and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::$%s-must-not-be-defined-(as-in-class-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property definitions must be compatible one another, between a parent and a child class. With this error message, the parent class did not define a type for the property, and so, the child class should also not define it. On the other hand, it may change the default value.

## Example

```php
<?php

class X {
    public $a;
}

class Y extends X {
    public array $a;
}

?>
```

## Literal Examples
+ Type of Y::$a must not be defined (as in class X)

## Alternatives
+ Add the type to the parent class, and the sibling classes.
+ Remove the type in the child class.

## Related error messages
+ [type-of-%s::$%s-must-be-%s%s-(as-in-class-%s)](type-of-%s::$%s-must-be-%s%s-\(as-in-class-%s\).html)
