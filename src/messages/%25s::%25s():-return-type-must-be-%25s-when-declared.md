# %s::%s(): Return type must be %s when declared

## Description
The magic methods `__sleep` and `__serialize` may be left without a return type. By construction, PHP uses `array` for them. 

So, when a return type is written in the source, for these methods, it must be `array`.

Here is the list of compulsory return types: 

+ __destruct() : `void`
+ __construct() : `void`
+ __unserialize() : `void`
+ __unset() : `void`
+ __set() : `void`
+ __serialize() : `array`
+ __isset() : `bool`
+ __toString() : `string`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s():-return-type-must-be-%s-when-declared.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s():-return-type-must-be-%s-when-declared.html","name":"%s::%s(): Return type must be %s when declared","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The magic methods ``__sleep`` and ``__serialize`` may be left without a return type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s():-return-type-must-be-%s-when-declared.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function __construct() : int {}

    function __sleep() : int {}
    
    function __serialize() : int {} 

    function __isset() : int {} 
}

?>
```

## Literal Examples
+ X::__sleep(): Return type must be array when declared
+ X::__construct(): Return type must be void when declared
+ X::__isset(): Return type must be bool when declared

## Alternatives
+ Give the correct return type to the magic method.
+ Remove the return type of the magic method.
