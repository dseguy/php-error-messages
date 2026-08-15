# Inconsistent insteadof definition. The method %s is to be used from %s

## Description
The `insteadof` rule picks, for a given method name, the trait it should be taken from, and implicitly excludes that same method from every trait listed after `insteadof`.

Here, `A::foo insteadof A, B` says both that `foo` should come from `A`, and that `A`'s own `foo` should be excluded, which is a direct contradiction. PHP's full message continues with `, but %s is also on the exclude list` naming the trait found in both places -- a part not captured in this templated entry, which only records the first sentence.

Note that listing a trait that is not otherwise involved in the conflict after `insteadof` is fine and does not raise this error; it is specifically excluding the trait the method is kept from that is inconsistent.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s.html","name":"Inconsistent insteadof definition. The method %s is to be used from %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 09:15:04 +0000","dateModified":"Thu, 06 Aug 2026 09:15:04 +0000","description":"The ``insteadof`` rule picks, for a given method name, the trait it should be taken from, and implicitly excludes that same method from every trait listed after ``insteadof``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/inconsistent-insteadof-definition.-the-method-%s-is-to-be-used-from-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
        A::foo insteadof A, B;
    }
}

?>
```

## Literal Examples
+ Inconsistent insteadof definition. The method foo is to be used from A

## Alternatives
+ Remove the trait providing the winning method from its own exclude list, keeping only the other conflicting traits after `insteadof`.
+ Rewrite the rule as `A::foo insteadof B;` if only `B`'s `foo` should be excluded.

## Related error messages
+ [a-precedence-rule-was-defined-for-%s::%s-but-this-method-does-not-exist](asdf)
+ [failed-to-evaluate-a-trait-precedence-(%s).-method-of-trait-%s-was-defined-to-be-excluded-multiple-times](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()