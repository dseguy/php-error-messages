# Access level to %s::$%s must be %s (as in class %s)%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-ps::$ps-must-be-ps-qas-in-class-psrps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-ps::$ps-must-be-ps-qas-in-class-psrps.html","name":"Access level to %s::$%s must be %s (as in class %s)%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-04T21:25:09+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-ps::$ps-must-be-ps-qas-in-class-psrps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class. `public` may be narrowed to `protected` or `private`, and `protected` may be narrowed to `private`, but never the other way, and a child cannot go further and restrict a `protected` property down when the parent is already `public` unless it stays at least as visible.

Here, `X::$property` is `protected`, and `Y` tries to redeclare it as `private`, which is a narrowing and is therefore rejected.

The trailing, optional part of the message (` or weaker`) is added whenever the parent property is not `public`: it means the child property must use the same visibility as the parent, or something even more permissive.

## Example

```php
<?php

class X {
    protected $property;
}

class Y extends X {
    private $property;
}

?>
```

## Literal Examples
+ Access level to Y::$property must be protected or weaker (as in class X)

## Alternatives
+ Use the same visibility as the parent property.
+ Use a visibility that is the same as, or wider than, the parent property's.
+ Remove the redeclaration in the child class, and inherit the parent property as-is.

## Related error messages
+ [access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s](access-level-to-%s::%s-must-be-%s-\(as-in-%s-%s\)%s.html)
+ [set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s](set-access-level-of-%s::$%s-must-be-%s-\(as-in-class-%s\)%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()