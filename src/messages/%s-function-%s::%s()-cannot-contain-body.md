# %s function %s::%s() cannot contain body

## Description
A method that is abstract -- either explicitly declared `abstract`, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation.

The first `%s` in the message is `Interface` when the method is declared inside an `interface`, and `Abstract` when it is an explicitly `abstract` method of a class or trait.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-function-%s::%s()-cannot-contain-body.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-function-%s::%s()-cannot-contain-body.html","name":"%s function %s::%s() cannot contain body","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 09:15:14 +0000","dateModified":"Thu, 06 Aug 2026 09:15:14 +0000","description":"A method that is abstract -- either explicitly declared ``abstract``, or implicitly abstract because it belongs to an interface -- is only a signature: it must not have an implementation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-function-%s::%s()-cannot-contain-body.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface Colorful {
    function color() {
        return 'red';
    }
}

?>
```

## Literal Examples
+ Interface function Colorful::color() cannot contain body
+ Abstract function C::color() cannot contain body

## Alternatives
+ Remove the method body, keeping only the signature followed by a semicolon.
+ Remove the `abstract` keyword, or move the method out of the interface, if it should have an implementation.

## Related error messages
+ [%s-method-%s::%s()-must-not-be-abstract](%s-method-%s::%s\(\)-must-not-be-abstract.html)
+ [non-abstract-method-%s::%s()-must-contain-body](non-abstract-method-%s::%s\(\)-must-contain-body.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()