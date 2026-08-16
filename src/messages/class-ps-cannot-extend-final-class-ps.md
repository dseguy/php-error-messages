# Class %s cannot extend final class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-final-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-final-class-%s.html","name":"Class %s cannot extend final class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-08T16:19:23+01:00","dateModified":"2025-02-16T13:05:32-05:00","description":"A ``final`` class is a class that cannot be extended","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-%s-cannot-extend-final-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `final` class is a class that cannot be extended. This means any class that attempts to use `extends` on this class fails.

This error is produced both by userland code and PHP native code, such as `Generator`, etc.

## Example

```php
<?php

class X extends Generator {}

?>
```

## Literal Examples
+ Class X cannot extend final class Generator

## Alternatives
+ Use composition on the final class, to include it in another class.

## Related error messages
+ [the-"generator"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated](the-generator-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated.html)
