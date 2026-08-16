# A precedence rule was defined for %s::%s but this method does not exist

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html","name":"A precedence rule was defined for %s::%s but this method does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-23T22:22:32+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When importing the trait, a rule was set up to resolve a method conflict between two methods, while one of them does not exist. This conflict resolution may be removed.

## Example

```php
<?php

trait A {}

trait B {
    public function bar() {}
}

class MyClass {
    use A, B {
        A::bar insteadof B;  // No bar in A
        A::bar as C;         // No bar in A too
    }
}
?>
```

## Literal Examples
+ A precedence rule was defined for A::bar but this method does not exist

## Alternatives
+ Remove the conflicting rule.
+ Create the missing method in the original trait.

## Related error messages
+ [cannot-use--"static-"-as-method-modifier-in-trait-alias](cannot-use--static--as-method-modifier-in-trait-alias.html)
+ [an-alias-was-defined-for-method-%s(),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity](an-alias-was-defined-for-method-%s\(\),-which-exists-in-both-%s-and-%s.-use-%s::%s-or-%s::%s-to-resolve-the-ambiguity.html)
+ [inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s](inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s.html)
+ [the-modifiers-of-the-trait-method-%s()-are-changed,-but-this-method-does-not-exist.-error](the-modifiers-of-the-trait-method-%s\(\)-are-changed,-but-this-method-does-not-exist.-error.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()