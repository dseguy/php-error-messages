# The "Generator" class is reserved for internal use and cannot be manually instantiated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-\"generator\"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-\"generator\"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated.html","name":"The \"Generator\" class is reserved for internal use and cannot be manually instantiated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Generator is a PHP native class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-\"generator\"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Generator is a PHP native class. It is automagically created when a function or method uses the `yield` or `yield from` keyword. There is no other ways to create such an object.

In fact, `generator` is also a final class, so it cannot be extended too.

## Example

```php
<?php

new Generator();

?>
```

## Alternatives
+ Use composition to use this class in another class.

## Related error messages
+ [class-%s-cannot-extend-final-class-%s](class-%s-cannot-extend-final-class-%s.html)
