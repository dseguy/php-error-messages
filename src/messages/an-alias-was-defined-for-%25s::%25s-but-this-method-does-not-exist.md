# An alias was defined for %s::%s but this method does not exist

## Description
When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class.

PHP checks that the original method exists, before allocating the new name. When the original method doesn't exist, PHP emits this error message.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist.html","name":"An alias was defined for %s::%s but this method does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

trait T {}

class X {
    use T {
        foo as bar;
    }
}
?>
```

## Literal Examples
+ An alias was defined for X::foo but this method does not exist

## Alternatives
+ Check the name of the original method for typos.
+ Add the missing method in the trait.
+ Remove the alias.
+ Remove the method with the same name in the class, and remove the alias.

## Related error messages
+ [an-alias-(%s)-was-defined-for-method-%s(),-but-this-method-does-not-exist](an-alias-\(%s\)-was-defined-for-method-%s\(\),-but-this-method-does-not-exist.html)
+ [cannot-use--"static-"-as-method-modifier-in-trait-alias](cannot-use--static--as-method-modifier-in-trait-alias.html)
