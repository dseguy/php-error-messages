# Illegal method name

## Description
PHP 8.5 allows first-class callable syntax (`(...)`) to be used inside a constant expression, so that a static method call can be turned into a `Closure` at compile time. To build that closure, the compiler needs the method name as a string that it can resolve at compile time.

Here, the braced expression `{0}` is a compile-time constant, but it is an integer, not a string, so it cannot be used as a method name. PHP reports this as an illegal method name.

This differs from 'Cannot use dynamic method name in constant expression', which is reported when the braced expression cannot be resolved to a constant value at all (for example, because it depends on a variable or is a non-scalar value such as an array).
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-method-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-method-name.html","name":"Illegal method name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:19:05 +0000","dateModified":"Wed, 05 Aug 2026 14:19:05 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-method-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public static function foo() { return 1; }
}

const C = X::{0}(...);

var_dump(C);

?>
```

## Alternatives
+ Use a string, instead of a number or another scalar, for the method name.
+ Ensure the method name is a literal string, or an expression that PHP can resolve to one at compile time.

## Related error messages
+ [cannot-use-dynamic-method-name-in-constant-expression](cannot-use-dynamic-method-name-in-constant-expression.html)
+ [illegal-function-name](illegal-function-name.html)
+ [cannot-use-dynamic-function-name-in-constant-expression](cannot-use-dynamic-function-name-in-constant-expression.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[constantExpressionMethodNameResolution85](constantExpressionMethodNameResolution85)