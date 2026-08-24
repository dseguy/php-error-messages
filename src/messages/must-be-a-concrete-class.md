# must be a concrete class

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-concrete-class.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-concrete-class.html","name":"must be a concrete class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``stream_wrapper_register()`` and ``stream_filter_register()`` associate a class name with a protocol (or filter) name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-concrete-class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`stream_wrapper_register()` and `stream_filter_register()` associate a class name with a protocol (or filter) name; the streams layer instantiates that class itself whenever the protocol is opened or the filter is applied. Passing an abstract class, or an interface, means there is nothing the streams layer could ever instantiate.

Previously, this only failed later, when PHP actually tried to open a stream using the unusable class. As of PHP 8.6, both functions check that the class is instantiable up front and throw immediately, instead of registering a class that is guaranteed to fail on first use.

## Example

```php
<?php

abstract class MyProtocol {}

stream_wrapper_register('myproto', MyProtocol::class);

?>
```

## Literal Examples
+ stream_wrapper_register(): Argument #2 ($class) must be a concrete class

## Alternatives
+ Register a concrete (non-abstract) class that implements the expected stream wrapper or filter interface.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()