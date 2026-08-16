# Class %s cannot extend %s %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-%s-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-%s-%s.html","name":"Class %s cannot extend %s %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A class that is marked ``final`` cannot be extended","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-%s-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
