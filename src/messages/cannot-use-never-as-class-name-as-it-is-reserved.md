# Cannot use 'never' as class name as it is reserved

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'never'-as-class-name-as-it-is-reserved.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'never'-as-class-name-as-it-is-reserved.html","name":"Cannot use 'never' as class name as it is reserved","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-22T08:03:56+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"never is a PHP reserved keyword, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'never'-as-class-name-as-it-is-reserved.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
never is a PHP reserved keyword, since PHP 8.1. Until then, it was possible to use it anywhere as names, but since PHP 8.1, it is forbidden with class names, interfaces, enumerations and traits.

The same error is used for all CITE structures : class, interfaces, traits and enumerations.

Namespaces do not solve this issue.

never as a function, method, property, global or class constants is legit.

## Example

```php
<?php

class Never {}
interface Never {}
trait Never {}
enum Never {}

?>
```

## Alternatives
+ Use another name for that class.

## Related error messages
+ [cannot-use--"%s-"-as-%s](cannot-use--%s--as-%s.html)
