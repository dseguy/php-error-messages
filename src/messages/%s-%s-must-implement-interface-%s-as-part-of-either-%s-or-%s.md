# %s %s must implement interface %s as part of either %s or %s

## Description
It is not possible to implement directly the mentioned interface. That interface is actually implemented by a selection of PHP native classes: these classes may be extended, and, as such, the children classes also implements the initial interface.

This error message is applicable to a few PHP native interfaces, such as `Throwable` (via `Error` and `Exception`) and `Traversable` (via `Iterator` and `IteratorAggregate`).
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s.html","name":"%s %s must implement interface %s as part of either %s or %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:54:22 +0000","dateModified":"Fri, 10 Apr 2026 08:54:22 +0000","description":"It is not possible to implement directly the mentioned interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

enum E implements Traversable {}

class X implements Throwable {}

?>
```

## Literal Examples
+ Enum Foo must implement interface Traversable as part of either Iterator or IteratorAggregate
+ Class X cannot implement interface Throwable, extend Exception or Error instead

## Alternatives
+ Extends one of the classes mentioned in the error message.
+ Remove the implementations and its interface.

In previous PHP versions, this error message used to be :ref:`class-%s-must-implement-interface-%s-as-part-of-either-%s-or-%s`.