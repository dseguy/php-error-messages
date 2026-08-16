# Visibility of property %s::$%s must not be weaker than set visibility

## Description
When using asymmetric visibility, it is not allowed to have a weaker `public` visibility for writing than for reading (private). This would be akin to a variable which can be written from the public scope, which is accessible to the class, but not read from that scope. As such, the set visibility must be at most the same than the get one. 

Using the same level of visibility with both options is possible, although useless.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/visibility-of-property-%s::$%s-must-not-be-weaker-than-set-visibility.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/visibility-of-property-%s::$%s-must-not-be-weaker-than-set-visibility.html","name":"Visibility of property %s::$%s must not be weaker than set visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"When using asymmetric visibility, it is not allowed to have a weaker ``public`` visibility for writing than for reading (private)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/visibility-of-property-%s::$%s-must-not-be-weaker-than-set-visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
   private public(set) string $p;

	// valid but useless
   //protected protected(set) string $p;

	// valid
   public public(set) string $p;
}

?>
```

## Literal Examples
+ Visibility of property ``x::$p`` must not be weaker than set visibility

## Alternatives
+ Make the property private, and set up an accessor method.
+ Use the magic methods ``__get()`` and ``__set()`` to set up that kind of feature.
