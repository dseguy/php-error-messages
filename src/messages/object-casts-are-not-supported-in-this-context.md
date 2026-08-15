# Object casts are not supported in this context

## Description
All cast operators are not supported in a static constant expression. This applies to all casts operations: `(int)`, `(string)`, `(bool)`, `(array)`, `(object)`, until PHP 8.5. In PHP 8.5 and later, only `(object)` is not supported.

They look like any other operator, such as `+` or `.`, but they require data manipulations which are incompatible with constant expressions.

While it may be useless to apply a cast to a literal value, it might be useful to use it with another expression or another constant.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-casts-are-not-supported-in-this-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-casts-are-not-supported-in-this-context.html","name":"Object casts are not supported in this context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"All cast operators are not supported in a static constant expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-casts-are-not-supported-in-this-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
class X {
    public $foo = (object) [];
}
?>
```

## Alternatives
+ Create a value directly with the target type.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()