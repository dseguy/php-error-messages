# Class %s must implement interface %s as part of either %s or %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-must-implement-interface-ps-as-part-of-either-ps-or-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-must-implement-interface-ps-as-part-of-either-ps-or-ps.html","name":"Class %s must implement interface %s as part of either %s or %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-18T23:13:01+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"It is not possible to implement directly the mentioned interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-must-implement-interface-ps-as-part-of-either-ps-or-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to implement directly the mentioned interface. That interface is actually implemented by a selection of PHP native classes: these classes may be extended, and, as such, the children classes also implements the initial interface.

This error message is applicable to a few PHP native interfaces, such as `Throwable` (via `Error` and `Exception`) and `Traversable` (via `Iterator` and `IteratorAggregate`).

## Example

```php
<?php

class X implements Throwable {}

?>
```

## Literal Examples
+ Enum Foo must implement interface Traversable as part of either Iterator or IteratorAggregate
+ Class X cannot implement interface Throwable, extend Exception or Error instead

## Alternatives
+ Extends one of the classes mentioned in the error message.
+ Remove the implementats and its interface.

In more recent PHP versions, this error message is now :ref:`%s-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s`.