# Type of %s::$%s must be %s%s (as in class %s)

## Description
Property definitions must be compatible one another, between a parent and a child class. With this error message, the parent class defined a type for the property, and so, the child class should also define it. On the other hand, it may change the default value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::$%s-must-be-%s%s-(as-in-class-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::$%s-must-be-%s%s-(as-in-class-%s).html","name":"Type of %s::$%s must be %s%s (as in class %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Property definitions must be compatible one another, between a parent and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::$%s-must-be-%s%s-(as-in-class-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ Type of X::$a must be array (as in class Y)

## Alternatives
+ Use the type to the child class in the parent, and the sibling classes.
+ Use the type of the parent class.

## Related error messages
+ [type-of-%s::$%s-must-not-be-defined-(as-in-class-%s)](asdf)
+ [set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s)](asdf)
+ [type-of-%s::%s-must-be-compatible-with-%s::%s-of-type-%s](asdf)
