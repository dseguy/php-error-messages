# Call to undefined method %s::%s()

## Description
This message is emitted when no method with the requested name could be found on the class, or its parents or traits.

Calling from another class's context yields a distinct message.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-method-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-method-%s::%s().html","name":"Call to undefined method %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This message is emitted when no method with the requested name could be found on the class, or its parents or traits","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/call-to-undefined-method-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function foo() {}
}

$x = new X;
$x->goo();

?>
```

## Literal Examples
+ Call to undefined method x::goo()

## Alternatives
+ Check the spelling of the method name.
+ Check if the object supports this method.
+ Check if there are the valid trait name import (``use`` in a class), to define the method.
+ Check if the method is still available in the current setup (PHP version, components and library versions...).
+ Check if the magic method ``__call()`` is not missing in the object's class.

## Related error messages
+ [trying-to-invoke-%s-method-%s::%s()-from-scope-%s](asdf)
+ [call-to-%s-%s::%s()-from-global-scope](asdf)
