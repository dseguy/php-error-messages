# Return type of %s::%s() should either be compatible with %s::%s(): mixed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed.html","name":"Return type of %s::%s() should either be compatible with %s::%s(): mixed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-06T12:15:58+01:00","dateModified":"2025-02-16T15:56:05-05:00","description":"Native PHP interfaces, which define a type, expect the derived methods to use the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/return-type-of-%s::%s()-should-either-be-compatible-with-%s::%s():-mixed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Native PHP interfaces, which define a type, expect the derived methods to use the same time. In particular, a `mixed` return type was added to some interfaces and must be available with child classes. 

Since PHP 8.1, the mixed return type is now enforced, and a deprecated notice is displayed.

One alternative is to add the expected return type; a temporary solution is to the `#[ReturnTypeWillChange]` attribute. The attribute makes the warning disappear, but must be updated in the long run to keep in line with PHP recommendations.

This rule covers the following interfaces : 

+ ArrayAccess
+ Countable
+ Exception
+ FilterIterator
+ Iterator
+ JsonSerializable
+ php_user_filter
+ SessionHandlerInterface.

## Example

```php
<?php

class MyJsonSerialize implements JsonSerialize { 
    function jsonserialize() : int {}
}

?>
```

## Literal Examples
+ Return type of MyJsonSerialize::jsonserialize() should either be compatible with JsonSerialize::jsonserialize(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice

## Alternatives
+ Use the correct return type for the methods from the interfaces.
+ Use the the ``#[ReturnTypeWillChange]`` to hide the error message.
+ Remove the interface from this class.
+ Remove the offending method.
