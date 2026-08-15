# syntax error, unexpected token "const"

## Description
There are several reasons why a `const` token is found misplaced.

Attributes on global constants are supported since PHP 8.5. Before that version, they are not recognized, and yield this syntax error.

The error also appears when the `const` keyword is used in the body of the code, outside the main code: this means in any control flow block, such as `ifthen`, `switch`, etc. and in any structure like `function`, `method`, etc. It is still OK to use `const` in the body of a `class`, `interface`, `trait` or `enum`. In such cases, one must use `define()` to define a constant.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"const\".html","name":"syntax error, unexpected token \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"There are several reasons why a ``const`` token is found misplaced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

#[ConstAttribute]
const A = 1;

if ($condition) {
    // global constant must be in the global space, and cannot be conditional
    const X = 2;
}

class X {
    function foo() {
        // global constant must be in the global space, and cannot be conditional
        const Y = 2;
    }
}

?>
```

## Alternatives
+ Remove the attribute.
+ Refactor the global constant to a class constant.
+ Use define() instead of const.
+ Use the ternary operator ``?  :`` inside the constant definition.
+ Use inclusion.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()