# Method %s::__toString() must not throw an exception, caught %s: %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s.html","name":"Method %s::__toString() must not throw an exception, caught %s: %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::__tostring()-must-not-throw-an-exception,-caught-%s:-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 8.0, `__toString` could not throw exception, and would end up with this error. In PHP 8.0, it is now possible.

## Example

```php
<?php

class X {
    function __toString() {
        throw new \Exception('error');
    }
    
    function foo() {
        throw new \Exception('error');
    }
    
}

?>
```

## Literal Examples
+ Method X::__toString() must not throw an exception, caught Exception: error

## Alternatives
+ Upgrade to PHP 8.0.
+ Store the error in another property, and check the property in another method, after the call to ``__toString``.
