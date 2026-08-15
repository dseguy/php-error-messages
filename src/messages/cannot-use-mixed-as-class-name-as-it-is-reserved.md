# Cannot use 'mixed' as class name as it is reserved

## Description
mixed is a PHP reserved keyword, since PHP 8.0. Until then, it was possible to use it anywhere as names, but since PHP 8.0, it is forbidden with class names, interfaces, enumerations and traits.

The same error is used for all CITE structures : class, interfaces, traits and enumerations.

Namespaces do not solve this issue.

mixed as a function, method, property, global or class constants is legit.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'mixed'-as-class-name-as-it-is-reserved.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'mixed'-as-class-name-as-it-is-reserved.html","name":"Cannot use 'mixed' as class name as it is reserved","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"mixed is a PHP reserved keyword, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'mixed'-as-class-name-as-it-is-reserved.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Mixed {}
interface Mixed {}
trait Mixed {}
enum Mixed {}

?>
```

## Alternatives
+ Use another name for that class.

## Related error messages
+ [cannot-use--"%s-"-as-%s](asdf)
