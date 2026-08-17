# An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-alias-was-defined-for-method-psqr,-which-exists-in-both-ps-and-ps.-use-ps::ps-or-ps::ps-to-resolve-the-ambiguity.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-alias-was-defined-for-method-psqr,-which-exists-in-both-ps-and-ps.-use-ps::ps-or-ps::ps-to-resolve-the-ambiguity.html","name":"An alias was defined for method %s(), which exists in both %s and %s. Use %s::%s or %s::%s to resolve the ambiguity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Inside the ``use`` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing ``method as alias","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-alias-was-defined-for-method-psqr,-which-exists-in-both-ps-and-ps.-use-ps::ps-or-ps::ps-to-resolve-the-ambiguity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Inside the `use` block of a class, an alias rule can rename a trait method without stating which trait it comes from, by writing `method as alias;`.

When several of the traits used by the class declare a method with that exact name, PHP has no way to decide which one the alias should refer to, since the unqualified form only works when the name is unambiguous. The class composition fails until the origin trait is made explicit.

## Example

```php
<?php

trait A {
    public function foo() {}
}

trait B {
    public function foo() {}
}

class C {
    use A, B {
        foo as bar;
    }
}

?>
```

## Literal Examples
+ An alias was defined for method foo(), which exists in both A and B. Use A::foo or B::foo to resolve the ambiguity

## Alternatives
+ Qualify the reference with the trait it should come from, as in `A::foo as bar;`.
+ Rename or remove the method in one of the conflicting traits so only one of them still declares it.

## Related error messages
+ [the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error](the-modifiers-of-the-trait-method-%s\(\)-are-changed,-but-this-method-does-not-exist.-error.html)
+ [a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist](a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()