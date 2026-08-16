# Cannot use the static modifier on a parameter

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-static-modifier-on-a-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-static-modifier-on-a-parameter.html","name":"Cannot use the static modifier on a parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 29 May 2026 14:41:15 +0000","dateModified":"Fri, 29 May 2026 14:41:15 +0000","description":"It is not possible to use ``static`` as a type for a parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-static-modifier-on-a-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to use `static` as a type for a parameter. It is possible for a return value, but not for parameters, not properties.

## Example

```php
<?php

    class X {
        function foo(static $argument) {
        
        }
    }

?>
```

## Alternatives
+ Use self pseudo-type.
+ Use the name of the class as type.
+ Use one of the interface as type.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()