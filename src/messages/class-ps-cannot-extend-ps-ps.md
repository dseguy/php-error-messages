# Class %s cannot extend %s %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-cannot-extend-ps-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-cannot-extend-ps-ps.html","name":"Class %s cannot extend %s %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-19T11:18:15+01:00","dateModified":"2025-07-04T15:29:49+02:00","description":"A class that is marked ``final`` cannot be extended","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-ps-cannot-extend-ps-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A class that is marked `final` cannot be extended. This error applies to a class that tries to use a `final` class as parent.

## Example

```php
<?php

final class X {}

class Y extends X {}

?>
```

## Literal Examples
+ Class T cannot extend class X

## Alternatives
+ Remove the ``final`` keyword on the parent class.
+ Use composition in the intended child class.
