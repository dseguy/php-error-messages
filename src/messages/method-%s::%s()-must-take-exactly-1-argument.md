# Method %s::%s() must take exactly 1 argument

## Description
This error reports that a method requires one and only one argument. It applies to methods such as `__set_state()` and `__get`.

It may be surprising that it is a compile time error. Actually, the faulty method is a magic method, so PHP already knows what signature is expected for that method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s()-must-take-exactly-1-argument.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s()-must-take-exactly-1-argument.html","name":"Method %s::%s() must take exactly 1 argument","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error reports that a method requires one and only one argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::%s()-must-take-exactly-1-argument.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function __set_state() {}
}

?>
```

## Literal Examples
+ Method X::__set_state() must take exactly 1 argument

## Alternatives
+ Use one argument for this method.

## Related error messages
+ [method-%s::%s()-must-take-exactly-2-arguments](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()