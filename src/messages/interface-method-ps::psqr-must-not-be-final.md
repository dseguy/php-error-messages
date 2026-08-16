# Interface method %s::%s() must not be final

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-method-%s::%s()-must-not-be-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-method-%s::%s()-must-not-be-final.html","name":"Interface method %s::%s() must not be final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A method in an interface cannot be ``final``, as it has to be implemented: it is actually ``abstract``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-method-%s::%s()-must-not-be-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A method in an interface cannot be `final`, as it has to be implemented: it is actually `abstract`. The same method, in the implementing class, may be `final`.

## Example

```php
<?php

interface X {
    final function foo();
}

?>
```

## Literal Examples
+ Interface method X::foo() must not be final

## Alternatives
+ Remove the ``final`` option in the interface, add it to any implementing class, or its children.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()