# Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times

## Description
The `insteadof` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after `insteadof`.

Each trait can only be marked as excluded, for a given method, once. Here, `B` is listed twice in the same `insteadof` clause for `hello()`, which is redundant: PHP has nothing more to learn from the second mention, and rejects the declaration outright, rather than silently ignoring the duplicate.

The same error also occurs when the same trait ends up excluded twice for the same method through two separate precedence rules, not just within a single `insteadof` list.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times.html","name":"Failed to evaluate a trait precedence (%s). Method of trait %s was defined to be excluded multiple times","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:42 +0000","dateModified":"Thu, 06 Aug 2026 13:26:42 +0000","description":"The ``insteadof`` operator resolves a conflict between two or more traits that define a method with the same name: it picks the version to keep, and implicitly excludes that method from the traits listed after ``insteadof``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trait A {
    public function hello() { echo 'A'; }
}

trait B {
    public function hello() { echo 'B'; }
}

class X {
    use A, B {
        A::hello insteadof B, B;
    }
}

?>
```

## Literal Examples
+ Failed to evaluate a trait precedence (hello). Method of trait B was defined to be excluded multiple times

## Alternatives
+ Remove the duplicate trait name from the insteadof list.
+ Check whether the trait is already excluded for that method by another precedence rule.

## Related error messages
+ [inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s](inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()