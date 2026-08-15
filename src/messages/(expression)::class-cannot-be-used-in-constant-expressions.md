# (expression)::class cannot be used in constant expressions

## Description
This error appears when the value of a constant is not entirely static, but may depend on context. In this case, the `self::A` will only be known when the trait t is used in a class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/(expression)::class-cannot-be-used-in-constant-expressions.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/(expression)::class-cannot-be-used-in-constant-expressions.html","name":"(expression)::class cannot be used in constant expressions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error appears when the value of a constant is not entirely static, but may depend on context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/(expression)::class-cannot-be-used-in-constant-expressions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trait T {
    const A = parent::class;
    const B = self::A::class;
}

?>
```

## Alternatives
+ Keep values of constants simple.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()