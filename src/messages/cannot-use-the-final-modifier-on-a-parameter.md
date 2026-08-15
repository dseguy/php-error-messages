# Cannot use the final modifier on a parameter

## Description
The `final` option is not available for promoted properties, until PHP 8.5. Until then, the property shall be `final` but not `promoted`, or it has to be declared the traditional way.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-a-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-a-parameter.html","name":"Cannot use the final modifier on a parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``final`` option is not available for promoted properties, until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-final-modifier-on-a-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function __construct( 
        public final int $i
    ) {}
}

?>
```

## Alternatives
+ Upgrade to PHP 8.5 or more recent.
+ Remove the final property from the promoted property.
+ Create the property in the class body.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()