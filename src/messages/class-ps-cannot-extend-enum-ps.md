# Class %s cannot extend enum %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-enum-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-enum-%s.html","name":"Class %s cannot extend enum %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Enum are final classes, and cannot be extended: neither by other enum, nor by a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-enum-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Enum are final classes, and cannot be extended: neither by other enum, nor by a class.

## Example

```php
<?php

class X extends E {}

enum E {}

?>
```

## Literal Examples
+ Class X cannot extend enum E

## Alternatives
+ Add a class that compose the enum, and extends that class.
+ Remove the extension in the class.
