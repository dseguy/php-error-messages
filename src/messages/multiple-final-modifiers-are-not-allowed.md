# Multiple final modifiers are not allowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-final-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-final-modifiers-are-not-allowed.html","name":"Multiple final modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"One mention of the ``final`` option is sufficient to make a method so","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-final-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
One mention of the `final` option is sufficient to make a method so.

## Example

```php
<?php

class X {
    final final function foo() {}
}

?>
```

## Alternatives
+ Keep only one mention of ``final``.

## Related error messages
+ [multiple-%s-modifiers-are-not-allowed](multiple-%s-modifiers-are-not-allowed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()