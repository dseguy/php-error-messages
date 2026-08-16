# Cannot redeclare %s::$%s

## Description
A property can only be declared once in a class. This error appears when the same property name is declared twice in the same class body, regardless of whether the visibility or default value differ between the two declarations.

The same restriction applies to promoted properties: a constructor parameter promoted to a property cannot share its name with a property already declared in the class body.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s::$%s.html","name":"Cannot redeclare %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:30:54 +0000","dateModified":"Wed, 05 Aug 2026 11:30:54 +0000","description":"A property can only be declared once in a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public $a;
    public $a;
}

?>
```

## Literal Examples
+ Cannot redeclare X::$a

## Alternatives
+ Remove one of the two duplicate property declarations.
+ Rename one of the two properties.

## Related error messages
+ [cannot-redeclare-%s::%s()](cannot-redeclare-%s::%s\(\).html)
+ [cannot-declare-variadic-promoted-property](cannot-declare-variadic-promoted-property.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()